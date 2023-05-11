@extends('layouts.admin.master')

@section('title')Time Picker
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/timepicker.css') }}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Time Picker</h3>
		@endslot
		<li class="breadcrumb-item">Forms</li>
		<li class="breadcrumb-item">Form Controls</li>
        <li class="breadcrumb-item active">Time Picker</li>
	@endcomponent
	
	<div class="container-fluid time-picker">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Default:</h5>
					</div>
					<div class="card-body">
						<form class="theme-form">
							<div>
								<div class="input-group clockpicker">
									<input class="form-control" type="text" value="09:30" /><span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Align the arrow to top, auto close:</h5>
					</div>
					<div class="card-body">
						<form class="theme-form">
							<div>
								<div class="input-group clockpicker pull-center" data-placement="left" data-align="top" data-autoclose="true">
									<input class="form-control" type="text" value="13:14" /><span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Set options in javascript, instead of data-* :</h5>
					</div>
					<div class="card-body">
						<form class="theme-form">
							<div>
								<div class="input-group clockpicker" data-placement="top" data-align="left" data-donetext="Done">
									<input class="form-control" type="text" value="18:00" /><span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Set default value, input without addon:</h5>
					</div>
					<div class="card-body">
						<div class="clearfix">
							<form class="theme-form">
								<div>
									<input class="form-control" id="single-input" type="text" value="" placeholder="Addon" />
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	@push('scripts')
	<script src="{{ asset('assets/js/time-picker/jquery-clockpicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/time-picker/highlight.min.js') }}"></script>
    <script src="{{ asset('assets/js/time-picker/clockpicker.js') }}"></script>
	@endpush

@endsection