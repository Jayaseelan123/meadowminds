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

            @if($contact->replies->isNotEmpty())
                @foreach($contact->replies as $index => $reply)
                    <div class="card mb-4 border-success shadow-sm">
                        <div class="card-header bg-success text-white py-3 d-flex justify-content-between align-items-center">
                            <span class="fw-bold">
                                <i class="fas fa-reply me-2"></i> Admin Reply #{{ $index + 1 }}
                            </span>
                            <span class="badge bg-white text-success fw-bold">
                                Sent on {{ $reply->created_at->format('M d, Y \a\t h:i A') }}
                            </span>
                        </div>
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <span class="fw-bold text-dark">Subject: <span class="text-success">{{ $reply->subject }}</span></span>
                            </div>
                            <h6 class="text-muted fw-bold text-uppercase mb-3" style="font-size: 0.8rem; letter-spacing: 0.5px;">Reply Message Description</h6>
                            <div class="p-3 bg-light border rounded-3" style="white-space: pre-line; line-height: 1.7; color: #1e293b; font-size: 1.05rem;">
                                {{ $reply->message }}
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
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
                        @if($contact->replies->isNotEmpty())
                            <button type="button" class="btn btn-outline-primary p-3 fw-bold d-flex align-items-center justify-content-center gap-2" style="border-radius: 10px;" data-bs-toggle="modal" data-bs-target="#replyModal">
                                <i class="fas fa-reply-all"></i> Send Another Reply
                            </button>
                        @else
                            <button type="button" class="btn btn-primary p-3 fw-bold d-flex align-items-center justify-content-center gap-2" style="border-radius: 10px;" data-bs-toggle="modal" data-bs-target="#replyModal">
                                <i class="fas fa-reply"></i> Reply via Email
                            </button>
                        @endif
                        
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

    <!-- Reply Modal -->
    <div class="modal fade" id="replyModal" tabindex="-1" aria-labelledby="replyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content" style="border-radius: 15px; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
                <div class="modal-header border-0 bg-light py-3 px-4" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <h5 class="modal-title fw-bold text-dark" id="replyModalLabel">
                        <i class="fas fa-reply text-primary me-2"></i> Reply to {{ $contact->name }}
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.contacts.reply', $contact->id) }}" method="POST">
                    @csrf
                    <div class="modal-body p-4">
                        <!-- Recipient Email -->
                        <div class="mb-3">
                            <label class="form-label text-muted fw-semibold">Recipient Email</label>
                            <input type="email" class="form-control bg-light" value="{{ $contact->email }}" readonly>
                        </div>

                        <!-- Subject -->
                        <div class="mb-3">
                            <label for="subject" class="form-label text-muted fw-semibold">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" value="RE: {{ $contact->subject ?? 'Your inquiry with Meadow Minds' }}" required>
                        </div>

                        <!-- Original Message Reference -->
                        <div class="mb-3">
                            <label class="form-label text-muted fw-semibold">Original Message Description</label>
                            <div class="p-3 bg-light border rounded" style="max-height: 150px; overflow-y: auto; font-size: 0.9rem; white-space: pre-line; color: #475569;">
                                {{ $contact->message }}
                            </div>
                        </div>

                        <!-- Reply Message -->
                        <div class="mb-3">
                            <label for="message" class="form-label text-muted fw-semibold">Reply Message (Direct Message)</label>
                            <textarea class="form-control" id="message" name="message" rows="6" placeholder="Type your reply here..." required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer border-0 px-4 pb-4 pt-0">
                        <button type="button" class="btn btn-outline-secondary px-4 py-2" data-bs-dismiss="modal" style="border-radius: 8px;">Cancel</button>
                        <button type="submit" class="btn btn-primary px-4 py-2 fw-bold" style="border-radius: 8px;">
                            <i class="fas fa-paper-plane me-1"></i> Send Reply
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
