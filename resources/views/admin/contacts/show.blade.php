@extends('layouts.admin')

@section('title', 'Read Message: ' . $contact->name)

@section('content')
    <div class="mb-4 d-flex align-items-center gap-3">
        <a href="{{ route('admin.contacts.index') }}" class="btn btn-outline-secondary btn-sm" style="border-radius: 8px;">
            <i class="fas fa-chevron-left"></i> Back
        </a>
        <div>
            <h3 class="fw-bold text-dark m-0">Inquiry from {{ $contact->name }}</h3>
            <p class="text-muted m-0">Review sender particulars and message description.</p>
        </div>
    </div>

    <div class="row">
        <!-- Message Body -->
        <div class="col-12 col-lg-8">
            <div class="card mb-4">
                <div class="card-header bg-white border-bottom">
                    <span class="fw-bold text-dark">Subject: <span class="text-primary">{{ $contact->subject ?? 'No Subject Provided' }}</span></span>
                </div>
                <div class="card-body p-4">
                    <h6 class="text-muted fw-bold text-uppercase mb-3" style="font-size: 0.8rem; letter-spacing: 0.5px;">Message Description</h6>
                    <div class="p-3 bg-light border rounded-3" style="white-space: pre-line; line-height: 1.7; color: #334155; font-size: 1.05rem;">
                        {{ $contact->message }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Sender Meta details -->
        <div class="col-12 col-lg-4">
            <div class="card mb-4">
                <div class="card-header" style="background-color: #fafbfc;">
                    <span class="text-primary"><i class="fas fa-user-circle me-2"></i> Sender Information</span>
                </div>
                <div class="card-body">
                    <div class="mb-4 border-bottom pb-3">
                        <span class="text-muted text-sm d-block mb-1">Full Name</span>
                        <strong class="text-dark fs-5">{{ $contact->name }}</strong>
                    </div>

                    <div class="mb-4 border-bottom pb-3">
                        <span class="text-muted text-sm d-block mb-1">Email Address</span>
                        <a href="mailto:{{ $contact->email }}" class="fw-semibold text-primary text-decoration-none">{{ $contact->email }}</a>
                    </div>

                    <div class="mb-4 border-bottom pb-3">
                        <span class="text-muted text-sm d-block mb-1">Phone Number</span>
                        @if($contact->phone)
                            <a href="tel:{{ $contact->phone }}" class="fw-semibold text-dark text-decoration-none">{{ $contact->phone }}</a>
                        @else
                            <span class="text-muted italic">Not specified</span>
                        @endif
                    </div>

                    <div class="mb-4">
                        <span class="text-muted text-sm d-block mb-1">Received Time</span>
                        <strong class="text-dark">{{ $contact->created_at->format('M d, Y \a\t h:i A') }}</strong>
                        <small class="text-muted d-block">({{ $contact->created_at->diffForHumans() }})</small>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="mailto:{{ $contact->email }}?subject=RE: {{ rawurlencode($contact->subject) }}" class="btn btn-primary p-3 fw-bold d-flex align-items-center justify-content-center gap-2" style="border-radius: 10px;">
                            <i class="fas fa-reply"></i> Reply via Email
                        </a>
                        
                        <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" class="d-grid">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger p-3 fw-bold d-flex align-items-center justify-content-center gap-2" style="border-radius: 10px;">
                                <i class="fas fa-trash-alt"></i> Delete Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
