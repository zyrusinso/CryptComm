@extends('layouts.admin.master')

@section('title')Morris Chart
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Morris Chart</h3>
		@endslot
		<li class="breadcrumb-item">Charts</li>
		<li class="breadcrumb-item active">Morris Chart</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-sm-12 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Line Chart</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder" id="morris-line-chart"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Updating Data</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder" id="updating-data-morris-chart"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Decimal Data</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder float-start" id="decimal-morris-chart"></div>
							<p class="float-end" id="choices"></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Displaying X Labels Diagonally</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder" id="x-Labels-Diagonally-morris-chart"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Bar Line Chart</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder" id="bar-line-chart-morris"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Displaying X Labels Diagonally(Bar Chart)</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder" id="x-lable-morris-chart"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Stacked Bars Chart</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder" id="stacked-bar-chart"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Simple Bar Charts</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder" id="morris-simple-bar-chart"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Area charts behaving like line Charts</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder" id="graph123"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Donut Color Chart</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder" id="donut-color-chart-morris"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	
	@push('scripts')
	<script src="{{ asset('assets/js/chart/morris-chart/raphael.js') }}"></script>
    <script src="{{ asset('assets/js/chart/morris-chart/morris.js') }}"> </script>
    <script src="{{ asset('assets/js/chart/morris-chart/prettify.min.js') }}"></script>
    <script src="{{ asset('assets/js/chart/morris-chart/morris.min.js') }}"></script>
    <script src="{{ asset('assets/js/chart/morris-chart/morris-script.js') }}"></script>
	@endpush

@endsection