@extends('layouts.admin.master')

@section('title')Image Cropper
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/image-cropper.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Image Cropper</h3>
		@endslot
		<li class="breadcrumb-item">Advance</li>
		<li class="breadcrumb-item active">Image Cropper</li>
	@endcomponent

    <div class="container-fluid">
		<div class="img-cropper">
		  <div class="row">
			<div class="col-sm-12">
			  <div class="card">
				<div class="card-header pb-0">
				  <h5>Image Cropper</h5>
				</div>
				<div class="card-body">
				  <div class="row">
					<div class="col-xl-9 col-md-12">
					  <div class="img-container"><img id="image" src="{{asset('assets/images/other-images/img-cropper.jpg')}}" alt="Picture"></div>
					</div>
					<div class="col-xl-3 col-md-12">
					  <!-- <h3>Preview:</h3>-->
					  <div class="docs-preview clearfix">
						<!-- <div class="img-preview preview-lg"></div>-->
						<div class="img-preview preview-md"></div>
						<div class="img-preview preview-sm"></div>
						<div class="img-preview preview-xs"></div>
					  </div>
					  <!-- <h3>Data:</h3>-->
					  <div class="docs-data">
						<div class="input-group input-group-sm"><span class="input-group-text">X</span>
						  <input class="form-control" id="dataX" type="text" placeholder="x"><span class="input-group-text">px</span>
						</div>
						<div class="input-group input-group-sm"><span class="input-group-text">Y</span>
						  <input class="form-control" id="dataY" type="text" placeholder="y"><span class="input-group-text">px</span>
						</div>
						<div class="input-group input-group-sm"><span class="input-group-text">Width</span>
						  <input class="form-control" id="dataWidth" type="text" placeholder="width"><span class="input-group-text">px</span>
						</div>
						<div class="input-group input-group-sm"><span class="input-group-text">Height </span>
						  <input class="form-control" id="dataHeight" type="text" placeholder="height"><span class="input-group-text">px</span>
						</div>
						<div class="input-group input-group-sm"><span class="input-group-text">Rotate</span>
						  <input class="form-control" id="dataRotate" type="text" placeholder="rotate"><span class="input-group-text">deg</span>
						</div>
						<div class="input-group input-group-sm"><span class="input-group-text">ScaleX</span>
						  <input class="form-control" id="dataScaleX" type="text" placeholder="scaleX">
						</div>
						<div class="input-group input-group-sm"><span class="input-group-text">ScaleY</span>
						  <input class="form-control" id="dataScaleY" type="text" placeholder="scaleY">
						</div>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			  <div class="card">
				<div class="card-body">
				  <div class="row">
					<div class="col-xl-9 col-md-12 docs-buttons">
					  <div class="btn-group">
						<button class="btn btn-primary" type="button" data-method="setDragMode" data-option="move" title="Move"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)"><span class="fa fa-arrows"></span></span></button>
						<button class="btn btn-primary" type="button" data-method="setDragMode" data-option="crop" title="Crop"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)"><span class="fa fa-crop"></span></span></button>
					  </div>
					  <div class="btn-group">
						<button class="btn btn-primary" type="button" data-method="zoom" data-option="0.1" title="Zoom In"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="$().cropper(&quot;zoom&quot;, 0.1)"><span class="fa fa-search-plus"></span></span></button>
						<button class="btn btn-primary" type="button" data-method="zoom" data-option="-0.1" title="Zoom Out"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="$().cropper(&quot;zoom&quot;, -0.1)"><span class="fa fa-search-minus"></span></span></button>
					  </div>
					  <div class="btn-group">
						<button class="btn btn-outline-primary" type="button" data-method="move" data-option="-10" data-second-option="0" title="Move Left"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="$().cropper(&quot;move&quot;, -10, 0)"><span class="fa fa-arrow-left"></span></span></button>
						<button class="btn btn-outline-primary" type="button" data-method="move" data-option="10" data-second-option="0" title="Move Right"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="$().cropper(&quot;move&quot;, 10, 0)"><span class="fa fa-arrow-right"></span></span></button>
						<button class="btn btn-outline-primary" type="button" data-method="move" data-option="0" data-second-option="-10" title="Move Up"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="$().cropper(&quot;move&quot;, 0, -10)"><span class="fa fa-arrow-up"></span></span></button>
						<button class="btn btn-outline-primary" type="button" data-method="move" data-option="0" data-second-option="10" title="Move Down"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="$().cropper(&quot;move&quot;, 0, 10)"><span class="fa fa-arrow-down"></span></span></button>
					  </div>
					  <div class="btn-group">
						<button class="btn btn-outline-primary" type="button" data-method="rotate" data-option="-45" title="Rotate Left"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="$().cropper(&quot;rotate&quot;, -45)"><span class="fa fa-rotate-left"></span></span></button>
						<button class="btn btn-outline-primary" type="button" data-method="rotate" data-option="45" title="Rotate Right"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="$().cropper(&quot;rotate&quot;, 45)"><span class="fa fa-rotate-right"></span></span></button>
					  </div>
					  <div class="btn-group">
						<button class="btn btn-outline-primary" type="button" data-method="scaleX" data-option="-1" title="Flip Horizontal"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="$().cropper(&quot;scaleX&quot;, -1)"><span class="fa fa-arrows-h"></span></span></button>
						<button class="btn btn-outline-primary" type="button" data-method="scaleY" data-option="-1" title="Flip Vertical"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="$().cropper(&quot;scaleY&quot;, -1)"><span class="fa fa-arrows-v"></span></span></button>
					  </div>
					  <div class="btn-group">
						<button class="btn btn-outline-primary" type="button" data-method="crop" title="Crop"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="$().cropper(&quot;crop&quot;)"><span class="fa fa-check"></span></span></button>
						<button class="btn btn-outline-primary" type="button" data-method="clear" title="Clear"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="$().cropper(&quot;clear&quot;)"><span class="fa fa-remove"></span></span></button>
					  </div>
					  <div class="btn-group">
						<button class="btn btn-outline-primary" type="button" data-method="disable" title="Disable"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="$().cropper(&quot;disable&quot;)"><span class="fa fa-lock"></span></span></button>
						<button class="btn btn-outline-primary" type="button" data-method="enable" title="Enable"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="$().cropper(&quot;enable&quot;)"><span class="fa fa-unlock"></span></span></button>
					  </div>
					  <div class="btn-group">
						<button class="btn btn-outline-primary" type="button" data-method="reset" title="Reset"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="$().cropper(&quot;reset&quot;)"><span class="fa fa-refresh"></span></span></button>
						<label class="btn btn-outline-primary btn-upload" for="inputImage" title="Upload image file">
						  <input class="sr-only" id="inputImage" type="file" name="file" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="Import image with Blob URLs"><span class="fa fa-upload"></span></span>
						</label>
						<button class="btn btn-outline-primary" type="button" data-method="destroy" title="Destroy"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="$().cropper(&quot;destroy&quot;)"><span class="fa fa-power-off"></span></span></button>
					  </div><br>
					  <div class="btn-group btn-group-crop">
						<button class="btn btn-primary" type="button" data-method="getCroppedCanvas" data-option="{ &quot;maxWidth&quot;: 4096, &quot;maxHeight&quot;: 4096 }"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCroppedCanvas&quot;, { maxWidth: 4096, maxHeight: 4096 })">Get Cropped Canvas</span></button>
						<button class="btn btn-primary" type="button" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 160, height: 90 })">160×90</span></button>
						<button class="btn btn-primary" type="button" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 320, height: 180 })">320×180</span></button>
					  </div>
					  <!-- Show the cropped image in modal-->
					  <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
						<div class="modal-dialog">
						  <div class="modal-content">
							<div class="modal-header">
							  <h5 class="modal-title" id="getCroppedCanvasTitle">Cropped</h5>
							  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
							</div>
							<div class="modal-body"></div>
							<div class="modal-footer">
							  <button class="btn btn-primary" type="button" data-dismiss="modal">Close</button><a class="btn btn-outline-primary" id="download" href="javascript:void(0);" download="cropped.jpg')}}">Download</a>
							</div>
						  </div>
						</div>
					  </div>
					  <!-- /.modal-->
					  <button class="btn btn-primary" type="button" data-method="getData" data-option="" data-bs-target="#putData"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getData&quot;)">Get Data</span></button>
					  <button class="btn btn-primary" type="button" data-method="setData" data-bs-target="#putData"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="$().cropper(&quot;setData&quot;, data)">Set Data</span></button>
					  <button class="btn btn-primary" type="button" data-method="getContainerData" data-option="" data-bs-target="#putData"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getContainerData&quot;)">Get Container Data</span></button>
					  <button class="btn btn-primary" type="button" data-method="getImageData" data-option="" data-bs-target="#putData"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getImageData&quot;)">Get Image Data</span></button>
					  <button class="btn btn-primary" type="button" data-method="getCanvasData" data-option="" data-bs-target="#putData"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCanvasData&quot;)">Get Canvas Data</span></button>
					  <button class="btn btn-primary" type="button" data-method="setCanvasData" data-bs-target="#putData"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="$().cropper(&quot;setCanvasData&quot;, data)">Set Canvas Data</span></button>
					  <button class="btn btn-primary" type="button" data-method="getCropBoxData" data-option="" data-bs-target="#putData"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCropBoxData&quot;)">Get Crop Box Data</span></button>
					  <button class="btn btn-primary" type="button" data-method="setCropBoxData" data-bs-target="#putData"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="$().cropper(&quot;setCropBoxData&quot;, data)">Set Crop Box Data</span></button>
					  <button class="btn btn-primary" type="button" data-method="moveTo" data-option="0"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="cropper.moveTo(0)">Move to [0,0]</span></button>
					  <button class="btn btn-primary" type="button" data-method="zoomTo" data-option="1"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="cropper.zoomTo(1)">Zoom to 100%</span></button>
					  <button class="btn btn-primary" type="button" data-method="rotateTo" data-option="180"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="cropper.rotateTo(180)">Rotate 180°</span></button>
					  <button class="btn btn-primary" type="button" data-method="scale" data-option="-2" data-second-option="-1"><span class="docs-tooltip" data-bs-toggle="tooltip" title="cropper.scale(-2, -1)">Scale (-2, -1)</span></button>
					  <textarea class="form-control" id="putData" rows="1" placeholder="Get data to here or set data with this value"></textarea>
					</div>
					<!-- /.docs-buttons-->
					<div class="col-xl-3 col-md-12 docs-toggles">
					  <!-- <h3>Toggles:</h3>-->
					  <div class="btn-group d-flex flex-nowrap" data-bs-toggle="buttons">
						<label class="btn btn-primary active">
						  <input class="sr-only" id="aspectRatio0" type="radio" name="aspectRatio" value="1.7777777777777777"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="aspectRatio: 16 / 9">16:9</span>
						</label>
						<label class="btn btn-outline-primary">
						  <input class="sr-only" id="aspectRatio1" type="radio" name="aspectRatio" value="1.3333333333333333"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="aspectRatio: 4 / 3">4:3</span>
						</label>
						<label class="btn btn-outline-primary">
						  <input class="sr-only" id="aspectRatio2" type="radio" name="aspectRatio" value="1"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="aspectRatio: 1 / 1">1:1</span>
						</label>
						<label class="btn btn-outline-primary">
						  <input class="sr-only" id="aspectRatio3" type="radio" name="aspectRatio" value="0.6666666666666666"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="aspectRatio: 2 / 3">2:3</span>
						</label>
						<label class="btn btn-outline-primary">
						  <input class="sr-only" id="aspectRatio4" type="radio" name="aspectRatio" value="NaN"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="aspectRatio: NaN">Free</span>
						</label>
					  </div>
					  <div class="btn-group d-flex flex-nowrap" data-bs-toggle="buttons">
						<label class="btn btn-primary active">
						  <input class="sr-only" id="viewMode0" type="radio" name="viewMode" value="0" checked=""><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="View Mode 0">VM0</span>
						</label>
						<label class="btn btn-outline-primary">
						  <input class="sr-only" id="viewMode1" type="radio" name="viewMode" value="1"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="View Mode 1">VM1</span>
						</label>
						<label class="btn btn-outline-primary">
						  <input class="sr-only" id="viewMode2" type="radio" name="viewMode" value="2"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="View Mode 2">VM2</span>
						</label>
						<label class="btn btn-outline-primary">
						  <input class="sr-only" id="viewMode3" type="radio" name="viewMode" value="3"><span class="docs-tooltip" data-bs-toggle="tooltip" data-animation="false" title="View Mode 3">VM3</span>
						</label>
					  </div>
					  <div class="dropdown dropup docs-options mb-0">
						<button class="btn btn-primary btn-block dropdown-toggle" id="toggleOptions" type="button" data-bs-toggle="dropdown" aria-expanded="true">Toggle Options<span class="caret"></span></button>
						<ul class="dropdown-menu" aria-labelledby="toggleOptions" role="menu">
						  <li class="dropdown-item">
							<div class="form-check">
							  <input class="form-check-input" id="responsive" type="checkbox" name="responsive" checked="">
							  <label class="form-check-label" for="responsive">responsive</label>
							</div>
						  </li>
						  <li class="dropdown-item">
							<div class="form-check">
							  <input class="form-check-input" id="restore" type="checkbox" name="restore" checked="">
							  <label class="form-check-label" for="restore">restore</label>
							</div>
						  </li>
						  <li class="dropdown-item">
							<div class="form-check">
							  <input class="form-check-input" id="checkCrossOrigin" type="checkbox" name="checkCrossOrigin" checked="">
							  <label class="form-check-label" for="checkCrossOrigin">checkCrossOrigin</label>
							</div>
						  </li>
						  <li class="dropdown-item">
							<div class="form-check">
							  <input class="form-check-input" id="checkOrientation" type="checkbox" name="checkOrientation" checked="">
							  <label class="form-check-label" for="checkOrientation">checkOrientation</label>
							</div>
						  </li>
						  <li class="dropdown-item">
							<div class="form-check">
							  <input class="form-check-input" id="modal" type="checkbox" name="modal" checked="">
							  <label class="form-check-label" for="modal">modal</label>
							</div>
						  </li>
						  <li class="dropdown-item">
							<div class="form-check">
							  <input class="form-check-input" id="guides" type="checkbox" name="guides" checked="">
							  <label class="form-check-label" for="guides">guides</label>
							</div>
						  </li>
						  <li class="dropdown-item">
							<div class="form-check">
							  <input class="form-check-input" id="center" type="checkbox" name="center" checked="">
							  <label class="form-check-label" for="center">center</label>
							</div>
						  </li>
						  <li class="dropdown-item">
							<div class="form-check">
							  <input class="form-check-input" id="highlight" type="checkbox" name="highlight" checked="">
							  <label class="form-check-label" for="highlight">highlight</label>
							</div>
						  </li>
						  <li class="dropdown-item">
							<div class="form-check">
							  <input class="form-check-input" id="background" type="checkbox" name="background" checked="">
							  <label class="form-check-label" for="background">background</label>
							</div>
						  </li>
						  <li class="dropdown-item">
							<div class="form-check">
							  <input class="form-check-input" id="autoCrop" type="checkbox" name="autoCrop" checked="">
							  <label class="form-check-label" for="autoCrop">autoCrop</label>
							</div>
						  </li>
						  <li class="dropdown-item">
							<div class="form-check">
							  <input class="form-check-input" id="movable" type="checkbox" name="movable" checked="">
							  <label class="form-check-label" for="movable">movable</label>
							</div>
						  </li>
						  <li class="dropdown-item">
							<div class="form-check">
							  <input class="form-check-input" id="rotatable" type="checkbox" name="rotatable" checked="">
							  <label class="form-check-label" for="rotatable">rotatable</label>
							</div>
						  </li>
						  <li class="dropdown-item">
							<div class="form-check">
							  <input class="form-check-input" id="scalable" type="checkbox" name="scalable" checked="">
							  <label class="form-check-label" for="scalable">scalable</label>
							</div>
						  </li>
						  <li class="dropdown-item">
							<div class="form-check">
							  <input class="form-check-input" id="zoomable" type="checkbox" name="zoomable" checked="">
							  <label class="form-check-label" for="zoomable">zoomable</label>
							</div>
						  </li>
						  <li class="dropdown-item">
							<div class="form-check">
							  <input class="form-check-input" id="zoomOnTouch" type="checkbox" name="zoomOnTouch" checked="">
							  <label class="form-check-label" for="zoomOnTouch">zoomOnTouch</label>
							</div>
						  </li>
						  <li class="dropdown-item">
							<div class="form-check">
							  <input class="form-check-input" id="zoomOnWheel" type="checkbox" name="zoomOnWheel" checked="">
							  <label class="form-check-label" for="zoomOnWheel">zoomOnWheel</label>
							</div>
						  </li>
						  <li class="dropdown-item">
							<div class="form-check">
							  <input class="form-check-input" id="cropBoxMovable" type="checkbox" name="cropBoxMovable" checked="">
							  <label class="form-check-label" for="cropBoxMovable">cropBoxMovable</label>
							</div>
						  </li>
						  <li class="dropdown-item">
							<div class="form-check">
							  <input class="form-check-input" id="cropBoxResizable" type="checkbox" name="cropBoxResizable" checked="">
							  <label class="form-check-label" for="cropBoxResizable">cropBoxResizable</label>
							</div>
						  </li>
						  <li class="dropdown-item">
							<div class="form-check">
							  <input class="form-check-input" id="toggleDragModeOnDblclick" type="checkbox" name="toggleDragModeOnDblclick" checked="">
							  <label class="form-check-label" for="toggleDragModeOnDblclick">toggleDragModeOnDblclick</label>
							</div>
						  </li>
						</ul>
					  </div>
					  <!-- /.dropdown-->
					  <!-- /.docs-toggles-->
					</div>
				  </div>
				</div>
			  </div>
			  <div class="row">
				<div class="col-md-6">
				  <div class="card">
					<div class="card-header pb-0">
					  <h5>Disabled Zoom</h5>
					</div>
					<div class="card-body">
					  <div class="img-container"><img class="crop-zoomable img-fluid" src="{{asset('assets/images/other-images/img-cropper.jpg')}}" alt=""></div>
					</div>
				  </div>
				</div>
				<div class="col-md-6">
				  <div class="card">
					<div class="card-header pb-0">
					  <h5>Autocrop Disable</h5>
					</div>
					<div class="card-body">
					  <div class="img-container"><img class="crop-auto img-fluid" src="{{asset('assets/images/other-images/img-cropper.jpg')}}" alt=""></div>
					</div>
				  </div>
				</div>
				<div class="col-md-6">
				  <div class="card">
					<div class="card-header pb-0">
					  <h5>Disabled Image Drag</h5>
					</div>
					<div class="card-body">
					  <div class="img-container"><img class="crop-drag img-fluid" src="{{asset('assets/images/other-images/img-cropper.jpg')}}" alt=""></div>
					</div>
				  </div>
				</div>
				<div class="col-md-6">
				  <div class="card">
					<div class="card-header pb-0">
					  <h5>Minimum Zone Size</h5>
					</div>
					<div class="card-body">
					  <div class="img-container"><img class="crop-min img-fluid" src="{{asset('assets/images/other-images/img-cropper.jpg')}}" alt=""></div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>

    @push('scripts') 
	    <script src="{{asset('assets/js/image-cropper/cropper.js')}}"></script>
        <script src="{{asset('assets/js/image-cropper/cropper-main.js')}}"></script> 
	@endpush

@endsection