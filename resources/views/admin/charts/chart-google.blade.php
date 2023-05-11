@extends('layouts.admin.master')

@section('title')Google Chart
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Google Chart</h3>
		@endslot
		<li class="breadcrumb-item">Charts</li>
		<li class="breadcrumb-item active">Google Chart</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-xl-4 box-col-6">
				<div class="card">
					<div class="card-header">
						<h5>Pie Chart <span class="digits">1</span></h5>
					</div>
					<div class="card-body p-0 chart-block">
						<div class="chart-overflow" id="pie-chart4"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-4 box-col-6">
				<div class="card">
					<div class="card-header">
						<h5>Area Chart <span class="digits">1</span></h5>
					</div>
					<div class="card-body p-0 chart-block">
						<div class="chart-overflow" id="area-chart1"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-4 box-col-6">
				<div class="card">
					<div class="card-header">
						<h5>Area Chart <span class="digits">2</span></h5>
					</div>
					<div class="card-body p-0 chart-block">
						<div class="chart-overflow" id="area-chart2"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-4 box-col-6">
				<div class="card">
					<div class="card-header">
						<h5>Pie Chart <span class="digits">2</span></h5>
					</div>
					<div class="card-body p-0 chart-block">
						<div class="chart-overflow" id="pie-chart1"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-4 box-col-6">
				<div class="card">
					<div class="card-header">
						<h5>Pie Chart <span class="digits">3</span></h5>
					</div>
					<div class="card-body p-0 chart-block">
						<div class="chart-overflow" id="pie-chart2"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-4 box-col-6">
				<div class="card">
					<div class="card-header">
						<h5>Pie Chart <span class="digits">4</span></h5>
					</div>
					<div class="card-body p-0 chart-block">
						<div class="chart-overflow" id="pie-chart3"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6 box-col-6">
				<div class="card">
					<div class="card-header">
						<h5>Column Chart <span class="digits">1 </span></h5>
					</div>
					<div class="card-body chart-block">
						<div class="chart-overflow" id="column-chart1"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6 box-col-6">
				<div class="card">
					<div class="card-header">
						<h5>Column Chart <span class="digits">2</span></h5>
					</div>
					<div class="card-body chart-block">
						<div class="chart-overflow" id="column-chart2"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 box-col-12">
				<div class="card">
					<div class="card-header">
						<h5>Gantt Chart</h5>
					</div>
					<div class="card-body chart-block">
						<div class="chart-overflow" id="gantt_chart"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 box-col-12">
				<div class="card">
					<div class="card-header">
						<h5>Line Chart</h5>
					</div>
					<div class="card-body chart-block">
						<div class="chart-overflow" id="line-chart"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 box-col-12">
				<div class="card">
					<div class="card-header">
						<h5>Combo Chart</h5>
					</div>
					<div class="card-body chart-block">
						<div class="chart-overflow" id="combo-chart"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6 box-col-12">
				<div class="card">
					<div class="card-header">
						<h5>bar-chart2</h5>
					</div>
					<div class="card-body chart-block">
						<div id="bar-chart2"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6 box-col-12">
				<div class="card">
					<div class="card-header">
						<h5>word tree</h5>
					</div>
					<div class="card-body chart-block">
						<div class="word-tree" id="wordtree_basic"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	@push('scripts')
	<script src="{{ asset('assets/js/chart/google/google-chart-loader.js') }}"></script>
    <script src="{{ asset('assets/js/chart/google/google-chart.js') }}"></script>
	@endpush

@endsection