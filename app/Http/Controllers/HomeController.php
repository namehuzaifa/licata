<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Faq;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home() {
        $testimonials = Testimonial::active()->latest()->get();
        $services = Service::active()->limit(3)->get();
        $blogs = Blog::active()->latest()->get();
        $faqs = Faq::active()->latest()->get();
        return view('front.home', compact('testimonials', 'services', 'blogs', 'faqs'));
    }

    function aboutUs() {
        return view('front.about-us');
    }

    function contact() {
        return view('front.contact');
    }

    function services() {
        $services = Service::active()->get();
        return view('front.services',compact('services'));
    }

    function serviceDetail($id) {
        $service = Service::active()->findOrFail($id);
        return view('front.inner-pages', compact('service'));
    }

    function blog() {
        $blogs = Blog::active()->limit(3)->get();
        return view('front.blog' , compact('blogs'));
    }

    function blogDetail($id) {
        $blog = Blog::active()->findOrFail($id);
        return view('front.inner-blog', compact('blog'));
    }

    function faq() {
        $faqs = Faq::active()->latest()->get();
        return view('front.faq',  compact('faqs'));
    }
}
