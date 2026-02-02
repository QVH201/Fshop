@extends('layouts.admin')
@section('content')
<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Reports</h3>
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
                    <div class="text-tiny">Reports</div>
                </li>
            </ul>
        </div>

        <div class="wg-box">
            <div class="flex items-center justify-between gap10 flex-wrap">
                <div class="wg-filter flex-grow">
                    <form class="form-search">
                        <fieldset class="name">
                            <input type="text" placeholder="Search here..." class="" name="name" tabindex="2" value="" aria-required="true" required="">
                        </fieldset>
                        <div class="button-submit">
                            <button class="" type="submit"><i class="icon-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="wg-table table-all-user">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Report Date</th>
                                <th>Product</th>
                                <th>Sender</th>
                                <th>Email</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reports as $report)
                            <tr>
                                <td>{{$report->id}}</td>
                                <td>{{$report->created_at}}</td>
                                <td>
                                    @if($report->product)
                                        <a href="{{route('shop.product.details',['product_slug'=>$report->product->slug])}}" target="_blank">{{$report->product->name}}</a>
                                    @else
                                        Product Deleted
                                    @endif
                                </td>
                                <td>{{$report->sender_name}}</td>
                                <td>{{$report->email}}</td>
                                <td>{{$report->title}}</td>
                                <td>
                                    @if($report->status=='pending')
                                        <span class="badge badge-warning">Pending</span>
                                    @else
                                        <span class="badge badge-success">Replied</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="list-icon-function">
                                        <a href="{{route('admin.report.details',['id'=>$report->id])}}">
                                            <div class="item eye">
                                                <i class="icon-eye"></i>
                                            </div>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="divider"></div>
                <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">
                    {{$reports->links('pagination::bootstrap-5')}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
