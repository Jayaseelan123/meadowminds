@extends('layouts.admin')

@section('title', 'Upload Photo')

@section('content')
    <div class="mb-4">
        <h3 class="fw-bold text-dark m-0">Upload Photo</h3>
        <p class="text-muted m-0">Add a new high-quality image to the website gallery pool.</p>
    </div>

    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="card p-4">
                <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label fw-bold text-muted">Photo Title / Caption (Optional)</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" placeholder="e.g. Brain Mapping Session">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label fw-bold text-muted">Filter Category</label>
                        <select class="form-select @error('category') is-invalid @enderror" id="category" name="category" required>
                            <option value="" disabled selected>-- Select a Category --</option>
                            <option value="dmit" {{ old('category') == 'dmit' ? 'selected' : '' }}>DMIT (Scientific Brain Mapping)</option>
                            <option value="training" {{ old('category') == 'training' ? 'selected' : '' }}>Student/Faculty Training</option>
                            <option value="workshops" {{ old('category') == 'workshops' ? 'selected' : '' }}>Interactive Workshops</option>
                            <option value="outdoor" {{ old('category') == 'outdoor' ? 'selected' : '' }}>Outdoor Activities & Team Building</option>
                        </select>
                        @error('category')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="image" class="form-label fw-bold text-muted">Select Image File</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" required accept="image/png, image/jpeg, image/jpg">
                        <div class="form-text" style="font-size: 0.82rem; color: #64748b;">
                            Allowed file formats: <strong>JPG, JPEG, PNG</strong>. Max recommended size: 2MB.
                        </div>
                        @error('image')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary px-4 fw-bold" style="border-radius: 8px;">
                            <i class="fas fa-cloud-upload-alt me-1"></i> Upload Image
                        </button>
                        <a href="{{ route('admin.gallery.index') }}" class="btn btn-outline-secondary px-4" style="border-radius: 8px;">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card bg-light border-0 shadow-none">
                <div class="card-body">
                    <h5 class="fw-bold text-success mb-3"><i class="fas fa-info-circle me-1"></i> Image Guidelines</h5>
                    <ul class="text-muted text-sm ps-3" style="font-size: 0.88rem; line-height: 1.6;">
                        <li class="mb-2"><strong>Quality matters:</strong> Use clean, high-resolution photographs to present a modern brand look.</li>
                        <li class="mb-2"><strong>Dimensions:</strong> Landscape aspect ratio (e.g. 4:3 or 16:9) renders optimally in the grid system.</li>
                        <li class="mb-2"><strong>Compression:</strong> Compress files under 2MB for faster loading times across client browsers.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
