@extends('layouts.admin.master')

@section('title')Sparkline Chart
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Sparkline Chart</h3>
		@endslot
		<li class="breadcrumb-item">Charts</li>
		<li class="breadcrumb-item active">Sparkline Chart</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-12 box-col-6">
				<div class="card">
					<div class="card-header">
						<h5>Mouse Speed Chart</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder" id="mouse-speed-chart-sparkline"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 box-col-6">
				<div class="card">
					<div class="card-header">
						<h5>Simple Bar Charts</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder" id="custom-line-chart"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 box-col-6">
				<div class="card">
					<div class="card-header">
						<h5>Line Chart</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder line-chart-sparkline" id="line-chart-sparkline"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 box-col-6">
				<div class="card">
					<div class="card-header">
						<h5>Simple Line Chart</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder" id="simple-line-chart-sparkline"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 box-col-6">
				<div class="card">
					<div class="card-header">
						<h5>Bar Chart</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder" id="bar-chart-sparkline"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 box-col-6">
				<div class="card">
					<div class="card-header">
						<h5>Pie chart</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder" id="pie-sparkline-chart"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	
	@push('scripts')
	<script src="{{ asset('assets/js/chart/sparkline/sparkline.js') }}"></script>
    <script src="{{ asset('assets/js/chart/sparkline/sparkline-script.js') }}"></script>
	@endpush

@endsection