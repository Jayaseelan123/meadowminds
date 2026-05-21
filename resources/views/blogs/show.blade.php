@extends('layouts.app')

@section('title', $blog->meta_title ?? $blog->title . ' | Meadow Minds')
@section('meta_description', $blog->meta_description ?? $blog->excerpt)

@section('content')
    <div class="page-header" style="background: linear-gradient(135deg, rgba(26,93,59,0.95) 0%, rgba(156,204,101,0.95) 100%); padding: 60px 0; text-align: center; color: white;">
        <div class="container">
            <h1 style="font-size: 2.8rem; font-weight: 800; margin-bottom: 20px; line-height: 1.3;">{{ $blog->title }}</h1>
            <div style="font-size: 0.95rem; opacity: 0.9; display: flex; justify-content: center; gap: 20px; align-items: center; flex-wrap: wrap;">
                <span><i class="far fa-user me-1"></i> Written by <strong>{{ $blog->author }}</strong></span>
                <span><i class="far fa-calendar me-1"></i> Published on <strong>{{ $blog->created_at->format('M d, Y') }}</strong></span>
            </div>
        </div>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="grid-2" style="display: grid; grid-template-columns: 2.5fr 1fr; gap: 50px; align-items: start;">
                <!-- Main Article Content -->
                <div style="background: white; padding: 40px; border-radius: 25px; border: 1px solid rgba(0,0,0,0.05); box-shadow: 0 10px 30px rgba(0,0,0,0.02);">
                    @if($blog->image)
                        <div style="border-radius: 20px; overflow: hidden; margin-bottom: 35px; height: 400px; max-height: 450px;">
                            <img src="{{ $blog->image }}" alt="{{ $blog->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    @endif

                    <div class="blog-article-content" style="line-height: 1.8; color: #475569; font-size: 1.1rem;">
                        {!! $blog->content !!}
                    </div>
                </div>

                <!-- Sidebar (Recent Posts) -->
                <div>
                    <div style="background: white; padding: 30px; border-radius: 25px; border: 1px solid rgba(0,0,0,0.05); position: sticky; top: 100px;">
                        <h4 style="color: var(--color-primary); font-weight: 800; font-size: 1.25rem; margin-bottom: 25px; border-bottom: 2px solid var(--color-secondary); padding-bottom: 10px;">
                            Recent Articles
                        </h4>
                        
                        <div style="display: flex; flex-direction: column; gap: 25px;">
                            @forelse($recent_blogs as $rec)
                                <div style="display: flex; flex-direction: column; gap: 8px;">
                                    <span style="font-size: 0.75rem; color: #94a3b8;"><i class="far fa-calendar me-1"></i> {{ $rec->created_at->format('M d, Y') }}</span>
                                    <h5 style="font-size: 0.95rem; font-weight: 700; margin: 0; line-height: 1.4;">
                                        <a href="{{ route('blogs.detail', $rec->slug) }}" style="color: var(--color-primary); text-decoration: none; transition: color 0.2s ease;">
                                            {{ $rec->title }}
                                        </a>
                                    </h5>
                                </div>
                            @empty
                                <p class="text-muted text-sm m-0">No other posts found.</p>
                            @endforelse
                        </div>

                        <hr style="margin: 30px 0; opacity: 0.1;">

                        <div class="d-grid">
                            <a href="{{ route('blogs.index') }}" class="btn btn-primary" style="padding: 12px; border-radius: 12px; font-weight: bold; text-align: center; text-decoration: none; display: block;">
                                View All Blogs
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
