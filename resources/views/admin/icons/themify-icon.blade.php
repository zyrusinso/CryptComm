@extends('layouts.admin.master')

@section('title')Themify icon
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Themify icon</h3>
		@endslot
		<li class="breadcrumb-item">Icons</li>
		<li class="breadcrumb-item active">Themify icon</li>
	@endcomponent

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Arrows & Direction Icons</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-arrow-up"></i> icon-arrow-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-arrow-right"></i> icon-arrow-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-arrow-left"></i> icon-arrow-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-arrow-down"></i> icon-arrow-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-arrows-vertical"></i> icon-arrows-vertical</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-arrows-horizontal"></i> icon-arrows-horizontal</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-angle-up"></i> icon-angle-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-angle-right"></i> icon-angle-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-angle-left"></i> icon-angle-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-angle-down"></i> icon-angle-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-angle-double-up"></i> icon-angle-double-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-angle-double-right"></i> icon-angle-double-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-angle-double-left"></i> icon-angle-double-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-angle-double-down"></i> icon-angle-double-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-move"></i> icon-move</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-fullscreen"></i> icon-fullscreen</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-arrow-top-right"></i> icon-arrow-top-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-arrow-top-left"></i> icon-arrow-top-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-arrow-circle-up"></i> icon-arrow-circle-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-arrow-circle-right"></i> icon-arrow-circle-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-arrow-circle-left"></i> icon-arrow-circle-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-arrow-circle-down"></i> icon-arrow-circle-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-arrows-corner"></i> icon-arrows-corner</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-split-v"></i> icon-split-v</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-split-v-alt"></i> icon-split-v-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-split-h"></i> icon-split-h</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-hand-point-up"></i> icon-hand-point-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-hand-point-right"></i> icon-hand-point-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-hand-point-left"></i> icon-hand-point-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-hand-point-down"></i> icon-hand-point-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-back-right"></i> icon-back-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-back-left"></i> icon-back-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-exchange-vertical"></i> icon-exchange-vertical</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Web App Icons</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-wand"></i> icon-wand</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-save"></i> icon-save</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-save-alt"></i> icon-save-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-direction"></i> icon-direction</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-direction-alt"></i> icon-direction-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-user"></i> icon-user</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-link"></i> icon-link</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-unlink"></i> icon-unlink</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-trash"></i> icon-trash</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-target"></i> icon-target</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-tag"></i> icon-tag</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-desktop"></i> icon-desktop</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-tablet"></i> icon-tablet</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-mobile"></i> icon-mobile</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-email"></i> icon-email</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-star"></i> icon-star</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-spray"></i> icon-spray</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-signal"></i> icon-signal</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-shopping-cart"></i> icon-shopping-cart</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-shopping-cart-full"></i> icon-shopping-cart-full</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-settings"></i> icon-settings</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-search"></i> icon-search</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-zoom-in"></i> icon-zoom-in</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-zoom-out"></i> icon-zoom-out</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-cut"></i> icon-cut</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-ruler"></i> icon-ruler</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-ruler-alt-2"></i> icon-ruler-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-ruler-pencil"></i> icon-ruler-pencil</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-ruler-alt"></i> icon-ruler-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-bookmark"></i> icon-bookmark</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-bookmark-alt"></i> icon-bookmark-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-reload"></i> icon-reload</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-plus"></i> icon-plus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-minus"></i> icon-minus</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-close"></i> icon-close</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-pin"></i> icon-pin</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-pencil"></i> icon-pencil</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-pencil-alt"></i> icon-pencil-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-paint-roller"></i> icon-paint-roller</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-paint-bucket"></i> icon-paint-bucket</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-na"></i> icon-na</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-medall"></i> icon-medall</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-medall-alt"></i> icon-medall-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-marker"></i> icon-marker</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-marker-alt"></i> icon-marker-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-lock"></i> icon-lock</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-unlock"></i> icon-unlock</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-location-arrow"></i> icon-location-arrow</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-layout"></i> icon-layout</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-layers"></i> icon-layers</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-layers-alt"></i> icon-layers-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-key"></i> icon-key</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-image"></i> icon-image</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-heart"></i> icon-heart</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-heart-broken"></i> icon-heart-broken</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-hand-stop"></i> icon-hand-stop</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-hand-open"></i> icon-hand-open</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-hand-drag"></i> icon-hand-drag</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-flag"></i> icon-flag</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-flag-alt"></i> icon-flag-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-flag-alt-2"></i> icon-flag-alt-2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-eye"></i> icon-eye</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-import"></i> icon-import</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-export"></i> icon-export</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-cup"></i> icon-cup</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-crown"></i> icon-crown</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-comments"></i> icon-comments</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-comment"></i> icon-comment</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-comment-alt"></i> icon-comment-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-thought"></i> icon-thought</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-clip"></i> icon-clip</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-check"></i> icon-check</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-check-box"></i> icon-check-box</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-camera"></i> icon-camera</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-announcement"></i> icon-announcement</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-brush"></i> icon-brush</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-brush-alt"></i> icon-brush-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-palette"></i> icon-palette</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-briefcase"></i> icon-briefcase</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-bolt"></i> icon-bolt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-bolt-alt"></i> icon-bolt-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-blackboard"></i> icon-blackboard</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-bag"></i> icon-bag</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-world"></i> icon-world</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-wheelchair"></i> icon-wheelchair</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-car"></i> icon-car</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-truck"></i> icon-truck</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-timer"></i> icon-timer</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-ticket"></i> icon-ticket</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-thumb-up"></i> icon-thumb-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-thumb-down"></i> icon-thumb-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-stats-up"></i> icon-stats-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-stats-down"></i> icon-stats-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-shine"></i> icon-shine</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-shift-right"></i> icon-shift-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-shift-left"></i> icon-shift-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-shift-right-alt"></i> icon-shift-right-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-shift-left-alt"></i> icon-shift-left-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-shield"></i> icon-shield</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-notepad"></i> icon-notepad</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-server"></i> icon-server</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-pulse"></i> icon-pulse</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-printer"></i> icon-printer</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-power-off"></i> icon-power-off</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-plug"></i> icon-plug</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-pie-chart"></i> icon-pie-chart</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-panel"></i> icon-panel</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-package"></i> icon-package</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-music"></i> icon-music</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-music-alt"></i> icon-music-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-mouse"></i> icon-mouse</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-mouse-alt"></i> icon-mouse-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-money"></i> icon-money</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-microphone"></i> icon-microphone</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-menu"></i> icon-menu</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-menu-alt"></i> icon-menu-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-map"></i> icon-map</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-map-alt"></i> icon-map-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-location-pin"></i> icon-location-pin</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-light-bulb"></i> icon-light-bulb</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-info"></i> icon-info</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-infinite"></i> icon-infinite</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-id-badge"></i> icon-id-badge</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-hummer"></i> icon-hummer</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-home"></i> icon-home</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-help"></i> icon-help</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-headphone"></i> icon-headphone</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-harddrives"></i> icon-harddrives</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-harddrive"></i> icon-harddrive</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-gift"></i> icon-gift</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-game"></i> icon-game</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-filter"></i> icon-filter</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-files"></i> icon-files</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-file"></i> icon-file</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-zip"></i> icon-zip</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-folder"></i> icon-folder</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-envelope"></i> icon-envelope</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-dashboard"></i> icon-dashboard</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-cloud"></i> icon-cloud</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-cloud-up"></i> icon-cloud-up</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-cloud-down"></i> icon-cloud-down</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-clipboard"></i> icon-clipboard</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-calendar"></i> icon-calendar</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-book"></i> icon-book</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-bell"></i> icon-bell</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-basketball"></i> icon-basketball</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-bar-chart"></i> icon-bar-chart</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-bar-chart-alt"></i> icon-bar-chart-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-archive"></i> icon-archive</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-anchor"></i> icon-anchor</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-alert"></i> icon-alert</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-alarm-clock"></i> icon-alarm-clock</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-agenda"></i> icon-agenda</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-write"></i> icon-write</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-wallet"></i> icon-wallet</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-video-clapper"></i> icon-video-clapper</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-video-camera"></i> icon-video-camera</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-vector"></i> icon-vector</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-support"></i> icon-support</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-stamp"></i> icon-stamp</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-slice"></i> icon-slice</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-shortcode"></i> icon-shortcode</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-receipt"></i> icon-receipt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-pin2"></i> icon-pin2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-pin-alt"></i> icon-pin-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-pencil-alt2"></i> icon-pencil-alt2</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-eraser"></i> icon-eraser</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-more"></i> icon-more</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-more-alt"></i> icon-more-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-microphone-alt"></i> icon-microphone-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-magnet"></i> icon-magnet</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-line-double"></i> icon-line-double</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-line-dotted"></i> icon-line-dotted</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-line-dashed"></i> icon-line-dashed</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-ink-pen"></i> icon-ink-pen</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-info-alt"></i> icon-info-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-help-alt"></i> icon-help-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-headphone-alt"></i> icon-headphone-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-gallery"></i> icon-gallery</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-face-smile"></i> icon-face-smile</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-face-sad"></i> icon-face-sad</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-credit-card"></i> icon-credit-card</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-comments-smiley"></i> icon-comments-smiley</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-time"></i> icon-time</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-share"></i> icon-share</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-share-alt"></i> icon-share-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-rocket"></i> icon-rocket</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-new-window"></i> icon-new-window</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-rss"></i> icon-rss</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-rss-alt"></i> icon-rss-alt</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Control Icons</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-control-stop"></i> icon-control-stop</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-control-shuffle"></i> icon-control-shuffle</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-control-play"></i> icon-control-play</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-control-pause"></i> icon-control-pause</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-control-forward"></i> icon-control-forward</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-control-backward"></i> icon-control-backward</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-volume"></i> icon-volume</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-control-skip-forward"></i> icon-control-skip-forward</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-control-skip-backward"></i> icon-control-skip-backward</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-control-record"></i> icon-control-record</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-control-eject"></i> icon-control-eject</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Text Editor</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-paragraph"></i> icon-paragraph</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-uppercase"></i> icon-uppercase</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-underline"></i> icon-underline</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-text"></i> icon-text</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-Italic"></i> icon-Italic</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-smallcap"></i> icon-smallcap</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-list"></i> icon-list</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-list-ol"></i> icon-list-ol</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-align-right"></i> icon-align-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-align-left"></i> icon-align-left</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-align-justify"></i> icon-align-justify</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-align-center"></i> icon-align-center</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-quote-right"></i> icon-quote-right</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-quote-left"></i> icon-quote-left</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="m-b-0">Brand Icons</h5>
					</div>
					<div class="card-body">
						<div class="row icon-lists">
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-flickr"></i> icon-flickr</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-flickr-alt"></i> icon-flickr-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-instagram"></i> icon-instagram</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-google"></i> icon-google</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-github"></i> icon-github</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-facebook"></i> icon-facebook</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-dropbox"></i> icon-dropbox</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-dropbox-alt"></i> icon-dropbox-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-dribbble"></i> icon-dribbble</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-apple"></i> icon-apple</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-android"></i> icon-android</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-yahoo"></i> icon-yahoo</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-trello"></i> icon-trello</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-stack-overflow"></i> icon-stack-overflow</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-soundcloud"></i> icon-soundcloud</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-sharethis"></i> icon-sharethis</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-sharethis-alt"></i> icon-sharethis-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-reddit"></i> icon-reddit</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-microsoft"></i> icon-microsoft</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-microsoft-alt"></i> icon-microsoft-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-linux"></i> icon-linux</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-jsfiddle"></i> icon-jsfiddle</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-joomla"></i> icon-joomla</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-html5"></i> icon-html5</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-css3"></i> icon-css3</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-drupal"></i> icon-drupal</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-wordpress"></i> icon-wordpress</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-tumblr"></i> icon-tumblr</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-tumblr-alt"></i> icon-tumblr-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-skype"></i> icon-skype</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-youtube"></i> icon-youtube</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-vimeo"></i> icon-vimeo</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-vimeo-alt"></i> icon-vimeo-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-twitter"></i> icon-twitter</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-twitter-alt"></i> icon-twitter-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-linkedin"></i> icon-linkedin</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-pinterest"></i> icon-pinterest</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-pinterest-alt"></i> icon-pinterest-alt</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-themify-logo"></i> icon-themify-logo</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-themify-favicon"></i> icon-themify-favicon</div>
							<div class="col-sm-6 col-md-6 col-lg-4"><i class="icon-themify-favicon-alt"></i> icon-themify-favicon-alt</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	@push('scripts')
	<script src="{{ asset('assets/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/icons-notify.js') }}"></script>
    <script src="{{ asset('assets/js/icons/icon-clipart.js') }}"></script>
	@endpush

@endsection