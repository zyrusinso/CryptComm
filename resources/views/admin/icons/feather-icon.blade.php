@extends('layouts.admin.master')

@section('title')Feather Icons
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Feather Icons</h3>
		@endslot
		<li class="breadcrumb-item">Icons</li>
		<li class="breadcrumb-item active">Feather Icons</li>
	@endcomponent

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Feather Icons</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists feather-icons">
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="activity"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">activity</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="airplay"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">airplay</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="alert-circle"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">alert-circle</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="alert-octagon"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">alert-octagon</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="alert-triangle"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">alert-triangle</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="align-center"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">align-center</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="align-justify"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">align-justify</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="align-left"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">align-left</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="align-right"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">align-right</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="anchor"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">anchor</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="aperture"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">aperture</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="archive"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">archive</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="arrow-down-circle"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">arrow-down-circle</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="arrow-down-left"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">arrow-down-left</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="arrow-down-right"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">arrow-down-right</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="arrow-down"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">arrow-down</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="arrow-left-circle"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">arrow-left-circle</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="arrow-left"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">arrow-left</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="arrow-right-circle"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">arrow-right-circle</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="arrow-right"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">arrow-right</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="arrow-up-circle"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">arrow-up-circle</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="arrow-up-left"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">arrow-up-left</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="arrow-up-right"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">arrow-up-right</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="arrow-up"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">arrow-up</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="at-sign"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">at-sign</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="award"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">award</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="bar-chart-2"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">bar-chart-2</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="bar-chart"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">bar-chart</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="battery-charging"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">battery-charging</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="battery"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">battery</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="bell-off"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">bell-off</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="bell"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">bell</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="bluetooth"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">bluetooth</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="bold"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">bold</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="book-open"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">book-open</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="book"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">book</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="bookmark"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">bookmark</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="box"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">box</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="briefcase"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">briefcase</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="calendar"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">calendar</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="camera-off"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">camera-off</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="camera"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">camera</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="cast"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">cast</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="check-circle"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">check-circle</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="check-square"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">check-square</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="check"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">check</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="chevron-down"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">chevron-down</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="chevron-left"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">chevron-left</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="chevron-right"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">chevron-right</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="chevron-up"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">chevron-up</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="chevrons-down"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">chevrons-down</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="chevrons-left"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">chevrons-left</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="chevrons-right"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">chevrons-right</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="chevrons-up"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">chevrons-up</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="chrome"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">chrome</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="circle"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">circle</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="clipboard"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">clipboard</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="clock"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">clock</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="cloud-drizzle"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">cloud-drizzle</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="cloud-lightning"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">cloud-lightning</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="cloud-off"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">cloud-off</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="cloud-rain"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">cloud-rain</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="cloud-snow"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">cloud-snow</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="cloud"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">cloud</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="code"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">code</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="codepen"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">codepen</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="coffee"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">coffee</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="command"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">command</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="compass"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">compass</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="copy"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">copy</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="corner-down-left"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">corner-down-left</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="corner-down-right"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">corner-down-right</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="corner-left-down"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">corner-left-down</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="corner-left-up"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">corner-left-up</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="corner-right-down"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">corner-right-down</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="corner-right-up"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">corner-right-up</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="corner-up-left"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">corner-up-left</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="corner-up-right"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">corner-up-right</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="cpu"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">cpu</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="credit-card"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">credit-card</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="crop"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">crop</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="crosshair"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">crosshair</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="database"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">database</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="delete"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">delete</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="disc"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">disc</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="dollar-sign"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">dollar-sign</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="download-cloud"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">download-cloud</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="download"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">download</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="droplet"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">droplet</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="edit-2"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">edit-2</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="edit-3"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">edit-3</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="edit"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">edit</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="external-link"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">external-link</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="eye-off"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">eye-off</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="eye"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">eye</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="facebook"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">facebook</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="fast-forward"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">fast-forward</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="feather"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">feather</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="file-minus"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">file-minus</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="file-plus"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">file-plus</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="file-text"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">file-text</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="file"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">file</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="film"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">film</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="filter"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">filter</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="flag"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">flag</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="folder-minus"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">folder-minus</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="folder-plus"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">folder-plus</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="folder"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">folder</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="gift"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">gift</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="git-branch"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">git-branch</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="git-commit"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">git-commit</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="git-merge"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">git-merge</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="git-pull-request"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">git-pull-request</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="github"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">github</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="gitlab"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">gitlab</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="globe"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">globe</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="grid"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">grid</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="hard-drive"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">hard-drive</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="hash"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">hash</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="headphones"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">headphones</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="heart"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">heart</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="help-circle"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">help-circle</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="home"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">home</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="image"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">image</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="inbox"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">inbox</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="info"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">info</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="instagram"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">instagram</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="italic"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">italic</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="layers"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">layers</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="layout"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">layout</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="life-buoy"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">life-buoy</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="link-2"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">link-2</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="link"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">link</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="linkedin"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">linkedin</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="list"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">list</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="loader"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">loader</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="lock"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">lock</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="log-in"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">log-in</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="log-out"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">log-out</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="mail"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">mail</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="map-pin"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">map-pin</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="map"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">map</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="maximize-2"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">maximize-2</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="maximize"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">maximize</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="menu"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">menu</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="message-circle"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">message-circle</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="message-square"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">message-square</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="mic-off"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">mic-off</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="mic"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">mic</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="minimize-2"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">minimize-2</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="minimize"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">minimize</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="minus-circle"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">minus-circle</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="minus-square"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">minus-square</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="minus"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">minus</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="monitor"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">monitor</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="moon"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">moon</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="more-horizontal"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">more-horizontal</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="more-vertical"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">more-vertical</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="move"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">move</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="music"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">music</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="navigation-2"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">navigation-2</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="navigation"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">navigation</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="octagon"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">octagon</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="package"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">package</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="paperclip"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">paperclip</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="pause-circle"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">pause-circle</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="pause"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">pause</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="percent"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">percent</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="phone-call"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">phone-call</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="phone-forwarded"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">phone-forwarded</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="phone-incoming"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">phone-incoming</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="phone-missed"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">phone-missed</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="phone-off"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">phone-off</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="phone-outgoing"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">phone-outgoing</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="phone"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">phone</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="pie-chart"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">pie-chart</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="play-circle"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">play-circle</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="play"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">play</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="plus-circle"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">plus-circle</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="plus-square"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">plus-square</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="plus"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">plus</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="pocket"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">pocket</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="power"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">power</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="printer"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">printer</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="radio"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">radio</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="refresh-ccw"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">refresh-ccw</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="refresh-cw"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">refresh-cw</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="repeat"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">repeat</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="rewind"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">rewind</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="rotate-ccw"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">rotate-ccw</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="rotate-cw"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">rotate-cw</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="rss"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">rss</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="save"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">save</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="scissors"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">scissors</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="search"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">search</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="send"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">send</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="server"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">server</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="settings"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">settings</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="share-2"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">share-2</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="share"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">share</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="shield-off"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">shield-off</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="shield"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">shield</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="shopping-bag"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">shopping-bag</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="shopping-cart"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">shopping-cart</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="shuffle"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">shuffle</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="sidebar"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">sidebar</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="skip-back"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">skip-back</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="skip-forward"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">skip-forward</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="slack"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">slack</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="slash"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">slash</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="sliders"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">sliders</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="smartphone"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">smartphone</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="speaker"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">speaker</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="square"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">square</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="star"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">star</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="stop-circle"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">stop-circle</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="sun"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">sun</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="sunrise"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">sunrise</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="sunset"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">sunset</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="tablet"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">tablet</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="tag"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">tag</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="target"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">target</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="terminal"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">terminal</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="thermometer"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">thermometer</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="thumbs-down"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">thumbs-down</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="thumbs-up"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">thumbs-up</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="toggle-left"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">toggle-left</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="toggle-right"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">toggle-right</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="trash-2"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">trash-2</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="trash"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">trash</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="trending-down"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">trending-down</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="trending-up"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">trending-up</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="triangle"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">triangle</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="truck"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">truck</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="tv"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">tv</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="twitter"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">twitter</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="type"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">type</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="umbrella"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">umbrella</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="underline"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">underline</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="unlock"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">unlock</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="upload-cloud"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">upload-cloud</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="upload"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">upload</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="user-check"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">user-check</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="user-minus"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">user-minus</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="user-plus"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">user-plus</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="user-x"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">user-x</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="user"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">user</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="users"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">users</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="video-off"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">video-off</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="video"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">video</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="voicemail"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">voicemail</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="volume-1"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">volume-1</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="volume-2"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">volume-2</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="volume-x"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">volume-x</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="volume"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">volume</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="watch"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">watch</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="wifi-off"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">wifi-off</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="wifi"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">wifi</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="wind"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">wind</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="x-circle"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">x-circle</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="x-square"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">x-square</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="x"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">x</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="youtube"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">youtube</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="zap-off"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">zap-off</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="zap"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">zap</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="zoom-in"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">zoom-in</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-xl-4">
								<div class="media">
									<i data-feather="zoom-out"></i>
									<div class="media-body align-self-center">
										<h6 class="mt-0">zoom-out</h6>
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
	<script src="{{ asset('assets/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/icons-notify.js') }}"></script>
    <script src="{{ asset('assets/js/icons/feather-icon/feather-icon-clipart.js') }}"></script>
	@endpush

@endsection