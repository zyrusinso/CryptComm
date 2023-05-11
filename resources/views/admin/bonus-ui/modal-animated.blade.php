@extends('layouts.admin.master')

@section('title')Animated Modal
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Animated Modal</h3>
		@endslot
		<li class="breadcrumb-item">Advance</li>
		<li class="breadcrumb-item active">Animated Modal</li>
	@endcomponent

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Modal with animate.js</h5>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-xl-6 col-md-8 offset-xl-3 offset-md-2">
								<div id="animation-box">
									<div class="card">
										<div class="animate-widget">
											<div><img class="img-fluid" src="{{asset('assets/images/banner/3.jpg')}}" alt="" /></div>
											<div class="text-center p-25">
												<p class="text-muted mb-0">Denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 text-center">
								<form class="form-inline theme-form row justify-content-center animated-modal d-flex">
									<div class="mb-2 me-2 mb-0 animated-modal-md-mb w-auto">
										<label class="me-3">Entrances</label>
										<select class="form-select" id="entrance">
											<optgroup label="Attention Seekers">
												<option value="bounce">bounce</option>
												<option value="flash">flash</option>
												<option value="pulse">pulse</option>
												<option value="rubberBand">rubberBand</option>
												<option value="shake">shake</option>
												<option value="swing">swing</option>
												<option value="tada">tada</option>
												<option value="wobble">wobble</option>
												<option value="jello">jello</option>
											</optgroup>
											<optgroup label="Bouncing Entrances">
												<option value="bounceIn" selected="">bounceIn</option>
												<option value="bounceInDown">bounceInDown</option>
												<option value="bounceInLeft">bounceInLeft</option>
												<option value="bounceInRight">bounceInRight</option>
												<option value="bounceInUp">bounceInUp</option>
											</optgroup>
											<optgroup label="Fading Entrances">
												<option value="fadeIn">fadeIn</option>
												<option value="fadeInDown">fadeInDown</option>
												<option value="fadeInDownBig">fadeInDownBig</option>
												<option value="fadeInLeft">fadeInLeft</option>
												<option value="fadeInLeftBig">fadeInLeftBig</option>
												<option value="fadeInRight">fadeInRight</option>
												<option value="fadeInRightBig">fadeInRightBig</option>
												<option value="fadeInUp">fadeInUp</option>
												<option value="fadeInUpBig">fadeInUpBig</option>
											</optgroup>
											<optgroup label="Flippers">
												<option value="flipInX">flipInX</option>
												<option value="flipInY">flipInY</option>
											</optgroup>
											<optgroup label="Lightspeed">
												<option value="lightSpeedIn">lightSpeedIn</option>
											</optgroup>
											<optgroup label="Rotating Entrances">
												<option value="rotateIn">rotateIn</option>
												<option value="rotateInDownLeft">rotateInDownLeft</option>
												<option value="rotateInDownRight">rotateInDownRight</option>
												<option value="rotateInUpLeft">rotateInUpLeft</option>
												<option value="rotateInUpRight">rotateInUpRight</option>
											</optgroup>
											<optgroup label="Sliding Entrances">
												<option value="slideInUp">slideInUp</option>
												<option value="slideInDown">slideInDown</option>
												<option value="slideInLeft">slideInLeft</option>
												<option value="slideInRight">slideInRight</option>
											</optgroup>
											<optgroup label="Zoom Entrances">
												<option value="zoomIn">zoomIn</option>
												<option value="zoomInDown">zoomInDown</option>
												<option value="zoomInLeft">zoomInLeft</option>
												<option value="zoomInRight">zoomInRight</option>
												<option value="zoomInUp">zoomInUp</option>
											</optgroup>
											<optgroup label="Specials">
												<option value="rollIn">rollIn</option>
											</optgroup>
										</select>
									</div>
									<div class="mb-2 me-2 mb-0 animated-modal-md-mb w-auto">
										<label class="me-3">Exits</label>
										<select class="form-select" id="exit">
											<optgroup label="Attention Seekers">
												<option value="bounce">bounce</option>
												<option value="flash">flash</option>
												<option value="pulse">pulse</option>
												<option value="rubberBand">rubberBand</option>
												<option value="shake">shake</option>
												<option value="swing">swing</option>
												<option value="tada">tada</option>
												<option value="wobble">wobble</option>
												<option value="jello">jello</option>
											</optgroup>
											<optgroup label="Bouncing Exits">
												<option value="bounceOut">bounceOut</option>
												<option value="bounceOutDown">bounceOutDown</option>
												<option value="bounceOutLeft">bounceOutLeft</option>
												<option value="bounceOutRight">bounceOutRight</option>
												<option value="bounceOutUp">bounceOutUp</option>
											</optgroup>
											<optgroup label="Fading Exits">
												<option value="fadeOut">fadeOut</option>
												<option value="fadeOutDown">fadeOutDown</option>
												<option value="fadeOutDownBig">fadeOutDownBig</option>
												<option value="fadeOutLeft">fadeOutLeft</option>
												<option value="fadeOutLeftBig">fadeOutLeftBig</option>
												<option value="fadeOutRight">fadeOutRight</option>
												<option value="fadeOutRightBig">fadeOutRightBig</option>
												<option value="fadeOutUp">fadeOutUp</option>
												<option value="fadeOutUpBig">fadeOutUpBig</option>
											</optgroup>
											<optgroup label="Flippers">
												<option value="flipOutX" selected="">flipOutX</option>
												<option value="flipOutY">flipOutY</option>
											</optgroup>
											<optgroup label="Lightspeed">
												<option value="lightSpeedOut">lightSpeedOut</option>
											</optgroup>
											<optgroup label="Rotating Exits">
												<option value="rotateOut">rotateOut</option>
												<option value="rotateOutDownLeft">rotateOutDownLeft</option>
												<option value="rotateOutDownRight">rotateOutDownRight</option>
												<option value="rotateOutUpLeft">rotateOutUpLeft</option>
												<option value="rotateOutUpRight">rotateOutUpRight</option>
											</optgroup>
											<optgroup label="Sliding Exits">
												<option value="slideOutUp">slideOutUp</option>
												<option value="slideOutDown">slideOutDown</option>
												<option value="slideOutLeft">slideOutLeft</option>
												<option value="slideOutRight">slideOutRight</option>
											</optgroup>
											<optgroup label="Zoom Exits">
												<option value="zoomOut">zoomOut</option>
												<option value="zoomOutDown">zoomOutDown</option>
												<option value="zoomOutLeft">zoomOutLeft</option>
												<option value="zoomOutRight">zoomOutRight</option>
												<option value="zoomOutUp">zoomOutUp</option>
											</optgroup>
											<optgroup label="Specials">
												<option value="rollOut">rollOut</option>
											</optgroup>
										</select>
									</div>
									<!-- Button trigger modal-->
									<div class="mb-2 mb-0 me-0 w-auto">
										<button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#myModal">Launch demo modal</button>
									</div>
								</form>
							</div>
						</div>
						<!-- Modal-->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
							<div class="modal-dialog" role="document">
								<div>
									<button class="btn-close theme-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
									<div class="modal-body">
										<div class="card">
											<div class="animate-widget">
												<div><img class="img-fluid" src="{{asset('assets/images/banner/3.jpg')}}" alt="" /></div>
												<div class="text-center p-25">
													<p class="text-muted mb-0">Denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

    @push('scripts') 
      	<script src="{{asset('assets/js/modal-animated.js')}}"></script>
    @endpush

@endsection