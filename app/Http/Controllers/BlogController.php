<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('status', true)->orderBy('created_at', 'desc')->paginate(6);
        return view('blogs.index', compact('blogs'));
    }

    public function detail($slug)
    {
        $blog = Blog::where('slug', $slug)->where('status', true)->firstOrFail();
        $recent_blogs = Blog::where('slug', '!=', $slug)->where('status', true)->orderBy('created_at', 'desc')->take(3)->get();
        
        return view('blogs.show', compact('blog', 'recent_blogs'));
    }
}
