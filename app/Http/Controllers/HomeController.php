<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Renders resources/views/index.blade.php
        return view('index');
    }

    public function about()
    {
        // Placeholder for about page
        // You would need to convert about.html.twig to resources/views/about.blade.php
        if (view()->exists('about')) {
            return view('about');
        }
        return view('index'); // Fallback
    }

    public function contact()
    {
        // Placeholder for contact page
        if (view()->exists('contact')) {
            return view('contact');
        }
        return view('index'); // Fallback
    }

    public function service()
    {
        // Placeholder for service page
        if (view()->exists('service')) {
            return view('service');
        }
        return view('index'); // Fallback
    }
}
