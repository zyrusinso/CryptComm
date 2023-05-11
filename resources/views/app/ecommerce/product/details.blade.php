@extends('layouts.master')

@section('title')Product Page
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick-theme.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/rating.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Product Page</h3>
		@endslot
		<li class="breadcrumb-item">ECommerce</li>
		<li class="breadcrumb-item">Product</li>
		<li class="breadcrumb-item active">Product Page</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div>
	        <div class="row product-page-main p-0">
	            <div class="col-xl-5 col-md-6 box-col-12 xl-50">
	                <div class="card">
	                    <div class="card-body">
	                        <div class="row">
	                            <div class="col-xl-12 product-main">
	                                <div>
	                                    <div><img class="img-fluid" src="{{asset($product['logo_url'])}}" alt="" /></div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="col-xl-5 box-col-6 proorder-xl-3 xl-100">
	                <div class="card">
	                    <div class="card-body">
	                        <div class="pro-group pt-0 border-0">
	                            <div class="product-page-details mt-0">
	                                <h3>{{ $product['name'] }}.</h3>
	                                {{-- <div class="pro-review">
	                                    <div class="d-flex">
	                                        <select id="u-rating-fontawesome" name="rating" autocomplete="off">
	                                            <option value="1">1</option>
	                                            <option value="2">2</option>
	                                            <option value="3">3</option>
	                                            <option value="4">4</option>
	                                            <option value="5">5</option>
	                                        </select>
	                                        <span>(250 review)</span>
	                                    </div>
	                                </div> --}}
	                            </div>
	                            <div class="product-price">
	                                ${{ $product['local_price']['amount'] }}
	                            </div>
	                            <br>
	                        </div>
	                        <div class="pro-group">
	                            <p>{{ $product['description'] }}.</p>
	                        </div>
	                        {{-- <div class="pro-group">
	                            <div class="row">
	                                <div class="col-md-6">
	                                    <table>
	                                        <tbody>
	                                            <tr>
	                                                <td><b>Availability &nbsp;: &nbsp;</b></td>
	                                                <td class="txt-success">In stock</td>
	                                            </tr>
	                                            <tr>
	                                                <td><b>Brand &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></td>
	                                                <td>Pixelstrap</td>
	                                            </tr>
	                                        </tbody>
	                                    </table>
	                                </div>
	                                <div class="col-md-6">
	                                    <table>
	                                        <tbody>
	                                            <tr>
	                                                <td><b>Seller &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b></td>
	                                                <td>ABC</td>
	                                            </tr>
	                                            <tr>
	                                                <td><b>Fabric &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b></td>
	                                                <td>Cotton</td>
	                                            </tr>
	                                        </tbody>
	                                    </table>
	                                </div>
	                            </div>
	                        </div> --}}
	                        {{-- <div class="pro-group">
	                            <div class="row">
	                                <div class="col-md-4 xl-50">
	                                    <h6 class="product-title">share it</h6>
	                                </div>
	                                <div class="col-md-7 xl-50">
	                                    <div class="product-icon">
	                                        <ul class="product-social">
	                                            <li class="d-inline-block">
	                                                <a href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
	                                            </li>
	                                            <li class="d-inline-block">
	                                                <a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a>
	                                            </li>
	                                            <li class="d-inline-block">
	                                                <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
	                                            </li>
	                                            <li class="d-inline-block">
	                                                <a href="javascript:void(0)"><i class="fa fa-instagram"></i></a>
	                                            </li>
	                                            <li class="d-inline-block">
	                                                <a href="javascript:void(0)"><i class="fa fa-rss"></i></a>
	                                            </li>
	                                        </ul>
	                                        <form class="d-inline-block f-right"></form>
	                                    </div>
	                                </div>
	                            </div>
	                        </div> --}}
	                        <div class="pro-group pb-0">
	                            <div class="pro-shop">
	                                <a class="btn btn-primary m-r-10" href="javascript:void(0)" onclick="event.preventDefault; document.getElementById('cartSubmit{{ $product['id'] }}').submit()"> <i class="fa fa-shopping-basket me-2"></i>@lang('app.ecommerce.add_to_cart')</a>
	                                <a class="btn btn-secondary mt-0" href="cart"><i class="fa fa-shopping-cart me-2"></i>@lang('app.ecommerce.buy_now')</a>
	                            </div>
	                        </div>
                            <form id="cartSubmit{{ $product['id'] }}" method="post" action="{{ route('cart.store', $product['id']) }}">
                                @csrf
                                <input type="hidden" name="productId" value="{{ $product['id'] }}">
                            </form>
	                    </div>
	                </div>
	            </div>
	            <div class="col-xl-2 col-md-6 box-col-6 xl-50 proorder-lg-1">
	                <div class="card">
	                    <div class="card-body">
	                        <div class="collection-filter-block">
	                            <ul class="pro-services">
	                                <li>
	                                    <div class="media">
	                                        <i data-feather="truck"></i>
	                                        <div class="media-body">
	                                            <h5>@lang('app.ecommerce.free_shipping')</h5>
	                                            <p>@lang('app.ecommerce.free_shipping_worldwide')</p>
	                                        </div>
	                                    </div>
	                                </li>
	                                <li>
	                                    <div class="media">
	                                        <i data-feather="clock"></i>
	                                        <div class="media-body">
	                                            <h5>@lang('app.ecommerce.24_7_service')</h5>
	                                            <p>@lang('app.ecommerce.online_service')</p>
	                                        </div>
	                                    </div>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                    <!-- silde-bar colleps block end here-->
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	
	@push('scripts')
	<script src="{{asset('assets/js/rating/jquery.barrating.js')}}"></script>
    <script src="{{asset('assets/js/rating/rating-script.js')}}"></script>
    <script src="{{asset('assets/js/slick-slider/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/slick-slider/slick-theme.js')}}"></script>
	@endpush

@endsection