@extends('layouts.admin')

@section('title', 'Gallery Management')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold text-dark m-0">Gallery Management</h3>
            <p class="text-muted m-0">Upload, organize, and manage portfolio & event photos for the public website.</p>
        </div>
        <a href="{{ route('admin.gallery.create') }}" class="btn btn-primary d-flex align-items-center gap-2" style="border-radius: 8px;">
            <i class="fas fa-plus"></i> Upload Photo
        </a>
    </div>

    <!-- Gallery Grid -->
    <div class="row g-4">
        @forelse($images as $img)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 overflow-hidden shadow-sm" style="border-radius: 12px; border: 1px solid rgba(0,0,0,0.08);">
                    <div style="height: 180px; overflow: hidden; position: relative;">
                        <img src="{{ asset($img->image_path) }}" alt="{{ $img->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-2">
                            @if($img->category == 'dmit')
                                <span class="badge bg-primary text-capitalize">{{ $img->category }}</span>
                            @elseif($img->category == 'training')
                                <span class="badge bg-success text-capitalize">{{ $img->category }}</span>
                            @elseif($img->category == 'workshops')
                                <span class="badge bg-info text-capitalize">{{ $img->category }}</span>
                            @elseif($img->category == 'outdoor')
                                <span class="badge bg-warning text-dark text-capitalize">{{ $img->category }}</span>
                            @else
                                <span class="badge bg-secondary text-capitalize">{{ $img->category }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between p-3">
                        <h6 class="fw-bold text-dark mb-3 text-truncate">{{ $img->title ?? 'Untitled Photo' }}</h6>
                        <div class="d-flex justify-content-between gap-2 mt-auto">
                            <a href="{{ route('admin.gallery.edit', $img->id) }}" class="btn btn-sm btn-outline-success flex-grow-1" style="border-radius: 6px;">
                                <i class="fas fa-edit me-1"></i> Edit
                            </a>
                            <form action="{{ route('admin.gallery.destroy', $img->id) }}" method="POST" class="flex-grow-1">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger w-100" style="border-radius: 6px;">
                                    <i class="fas fa-trash-alt me-1"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="card p-5 text-center bg-light border-0">
                    <div class="card-body">
                        <i class="fas fa-images text-muted mb-3" style="font-size: 3.5rem;"></i>
                        <h4 class="fw-bold text-dark">No Gallery Photos Yet</h4>
                        <p class="text-muted">Upload high-resolution event, workshop, and training session photos to inspire parents and educators.</p>
                        <a href="{{ route('admin.gallery.create') }}" class="btn btn-primary px-4 py-2 mt-2" style="border-radius: 8px;">
                            Upload Your First Photo
                        </a>
                    </div>
                </div>
            </div>
        @endforelse
    </div>

    <!-- Pagination -->
    @if($images->hasPages())
        <div class="d-flex justify-content-center mt-5">
            {!! $images->links('pagination::bootstrap-5') !!}
        </div>
    @endif
@endsection
