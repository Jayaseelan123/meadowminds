<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function detail($slug)
    {
        $service = Service::where('slug', $slug)->where('status', true)->firstOrFail();
        
        // Return view dynamic or fallback
        if (view()->exists($slug)) {
            return view($slug, compact('service'));
        }
        
        return view('service-detail', compact('service'));
    }
}
