<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Page;
use App\Models\Gallery;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $services = Service::where('status', true)->orderBy('order', 'asc')->get();
        $testimonials = Testimonial::where('status', true)->orderBy('order', 'asc')->get();
        $page = Page::where('slug', 'home')->first();

        return view('index', compact('services', 'testimonials', 'page'));
    }

    public function about()
    {
        $page = Page::where('slug', 'about')->first();
        return view('about', compact('page'));
    }

    public function gallery()
    {
        $page = Page::where('slug', 'gallery')->first();
        $images = Gallery::orderBy('created_at', 'desc')->get();
        return view('gallery', compact('page', 'images'));
    }

    public function contact()
    {
        $page = Page::where('slug', 'contact')->first();
        return view('contact', compact('page'));
    }
}
