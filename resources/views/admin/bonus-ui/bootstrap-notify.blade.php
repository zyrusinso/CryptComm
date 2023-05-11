@extends('layouts.admin.master')

@section('title')Bootstrap Notify
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Bootstrap Notify</h3>
		@endslot
		<li class="breadcrumb-item">Advance</li>
		<li class="breadcrumb-item active">Bootstrap Notify</li>
    @endcomponent
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Bootstrap Notify</h5>
                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                    </div>
                    <div class="card-body">
                        <div class="m-portlet__body">
                            <div class="row">
                                <div class="col-xl-5"></div>
                            </div>
                            <form class="theme-form sm-form">
                                <div class="mb-3">
                                    <div class="row">
                                        <label class="col-xl-2 col-sm-12 col-md-12 col-form-label">Placement</label>
                                        <div class="col-xl-4 col-sm-12 col-md-12 mb-4">
                                            <select class="form-select form-control" id="bootstrap-notify-placement-from">
                                                <option value="top">Top</option>
                                                <option value="bottom">Bottom</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-4 col-md-12 col-sm-12 mb-4">
                                            <select class="form-select form-control" id="bootstrap-notify-placement-align">
                                                <option value="left">Left</option>
                                                <option value="right" select.form-selected="">Right</option>
                                                <option value="center">Center</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-xl-2 col-sm-12 col-md-12 col-form-label">Animation</label>
                                        <div class="col-xl-4 col-md-12 col-sm-12 mb-4">
                                            <select class="form-select form-control" id="bootstrap-notify-enter">
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
                                                    <option value="bounceIn">bounceIn</option>
                                                    <option value="bounceInDown">bounceInDown</option>
                                                    <option value="bounceInLeft">bounceInLeft</option>
                                                    <option value="bounceInRight">bounceInRight</option>
                                                    <option value="bounceInUp">bounceInUp</option>
                                                </optgroup>
                                                <optgroup label="Bouncing Exits">
                                                    <option value="bounceOut">bounceOut</option>
                                                    <option value="bounceOutDown">bounceOutDown</option>
                                                    <option value="bounceOutLeft">bounceOutLeft</option>
                                                    <option value="bounceOutRight">bounceOutRight</option>
                                                    <option value="bounceOutUp">bounceOutUp</option>
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
                                                    <option value="flip">flip</option>
                                                    <option value="flipInX">flipInX</option>
                                                    <option value="flipInY">flipInY</option>
                                                    <option value="flipOutX">flipOutX</option>
                                                    <option value="flipOutY">flipOutY</option>
                                                </optgroup>
                                                <optgroup label="Lightspeed">
                                                    <option value="lightSpeedIn">lightSpeedIn</option>
                                                    <option value="lightSpeedOut">lightSpeedOut</option>
                                                </optgroup>
                                                <optgroup label="Rotating Entrances">
                                                    <option value="rotateIn">rotateIn</option>
                                                    <option value="rotateInDownLeft">rotateInDownLeft</option>
                                                    <option value="rotateInDownRight">rotateInDownRight</option>
                                                    <option value="rotateInUpLeft">rotateInUpLeft</option>
                                                    <option value="rotateInUpRight">rotateInUpRight</option>
                                                </optgroup>
                                                <optgroup label="Rotating Exits">
                                                    <option value="rotateOut">rotateOut</option>
                                                    <option value="rotateOutDownLeft">rotateOutDownLeft</option>
                                                    <option value="rotateOutDownRight">rotateOutDownRight</option>
                                                    <option value="rotateOutUpLeft">rotateOutUpLeft</option>
                                                    <option value="rotateOutUpRight">rotateOutUpRight</option>
                                                </optgroup>
                                                <optgroup label="Sliding Entrances">
                                                    <option value="slideInUp">slideInUp</option>
                                                    <option value="slideInDown">slideInDown</option>
                                                    <option value="slideInLeft">slideInLeft</option>
                                                    <option value="slideInRight">slideInRight</option>
                                                </optgroup>
                                                <optgroup label="Sliding Exits">
                                                    <option value="slideOutUp">slideOutUp</option>
                                                    <option value="slideOutDown">slideOutDown</option>
                                                    <option value="slideOutLeft">slideOutLeft</option>
                                                    <option value="slideOutRight">slideOutRight</option>
                                                </optgroup>
                                                <optgroup label="Zoom Entrances">
                                                    <option value="zoomIn">zoomIn</option>
                                                    <option value="zoomInDown">zoomInDown</option>
                                                    <option value="zoomInLeft">zoomInLeft</option>
                                                    <option value="zoomInRight">zoomInRight</option>
                                                    <option value="zoomInUp">zoomInUp</option>
                                                </optgroup>
                                                <optgroup label="Zoom Exits">
                                                    <option value="zoomOut">zoomOut</option>
                                                    <option value="zoomOutDown">zoomOutDown</option>
                                                    <option value="zoomOutLeft">zoomOutLeft</option>
                                                    <option value="zoomOutRight">zoomOutRight</option>
                                                    <option value="zoomOutUp">zoomOutUp</option>
                                                </optgroup>
                                                <optgroup label="Specials">
                                                    <option value="hinge">hinge</option>
                                                    <option value="rollIn">rollIn</option>
                                                    <option value="rollOut">rollOut</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="col-xl-4 col-md-12 col-sm-12 mb-4">
                                            <select class="form-select form-control" id="bootstrap-notify-exit">
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
                                                    <option value="bounceIn">bounceIn</option>
                                                    <option value="bounceInDown">bounceInDown</option>
                                                    <option value="bounceInLeft">bounceInLeft</option>
                                                    <option value="bounceInRight">bounceInRight</option>
                                                    <option value="bounceInUp">bounceInUp</option>
                                                </optgroup>
                                                <optgroup label="Bouncing Exits">
                                                    <option value="bounceOut">bounceOut</option>
                                                    <option value="bounceOutDown">bounceOutDown</option>
                                                    <option value="bounceOutLeft">bounceOutLeft</option>
                                                    <option value="bounceOutRight">bounceOutRight</option>
                                                    <option value="bounceOutUp">bounceOutUp</option>
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
                                                    <option value="flip">flip</option>
                                                    <option value="flipInX">flipInX</option>
                                                    <option value="flipInY">flipInY</option>
                                                    <option value="flipOutX">flipOutX</option>
                                                    <option value="flipOutY">flipOutY</option>
                                                </optgroup>
                                                <optgroup label="Lightspeed">
                                                    <option value="lightSpeedIn">lightSpeedIn</option>
                                                    <option value="lightSpeedOut">lightSpeedOut</option>
                                                </optgroup>
                                                <optgroup label="Rotating Entrances">
                                                    <option value="rotateIn">rotateIn</option>
                                                    <option value="rotateInDownLeft">rotateInDownLeft</option>
                                                    <option value="rotateInDownRight">rotateInDownRight</option>
                                                    <option value="rotateInUpLeft">rotateInUpLeft</option>
                                                    <option value="rotateInUpRight">rotateInUpRight</option>
                                                </optgroup>
                                                <optgroup label="Rotating Exits">
                                                    <option value="rotateOut">rotateOut</option>
                                                    <option value="rotateOutDownLeft">rotateOutDownLeft</option>
                                                    <option value="rotateOutDownRight">rotateOutDownRight</option>
                                                    <option value="rotateOutUpLeft">rotateOutUpLeft</option>
                                                    <option value="rotateOutUpRight">rotateOutUpRight</option>
                                                </optgroup>
                                                <optgroup label="Sliding Entrances">
                                                    <option value="slideInUp">slideInUp</option>
                                                    <option value="slideInDown">slideInDown</option>
                                                    <option value="slideInLeft">slideInLeft</option>
                                                    <option value="slideInRight">slideInRight</option>
                                                </optgroup>
                                                <optgroup label="Sliding Exits">
                                                    <option value="slideOutUp">slideOutUp</option>
                                                    <option value="slideOutDown">slideOutDown</option>
                                                    <option value="slideOutLeft">slideOutLeft</option>
                                                    <option value="slideOutRight">slideOutRight</option>
                                                </optgroup>
                                                <optgroup label="Zoom Entrances">
                                                    <option value="zoomIn">zoomIn</option>
                                                    <option value="zoomInDown">zoomInDown</option>
                                                    <option value="zoomInLeft">zoomInLeft</option>
                                                    <option value="zoomInRight">zoomInRight</option>
                                                    <option value="zoomInUp">zoomInUp</option>
                                                </optgroup>
                                                <optgroup label="Zoom Exits">
                                                    <option value="zoomOut">zoomOut</option>
                                                    <option value="zoomOutDown">zoomOutDown</option>
                                                    <option value="zoomOutLeft">zoomOutLeft</option>
                                                    <option value="zoomOutRight">zoomOutRight</option>
                                                    <option value="zoomOutUp">zoomOutUp</option>
                                                </optgroup>
                                                <optgroup label="Specials">
                                                    <option value="hinge">hinge</option>
                                                    <option value="rollIn">rollIn</option>
                                                    <option value="rollOut">rollOut</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-xl-2 col-sm-12 col-md-12 col-form-label">Icon</label>
                                        <div class="col-xl-4 col-md-12 col-sm-12 mb-4">
                                            <select class="form-select form-control" id="bootstrap-notify-icon">
                                                <option value="">None</option>
                                                <option value="fa fa-check-square">fa fa-check-square</option>
                                                <option value="fa fa-warning">fa fa-warning</option>
                                                <option value="fa fa-cloud-download">fa fa-cloud-download</option>
                                                <option value="fa fa-unlock-alt">fa fa-unlock-alt</option>
                                                <option value="fa fa-spin fa-circle-o-notch">fa fa-spin fa-circle-o-notch</option>
                                                <option value="fa fa-spin fa-refresh">fa fa-spin fa-refresh</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row"></div>
                                    <div class="mb-3 row"></div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-6 col-form-label">URL Clickable</label>
                                        <div class="col-sm-8 col-6">
                                            <div class="media-body text-start icon-state">
                                                <label class="switch"> <input id="bootstrap-notify-url" type="checkbox" /><span class="switch-state"></span> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-6 col-form-label">Allow dismiss</label>
                                        <div class="col-sm-8 col-6">
                                            <div class="media-body text-start icon-state">
                                                <label class="switch"> <input id="bootstrap-notify-dismiss" type="checkbox" /><span class="switch-state"></span> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-6 col-form-label">Pause on hover</label>
                                        <div class="col-sm-8 col-6">
                                            <div class="media-body text-start icon-state">
                                                <label class="switch"> <input id="bootstrap-notify-pause" type="checkbox" /><span class="switch-state"></span> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-6 col-form-label">Newest on top</label>
                                        <div class="col-sm-8 col-6">
                                            <div class="media-body text-start icon-state">
                                                <label class="switch"> <input id="bootstrap-notify-top" type="checkbox" /><span class="switch-state"></span> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-6 col-form-label">Show Title</label>
                                        <div class="col-sm-8 col-6">
                                            <div class="media-body text-start icon-state">
                                                <label class="switch"> <input id="bootstrap-notify-title" type="checkbox" /><span class="switch-state"></span> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-6 col-form-label">Show Progress</label>
                                        <div class="col-sm-8 col-6">
                                            <div class="media-body text-start icon-state">
                                                <label class="switch"> <input id="bootstrap-notify-progress" type="checkbox" /><span class="switch-state"></span> </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 theme-form sm-form">
                                    <div class="mb-3 row">
                                        <label class="col-form-label col-lg-3 col-sm-12">Spacing</label>
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <input class="form-control digits" id="bootstrap-notify-spacing" type="number" value="10" />
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-form-label col-lg-3 col-sm-12">Offset X</label>
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <input class="form-control digits" id="bootstrap-notify-offset-x" type="number" value="30" />
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-form-label col-lg-3 col-sm-12">Offset Y</label>
                                        <div class="col-lg-4 col-md-9 col-sm-12">
                                            <input class="form-control digits" id="bootstrap-notify-offset-y" type="number" value="30" />
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-form-label col-lg-3 col-sm-12">Delay</label>
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <input class="form-control digits" id="bootstrap-notify-delay" type="number" value="1000" />
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-form-label col-lg-3 col-sm-12">Timer</label>
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <input class="form-control digits" id="bootstrap-notify-timer" type="number" value="2000" />
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-form-label col-lg-3 col-sm-12">Z-Index</label>
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <input class="form-control digits" id="bootstrap-notify-z-index" type="number" value="10000" />
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-form-label col-lg-3 col-sm-12">State</label>
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <select class="form-select form-control height-35" id="bootstrap-notify-state">
                                                <option value="primary">Primary</option>
                                                <option value="secondary">Secondary</option>
                                                <option value="success">Success</option>
                                                <option value="info">Info</option>
                                                <option value="warning">Warning</option>
                                                <option value="danger">Danger</option>
                                                <option value="light">light</option>
                                                <option value="dark">dark</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="col-sm-12">
                            <button class="btn btn-primary" id="bootstrap-notify-gen-btn">Display Notify</button>
                            <button class="btn btn-light" type="reset">Reset</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h5>Example Of How To Use Bootstrap Notify</h5>
                                <span>Click Display Notify button to show different notify demo's & display script of different Notify demo below</span>
                                <pre class="mb-0"><code id="notify-code-show"></code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    

@push('scripts')
<script src="{{asset('assets/js/notify/bootstrap-notify.min.js')}}"></script>
<script src="{{asset('assets/js/notify/notify-script.js')}}"></script>
<script src="{{asset('assets/js/tooltip-init.js')}}"></script>
@endpush

@endsection