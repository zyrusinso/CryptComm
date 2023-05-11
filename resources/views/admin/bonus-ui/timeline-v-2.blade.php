@extends('layouts.admin.master')

@section('title')Timeline 2
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Timeline 2</h3>
		@endslot
		<li class="breadcrumb-item">Timeline</li>
		<li class="breadcrumb-item active">Timeline 2</li>
	@endcomponent

	<div class="container-fluid">
		<div class="row">
		  <div class="col-sm-12">
			<div class="card">
			  <div class="card-header">
				<h5>Example</h5>
			  </div>
			  <div class="card-body">
				<div id="timeline-2">
				  <div data-year="2010">Start</div>
				  <div class="active" data-year="2011">Lorem is simply dummy text of the printing and typesetting industry. the printing and typesetting industry.</div>
				  <div data-year="2013">Lorem is simply dummy text of the printing and typesetting industry. </div>
				  <div data-year="2014">Lorem is simply dummy text of the printing and typesetting industry.</div>
				  <div data-year="2015">Lorem is simply dummy text of the printing and typesetting industry.</div>
				  <div data-year="2017">Lorem is simply dummy text of the printing and typesetting industry.</div>
				  <div data-year="2018">End.</div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	</div>

    @push('scripts') 
        <script src="{{asset('assets/js/timeline/timeline-v-2/jquery.timeliny.min.js')}}"></script>
        <script src="{{asset('assets/js/timeline/timeline-v-2/timeline-v-2-custom.js')}}"></script>
    @endpush

@endsection