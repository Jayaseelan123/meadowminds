@extends('layouts.app')

@section('title', 'Educational Blogs & Articles | Meadow Minds')
@section('meta_description', 'Read research, articles, and success stories on DMIT, student psychology, child development, and pedagogy from the Meadow Minds expert team.')

@section('content')
    <div class="page-header header-blogs" style="background: linear-gradient(135deg, rgba(26,93,59,0.9) 0%, rgba(156,204,101,0.9) 100%); padding: 80px 0; text-align: center; color: white;">
        <div class="container">
            <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 15px;">Educational Blogs & Articles</h1>
            <p style="font-size: 1.2rem; opacity: 0.9;">Expert insights on child potential, educational psychology, and parenting.</p>
        </div>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="grid-3" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 30px; margin-top: 20px;">
                @forelse($blogs as $blog)
                    <div class="card shadow-hover" style="background: white; border-radius: 20px; overflow: hidden; display: flex; flex-direction: column; height: 100%; border: 1px solid rgba(0,0,0,0.05);">
                        <div style="height: 200px; overflow: hidden; position: relative;">
                            @if($blog->image)
                                <img src="{{ $blog->image }}" alt="{{ $blog->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                            @else
                                <div class="bg-success-subtle text-success d-flex align-items-center justify-content-center" style="width: 100%; height: 100%; font-size: 3rem;">
                                    <i class="fas fa-newspaper"></i>
                                </div>
                            @endif
                        </div>
                        <div style="padding: 30px; flex-grow: 1; display: flex; flex-direction: column;">
                            <div style="font-size: 0.85rem; color: #64748b; margin-bottom: 10px; display: flex; align-items: center; gap: 15px;">
                                <span><i class="far fa-user me-1 text-success"></i> {{ $blog->author }}</span>
                                <span><i class="far fa-calendar me-1 text-success"></i> {{ $blog->created_at->format('M d, Y') }}</span>
                            </div>
                            <h3 style="font-size: 1.4rem; font-weight: 700; color: var(--color-primary); margin-bottom: 15px; line-height: 1.4;">
                                <a href="{{ route('blogs.detail', $blog->slug) }}" style="color: inherit; text-decoration: none;">
                                    {{ $blog->title }}
                                </a>
                            </h3>
                            <p style="color: #64748b; line-height: 1.6; font-size: 0.95rem; margin-bottom: 25px; flex-grow: 1;">
                                {{ $blog->excerpt }}
                            </p>
                            <a href="{{ route('blogs.detail', $blog->slug) }}" class="btn btn-primary" style="padding: 12px 25px; border-radius: 12px; font-weight: bold; width: fit-content; align-self: flex-start;">
                                Read Full Article <i class="fas fa-chevron-right ms-2" style="font-size: 0.8rem;"></i>
                            </a>
                        </div>
                    </div>
                @empty
                    <div style="grid-column: 1 / -1; text-align: center; padding: 80px 0;">
                        <i class="fas fa-inbox text-muted" style="font-size: 4rem; margin-bottom: 20px;"></i>
                        <h3 style="color: var(--color-primary); font-weight: 700;">No Articles Published Yet</h3>
                        <p class="text-muted">Check back soon for inspiring reads and updates.</p>
                    </div>
                @endforelse
            </div>

            @if($blogs->hasPages())
                <div style="display: flex; justify-content: center; margin-top: 60px;">
                    {!! $blogs->links('pagination::bootstrap-5') !!}
                </div>
            @endif
        </div>
    </section>
@endsection
