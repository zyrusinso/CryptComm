@extends('layouts.admin.master')

@section('title')Pricing
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Pricing</h3>
		@endslot
		<li class="breadcrumb-item">Pages</li>
		<li class="breadcrumb-item">Ecommerce</li>
		<li class="breadcrumb-item active">Pricing</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Simple Pricing Card</h5>
	                </div>
	                <div class="card-body row pricing-content">
	                    <div class="col-xl-3 col-sm-6 xl-50 box-col-6">
	                        <div class="card text-center pricing-simple">
	                            <div class="card-body">
	                                <h3>Standard</h3>
	                                <h1>$15</h1>
	                                <h6 class="mb-0">Lorum Ipsum</h6>
	                            </div>
	                            <a class="btn btn-lg btn-primary btn-block" href="javascript:void(0)"> <h5 class="mb-0">Purchase</h5></a>
	                        </div>
	                    </div>
	                    <div class="col-xl-3 col-sm-6 xl-50 box-col-6">
	                        <div class="card text-center pricing-simple">
	                            <div class="card-body">
	                                <h3>Business</h3>
	                                <h1>$25</h1>
	                                <h6 class="mb-0">Lorum Ipsum</h6>
	                            </div>
	                            <a class="btn btn-lg btn-primary btn-block" href="javascript:void(0)"> <h5 class="mb-0">Purchase</h5></a>
	                        </div>
	                    </div>
	                    <div class="col-xl-3 col-sm-6 xl-50 box-col-6">
	                        <div class="card text-center pricing-simple">
	                            <div class="card-body">
	                                <h3>Premium</h3>
	                                <h1>$35</h1>
	                                <h6 class="mb-0">Lorum Ipsum</h6>
	                            </div>
	                            <a class="btn btn-lg btn-primary btn-block" href="javascript:void(0)"> <h5 class="mb-0">Purchase</h5></a>
	                        </div>
	                    </div>
	                    <div class="col-xl-3 col-sm-6 xl-50 box-col-6">
	                        <div class="card text-center pricing-simple">
	                            <div class="card-body">
	                                <h3>Extra</h3>
	                                <h1>$45</h1>
	                                <h6 class="mb-0">Lorum Ipsum</h6>
	                            </div>
	                            <a class="btn btn-lg btn-primary btn-block" href="javascript:void(0)"> <h5 class="mb-0">Purchase</h5></a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Pricing</h5>
	                </div>
	                <div class="card-body row pricing-content pricing-col">
	                    <div class="col-md-3">
	                        <div class="pricing-block card text-center">
	                            <div class="pricing-header">
	                                <h2>standard</h2>
	                                <div class="price-box">
	                                    <div>
	                                        <h3>$10</h3>
	                                        <p>/ month</p>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="pricing-list">
	                                <ul class="pricing-inner">
	                                    <li>
	                                        <h6>50GB<span> Disk Space</span></h6>
	                                    </li>
	                                    <li>
	                                        <h6>50<span> Email Accounts</span></h6>
	                                    </li>
	                                    <li>
	                                        <h6>50GB<span> Bandwidth</span></h6>
	                                    </li>
	                                    <li>
	                                        <h6>10<span> Subdomains</span></h6>
	                                    </li>
	                                    <li>
	                                        <h6>15<span> Domains</span></h6>
	                                    </li>
	                                </ul>
	                                <button class="btn btn-primary btn-lg" type="button" data-original-title="btn btn-primary btn-lg" title="">Subscribe</button>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-3">
	                        <div class="pricing-block card text-center">
	                            <div class="pricing-header">
	                                <h2>business</h2>
	                                <div class="price-box">
	                                    <div>
	                                        <h3>$20</h3>
	                                        <p>/ month</p>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="pricing-list">
	                                <ul class="pricing-inner">
	                                    <li>
	                                        <h6>60GB<span> Disk Space</span></h6>
	                                    </li>
	                                    <li>
	                                        <h6>60<span> Email Accounts</span></h6>
	                                    </li>
	                                    <li>
	                                        <h6>60GB<span> Bandwidth</span></h6>
	                                    </li>
	                                    <li>
	                                        <h6>15<span> Subdomains</span></h6>
	                                    </li>
	                                    <li>
	                                        <h6>20<span> Domains</span></h6>
	                                    </li>
	                                </ul>
	                                <button class="btn btn-primary btn-lg" type="button" data-original-title="btn btn-primary btn-lg" title="">Subscribe</button>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-3">
	                        <div class="pricing-block card text-center">
	                            <div class="pricing-header">
	                                <h2>PREMIUM</h2>
	                                <div class="price-box">
	                                    <div>
	                                        <h3>$30</h3>
	                                        <p>/ month</p>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="pricing-list">
	                                <ul class="pricing-inner">
	                                    <li>
	                                        <h6>70GB<span> Disk Space</span></h6>
	                                    </li>
	                                    <li>
	                                        <h6>70<span> Email Accounts</span></h6>
	                                    </li>
	                                    <li>
	                                        <h6>70GB<span> Bandwidth</span></h6>
	                                    </li>
	                                    <li>
	                                        <h6>25<span> Subdomains</span></h6>
	                                    </li>
	                                    <li>
	                                        <h6>30<span> Domains</span></h6>
	                                    </li>
	                                </ul>
	                                <button class="btn btn-primary btn-lg" type="button" data-original-title="btn btn-primary btn-lg" title="">Subscribe</button>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-3">
	                        <div class="pricing-block card text-center">
	                            <div class="pricing-header">
	                                <h2>auther pack</h2>
	                                <div class="price-box">
	                                    <div>
	                                        <h3>$40</h3>
	                                        <p>/ month</p>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="pricing-list">
	                                <ul class="pricing-inner">
	                                    <li>
	                                        <h6>80GB<span> Disk Space</span></h6>
	                                    </li>
	                                    <li>
	                                        <h6>80<span> Email Accounts</span></h6>
	                                    </li>
	                                    <li>
	                                        <h6>80GB<span> Bandwidth</span></h6>
	                                    </li>
	                                    <li>
	                                        <h6>25<span> Subdomains</span></h6>
	                                    </li>
	                                    <li>
	                                        <h6>30<span> Domains</span></h6>
	                                    </li>
	                                </ul>
	                                <button class="btn btn-primary btn-lg" type="button" data-original-title="btn btn-primary btn-lg" title="">Subscribe</button>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	
	@push('scripts')
	<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
	@endpush

@endsection