@extends('layouts.master')

@section('title'){{ __('app.history.order.title') }}
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>{{ __('app.history.order.title') }}</h3>
		@endslot
		<li class="breadcrumb-item">{{ __('app.history.order.ecommerce') }}</li>
		<li class="breadcrumb-item active">{{ __('app.history.order.title') }}</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>{{ __('app.history.order.title') }}</h5>
	                </div>
	                <div class="card-body">
	                    <div class="order-history table-responsive">
	                        <table class="table table-bordernone display" id="basic-1">
	                            <thead>
	                                <tr>
	                                    <th scope="col">@lang('app.ecommerce.product_name')</th>
	                                    <th scope="col">@lang('app.quantity')</th>
	                                    <th scope="col">@lang('app.ecommerce.transaction_id')</th>
	                                    <th scope="col">@lang('app.ecommerce.price')</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td>
	                                        <div class="product-name">
	                                            <a href="#">Long Top</a>
	                                            <div class="order-process"><span class="order-process-circle"></span>Processing</div>
	                                        </div>
	                                    </td>
	                                    <td>M</td>
	                                    <td>4215738</td>
	                                    <td>$21</td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <div class="product-name">
	                                            <a href="#">Fancy watch</a>
	                                            <div class="order-process"><span class="order-process-circle"></span>Processing</div>
	                                        </div>
	                                    </td>
	                                    <td>35mm</td>
	                                    <td>5476182</td>
	                                    <td>$10</td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <div class="product-name">
	                                            <a href="#">Man shoes</a>
	                                            <div class="order-process"><span class="order-process-circle"></span>Processing</div>
	                                        </div>
	                                    </td>
	                                    <td>8</td>
	                                    <td>1756457</td>
	                                    <td>$18</td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <div class="product-name">
	                                            <a href="#">Ledis side bag</a>
	                                            <div class="order-process"><span class="order-process-circle shipped-order"></span>Shipped</div>
	                                        </div>
	                                    </td>
	                                    <td>22cm x 18cm</td>
	                                    <td>7451725</td>
	                                    <td>$13</td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <div class="product-name">
	                                            <a href="#">Ledis Slipper</a>
	                                            <div class="order-process"><span class="order-process-circle shipped-order"></span>Shipped</div>
	                                        </div>
	                                    </td>
	                                    <td>6</td>
	                                    <td>4127421</td>
	                                    <td>$6</td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <div class="product-name">
	                                            <a href="#">Fancy ledis Jacket</a>
	                                            <div class="order-process"><span class="order-process-circle shipped-order"></span>Shipped</div>
	                                        </div>
	                                    </td>
	                                    <td>Xl</td>
	                                    <td>3581714</td>
	                                    <td>$24</td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <div class="product-name">
	                                            <a href="#">Ledis Handbag</a>
	                                            <div class="order-process"><span class="order-process-circle shipped-order"></span>Shipped</div>
	                                        </div>
	                                    </td>
	                                    <td>25cm x 20cm</td>
	                                    <td>6748142</td>
	                                    <td>$14</td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <div class="product-name">
	                                            <a href="#">Iphone6 mobile</a>
	                                            <div class="order-process"><span class="order-process-circle cancel-order"></span>Cancelled</div>
	                                        </div>
	                                    </td>
	                                    <td>10cm x 15cm</td>
	                                    <td>5748214</td>
	                                    <td>$25</td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <div class="product-name">
	                                            <a href="#">Watch</a>
	                                            <div class="order-process"><span class="order-process-circle cancel-order"></span>Cancelled</div>
	                                        </div>
	                                    </td>
	                                    <td>27mm</td>
	                                    <td>2471254</td>
	                                    <td>$12</td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <div class="product-name">
	                                            <a href="#">Slipper</a>
	                                            <div class="order-process"><span class="order-process-circle cancel-order"></span>Cancelled</div>
	                                        </div>
	                                    </td>
	                                    <td>6</td>
	                                    <td>8475112</td>
	                                    <td>$6</td>
	                                </tr>
	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	
	@push('scripts')
	<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
	@endpush

@endsection