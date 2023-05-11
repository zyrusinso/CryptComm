@extends('layouts.admin.master')

@section('title')Product list
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/rating.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Product list</h3>
		@endslot
		<li class="breadcrumb-item">Pages</li>
		<li class="breadcrumb-item">Ecommerce</li>
		<li class="breadcrumb-item active">Product list</li>
	@endcomponent
	
	<div class="container-fluid list-products">
	    <div class="row">
	        <!-- Individual column searching (text inputs) Starts-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Individual column searching (text inputs)</h5>
	                    <span>
	                        The searching functionality provided by DataTables is useful for quickly search through the information in the table - however the search is global, and you may wish to present controls that search on specific
	                        columns.
	                    </span>
	                </div>
	                <div class="card-body">
	                    <div class="table-responsive product-table">
	                        <table class="display" id="basic-1">
	                            <thead>
	                                <tr>
	                                    <th>Image</th>
	                                    <th>Details</th>
	                                    <th>Amount</th>
	                                    <th>Stock</th>
	                                    <th>Start date</th>
	                                    <th>Action</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td>
	                                        <a href="#"><img src="{{asset('assets/images/ecommerce/product-table-1.png')}}" alt="" /></a>
	                                    </td>
	                                    <td>
	                                        <a href="#"> <h6>Red Lipstick</h6></a><span>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</span>
	                                    </td>
	                                    <td>$10</td>
	                                    <td class="font-success">In Stock</td>
	                                    <td>2011/04/25</td>
	                                    <td>
	                                        <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
	                                        <button class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <a href="#"><img src="{{asset('assets/images/ecommerce/product-table-2.png')}}" alt="" /></a>
	                                    </td>
	                                    <td>
	                                        <a href="#"> <h6>Pink Lipstick</h6></a>
	                                        <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
	                                    </td>
	                                    <td>$10</td>
	                                    <td class="font-primary">Low Stock</td>
	                                    <td>2011/04/25</td>
	                                    <td>
	                                        <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
	                                        <button class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <a href="#"><img src="{{asset('assets/images/ecommerce/product-table-3.png')}}" alt="" /></a>
	                                    </td>
	                                    <td>
	                                        <a href="#"> <h6>Gray Lipstick</h6></a>
	                                        <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
	                                    </td>
	                                    <td>$10</td>
	                                    <td class="font-danger">out of stock</td>
	                                    <td>2011/04/25</td>
	                                    <td>
	                                        <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
	                                        <button class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <a href="#"><img src="{{asset('assets/images/ecommerce/product-table-4.png')}}" alt="" /></a>
	                                    </td>
	                                    <td>
	                                        <a href="#"> <h6>Green Lipstick</h6></a>
	                                        <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
	                                    </td>
	                                    <td>$10</td>
	                                    <td class="font-primary">Low Stock</td>
	                                    <td>2011/04/25</td>
	                                    <td>
	                                        <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
	                                        <button class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <a href="#"><img src="{{asset('assets/images/ecommerce/product-table-5.png')}}" alt="" /></a>
	                                    </td>
	                                    <td>
	                                        <a href="#"> <h6>Black Lipstick</h6></a>
	                                        <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
	                                    </td>
	                                    <td>$10</td>
	                                    <td class="font-success">In Stock</td>
	                                    <td>2011/04/25</td>
	                                    <td>
	                                        <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
	                                        <button class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <a href="#"><img src="{{asset('assets/images/ecommerce/product-table-6.png')}}" alt="" /></a>
	                                    </td>
	                                    <td>
	                                        <a href="#"> <h6>White Lipstick</h6></a>
	                                        <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
	                                    </td>
	                                    <td>$10</td>
	                                    <td class="font-primary">Low Stock</td>
	                                    <td>2011/04/25</td>
	                                    <td>
	                                        <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
	                                        <button class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <a href="#"><img src="{{asset('assets/images/ecommerce/product-table-1.png')}}" alt="" /></a>
	                                    </td>
	                                    <td>
	                                        <a href="#"> <h6>light Lipstick</h6></a>
	                                        <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
	                                    </td>
	                                    <td>$10</td>
	                                    <td class="font-danger">out of stock</td>
	                                    <td>2011/04/25</td>
	                                    <td>
	                                        <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
	                                        <button class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <a href="#"><img src="{{asset('assets/images/ecommerce/product-table-2.png')}}" alt="" /></a>
	                                    </td>
	                                    <td>
	                                        <a href="#"> <h6>Gliter Lipstick</h6></a>
	                                        <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
	                                    </td>
	                                    <td>$10</td>
	                                    <td class="font-danger">out of stock</td>
	                                    <td>2011/04/25</td>
	                                    <td>
	                                        <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
	                                        <button class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <a href="#"><img src="{{asset('assets/images/ecommerce/product-table-3.png')}}" alt="" /></a>
	                                    </td>
	                                    <td>
	                                        <a href="#"> <h6>green Lipstick</h6></a>
	                                        <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
	                                    </td>
	                                    <td>$10</td>
	                                    <td class="font-success">In Stock</td>
	                                    <td>2011/04/25</td>
	                                    <td>
	                                        <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
	                                        <button class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <a href="#"><img src="{{asset('assets/images/ecommerce/product-table-4.png')}}" alt="" /></a>
	                                    </td>
	                                    <td>
	                                        <a href="#"> <h6>Yellow Lipstick</h6></a>
	                                        <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
	                                    </td>
	                                    <td>$10</td>
	                                    <td class="font-danger">out of stock</td>
	                                    <td>2011/04/25</td>
	                                    <td>
	                                        <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
	                                        <button class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
	                                    </td>
	                                </tr>
	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- Individual column searching (text inputs) Ends-->
	    </div>
	</div>

	@push('scripts')
	<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/rating/jquery.barrating.js')}}"></script>
    <script src="{{asset('assets/js/rating/rating-script.js')}}"></script>
    <script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
    <script src="{{asset('assets/js/ecommerce.js')}}"></script>
    <script src="{{asset('assets/js/product-list-custom.js')}}"></script>
	@endpush

@endsection