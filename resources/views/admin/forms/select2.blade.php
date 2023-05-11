@extends('layouts.admin.master')

@section('title')Select2
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/select2.css') }}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Select2</h3>
		@endslot
		<li class="breadcrumb-item">Forms</li>
		<li class="breadcrumb-item">Form Widgets</li>
                    	<li class="breadcrumb-item active">Select2</li>
	@endcomponent

    <div class="container-fluid">
        <div class="select2-drpdwn">
            <div class="row">
                <!-- Default Textbox start-->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5 class="card-title">Select-2</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-2">
                                <label class="col-form-label">Default Placeholder</label>
                                <select class="js-example-placeholder-multiple col-sm-12" multiple="multiple">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="WY">Coming</option>
                                    <option value="WY">Hanry Die</option>
                                    <option value="WY">John Doe</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label class="col-form-label">Select2 single select</label>
                                <select class="js-example-basic-single col-sm-12">
                                    <optgroup label="Developer">
                                        <option value="AL">Alabama</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Designer">
                                        <option value="WY">Peter</option>
                                        <option value="WY">Hanry Die</option>
                                        <option value="WY">John Doe</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label class="col-form-label">Select2 multi select</label>
                                <select class="js-example-basic-multiple col-sm-12" multiple="multiple">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="WY">Coming</option>
                                    <option value="WY">Hanry Die</option>
                                    <option value="WY">John Doe</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label class="col-form-label">RTL support</label>
                                <select class="js-example-rtl col-sm-12" multiple="multiple">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="WY">Coming</option>
                                    <option value="WY">Hanry Die</option>
                                    <option value="WY">John Doe</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label class="col-form-label">Limiting The Number Of Selections</label>
                                <select class="js-example-basic-multiple-limit col-sm-12" multiple="multiple">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="WY">Coming</option>
                                    <option value="WY">Hanry Die</option>
                                    <option value="WY">John Doe</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label class="col-form-label">Disabled Results</label>
                                <select class="js-example-disabled-results col-sm-12">
                                    <option value="one">First</option>
                                    <option value="two" disabled="disabled">
                                        Second (disabled)
                                    </option>
                                    <option value="three">Third</option>
                                </select>
                            </div>
                            <div>
                                <label class="col-form-label">Hiding The Search Box</label>
                                <select class="js-example-basic-hide-search col-sm-12" multiple="multiple">
                                    <optgroup label="Developer">
                                        <option value="AL">Smith</option>
                                        <option value="WY">Peter</option>
                                        <option value="WY">James</option>
                                        <option value="WY">Hanry Die</option>
                                        <option value="WY">John Doe</option>
                                        <option value="WY">Harry Poter</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div>
                                <label class="col-form-label">Enable-Disable</label>
                                <select class="js-example-disabled col-sm-10">
                                    <option value="AL">Smith</option>
                                    <option value="WY">Peter</option>
                                    <option value="WY">James</option>
                                    <option value="WY">Hanry Die</option>
                                    <option value="WY">John Doe</option>
                                    <option value="WY">Harry Poter</option>
                                </select>
                                <button class="btn btn-primary js-programmatic-enable p-2 mt-2">Enable</button>
                                <button class="btn btn-secondary js-programmatic-disable p-2 mt-2">Disable</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Default Textbox end-->
                <!-- Input Groups start-->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5 class="card-title">Outline Color Variant</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-2">
                                <label class="col-form-label">Primary Select</label>
                                <select class="form-control form-control-primary btn-square" name="select">
                                    <option value="opt1">Select One Value Only</option>
                                    <option value="opt2">Type 2</option>
                                    <option value="opt3">Type 3</option>
                                    <option value="opt4">Type 4</option>
                                    <option value="opt5">Type 5</option>
                                    <option value="opt6">Type 6</option>
                                    <option value="opt7">Type 7</option>
                                    <option value="opt8">Type 8</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label class="col-form-label">Secondary Select</label>
                                <select class="form-control form-control-secondary btn-square" name="select">
                                    <option value="opt1">Select One Value Only</option>
                                    <option value="opt2">Type 2</option>
                                    <option value="opt3">Type 3</option>
                                    <option value="opt4">Type 4</option>
                                    <option value="opt5">Type 5</option>
                                    <option value="opt6">Type 6</option>
                                    <option value="opt7">Type 7</option>
                                    <option value="opt8">Type 8</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label class="col-form-label">Success Select</label>
                                <select class="form-control form-control-success btn-square" name="select">
                                    <option value="opt1">Select One Value Only</option>
                                    <option value="opt2">Type 2</option>
                                    <option value="opt3">Type 3</option>
                                    <option value="opt4">Type 4</option>
                                    <option value="opt5">Type 5</option>
                                    <option value="opt6">Type 6</option>
                                    <option value="opt7">Type 7</option>
                                    <option value="opt8">Type 8</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label class="col-form-label">Info Select</label>
                                <select class="form-control form-control-info btn-square" name="select">
                                    <option value="opt1">Select One Value Only</option>
                                    <option value="opt2">Type 2</option>
                                    <option value="opt3">Type 3</option>
                                    <option value="opt4">Type 4</option>
                                    <option value="opt5">Type 5</option>
                                    <option value="opt6">Type 6</option>
                                    <option value="opt7">Type 7</option>
                                    <option value="opt8">Type 8</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label class="col-form-label">Warning Select</label>
                                <select class="form-control form-control-warning btn-square" name="select">
                                    <option value="opt1">Select One Value Only</option>
                                    <option value="opt2">Type 2</option>
                                    <option value="opt3">Type 3</option>
                                    <option value="opt4">Type 4</option>
                                    <option value="opt5">Type 5</option>
                                    <option value="opt6">Type 6</option>
                                    <option value="opt7">Type 7</option>
                                    <option value="opt8">Type 8</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label class="col-form-label">Danger Select</label>
                                <select class="form-control form-control-danger btn-square" name="select">
                                    <option value="opt1">Select One Value Only</option>
                                    <option value="opt2">Type 2</option>
                                    <option value="opt3">Type 3</option>
                                    <option value="opt4">Type 4</option>
                                    <option value="opt5">Type 5</option>
                                    <option value="opt6">Type 6</option>
                                    <option value="opt7">Type 7</option>
                                    <option value="opt8">Type 8</option>
                                </select>
                            </div>
                            <div>
                                <label class="col-form-label">Inverse Select</label>
                                <select class="form-control form-control-inverse btn-square" name="select">
                                    <option value="opt1">Select One Value Only</option>
                                    <option value="opt2">Type 2</option>
                                    <option value="opt3">Type 3</option>
                                    <option value="opt4">Type 4</option>
                                    <option value="opt5">Type 5</option>
                                    <option value="opt6">Type 6</option>
                                    <option value="opt7">Type 7</option>
                                    <option value="opt8">Type 8</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5 class="card-title">Full Colored Variant</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-2">
                                <label class="col-form-label">Primary Select</label>
                                <select class="form-control form-control-primary-fill btn-square" name="select">
                                    <option value="opt1">Select One Value Only</option>
                                    <option value="opt2">Type 2</option>
                                    <option value="opt3">Type 3</option>
                                    <option value="opt4">Type 4</option>
                                    <option value="opt5">Type 5</option>
                                    <option value="opt6">Type 6</option>
                                    <option value="opt7">Type 7</option>
                                    <option value="opt8">Type 8</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label class="col-form-label">Secondary Select</label>
                                <select class="form-control form-control-secondary-fill btn-square" name="select">
                                    <option value="opt1">Select One Value Only</option>
                                    <option value="opt2">Type 2</option>
                                    <option value="opt3">Type 3</option>
                                    <option value="opt4">Type 4</option>
                                    <option value="opt5">Type 5</option>
                                    <option value="opt6">Type 6</option>
                                    <option value="opt7">Type 7</option>
                                    <option value="opt8">Type 8</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label class="col-form-label">Success Select</label>
                                <select class="form-control form-control-success-fill btn-square" name="select">
                                    <option value="opt1">Select One Value Only</option>
                                    <option value="opt2">Type 2</option>
                                    <option value="opt3">Type 3</option>
                                    <option value="opt4">Type 4</option>
                                    <option value="opt5">Type 5</option>
                                    <option value="opt6">Type 6</option>
                                    <option value="opt7">Type 7</option>
                                    <option value="opt8">Type 8</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label class="col-form-label">Info Select</label>
                                <select class="form-control form-control-info-fill btn-square" name="select">
                                    <option value="opt1">Select One Value Only</option>
                                    <option value="opt2">Type 2</option>
                                    <option value="opt3">Type 3</option>
                                    <option value="opt4">Type 4</option>
                                    <option value="opt5">Type 5</option>
                                    <option value="opt6">Type 6</option>
                                    <option value="opt7">Type 7</option>
                                    <option value="opt8">Type 8</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label class="col-form-label">Warning Select</label>
                                <select class="form-control form-control-warning-fill btn-square" name="select">
                                    <option value="opt1">Select One Value Only</option>
                                    <option value="opt2">Type 2</option>
                                    <option value="opt3">Type 3</option>
                                    <option value="opt4">Type 4</option>
                                    <option value="opt5">Type 5</option>
                                    <option value="opt6">Type 6</option>
                                    <option value="opt7">Type 7</option>
                                    <option value="opt8">Type 8</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label class="col-form-label">Danger Select</label>
                                <select class="form-control form-control-danger-fill btn-square" name="select">
                                    <option value="opt1">Select One Value Only</option>
                                    <option value="opt2">Type 2</option>
                                    <option value="opt3">Type 3</option>
                                    <option value="opt4">Type 4</option>
                                    <option value="opt5">Type 5</option>
                                    <option value="opt6">Type 6</option>
                                    <option value="opt7">Type 7</option>
                                    <option value="opt8">Type 8</option>
                                </select>
                            </div>
                            <div>
                                <label class="col-form-label">Inverse Select</label>
                                <select class="form-control form-control-inverse-fill btn-square" name="select">
                                    <option value="opt1">Select One Value Only</option>
                                    <option value="opt2">Type 2</option>
                                    <option value="opt3">Type 3</option>
                                    <option value="opt4">Type 4</option>
                                    <option value="opt5">Type 5</option>
                                    <option value="opt6">Type 6</option>
                                    <option value="opt7">Type 7</option>
                                    <option value="opt8">Type 8</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Input Groups end-->
            </div>
        </div>
    </div>


	@push('scripts')
    <script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2/select2-custom.js') }}"></script>
	@endpush

@endsection
