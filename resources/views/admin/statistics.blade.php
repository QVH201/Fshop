@extends('layouts.admin')
@section('content')
<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Sales Statistics</h3>
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
                    <div class="text-tiny">Statistics</div>
                </li>
            </ul>
        </div>

        <div class="wg-box">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="category-tab" data-bs-toggle="tab" data-bs-target="#category" type="button" role="tab" aria-controls="category" aria-selected="true">By Category</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="brand-tab" data-bs-toggle="tab" data-bs-target="#brand" type="button" role="tab" aria-controls="brand" aria-selected="false">By Brand</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="product-tab" data-bs-toggle="tab" data-bs-target="#product" type="button" role="tab" aria-controls="product" aria-selected="false">By Product</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="category" role="tabpanel" aria-labelledby="category-tab">
                    <div class="table-responsive mt-3">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Category Name</th>
                                    <th>Total Quantity Sold</th>
                                    <th>Total Revenue</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($catStats as $stat)
                                <tr>
                                    <td>{{$stat->name}}</td>
                                    <td>{{$stat->total_qty}}</td>
                                    <td>${{number_format($stat->total_sales, 2)}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="brand" role="tabpanel" aria-labelledby="brand-tab">
                    <div class="table-responsive mt-3">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Brand Name</th>
                                    <th>Total Quantity Sold</th>
                                    <th>Total Revenue</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($brandStats as $stat)
                                <tr>
                                    <td>{{$stat->name}}</td>
                                    <td>{{$stat->total_qty}}</td>
                                    <td>${{number_format($stat->total_sales, 2)}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="product" role="tabpanel" aria-labelledby="product-tab">
                    <div class="table-responsive mt-3">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Total Quantity Sold</th>
                                    <th>Total Revenue</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($prodStats as $stat)
                                <tr>
                                    <td>{{$stat->name}}</td>
                                    <td>{{$stat->total_qty}}</td>
                                    <td>${{number_format($stat->total_sales, 2)}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-3">
                            {{$prodStats->links('pagination::bootstrap-5')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
