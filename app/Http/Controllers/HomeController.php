<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\App;

use Auth;

use App\Visitors;

class HomeController extends Controller
{
    public function index(Request $request) {

        $visit = Visitors::where('ip', $request->ip())->get();

        if($visit->isEmpty()) {
            $add_visit = new Visitors();
            $add_visit->ip = $request->ip();
            $add_visit->save();
        }

        if (empty(Cache::get('response'))) {
            $response = Http::get('https://api.github.com/users/GuillaumeLeon/repos');
            $response = $response->json();
            Cache::put('response', $response, 300);
        } else {
            $response = Cache::get('response');
        }
        App::setLocale($request->lang);
        return view('welcome', compact('response'));
    }

    public function login()
    {
        if(!Auth::check()) {
            return view('auth.login');
        } else {
            return redirect('/dashboard');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
