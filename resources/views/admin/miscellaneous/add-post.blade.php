@extends('layouts.admin.master')

@section('title')Add Post
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/dropzone.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Add Post</h3>
		@endslot
		<li class="breadcrumb-item">Blog</li>
		<li class="breadcrumb-item active">Add Post</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Post Edit</h5>
	                </div>
	                <div class="card-body add-post">
	                    <form class="row needs-validation" novalidate="">
	                        <div class="col-sm-12">
	                            <div class="form-group">
	                                <label for="validationCustom01">Title:</label>
	                                <input class="form-control" id="validationCustom01" type="text" placeholder="Post Title" required="" />
	                                <div class="valid-feedback">Looks good!</div>
	                            </div>
	                            <div class="form-group">
	                                <label>Type:</label>
	                                <div class="m-checkbox-inline">
	                                    <label class="f-w-500" for="edo-ani"> <input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani" checked="" />Text </label>
	                                    <label class="f-w-500" for="edo-ani1"> <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani" />Image </label>
	                                    <label class="f-w-500" for="edo-ani2"> <input class="radio_animated" id="edo-ani2" type="radio" name="rdo-ani" checked="" />Audio </label>
	                                    <label class="f-w-500" for="edo-ani3"> <input class="radio_animated" id="edo-ani3" type="radio" name="rdo-ani" />Video </label>
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <label class="d-block">Category:</label>
	                                <select class="js-example-placeholder-multiple col-sm-12" multiple="multiple">
	                                    <option value="AL">Lifestyle</option>
	                                    <option value="WY">Travel</option>
	                                </select>
	                            </div>
	                            <div class="email-wrapper">
	                                <div class="theme-form">
	                                    <div class="form-group">
	                                        <label>Content:</label>
	                                        <textarea id="text-box" name="text-box" cols="10" rows="2"></textarea>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </form>
	                    <form class="dropzone digits" id="singleFileUpload" action="/upload.php">
	                        <div class="m-0 dz-message needsclick">
	                            <i class="icon-cloud-up"></i>
	                            <h6 class="mb-0">Drop files here or click to upload.</h6>
	                        </div>
	                    </form>
	                    <div class="btn-showcase">
	                        <button class="btn btn-primary" type="submit">Post</button>
	                        <input class="btn btn-light" type="reset" value="Discard" />
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	
	@push('scripts')
	<script src="{{asset('assets/js/editor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
    <script src="{{asset('assets/js/dropzone/dropzone.js')}}"></script>
    <script src="{{asset('assets/js/dropzone/dropzone-script.js')}}"></script>
    <script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
    <script src="{{asset('assets/js/email-app.js')}}"></script>
    <script src="{{asset('assets/js/form-validation-custom.js')}}"></script>
	@endpush

@endsection