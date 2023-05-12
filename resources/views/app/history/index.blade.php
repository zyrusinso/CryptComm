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
									<th scope="col">@lang('app.ecommerce.transaction_id')</th>
									<th scope="col">@lang('app.ecommerce.product_name')</th>
									<th scope="col">@lang('app.quantity')</th>
									<th scope="col">@lang('app.ecommerce.price')</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>4215738</td>
									<td>
										<div class="product-name">
											<a href="#">Long Top</a>
											<div class="order-process"><span
													class="order-process-circle"></span>Shipping
											</div>
										</div>
									</td>
									<td>3</td>
									<td>$21</td>
								</tr>
								<tr>
									<td>5476182</td>
									<td>
										<div class="product-name">
											<a href="#">Fancy watch</a>
											<div class="order-process"><span
													class="order-process-circle"></span>Failed</div>
										</div>
									</td>
									<td>1</td>
									<td>$10</td>
								</tr>
								<tr>
									<td>1756457</td>
									<td>
										<div class="product-name">
											<a href="#">Man shoes</a>
											<div class="order-process"><span
													class="order-process-circle"></span>Success</div>
										</div>
									</td>
									<td>2</td>
									<td>$18</td>
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