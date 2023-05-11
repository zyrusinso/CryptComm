@extends('layouts.admin.master')

@section('title')Basic Card
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Basic Card</h3>
		@endslot
		<li class="breadcrumb-item">Cards</li>
		<li class="breadcrumb-item active">Basic Card</li>
	@endcomponent

    <div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-xl-6">
				<div class="card">
					<div class="card-header d-flex justify-content-between align-items-center pb-0">
						<h5>Basic Card</h5>
						<div class="setting-list">
							<ul class="list-unstyled setting-option">
								<li>
									<div class="setting-primary"><i class="icon-settings"></i></div>
								</li>
								<li><i class="view-html fa fa-code font-primary"></i></li>
								<li><i class="icofont icofont-maximize full-card font-primary"></i></li>
								<li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
								<li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
								<li><i class="icofont icofont-error close-card font-primary"></i></li>
							</ul>
						</div>
					</div>
					<div class="card-body">
						<p class="mb-0">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
						</p>
						<div class="code-box-copy">
							<button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
							<pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
	&lt;p class="mb-0"&gt; Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. &lt;/p&gt;
	&lt;!-- Cod Box Copy end --&gt;              </code></pre>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6">
				<div class="card">
					<div class="card-header d-flex justify-content-between align-items-center pb-0">
						<h5><i class="icofont icofont-truck me-2"></i> Icon in Heading</h5>
						<div class="setting-list">
							<ul class="list-unstyled setting-option">
								<li>
									<div class="setting-primary"><i class="icon-settings"></i></div>
								</li>
								<li><i class="view-html fa fa-code font-primary"></i></li>
								<li><i class="icofont icofont-maximize full-card font-primary"></i></li>
								<li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
								<li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
								<li><i class="icofont icofont-error close-card font-primary"></i></li>
							</ul>
						</div>
					</div>
					<div class="card-body">
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6">
				<div class="card height-equal">
					<div class="card-header pb-0">
						<h5>Card sub Title</h5>
						<span>Using the <a href="javascript:void(0)">card</a> component, you can extend the default collapse behavior to create an accordion.</span>
					</div>
					<div class="card-body">
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6">
				<div class="card height-equal">
					<div class="card-header pb-0">
						<h5>Card With Footer</h5>
					</div>
					<div class="card-body">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the the industry's standard dummy text ever.</p>
					</div>
					<div class="card-footer">
						<h6 class="mb-0">Card Footer</h6>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6">
				<div class="card">
					<div class="card-header d-flex justify-content-between align-items-center pb-0 bg-primary">
						<h5>Primary Color Card</h5>
						<div class="setting-list bg-primary">
							<ul class="list-unstyled setting-option">
								<li>
									<div class="setting-white"><i class="icon-settings"></i></div>
								</li>
								<li><i class="view-html fa fa-code font-white"></i></li>
								<li><i class="icofont icofont-maximize full-card font-white"></i></li>
								<li><i class="icofont icofont-minus minimize-card font-white"></i></li>
								<li><i class="icofont icofont-refresh reload-card font-white"></i></li>
								<li><i class="icofont icofont-error close-card font-white"></i></li>
							</ul>
						</div>
					</div>
					<div class="card-body bg-primary">
						<p class="mb-0">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.
						</p>
					</div>
					<div class="card-footer bg-primary">
						<h6 class="mb-0">Card Footer</h6>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6">
				<div class="card">
					<div class="card-header bg-secondary d-flex justify-content-between align-items-center pb-0">
						<h5>Secondary Color Card</h5>
						<div class="setting-list bg-secondary">
							<ul class="list-unstyled setting-option">
								<li>
									<div class="setting-white"><i class="icon-settings"></i></div>
								</li>
								<li><i class="view-html fa fa-code font-white"></i></li>
								<li><i class="icofont icofont-maximize full-card font-white"></i></li>
								<li><i class="icofont icofont-minus minimize-card font-white"></i></li>
								<li><i class="icofont icofont-refresh reload-card font-white"></i></li>
								<li><i class="icofont icofont-error close-card font-white"></i></li>
							</ul>
						</div>
					</div>
					<div class="card-body bg-secondary">
						<p class="mb-0">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.
						</p>
					</div>
					<div class="card-footer bg-secondary">
						<h6 class="mb-0 text-white">Card Footer</h6>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6">
				<div class="card">
					<div class="card-header bg-success d-flex justify-content-between align-items-center pb-0">
						<h5>Success color Card</h5>
						<div class="setting-list bg-success">
							<ul class="list-unstyled setting-option">
								<li>
									<div class="setting-white"><i class="icon-settings"></i></div>
								</li>
								<li><i class="view-html fa fa-code font-white"></i></li>
								<li><i class="icofont icofont-maximize full-card font-white"></i></li>
								<li><i class="icofont icofont-minus minimize-card font-white"></i></li>
								<li><i class="icofont icofont-refresh reload-card font-white"></i></li>
								<li><i class="icofont icofont-error close-card font-white"></i></li>
							</ul>
						</div>
					</div>
					<div class="card-body bg-success">
						<p class="mb-0">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.
						</p>
					</div>
					<div class="card-footer bg-success">
						<h6 class="mb-0">Card Footer</h6>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6">
				<div class="card">
					<div class="card-header bg-danger d-flex justify-content-between align-items-center pb-0">
						<h5>Danger color Card</h5>
						<div class="setting-list bg-danger">
							<ul class="list-unstyled setting-option">
								<li>
									<div class="setting-white"><i class="icon-settings"></i></div>
								</li>
								<li><i class="view-html fa fa-code font-white"></i></li>
								<li><i class="icofont icofont-maximize full-card font-white"></i></li>
								<li><i class="icofont icofont-minus minimize-card font-white"></i></li>
								<li><i class="icofont icofont-refresh reload-card font-white"></i></li>
								<li><i class="icofont icofont-error close-card font-white"></i></li>
							</ul>
						</div>
					</div>
					<div class="card-body bg-danger">
						<p class="mb-0">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.
						</p>
					</div>
					<div class="card-footer bg-danger">
						<h6 class="mb-0">Card Footer</h6>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6">
				<div class="card">
					<div class="card-header bg-warning d-flex justify-content-between align-items-center">
						<h5>Warning color Card</h5>
						<div class="setting-list bg-warning">
							<ul class="list-unstyled setting-option">
								<li>
									<div class="setting-white"><i class="icon-settings"></i></div>
								</li>
								<li><i class="view-html fa fa-code font-white"></i></li>
								<li><i class="icofont icofont-maximize full-card font-white"></i></li>
								<li><i class="icofont icofont-minus minimize-card font-white"></i></li>
								<li><i class="icofont icofont-refresh reload-card font-white"></i></li>
								<li><i class="icofont icofont-error close-card font-white"></i></li>
							</ul>
						</div>
					</div>
					<div class="card-body bg-warning">
						<p class="mb-0">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.
						</p>
					</div>
					<div class="card-footer bg-warning">
						<h6 class="mb-0">Card Footer</h6>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6">
				<div class="card">
					<div class="card-header bg-primary d-flex justify-content-between align-items-center">
						<h5 class="text-white">Primary Color Header</h5>
						<div class="setting-list bg-primary">
							<ul class="list-unstyled setting-option">
								<li>
									<div class="setting-white"><i class="icon-settings"></i></div>
								</li>
								<li><i class="view-html fa fa-code font-white"></i></li>
								<li><i class="icofont icofont-maximize full-card font-white"></i></li>
								<li><i class="icofont icofont-minus minimize-card font-white"></i></li>
								<li><i class="icofont icofont-refresh reload-card font-white"></i></li>
								<li><i class="icofont icofont-error close-card font-white"></i></li>
							</ul>
						</div>
					</div>
					<div class="card-body">
						<p class="mb-0">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.
						</p>
					</div>
					<div class="card-footer">
						<h6 class="mb-0">Card Footer</h6>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6">
				<div class="card">
					<div class="card-header d-flex justify-content-between align-items-center">
						<h5>Primary Color Body</h5>
						<div class="setting-list">
							<ul class="list-unstyled setting-option">
								<li>
									<div class="setting-primary"><i class="icon-settings"></i></div>
								</li>
								<li><i class="view-html fa fa-code font-white"></i></li>
								<li><i class="icofont icofont-maximize full-card font-white"></i></li>
								<li><i class="icofont icofont-minus minimize-card font-white"></i></li>
								<li><i class="icofont icofont-refresh reload-card font-white"></i></li>
								<li><i class="icofont icofont-error close-card font-white"></i></li>
							</ul>
						</div>
					</div>
					<div class="card-body bg-primary">
						<p class="mb-0">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.
						</p>
					</div>
					<div class="card-footer">
						<h6 class="mb-0">Card Footer</h6>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6">
				<div class="card">
					<div class="card-header d-flex justify-content-between align-items-center">
						<h5>Primary Color Footer</h5>
						<div class="setting-list">
							<ul class="list-unstyled setting-option">
								<li>
									<div class="setting-primary"><i class="icon-settings"></i></div>
								</li>
								<li><i class="view-html fa fa-code font-white"></i></li>
								<li><i class="icofont icofont-maximize full-card font-white"></i></li>
								<li><i class="icofont icofont-minus minimize-card font-white"></i></li>
								<li><i class="icofont icofont-refresh reload-card font-white"></i></li>
								<li><i class="icofont icofont-error close-card font-white"></i></li>
							</ul>
						</div>
					</div>
					<div class="card-body">
						<p class="mb-0">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.
						</p>
					</div>
					<div class="card-footer bg-primary">
						<h6 class="mb-0">Card Footer</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
	

    @push('scripts')
	<script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
    <script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
    <script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
    <script src="{{asset('assets/js/height-equal.js')}}"></script>
	@endpush

@endsection