@extends('layouts.app')

@section('content')
<style>
    .pt-90 {
        padding-top: 90px !important;
    }
    .pb-90 {
        padding-bottom: 90px !important;
    }
</style>

<main class="pt-90 pb-90">
    <div class="mb-4 pb-4"></div>
    <section class="my-account container">
        <h2 class="page-title">Notifications</h2>
        <div class="row">
            <div class="col-lg-3">
                @include('user.account-nav')
            </div>
            <div class="col-lg-9">
                <div class="page-content my-account__content">
                    <div class="notifications-list">
                        @if($notifications->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Title</th>
                                            <th>Message</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($notifications as $notification)
                                            <tr class="{{ !$notification->is_read ? 'fw-bold table-light' : '' }}">
                                                <td>{{ $notification->updated_at->format('d/m/Y H:i') }}</td>
                                                <td>{{ $notification->title }}</td>
                                                <td>
                                                    <div class="text-wrap">
                                                        {{ $notification->reply_content }}
                                                    </div>
                                                    @if($notification->product)
                                                        <small class="text-muted d-block mt-1">Product: <a href="{{ route('shop.product.details', ['product_slug' => $notification->product->slug]) }}">{{ $notification->product->name }}</a></small>
                                                    @else
                                                        <small class="text-muted d-block mt-1">Product: Deleted Product</small>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($notification->is_read)
                                                        <span class="badge bg-secondary">Read</span>
                                                    @else
                                                        <span class="badge bg-primary">New</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-4">
                                {{ $notifications->links() }}
                            </div>
                        @else
                            <div class="alert alert-info">
                                No notifications found.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
