<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index() {

        if (empty(Cache::get('response'))) {
            $response = Http::get('https://api.github.com/users/GuillaumeLeon/repos');
            $response = $response->json();
            Cache::put('response', $response);
        } else {
            $response = Cache::get('response');
        }

        return view('welcome', compact('response'));
    }
}
