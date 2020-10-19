<?php

namespace App\Http\Controllers;

use App\Messages;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class ContactController extends Controller
{
    public function index(Request $request) {

        if(!isset($request->name) && !isset($request->email) && !isset($request->message)) return 403;

        Messages::insert([
            'name'    => $request->name,
            'email'   => $request->email,
            'message' => $request->message,
        ]);
        session()->flash('success', __('content.flash'));
        return redirect('/#contact');
    }
}
