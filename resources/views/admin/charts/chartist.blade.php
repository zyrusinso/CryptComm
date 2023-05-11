@extends('layouts.admin.master')

@section('title')Chartist Chart
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chartist.css') }}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Chartist Chart</h3>
		@endslot
		<li class="breadcrumb-item">Charts</li>
		<li class="breadcrumb-item active">Chartist Chart</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-sm-12 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Advanced SMIL Animations</h5>
					</div>
					<div class="card-body">
						<div class="ct-6 flot-chart-container"></div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>SVG Path animation</h5>
					</div>
					<div class="card-body">
						<div class="ct-7 flot-chart-container"></div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Animating a Donut with Svg.animate</h5>
					</div>
					<div class="card-body">
						<div class="ct-8 flot-chart-container"></div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Bi-polar Line chart with area only</h5>
					</div>
					<div class="card-body">
						<div class="ct-5 flot-chart-container"></div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Line chart with area</h5>
					</div>
					<div class="card-body">
						<div class="ct-4 flot-chart-container"></div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Bi-polar bar chart</h5>
					</div>
					<div class="card-body">
						<div class="ct-9 flot-chart-container"></div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Stacked bar chart</h5>
					</div>
					<div class="card-body">
						<div class="ct-10 flot-chart-container"></div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Horizontal bar chart</h5>
					</div>
					<div class="card-body">
						<div class="ct-11 flot-chart-container"></div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Extreme responsive configuration</h5>
					</div>
					<div class="card-body">
						<div class="ct-12 flot-chart-container"></div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Simple line chart</h5>
					</div>
					<div class="card-body">
						<div class="ct-1 flot-chart-container"></div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Holes in data</h5>
					</div>
					<div class="card-body">
						<div class="ct-2 flot-chart-container"></div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Filled holes in data</h5>
					</div>
					<div class="card-body">
						<div class="ct-3 flot-chart-container"></div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	
	@push('scripts')
	<script src="{{ asset('assets/js/chart/chartist/chartist.js') }}"></script>
    <script src="{{ asset('assets/js/chart/chartist/chartist-plugin-tooltip.js') }}"></script>
    <script src="{{ asset('assets/js/chart/chartist/chartist-custom.js') }}"></script>
	@endpush

@endsection