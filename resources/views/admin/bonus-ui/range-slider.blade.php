@extends('layouts.admin.master')

@section('title')Range Slider
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/range-slider.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Range Slider</h3>
		@endslot
		<li class="breadcrumb-item">Advance</li>
		<li class="breadcrumb-item active">Range Slider</li>
	@endcomponent

    <div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Ion Range Slider</h5>
					</div>
					<div class="card-body">
						<form class="theme-form form-label-align-right range-slider">
							<div class="form-group row">
								<label class="col-md-2 col-form-label sm-left-text" for="u-range-01">Default</label>
								<div class="col-md-10">
									<input id="u-range-01" type="text" />
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-2 control-label sm-left-text" for="u-range-02">Min-Max Value</label>
								<div class="col-md-10">
									<input id="u-range-02" type="text" />
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-2 control-label sm-left-text" for="u-range-03">Prefix</label>
								<div class="col-md-10">
									<input id="u-range-03" type="text" />
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-2 control-label sm-left-text" for="u-range-04">Nagative value</label>
								<div class="col-md-10">
									<input id="u-range-04" type="text" />
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-2 control-label sm-left-text" for="u-range-05">Steps</label>
								<div class="col-md-10">
									<input id="u-range-05" type="text" />
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-2 control-label sm-left-text" for="u-range-06">Custom Values</label>
								<div class="col-md-10">
									<input id="u-range-06" type="text" />
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-2 control-label sm-left-text" for="u-range-07">Prettify Numbers</label>
								<div class="col-md-10">
									<input id="u-range-07" type="text" />
								</div>
							</div>
							<div class="form-group row mb-0">
								<label class="col-md-2 control-label sm-left-text" for="u-range-08">Disabled</label>
								<div class="col-md-10">
									<input id="u-range-08" type="text" />
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>	

    @push('scripts') 
        <script src="{{asset('assets/js/range-slider/ion.rangeSlider.min.js')}}"></script> 
        <script src="{{asset('assets/js/range-slider/rangeslider-script.js')}}"></script>
    @endpush

@endsection