@extends('layouts.admin.master')

@section('title')Payment Details
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Payment Details</h3>
		@endslot
		<li class="breadcrumb-item">Pages</li>
		<li class="breadcrumb-item">ECommerce</li>
		<li class="breadcrumb-item active">Payment Details</li>
	@endcomponent
	
	<div class="container-fluid credit-card payment-details">
	    <div class="row">
	        <!-- Individual column searching (text inputs) Starts-->
	        <div class="col-xxl-8 box-col-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Credit card</h5>
	                </div>
	                <div class="card-body">
	                    <div class="row">
	                        <div class="col-md-7">
	                            <form class="theme-form mega-form">
	                                <div class="mb-3">
	                                    <input class="form-control" type="text" placeholder="Card number" />
	                                </div>
	                                <div class="mb-3">
	                                    <input class="form-control" type="text" placeholder="First Name" />
	                                </div>
	                                <div class="mb-3">
	                                    <input class="form-control" type="date" />
	                                </div>
	                                <div class="mb-3">
	                                    <input class="form-control" type="text" placeholder="Name on card" />
	                                </div>
	                                <div class="mb-3">
	                                    <select class="form-select" size="1">
	                                        <option>Select Type</option>
	                                        <option>Master</option>
	                                        <option>Visa</option>
	                                    </select>
	                                </div>
	                            </form>
	                        </div>
	                        <div class="col-md-5 text-center"><img class="img-fluid" src="{{asset('assets/images/ecommerce/card.png')}}" alt="" /></div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- Individual column searching (text inputs) Ends-->
	        <!-- Debit Card Starts-->
	        <div class="col-xxl-4 col-lg-6 box-col-6 debit-card">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Debit card</h5>
	                </div>
	                <div class="card-body">
	                    <form class="theme-form e-commerce-form row">
	                        <div class="mb-3 col-sm-6 p-r-0">
	                            <input class="form-control" type="text" placeholder="Full name here" />
	                        </div>
	                        <div class="mb-3 col-sm-6">
	                            <input class="form-control" type="text" placeholder="Card number" />
	                        </div>
	                        <div class="mb-3 col-sm-6 p-r-0">
	                            <input class="form-control" type="text" placeholder="CVV number" />
	                        </div>
	                        <div class="mb-3 col-sm-6">
	                            <input class="form-control" type="text" placeholder="CVC" />
	                        </div>
	                        <div class="col-12">
	                            <label class="col-form-label p-b-20">Expiration Date</label>
	                        </div>
	                        <div class="mb-3 col-sm-6 p-r-0">
	                            <select class="form-select" size="1">
	                                <option>Select Month</option>
	                                <option>Jan</option>
	                                <option>Fab</option>
	                                <option>March</option>
	                                <option>April</option>
	                            </select>
	                        </div>
	                        <div class="mb-3 col-sm-6">
	                            <select class="form-select" size="1">
	                                <option>Select Year</option>
	                                <option>2015</option>
	                                <option>2016</option>
	                                <option>2017</option>
	                                <option>2018</option>
	                                <option>2019</option>
	                            </select>
	                        </div>
	                        <div class="col-12">
	                            <button class="btn btn-primary btn-block" type="button" title="">Submit</button>
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	        <!-- Debit Card Ends-->
	        <!-- COD Starts-->
	        <div class="col-xxl-4 col-lg-6 box-col-6">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>COD</h5>
	                </div>
	                <div class="card-body">
	                    <form class="theme-form row">
	                        <div class="mb-3 col-sm-6 p-r-0">
	                            <input class="form-control" type="text" placeholder="First Name" />
	                        </div>
	                        <div class="mb-3 col-sm-6">
	                            <input class="form-control" type="text" placeholder="Last name" />
	                        </div>
	                        <div class="mb-3 col-sm-6 p-r-0">
	                            <input class="form-control" type="text" placeholder="Pincode" />
	                        </div>
	                        <div class="mb-3 col-sm-6">
	                            <input class="form-control" type="number" placeholder="Enter mobile number" />
	                        </div>
	                        <div class="mb-3 col-sm-6 p-r-0">
	                            <input class="form-control" type="text" placeholder="State" />
	                        </div>
	                        <div class="mb-3 col-sm-6">
	                            <input class="form-control" type="text" placeholder="City" />
	                        </div>
	                        <div class="mb-3 col-12">
	                            <textarea class="form-control" rows="3" placeholder="Address"></textarea>
	                        </div>
	                        <div class="col-12">
	                            <button class="btn btn-primary btn-block" type="button" title="">Submit</button>
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	        <!-- COD Ends-->
	        <!-- EMI Starts-->
	        <div class="col-xxl-4 col-lg-6 box-col-6">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>EMI</h5>
	                </div>
	                <div class="card-body">
	                    <form class="theme-form row">
	                        <div class="mb-3 col-sm-6 p-r-0">
	                            <input class="form-control" type="text" placeholder="First Name" />
	                        </div>
	                        <div class="mb-3 col-sm-6">
	                            <input class="form-control" type="text" placeholder="Last name" />
	                        </div>
	                        <div class="mb-3 col-sm-6 p-r-0">
	                            <input class="form-control" type="text" placeholder="Pincode" />
	                        </div>
	                        <div class="mb-3 col-sm-6">
	                            <select class="form-select" size="1">
	                                <option>Bank Name</option>
	                                <option>SBI</option>
	                                <option>ICICI</option>
	                                <option>KOTAK</option>
	                                <option>BOB</option>
	                            </select>
	                        </div>
	                        <div class="mb-3 col-12">
	                            <select class="form-select" size="1">
	                                <option>Select Card</option>
	                                <option>2</option>
	                                <option>3</option>
	                                <option>4</option>
	                                <option>5</option>
	                            </select>
	                        </div>
	                        <div class="mb-3 col-12">
	                            <select class="form-select" size="1">
	                                <option>Select Duration</option>
	                                <option>2015-2016</option>
	                                <option>2016-2017</option>
	                                <option>2017-2018</option>
	                                <option>2018-2019</option>
	                            </select>
	                        </div>
	                        <div class="mb-3 col-12">
	                            <ul class="payment-opt">
	                                <li><img src="{{asset('assets/images/ecommerce/mastercard.png')}}" alt="" /></li>
	                                <li><img src="{{asset('assets/images/ecommerce/visa.png')}}" alt="" /></li>
	                                <li><img src="{{asset('assets/images/ecommerce/paypal.png')}}" alt="" /></li>
	                            </ul>
	                        </div>
	                        <div class="col-12">
	                            <button class="btn btn-primary btn-block" type="button" title="">Submit</button>
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	        <!-- EMI Ends-->
	        <!-- EMI Starts-->
	        <div class="col-xxl-4 col-lg-6 box-col-6">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Net Banking</h5>
	                </div>
	                <div class="card-body">
	                    <form class="theme-form row">
	                        <div class="mb-3 col-12">
	                            <input class="form-control" type="text" placeholder="AC Holder name" />
	                        </div>
	                        <div class="mb-3 col-12">
	                            <input class="form-control" type="text" placeholder="Account number" />
	                        </div>
	                        <div class="mb-3 col-sm-6 p-r-0">
	                            <select class="form-select" size="1">
	                                <option>Select Bank</option>
	                                <option>SBI</option>
	                                <option>ICICI</option>
	                                <option>KOTAK</option>
	                                <option>BOB</option>
	                            </select>
	                        </div>
	                        <div class="mb-3 col-sm-6">
	                            <input class="form-control" type="text" placeholder="ICFC code" />
	                        </div>
	                        <div class="mb-3 col-12">
	                            <input class="form-control" type="number" placeholder="Enter mobile number" />
	                        </div>
	                        <div class="mb-3 col-12">
	                            <input class="form-control" type="text" placeholder="Other Details" />
	                        </div>
	                        <div class="col-12">
	                            <button class="btn btn-primary btn-block" type="button" title="">Submit</button>
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	        <!-- EMI Ends-->
	    </div>
	</div>
	
	@push('scripts')
	@endpush

@endsection