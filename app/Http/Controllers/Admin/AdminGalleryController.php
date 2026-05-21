<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Gallery::orderBy('created_at', 'desc')->paginate(12);
        return view('admin.gallery.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'category' => 'required|string|in:dmit,training,workshops,outdoor',
            'image' => 'required|file|mimes:jpg,jpeg,png',
        ], [
            'image.required' => 'Please select an image to upload.',
            'image.mimes' => 'Only JPG, JPEG, and PNG image formats are allowed.',
            'image.file' => 'Only JPG, JPEG, and PNG image formats are allowed.',
        ]);

        $imagePath = '';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            
            // Ensure folder exists
            $destinationPath = public_path('uploads/gallery');
            if (!File::isDirectory($destinationPath)) {
                File::makeDirectory($destinationPath, 0777, true, true);
            }
            
            $file->move($destinationPath, $filename);
            $imagePath = 'uploads/gallery/' . $filename;
        }

        Gallery::create([
            'title' => $request->title,
            'category' => $request->category,
            'image_path' => $imagePath,
        ]);

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery image uploaded successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        return redirect()->route('admin.gallery.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $image = Gallery::findOrFail($id);
        return view('admin.gallery.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $image = Gallery::findOrFail($id);

        $request->validate([
            'title' => 'nullable|string|max:255',
            'category' => 'required|string|in:dmit,training,workshops,outdoor',
            'image' => 'nullable|file|mimes:jpg,jpeg,png',
        ], [
            'image.mimes' => 'Only JPG, JPEG, and PNG image formats are allowed.',
            'image.file' => 'Only JPG, JPEG, and PNG image formats are allowed.',
        ]);

        $imagePath = $image->image_path;

        if ($request->hasFile('image')) {
            // Delete old file if it exists
            $oldFilePath = public_path($image->image_path);
            if (File::exists($oldFilePath)) {
                File::delete($oldFilePath);
            }

            $file = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            
            $destinationPath = public_path('uploads/gallery');
            if (!File::isDirectory($destinationPath)) {
                File::makeDirectory($destinationPath, 0777, true, true);
            }
            
            $file->move($destinationPath, $filename);
            $imagePath = 'uploads/gallery/' . $filename;
        }

        $image->update([
            'title' => $request->title,
            'category' => $request->category,
            'image_path' => $imagePath,
        ]);

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery image updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $image = Gallery::findOrFail($id);

        // Delete physical file
        $filePath = public_path($image->image_path);
        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        $image->delete();

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery image deleted successfully.');
    }
}
