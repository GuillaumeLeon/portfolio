<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index(Request $request) {

        if (empty(Cache::get('response'))) {
            $response = Http::get('https://api.github.com/users/GuillaumeLeon/repos');
            $response = $response->json();
            Cache::put('response', $response);
        } else {
            $response = Cache::get('response');
        }
        App::setLocale($request->lang);
        return view('welcome', compact('response'));
    }
}
