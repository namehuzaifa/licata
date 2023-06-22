<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home() {
        return view('home');
    }

    function aboutUs() {
        return view('about-us');
    }

    function contact() {
        return view('contact');
    }

    function services() {
        return view('services');
    }

    function innerService() {
        return view('inner-pages');
    }

    function blog() {
        return view('blog');
    }
    function faq() {
        return view('faq');
    }
}
