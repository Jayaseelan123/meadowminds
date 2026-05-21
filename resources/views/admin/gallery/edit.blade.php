@extends('layouts.admin')

@section('title', 'Edit Photo')

@section('content')
    <div class="mb-4">
        <h3 class="fw-bold text-dark m-0">Edit Photo Details</h3>
        <p class="text-muted m-0">Update classification parameters or replace the current image file.</p>
    </div>

    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="card p-4">
                <form action="{{ route('admin.gallery.update', $image->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label fw-bold text-muted">Photo Title / Caption (Optional)</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $image->title) }}" placeholder="e.g. Brain Mapping Session">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label fw-bold text-muted">Filter Category</label>
                        <select class="form-select @error('category') is-invalid @enderror" id="category" name="category" required>
                            <option value="dmit" {{ old('category', $image->category) == 'dmit' ? 'selected' : '' }}>DMIT (Scientific Brain Mapping)</option>
                            <option value="training" {{ old('category', $image->category) == 'training' ? 'selected' : '' }}>Student/Faculty Training</option>
                            <option value="workshops" {{ old('category', $image->category) == 'workshops' ? 'selected' : '' }}>Interactive Workshops</option>
                            <option value="outdoor" {{ old('category', $image->category) == 'outdoor' ? 'selected' : '' }}>Outdoor Activities & Team Building</option>
                        </select>
                        @error('category')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="image" class="form-label fw-bold text-muted">Replace Image (Optional)</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/png, image/jpeg, image/jpg">
                        <div class="form-text" style="font-size: 0.82rem; color: #64748b;">
                            Leave blank to keep the current image. Allowed file formats: <strong>JPG, JPEG, PNG</strong>.
                        </div>
                        @error('image')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-success px-4 fw-bold" style="border-radius: 8px;">
                            <i class="fas fa-save me-1"></i> Save Changes
                        </button>
                        <a href="{{ route('admin.gallery.index') }}" class="btn btn-outline-secondary px-4" style="border-radius: 8px;">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden; max-height: 400px;">
                <div class="card-header bg-white text-muted py-3">
                    <span class="fw-bold"><i class="fas fa-eye me-1"></i> Current Image Preview</span>
                </div>
                <div class="card-body p-0 d-flex align-items-center justify-content-center bg-dark" style="min-height: 250px;">
                    <img src="{{ asset($image->image_path) }}" alt="{{ $image->title }}" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
            </div>
        </div>
    </div>
@endsection
