@extends('layouts.admin.master')

@section('title')Peity Chart
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Peity Chart</h3>
		@endslot
		<li class="breadcrumb-item">Charts</li>
		<li class="breadcrumb-item active">Peity Chart</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-4">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Updating Chart</h5>
					</div>
					<div class="card-body peity-charts peity-chart-primary"><span class="updating-chart">4,3,5,4,5,10,2,3,9,1,2,8</span></div>
				</div>
			</div>
			<div class="col-xl-4">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Line Chart 1</h5>
					</div>
					<div class="card-body peity-charts peity-chart-primary"><span class="line">5,3,9,6,5,9,7,3,5,2</span></div>
				</div>
			</div>
			<div class="col-xl-4">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Line Chart 2</h5>
					</div>
					<div class="card-body peity-charts peity-chart-primary"><span class="line">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span></div>
				</div>
			</div>
			<div class="col-xl-6 box-col-6">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Bar Chart 1</h5>
					</div>
					<div class="card-body peity-charts"><span class="bar" data-peity='{ "fill": ["#24695c", "#ba895d"]}'>5,3,9,6,5,9,7,3,5,2</span></div>
				</div>
			</div>
			<div class="col-xl-6 box-col-6">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Bar Chart 2</h5>
					</div>
					<div class="card-body peity-charts peity-chart-primary"><span class="bar" data-peity='{ "fill": ["#24695c", "#ba895d"]}'>5,3,2,-1,-3,-2,2,3,5,2</span></div>
				</div>
			</div>
			<div class="col-xl-6 box-col-6">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Donut Chart 1</h5>
					</div>
					<div class="card-body peity-charts"><span class="donut" data-peity='{ "fill": ["#24695c", "#efefef"]}'>226/360</span></div>
				</div>
			</div>
			<div class="col-xl-6 box-col-6">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Donut Chart 2</h5>
					</div>
					<div class="card-body peity-charts"><span class="donut" data-peity='{ "fill": ["#24695c", "#efefef"]}'>1,2,3,2,2</span></div>
				</div>
			</div>
			<div class="col-xl-6 box-col-6">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Pie Chart 1</h5>
					</div>
					<div class="card-body peity-charts"><span class="pie" data-peity='{ "fill": ["#24695c", "#ba895d"]}'>226,134</span></div>
				</div>
			</div>
			<div class="col-xl-6 box-col-6">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Pie Chart 2</h5>
					</div>
					<div class="card-body peity-charts"><span class="pie" data-peity='{ "fill": ["#24695c", "#ba895d"]}'>1,2,3,2,2</span></div>
				</div>
			</div>
			<div class="col-xl-6 xl-100 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Donut Charts with Radius</h5>
					</div>
					<div class="card-body">
						<p class="data-attributes">
							<span data-peity='{ "fill": ["#24695c", "#efefef"],    "innerRadius": 10, "radius": 40 }'>1/7</span><span data-peity='{ "fill": ["#ba895d", "#efefef"], "innerRadius": 14, "radius": 36 }'>2/7</span>
							<span data-peity='{ "fill": ["#222222", "#efefef"], "innerRadius": 16, "radius": 32 }'>3/7</span><span data-peity='{ "fill": ["#717171", "#efefef"],  "innerRadius": 18, "radius": 28 }'>4/7</span>
							<span data-peity='{ "fill": ["#e2c636", "#efefef"],   "innerRadius": 20, "radius": 24 }'>5/7</span><span data-peity='{ "fill": ["#d22d3d", "#efefef"], "innerRadius": 18, "radius": 20 }'>6/7</span>
							<span data-peity='{ "fill": ["#e6edef", "#efefef"], "innerRadius": 15, "radius": 16 }'>7/7</span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-xl-6 xl-100 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Peity Charts With Different Colors</h5>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-sm-3 text-center col-6">
								<div class="xm-mb-peity"><span class="bar-colours-1">5,3,9,6,5,9,7,3,5,2</span></div>
							</div>
							<div class="col-sm-3 text-center col-6">
								<div class="xm-mb-peity"><span class="bar-colours-2">5,3,2,-1,-3,-2,2,3,5,2</span></div>
							</div>
							<div class="col-sm-3 text-center col-6"><span class="bar-colours-3">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span></div>
							<div class="col-sm-3 text-center col-6"><span class="pie-colours-1">4,7,6,5</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	@push('scripts')
	<script src="{{ asset('assets/js/chart/peity-chart/peity.jquery.js') }}"></script>
    <script src="{{ asset('assets/js/chart/peity-chart/peity-custom.js') }}"></script>
	@endpush

@endsection