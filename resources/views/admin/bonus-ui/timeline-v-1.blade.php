@extends('layouts.admin.master')

@section('title')Timeline 1
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Timeline 1</h3>
		@endslot
		<li class="breadcrumb-item">Timeline</li>
        <li class="breadcrumb-item active">Timeline 1</li>
	@endcomponent

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Example</h5>
					</div>
					<div class="card-body">
						<!-- cd-timeline Start-->
						<section class="cd-container" id="cd-timeline">
							<div class="cd-timeline-block">
								<div class="cd-timeline-img cd-picture bg-primary"><i class="icon-pencil-alt"></i></div>
								<div class="cd-timeline-content">
									<h4>Title of section<span class="digits"> 1</span></h4>
									<p class="m-0">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui
										ut.
									</p>
									<span class="cd-date">Jan <span class="counter digits"> 14</span></span>
								</div>
							</div>
							<div class="cd-timeline-block">
								<div class="cd-timeline-img cd-movie bg-secondary"><i class="icon-video-camera"></i></div>
								<div class="cd-timeline-content">
									<h4>Title of section<span class="digits"> 2</span></h4>
									<div class="embed-responsive embed-responsive-21by9 m-t-20">
										<iframe src="https://www.youtube.com/embed/wpmHZspl4EM" allowfullscreen=""></iframe>
									</div>
									<span class="cd-date">Jan <span class="counter digits">18</span></span>
								</div>
							</div>
							<div class="cd-timeline-block">
								<div class="cd-timeline-img cd-picture bg-success"><i class="icon-image"></i></div>
								<div class="cd-timeline-content">
									<h4>Title of section<span class="digits"> 3</span></h4>
									<img class="img-fluid p-t-20" src="{{asset('assets/images/banner/1.jpg')}}" alt="" /><span class="cd-date">Jan <span class="counter digits">24</span></span>
								</div>
							</div>
							<div class="cd-timeline-block">
								<div class="cd-timeline-img cd-location bg-info"><i class="icon-pulse"></i></div>
								<div class="cd-timeline-content">
									<h4>Title of section<span class="digits"> 4</span></h4>
									<audio class="m-t-20" controls="">
										<source src="{{asset('assets/audio/horse.ogg')}}" type="audio/ogg" />
										Your browser does not support the audio element.
									</audio>
									<span class="cd-date">Feb <span class="counter digits">14</span></span>
								</div>
							</div>
							<div class="cd-timeline-block">
								<div class="cd-timeline-img cd-location bg-warning"><i class="icon-image"></i></div>
								<div class="cd-timeline-content">
									<h4>Title of section<span class="digits"> 5</span></h4>
									<img class="img-fluid p-t-20" src="{{asset('assets/images/banner/3.jpg')}}" alt="" /><span class="cd-date">Feb <span class="counter digits">18</span></span>
								</div>
							</div>
							<div class="cd-timeline-block">
								<div class="cd-timeline-img cd-movie bg-danger"><i class="icon-pencil-alt"></i></div>
								<div class="cd-timeline-content">
									<h4>Final Section</h4>
									<p class="m-0">This is the content of the last section</p>
									<span class="cd-date">Feb <span class="counter digits">26</span></span>
								</div>
							</div>
						</section>
						<!-- cd-timeline Ends-->
					</div>
				</div>
			</div>
		</div>
	</div>
	

    @push('scripts') 
	<script src="{{asset('assets/js/timeline/timeline-v-1/main.js')}}"></script>
    <script src="{{asset('assets/js/modernizr.js')}}"></script>
	@endpush

@endsection