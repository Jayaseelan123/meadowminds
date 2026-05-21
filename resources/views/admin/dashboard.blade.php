@extends('layouts.admin')

@section('title', 'Control Center')

@section('content')
    <!-- Stats Grid (Three Premium Cards) -->
    <div class="row g-4 mb-4">
        <!-- Total Messages -->
        <div class="col-12 col-md-4">
            <div class="card border-0 shadow-sm h-100" style="border-radius: 16px; border: 1px solid rgba(0,0,0,0.04) !important;">
                <div class="card-body p-4 d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-muted text-uppercase fw-bold" style="font-size: 0.75rem; letter-spacing: 0.8px;">Total Inquiries</span>
                        <h2 class="fw-bold mt-2 mb-1 text-dark" style="font-size: 2.2rem; font-family: 'Outfit', sans-serif;">{{ $stats['contacts'] }}</h2>
                        <span class="text-sm text-success fw-semibold"><i class="fas fa-arrow-up me-1"></i> Lifetime inquiries</span>
                    </div>
                    <div class="d-flex align-items-center justify-content-center bg-success-subtle text-success" style="width: 60px; height: 60px; border-radius: 12px; font-size: 1.6rem;">
                        <i class="fas fa-envelope"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Unread Messages -->
        <div class="col-12 col-md-4">
            <div class="card border-0 shadow-sm h-100" style="border-radius: 16px; border: 1px solid rgba(0,0,0,0.04) !important;">
                <div class="card-body p-4 d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-muted text-uppercase fw-bold" style="font-size: 0.75rem; letter-spacing: 0.8px;">Unread Inquiries</span>
                        <h2 class="fw-bold mt-2 mb-1 {{ $stats['unread_contacts'] > 0 ? 'text-danger' : 'text-dark' }}" style="font-size: 2.2rem; font-family: 'Outfit', sans-serif;">{{ $stats['unread_contacts'] }}</h2>
                        @if($stats['unread_contacts'] > 0)
                            <span class="text-sm text-danger fw-semibold"><i class="fas fa-exclamation-circle me-1"></i> Action required</span>
                        @else
                            <span class="text-sm text-muted fw-semibold"><i class="fas fa-check-circle me-1"></i> Inbox fully cleared</span>
                        @endif
                    </div>
                    <div class="d-flex align-items-center justify-content-center {{ $stats['unread_contacts'] > 0 ? 'bg-danger-subtle text-danger' : 'bg-light text-muted' }}" style="width: 60px; height: 60px; border-radius: 12px; font-size: 1.6rem;">
                        <i class="fas fa-bell"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gallery Assets -->
        <div class="col-12 col-md-4">
            <div class="card border-0 shadow-sm h-100" style="border-radius: 16px; border: 1px solid rgba(0,0,0,0.04) !important;">
                <div class="card-body p-4 d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-muted text-uppercase fw-bold" style="font-size: 0.75rem; letter-spacing: 0.8px;">Showcase Gallery</span>
                        <h2 class="fw-bold mt-2 mb-1 text-dark" style="font-size: 2.2rem; font-family: 'Outfit', sans-serif;">{{ $stats['gallery_count'] }}</h2>
                        <span class="text-sm text-success fw-semibold"><i class="fas fa-image me-1"></i> Uploaded photos</span>
                    </div>
                    <div class="d-flex align-items-center justify-content-center bg-info-subtle text-info" style="width: 60px; height: 60px; border-radius: 12px; font-size: 1.6rem;">
                        <i class="fas fa-images"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Multi-Column Operational Grid -->
    <div class="row g-4">
        <!-- Recent Messages (Full-Width) -->
        <div class="col-12">
            <div class="card border-0 shadow-sm h-100" style="border-radius: 16px; border: 1px solid rgba(0,0,0,0.04) !important;">
                <div class="card-header bg-white border-0 py-3 px-4 d-flex justify-content-between align-items-center" style="border-radius: 16px 16px 0 0;">
                    <div class="d-flex align-items-center gap-2">
                        <i class="fas fa-envelope-open-text text-success" style="font-size: 1.2rem;"></i>
                        <h5 class="fw-bold text-dark m-0">Recent Inquiries</h5>
                    </div>
                    <a href="{{ route('admin.contacts.index') }}" class="btn btn-sm btn-outline-success px-3" style="border-radius: 8px; font-weight: 600;">View Inbox</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="ps-4 text-muted uppercase font-weight-bold" style="font-size: 0.78rem;">Sender</th>
                                    <th class="text-muted uppercase font-weight-bold" style="font-size: 0.78rem;">Subject</th>
                                    <th class="text-muted uppercase font-weight-bold" style="font-size: 0.78rem;">Date</th>
                                    <th class="text-muted uppercase font-weight-bold" style="font-size: 0.78rem;">Status</th>
                                    <th class="text-end pe-4 text-muted uppercase font-weight-bold" style="font-size: 0.78rem;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($recent_messages as $msg)
                                    <tr>
                                        <td class="ps-4 py-3">
                                            <div class="fw-bold text-dark" style="font-size: 0.94rem;">{{ $msg->name }}</div>
                                            <div class="text-muted" style="font-size: 0.8rem;">{{ $msg->email }}</div>
                                        </td>
                                        <td>
                                            <div class="text-truncate" style="max-width: 250px; font-size: 0.94rem; font-weight: 500;">
                                                {{ $msg->subject ?? 'No Subject' }}
                                            </div>
                                        </td>
                                        <td class="text-muted" style="font-size: 0.88rem;">{{ $msg->created_at->format('M d, Y h:i A') }}</td>
                                        <td>
                                            @if($msg->is_read)
                                                <span class="badge bg-success-subtle text-success px-2 py-1 fw-bold" style="font-size: 0.75rem;">Read</span>
                                            @else
                                                <span class="badge bg-danger-subtle text-danger px-2 py-1 fw-bold" style="font-size: 0.75rem;">Unread</span>
                                            @endif
                                        </td>
                                        <td class="text-end pe-4">
                                            <div class="d-inline-flex gap-1">
                                                <a href="{{ route('admin.contacts.show', $msg->id) }}" class="btn btn-sm btn-light text-success" title="Read message" style="border-radius: 6px; width: 32px; height: 32px; padding: 0; display: inline-flex; align-items: center; justify-content: center;">
                                                    <i class="fas fa-eye" style="font-size: 0.88rem;"></i>
                                                </a>
                                                <form action="{{ route('admin.contacts.destroy', $msg->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-light text-danger" title="Delete message" style="border-radius: 6px; width: 32px; height: 32px; padding: 0; display: inline-flex; align-items: center; justify-content: center; border: 0;">
                                                        <i class="fas fa-trash-alt" style="font-size: 0.88rem;"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-5 text-muted">
                                            <i class="fas fa-envelope-open text-muted mb-2 d-block" style="font-size: 2.5rem;"></i>
                                            <span class="fw-bold d-block">No Message Records Yet</span>
                                            <span style="font-size: 0.88rem;">New support and callback queries will appear here automatically.</span>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
