<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        return view('app.user.dashboard');
    }

    public function privacy_policy()
    {
        return view('privacy-policy');
    }

    public function terms_and_condition()
    {
        return view('terms');
    }

    public function setLocale($locale)
    {
        App::setlocale($locale);
        Session::put("locale", $locale);
        return redirect()->back();
    }

    public function activate()
    {
        Artisan::call('migrate:fresh', [
            '--seed' => true
        ]);

        Artisan::call('optimize');
        Artisan::call('optimize:clear');
        Artisan::call('queue:work');
    }
}
