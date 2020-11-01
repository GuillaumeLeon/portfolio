<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Visitors;
use App\Messages;
use Illuminate\Support\Facades\Hash;

class AnalyticsController extends Controller
{
    public function index()
    {
        $visits = Visitors::count();
        $messages = Messages::all();

        return view('dashboard.index', compact('messages', 'visits'));
    }
}
