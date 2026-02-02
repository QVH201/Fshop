@extends('layouts.admin')
@section('content')
<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Report Details</h3>
            <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                <li>
                    <a href="{{route('admin.index')}}">
                        <div class="text-tiny">Dashboard</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <a href="{{route('admin.reports')}}">
                        <div class="text-tiny">Reports</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <div class="text-tiny">Details</div>
                </li>
            </ul>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="wg-box">
                    <h4>Report Info</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th style="width: 150px">ID</th>
                                <td>{{$report->id}}</td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td>{{$report->created_at}}</td>
                            </tr>
                            <tr>
                                <th>Product</th>
                                <td>
                                    @if($report->product)
                                        <a href="{{route('shop.product.details',['product_slug'=>$report->product->slug])}}" target="_blank">{{$report->product->name}}</a>
                                        <br>
                                        <div class="image mt-2">
                                            <img src="{{asset('uploads/products/thumbnails')}}/{{$report->product->image}}" alt="{{$report->product->name}}" width="80">
                                        </div>
                                    @else
                                        Product Deleted
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Sender</th>
                                <td>{{$report->sender_name}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$report->email}}</td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td>{{$report->title}}</td>
                            </tr>
                            <tr>
                                <th>Content</th>
                                <td>{{$report->content}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    @if($report->status=='pending')
                                        <span class="badge badge-warning">Pending</span>
                                    @else
                                        <span class="badge badge-success">Replied</span>
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="wg-box">
                    <h4>Reply to User</h4>
                    @if(session('status'))
                        <div class="alert alert-success">{{session('status')}}</div>
                    @endif
                    <form action="{{route('admin.report.reply', ['id' => $report->id])}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email_to" class="form-label">To Email</label>
                            <input type="text" class="form-control" value="{{$report->email}}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="reply" class="form-label">Reply Content</label>
                            <textarea name="reply" id="reply" cols="30" rows="8" class="form-control" placeholder="Enter your reply here..." required style="min-height: 150px;"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary tf-button w208">Send Reply</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
