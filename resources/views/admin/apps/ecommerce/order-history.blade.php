@extends('layouts.admin.master')

@section('title')Order History
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Order History</h3>
		@endslot
		<li class="breadcrumb-item">Pages</li>
		<li class="breadcrumb-item">Ecommerce</li>
		<li class="breadcrumb-item active">Order History</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Order history</h5>
	                </div>
	                <div class="card-body">
	                    <div class="order-history table-responsive">
	                        <table class="table table-bordernone display" id="basic-1">
	                            <thead>
	                                <tr>
	                                    <th scope="col">Prdouct</th>
	                                    <th scope="col">Prdouct name</th>
	                                    <th scope="col">Size</th>
	                                    <th scope="col">Color</th>
	                                    <th scope="col">Article number</th>
	                                    <th scope="col">Units</th>
	                                    <th scope="col">Price</th>
	                                    <th scope="col"><i class="fa fa-angle-down"></i></th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td>
	                                        <a href="#"><img class="img-fluid img-30" src="{{asset('assets/images/product/1.png')}}" alt="#" /></a>
	                                    </td>
	                                    <td>
	                                        <div class="product-name">
	                                            <a href="#">Long Top</a>
	                                            <div class="order-process"><span class="order-process-circle"></span>Processing</div>
	                                        </div>
	                                    </td>
	                                    <td>M</td>
	                                    <td>Lavander</td>
	                                    <td>4215738</td>
	                                    <td>1</td>
	                                    <td>$21</td>
	                                    <td><i data-feather="more-vertical"></i></td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <a href="#"><img class="img-fluid img-30" src="{{asset('assets/images/product/13.png')}}" alt="#" /></a>
	                                    </td>
	                                    <td>
	                                        <div class="product-name">
	                                            <a href="#">Fancy watch</a>
	                                            <div class="order-process"><span class="order-process-circle"></span>Processing</div>
	                                        </div>
	                                    </td>
	                                    <td>35mm</td>
	                                    <td>Blue</td>
	                                    <td>5476182</td>
	                                    <td>1</td>
	                                    <td>$10</td>
	                                    <td><i data-feather="more-vertical"></i></td>
	                                </tr>
	                                <tr>
	                                    <td><img class="img-fluid img-30" src="{{asset('assets/images/product/4.png')}}" alt="#" /></td>
	                                    <td>
	                                        <div class="product-name">
	                                            <a href="#">Man shoes</a>
	                                            <div class="order-process"><span class="order-process-circle"></span>Processing</div>
	                                        </div>
	                                    </td>
	                                    <td>8</td>
	                                    <td>Black & white</td>
	                                    <td>1756457</td>
	                                    <td>1</td>
	                                    <td>$18</td>
	                                    <td><i data-feather="more-vertical"></i></td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <a href="#"><img class="img-fluid img-30" src="{{asset('assets/images/product/10.png')}}" alt="#" /></a>
	                                    </td>
	                                    <td>
	                                        <div class="product-name">
	                                            <a href="#">Ledis side bag</a>
	                                            <div class="order-process"><span class="order-process-circle shipped-order"></span>Shipped</div>
	                                        </div>
	                                    </td>
	                                    <td>22cm x 18cm</td>
	                                    <td>Brown</td>
	                                    <td>7451725</td>
	                                    <td>1</td>
	                                    <td>$13</td>
	                                    <td><i data-feather="more-vertical"></i></td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <a href="#"><img class="img-fluid img-30" src="{{asset('assets/images/product/12.png')}}" alt="#" /></a>
	                                    </td>
	                                    <td>
	                                        <div class="product-name">
	                                            <a href="#">Ledis Slipper</a>
	                                            <div class="order-process"><span class="order-process-circle shipped-order"></span>Shipped</div>
	                                        </div>
	                                    </td>
	                                    <td>6</td>
	                                    <td>Brown & white</td>
	                                    <td>4127421</td>
	                                    <td>1</td>
	                                    <td>$6</td>
	                                    <td><i data-feather="more-vertical"></i></td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <a href="#"><img class="img-fluid img-30" src="{{asset('assets/images/product/3.png')}}" alt="#" /></a>
	                                    </td>
	                                    <td>
	                                        <div class="product-name">
	                                            <a href="#">Fancy ledis Jacket</a>
	                                            <div class="order-process"><span class="order-process-circle shipped-order"></span>Shipped</div>
	                                        </div>
	                                    </td>
	                                    <td>Xl</td>
	                                    <td>Light gray</td>
	                                    <td>3581714</td>
	                                    <td>1</td>
	                                    <td>$24</td>
	                                    <td><i data-feather="more-vertical"></i></td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <a href="#"><img class="img-fluid img-30" src="{{asset('assets/images/product/2.png')}}" alt="#" /></a>
	                                    </td>
	                                    <td>
	                                        <div class="product-name">
	                                            <a href="#">Ledis Handbag</a>
	                                            <div class="order-process"><span class="order-process-circle shipped-order"></span>Shipped</div>
	                                        </div>
	                                    </td>
	                                    <td>25cm x 20cm</td>
	                                    <td>Black</td>
	                                    <td>6748142</td>
	                                    <td>1</td>
	                                    <td>$14</td>
	                                    <td><i data-feather="more-vertical"></i></td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <a href="#"><img class="img-fluid img-30" src="{{asset('assets/images/product/15.png')}}" alt="#" /></a>
	                                    </td>
	                                    <td>
	                                        <div class="product-name">
	                                            <a href="#">Iphone6 mobile</a>
	                                            <div class="order-process"><span class="order-process-circle cancel-order"></span>Cancelled</div>
	                                        </div>
	                                    </td>
	                                    <td>10cm x 15cm</td>
	                                    <td>Black</td>
	                                    <td>5748214</td>
	                                    <td>1</td>
	                                    <td>$25</td>
	                                    <td><i data-feather="more-vertical"></i></td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <a href="#"><img class="img-fluid img-30" src="{{asset('assets/images/product/14.png')}}" alt="#" /></a>
	                                    </td>
	                                    <td>
	                                        <div class="product-name">
	                                            <a href="#">Watch</a>
	                                            <div class="order-process"><span class="order-process-circle cancel-order"></span>Cancelled</div>
	                                        </div>
	                                    </td>
	                                    <td>27mm</td>
	                                    <td>Brown</td>
	                                    <td>2471254</td>
	                                    <td>1</td>
	                                    <td>$12</td>
	                                    <td><i data-feather="more-vertical"></i></td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <a href="#"><img class="img-fluid img-30" src="{{asset('assets/images/product/11.png')}}" alt="#" /></a>
	                                    </td>
	                                    <td>
	                                        <div class="product-name">
	                                            <a href="#">Slipper</a>
	                                            <div class="order-process"><span class="order-process-circle cancel-order"></span>Cancelled</div>
	                                        </div>
	                                    </td>
	                                    <td>6</td>
	                                    <td>Blue</td>
	                                    <td>8475112</td>
	                                    <td>1</td>
	                                    <td>$6</td>
	                                    <td><i data-feather="more-vertical"></i></td>
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
    <script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
	@endpush

@endsection