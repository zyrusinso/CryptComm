@extends('layouts.admin.master')

@section('title')Project Create
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/dropzone.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Project Create</h3>
		@endslot
		<li class="breadcrumb-item">Apps</li>
		<li class="breadcrumb-item active">Project Create</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-body">
	                    <div class="form theme-form">
	                        <div class="row">
	                            <div class="col">
	                                <div class="mb-3">
	                                    <label>Project Title</label>
	                                    <input class="form-control" type="text" placeholder="Project name *" />
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <div class="col">
	                                <div class="mb-3">
	                                    <label>Client name</label>
	                                    <input class="form-control" type="text" placeholder="Name client or company name" />
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <div class="col-sm-4">
	                                <div class="mb-3">
	                                    <label>Project Rate</label>
	                                    <input class="form-control" type="text" placeholder="Enter project Rate" />
	                                </div>
	                            </div>
	                            <div class="col-sm-4">
	                                <div class="mb-3">
	                                    <label>Project Type</label>
	                                    <select class="form-select">
	                                        <option>Hourly</option>
	                                        <option>Fix price</option>
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="col-sm-4">
	                                <div class="mb-3">
	                                    <label>Priority</label>
	                                    <select class="form-select">
	                                        <option>Low</option>
	                                        <option>Medium</option>
	                                        <option>High</option>
	                                        <option>Urgent</option>
	                                    </select>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <div class="col-sm-4">
	                                <div class="mb-3">
	                                    <label>Project Size</label>
	                                    <select class="form-select">
	                                        <option>Small</option>
	                                        <option>Medium</option>
	                                        <option>Big</option>
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="col-sm-4">
	                                <div class="mb-3">
	                                    <label>Starting date</label>
	                                    <input class="datepicker-here form-control" type="text" data-language="en" />
	                                </div>
	                            </div>
	                            <div class="col-sm-4">
	                                <div class="mb-3">
	                                    <label>Ending date</label>
	                                    <input class="datepicker-here form-control" type="text" data-language="en" />
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <div class="col">
	                                <div class="mb-3">
	                                    <label>Enter some Details</label>
	                                    <textarea class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <div class="col">
	                                <div class="mb-3">
	                                    <label>Upload project file</label>
	                                    <form class="dropzone" id="singleFileUpload" action="/upload.php">
	                                        <div class="dz-message needsclick">
	                                            <i class="icon-cloud-up"></i>
	                                            <h6>Drop files here or click to upload.</h6>
	                                            <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
	                                        </div>
	                                    </form>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <div class="col">
	                                <div class="text-end"><a class="btn btn-secondary me-3" href="#">Add</a><a class="btn btn-danger" href="#">Cancel</a></div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	
	@push('scripts')
	<script src="{{asset('assets/js/dropzone/dropzone.js')}}"></script>
    <script src="{{asset('assets/js/dropzone/dropzone-script.js')}}"></script>
	@endpush

@endsection