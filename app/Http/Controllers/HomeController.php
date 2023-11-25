<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class HomeController extends Controller
{
    public function index()
    {
        // $services = Service::all();

        // if (app()->getLocale() == 'en') return view('pages.app.ecommerce.shop', ['title' => 'Dashboard'], ['services' => $services]);
        // if (app()->getLocale() == 'ar') return view('pages-rtl.app.ecommerce.shop', ['title' => 'Dashboard'], ['services' => $services]);


        if (app()->getLocale() == 'en') return view('pages.index');
        if (app()->getLocale() == 'ar') return view('pages-rtl.index');
    }

    public function clear()
    {
        Artisan::call('config:cache');
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
        return 'cleared';
    }
}
