@extends('layouts.admin')

@section('title', 'Manage Messages')

@section('content')
    <div class="mb-4">
        <h3 class="fw-bold text-dark m-0">Contact Inquiries & Messages</h3>
        <p class="text-muted m-0">Review questions, consultation requests, and emails sent by prospects from the contact form.</p>
    </div>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span><i class="fas fa-envelope-open-text me-2 text-success"></i> Customer Inbox</span>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4">Sender Info</th>
                            <th>Subject</th>
                            <th>Status</th>
                            <th>Received Date</th>
                            <th class="text-end pe-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($contacts as $msg)
                            <tr class="{{ !$msg->is_read ? 'table-warning-subtle fw-bold' : '' }}">
                                <td class="ps-4">
                                    <div class="text-dark">{{ $msg->name }}</div>
                                    <div class="text-muted text-sm font-normal" style="font-size: 0.85rem; font-weight: normal;">
                                        <i class="fas fa-envelope me-1"></i> {{ $msg->email }} <br>
                                        <i class="fas fa-phone me-1"></i> {{ $msg->phone ?? 'N/A' }}
                                    </div>
                                </td>
                                <td>
                                    <div class="text-truncate" style="max-width: 300px;">
                                        {{ $msg->subject ?? 'No Subject' }}
                                    </div>
                                </td>
                                <td>
                                    @if($msg->replies->isNotEmpty())
                                        <span class="badge bg-info-subtle text-info px-2 py-1" style="font-weight: normal;"><i class="fas fa-reply me-1"></i> Replied</span>
                                    @elseif($msg->is_read)
                                        <span class="badge bg-success-subtle text-success px-2 py-1" style="font-weight: normal;">Read</span>
                                    @else
                                        <span class="badge bg-danger text-white px-2 py-1" style="font-weight: bold;">Unread</span>
                                    @endif
                                </td>
                                <td>{{ $msg->created_at->format('M d, Y h:i A') }}</td>
                                <td class="text-end pe-4">
                                    <a href="{{ route('admin.contacts.show', $msg->id) }}" class="btn btn-sm btn-primary" title="Read message" style="border-radius: 8px;">
                                        <i class="fas fa-eye me-1"></i> View
                                    </a>
                                    <form action="{{ route('admin.contacts.destroy', $msg->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger border-0" title="Delete message">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-5 text-muted">
                                    <i class="fas fa-envelope-open fs-2 mb-3 d-block"></i> Your inbox is completely clean!
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        @if($contacts->hasPages())
            <div class="card-footer bg-white d-flex justify-content-center py-3">
                {!! $contacts->links('pagination::bootstrap-5') !!}
            </div>
        @endif
    </div>
@endsection
