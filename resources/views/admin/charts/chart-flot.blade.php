@extends('layouts.admin.master')

@section('title')Flot Chart
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Flot Chart</h3>
		@endslot
		<li class="breadcrumb-item">Charts</li>
		<li class="breadcrumb-item active">Flot Chart</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row all-chart">
			<div class="col-sm-12 col-xl-6 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Real-Time Updates</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder" id="real-time-update"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Multiple Real-Time Updates</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder" id="multiple-real-timeupdate"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Error chart</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder" id="error-flot-chart"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Adding Annotations chart</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder" id="annotations-chart"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Basic chart</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder" id="flot-basic-chart"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Categories Chart</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder" id="flot-categories"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Toggling Series Chart</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder float-start" id="toggling-series-flot"></div>
							<p class="float-end" id="choices"></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Stacking chart</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder" id="stacking-flot-chart"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6 box-col-6">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Default pie chart</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder" id="default-pie-flot-chart"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6 box-col-6">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Default pie chart (Interactive)</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder" id="default-pie-flot-chart-hover"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6 box-col-6">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Default pie chart without legend</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder" id="default-pie-legend-flot-chart"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6 box-col-6">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Custom Label Formatter</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder" id="custom-label1pie"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6 box-col-6">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Label Radius chart</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder" id="label-radius-flot-chart"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6 box-col-6">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Hidden Labels chart</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder" id="hidden-label-radius-flot-chart"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6 box-col-6">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Tilted Pie chart</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder" id="title-pie-flot-chart"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6 box-col-6">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Donut Hole chart</h5>
					</div>
					<div class="card-body chart-block">
						<div class="flot-chart-container">
							<div class="flot-chart-placeholder" id="dount-hole-flot-chart"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	
	@push('scripts')
	<script src="{{ asset('assets/js/chart/flot-chart/excanvas.js') }}"></script>
    <script src="{{ asset('assets/js/chart/flot-chart/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/js/chart/flot-chart/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('assets/js/chart/flot-chart/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('assets/js/chart/flot-chart/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('assets/js/chart/flot-chart/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/js/chart/flot-chart/jquery.flot.symbol.js') }}"></script>
    <script src="{{ asset('assets/js/chart/flot-chart/flot-script.js') }}"></script>
	@endpush

@endsection