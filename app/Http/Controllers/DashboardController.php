<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\ContactQuery;
use App\Models\Faq;
use App\Models\NewsLetter;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index() {
        $newsLetter = NewsLetter::count();
        $contact = ContactQuery::count();
        $blog = Blog::count();
        $faq =  Faq::count();
        $service = Service::count();
        $testimonial = Testimonial::count();
        return view('admin.dashboard', compact('newsLetter','blog','faq','service','testimonial','contact'));
    }
}
