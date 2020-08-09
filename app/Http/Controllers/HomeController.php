<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index() {

        $response = Http::get('https://api.github.com/users/GuillaumeLeon/repos');
        $response = $response->json();

        return view('welcome', compact('response'));
    }
}
