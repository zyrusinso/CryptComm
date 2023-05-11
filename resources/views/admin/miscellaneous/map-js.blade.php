@extends('layouts.admin.master')

@section('title')Map JS
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/mapsjs-ui.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Map JS</h3>
		@endslot
		<li class="breadcrumb-item">Maps</li>
		<li class="breadcrumb-item active">Map JS</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-xl-6">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Map at a specified location</h5>
	                    <span>Display a map at a specified location and zoom level.</span>
	                </div>
	                <div class="card-body">
	                    <div class="map-js-height" id="map1"></div>
	                </div>
	            </div>
	        </div>
	        <div class="col-xl-6">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Map using View Bounds</h5>
	                    <span>Display a map of a given area.</span>
	                </div>
	                <div class="card-body">
	                    <div class="map-js-height" id="map2"></div>
	                </div>
	            </div>
	        </div>
	        <div class="col-xl-6">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Multi-language support</h5>
	                    <span>Display a map with labels in a foreign language</span>
	                </div>
	                <div class="card-body">
	                    <div class="map-js-height" id="map3"></div>
	                </div>
	            </div>
	        </div>
	        <div class="col-xl-6">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Terrain Map</h5>
	                    <span>Display a topographical map</span>
	                </div>
	                <div class="card-body">
	                    <div class="map-js-height" id="map4"></div>
	                </div>
	            </div>
	        </div>
	        <div class="col-xl-6">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Changing from the Metric System</h5>
	                    <span>Display a map including a scale bar in miles or yards</span>
	                </div>
	                <div class="card-body">
	                    <div class="map-js-height" id="map5"></div>
	                </div>
	            </div>
	        </div>
	        <div class="col-xl-6">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Panning the Map</h5>
	                    <span>Programmatically pan the map so that it is continually in motion</span>
	                </div>
	                <div class="card-body">
	                    <div class="map-js-height" id="map6"></div>
	                </div>
	            </div>
	        </div>
	        <div class="col-xl-6">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Traffic Information</h5>
	                    <span>Display traffic information on the map</span>
	                </div>
	                <div class="card-body">
	                    <div class="map-js-height" id="map7"></div>
	                </div>
	            </div>
	        </div>
	        <div class="col-xl-6">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Adding Venues layer to the Map</h5>
	                    <span>Display venue objects (e.g. shops, airports etc) on the map</span>
	                </div>
	                <div class="card-body">
	                    <div class="map-js-height" id="map8"></div>
	                </div>
	            </div>
	        </div>
	        <div class="col-xl-6">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Zoom into Bounds</h5>
	                    <span>Zoom into bounds limiting maximum level</span>
	                </div>
	                <div class="card-body">
	                    <div class="map-js-height" id="map9"></div>
	                </div>
	            </div>
	        </div>
	        <div class="col-xl-6">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Restrict Map Movement</h5>
	                    <span>Restrict a moveable map to a given rectangular area</span>
	                </div>
	                <div class="card-body">
	                    <div class="map-js-height" id="map10"></div>
	                </div>
	            </div>
	        </div>
	        <div class="col-xl-6">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Screen Layer</h5>
	                    <span>Display animated screen layer</span>
	                </div>
	                <div class="card-body">
	                    <div class="map-js-height" id="map11"></div>
	                </div>
	            </div>
	        </div>
	        <div class="col-xl-6">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Marker on the Map</h5>
	                    <span>Display a map highlighting points of interest</span>
	                </div>
	                <div class="card-body">
	                    <div class="map-js-height" id="map12"></div>
	                </div>
	            </div>
	        </div>
	        <div class="col-xl-6">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Draggable Marker</h5>
	                    <span>Display a map highlighting points of interest</span>
	                </div>
	                <div class="card-body">
	                    <div class="map-js-height" id="map13"></div>
	                </div>
	            </div>
	        </div>
	        <div class="col-xl-6">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Polyline on the Map</h5>
	                    <span>Display a map with a line showing a known route</span>
	                </div>
	                <div class="card-body">
	                    <div class="map-js-height" id="map14"></div>
	                </div>
	            </div>
	        </div>
	        <div class="col-xl-6">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Polygon on the Map</h5>
	                    <span>Display a map highlighting a region or area</span>
	                </div>
	                <div class="card-body">
	                    <div class="map-js-height" id="map15"></div>
	                </div>
	            </div>
	        </div>
	        <div class="col-xl-6">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Polygon on the Map</h5>
	                    <span>Display a map highlighting a region or area</span>
	                </div>
	                <div class="card-body">
	                    <div class="map-js-height" id="map16"></div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	
	@push('scripts')
	<script src="{{asset('assets/js/map-js/mapsjs-core.js')}}"></script>
    <script src="{{asset('assets/js/map-js/mapsjs-service.js')}}"></script>
    <script src="{{asset('assets/js/map-js/mapsjs-ui.js')}}"></script>
    <script src="{{asset('assets/js/map-js/mapsjs-mapevents.js')}}"></script>
    <script src="{{asset('assets/js/map-js/custom.js')}}"></script>
	@endpush

@endsection