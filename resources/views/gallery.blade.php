@extends('layouts.app')

@section('title', $page->meta_title ?? 'Gallery | Meadow Minds')
@section('meta_description', $page->meta_description ?? '')
@section('meta_keywords', $page->meta_keywords ?? '')

@section('content')
    <div class="page-header header-gallery">
        <div class="container">
            <h1>{{ $page->heading ?? 'Photo Gallery' }}</h1>
            <p>{{ $page->content ?? 'Capturing moments of growth, learning, and success.' }}</p>
        </div>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="gallery-grid" id="galleryGrid">
                <!-- Dynamically Uploaded Images -->
                @foreach($images as $img)
                    <div class="gallery-item" data-category="{{ $img->category }}">
                        <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                        <img src="{{ asset($img->image_path) }}" alt="{{ $img->title }}">
                    </div>
                @endforeach

                <!-- Standard Curated Photos -->
                <!-- DMIT -->
                <div class="gallery-item" data-category="dmit">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                    <img src="{{ asset('assets/images/gall5.png') }}" alt="Scientific Brain Mapping">
                </div>
                <!-- Training -->
                <div class="gallery-item" data-category="training">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                    <img src="{{ asset('assets/images/gall01.png') }}" alt="Student Training Session">
                </div>
                <!-- Workshops -->
                <div class="gallery-item" data-category="workshops">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                    <img src="{{ asset('assets/images/gall2.png') }}" alt="Interactive Workshop">
                </div>
                <!-- Outdoor -->
                <div class="gallery-item" data-category="outdoor">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                    <img src="{{ asset('assets/images/gall3.png') }}" alt="Outdoor Team Building">
                </div>
                <!-- DMIT 2 -->
                <div class="gallery-item" data-category="dmit">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                    <img src="{{ asset('assets/images/gall4.png') }}" alt="Fingerprint Analysis">
                </div>
                <!-- Training 2 -->
                <div class="gallery-item" data-category="training">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                    <img src="{{ asset('assets/images/gall.png') }}" alt="Professional Development">
                </div>
                <div class="gallery-item" data-category="training">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                    <img src="{{ asset('assets/images/gall6.png') }}" alt="Professional Development">
                </div>
                <div class="gallery-item" data-category="training">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                    <img src="{{ asset('assets/images/gall7.png') }}" alt="Professional Development">
                </div>
                <div class="gallery-item" data-category="training">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                    <img src="{{ asset('assets/images/gall8.png') }}" alt="Professional Development">
                </div>
                <div class="gallery-item" data-category="training">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                    <img src="{{ asset('assets/images/gall9.png') }}" alt="Professional Development">
                </div>
                <div class="gallery-item" data-category="training">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                    <img src="{{ asset('assets/images/gall10.png') }}" alt="Professional Development">
                </div>
                <div class="gallery-item" data-category="training">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                    <img src="{{ asset('assets/images/gall02.png') }}" alt="Professional Development">
                </div>
                <div class="gallery-item" data-category="training">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                    <img src="{{ asset('assets/images/gall13.jpeg') }}" alt="Professional Development">
                </div>
                <div class="gallery-item" data-category="training">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                    <img src="{{ asset('assets/images/gall14.jpeg') }}" alt="Professional Development">
                </div>
                <div class="gallery-item" data-category="training">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                    <img src="{{ asset('assets/images/gall123.jpeg') }}" alt="Professional Development">
                </div>
                <div class="gallery-item" data-category="training">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                    <img src="{{ asset('assets/images/were.jpeg') }}" alt="Professional Development">
                </div>
            </div>
        </div>
    </section>
@endsection