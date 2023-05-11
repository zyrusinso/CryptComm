@extends('layouts.admin.master')

@section('title')Touchspin
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Touchspin</h3>
		@endslot
		<li class="breadcrumb-item">Forms</li>
		<li class="breadcrumb-item">Form Widgets</li>
        <li class="breadcrumb-item active">Touchspin</li>
	@endcomponent

    <div class="container-fluid">
        <!-- Bootstrap TouchSpin Spinners start-->
        <div class="bootstrap-touchspin">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5 class="card-title">Default Touchspin</h5>
                            <span>Add <code>.touchspin</code> class to input to add touchspin input group.</span>
                        </div>
                        <div class="card-body">
                            <fieldset>
                                <div class="input-group">
                                    <input class="touchspin" type="text" value="40" />
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5 class="card-title">vertical Touchspin</h5>
                            <span>Add <code>.touchspin-vertical</code> class for vertical touchspin input group.</span>
                        </div>
                        <div class="card-body">
                            <fieldset>
                                <div class="touchspin-vertical-tab">
                                    <input class="touchspin-vertical" type="text" value="55" />
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5 class="card-title">Touchspin with Postfix</h5>
                            <span>Add <code>data-bts-postfix="POSTFIX_VALUE"</code> attribute to input to add postfix to touchspin input group.</span>
                        </div>
                        <div class="card-body">
                            <fieldset>
                                <div class="input-group">
                                    <input class="touchspin" type="text" value="40" data-bts-postfix="%" />
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5 class="card-title">Touchspin with Prefix</h5>
                            <span>Add <code>data-bts-prefix="PREFIX_VALUE"</code> attribute to input to add prefix to touchspin input group.</span>
                        </div>
                        <div class="card-body">
                            <fieldset>
                                <div class="input-group">
                                    <input class="touchspin" type="text" value="40" data-bts-prefix="#" />
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5 class="card-title">Min Max Value of Touchspin</h5>
                            <span>Use <code>data-bts-min="VALUE" data-bts-max="VALUE"</code> attribute to input to set min and max value of touchspin input.</span>
                        </div>
                        <div class="card-body">
                            <fieldset>
                                <div class="input-group">
                                    <input class="touchspin" type="text" value="40" data-bts-min="1" data-bts-max="100" />
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5 class="card-title">Touchspin with initial Value</h5>
                            <span>Add <code>data-bts-init-val="VALUE"</code> attribute attribute to set initial value for input group.</span>
                        </div>
                        <div class="card-body">
                            <fieldset>
                                <div class="input-group">
                                    <input class="touchspin" type="text" data-bts-init-val="20" />
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5 class="card-title">Touchspin steps</h5>
                            <span>Add <code>data-bts-step="VALUE"</code> attribute for increament and decrement steps to touchspin input group.</span>
                        </div>
                        <div class="card-body">
                            <fieldset>
                                <div class="input-group">
                                    <input class="touchspin" type="text" value="40" data-bts-step="10" />
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5 class="card-title">Decimal Value of Touchspin</h5>
                            <span>Use <code>data-bts-decimal="VALUE"</code> attribute to use decimal value of touchspin input.</span>
                        </div>
                        <div class="card-body">
                            <fieldset>
                                <div class="input-group">
                                    <input class="touchspin" type="text" value="50.00" data-bts-step="0.25" data-bts-decimals="2" />
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5 class="card-title">Change Button Class to link</h5>
                            <span>Add <code>data-bts-button-down-class & data-bts-button-up-class</code> attribute to change button Class.</span>
                        </div>
                        <div class="card-body">
                            <fieldset>
                                <div class="input-group">
                                    <input class="touchspin" type="text" value="40" data-bts-button-down-class="btn btn-link" data-bts-button-up-class="btn btn-link" />
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5 class="card-title">Touchspin With Icon</h5>
                            <span>Add icon class in <code>data-bts-postfix</code> attribute to icon to postfix as well prefix.</span>
                        </div>
                        <div class="card-body">
                            <fieldset>
                                <div class="input-group">
                                    <input class="touchspin" type="text" data-bts-postfix="&lt;i class='fa fa-check'&gt;&lt;/i&gt;" value="40" />
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5 class="card-title">Touchspin Icon Button</h5>
                            <span>Use <code>data-bts-button-down-txt & data-bts-button-up-txt</code> attribute to set touchspin icon button.</span>
                        </div>
                        <div class="card-body">
                            <fieldset>
                                <div class="input-group">
                                    <input class="touchspin" type="text" value="50.00" data-bts-button-down-txt="&lt;i class='fa fa-angle-down'&gt;&lt;/i&gt;" data-bts-button-up-txt="&lt;i class='fa fa-angle-up'&gt;&lt;/i&gt;" />
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5 class="card-title">Touchspin With Dropdown</h5>
                            <span>Use <code>data-bts-prefix & data-bts-postfix</code> attribute to set Prefix and Postfix to touchspin input with button.</span>
                        </div>
                        <div class="card-body">
                            <fieldset>
                                <div class="input-group">
                                    <input class="touchspin" type="text" value="50.00" data-bts-prefix="Pre" data-bts-postfix="Post" />
                                    <div class="dropdown-basic">
                                        <div class="dropdown">
                                            <div class="btn-group mb-0 me-0">
                                                <button class="dropbtn btn-light txt-dark" type="button">
                                                    Action <span><i class="icofont icofont-arrow-down"></i></span>
                                                </button>
                                                <div class="dropdown-content">
                                                    <a href="#">Action</a><a href="#">Another Action</a><a href="#">Something Else Here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#">Separated Link </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5 class="card-title">Touchspin mousewheel Disable</h5>
                            <span>Add <code>.touchspin-stop-mousewheel</code> class to diable mousewheel.</span>
                        </div>
                        <div class="card-body">
                            <fieldset>
                                <div class="input-group">
                                    <input class="touchspin-stop-mousewheel" type="text" value="40" />
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5 class="card-title">Small Horizontal Touchspin</h5>
                            <span>Add <code>.input-group-sm</code> class to input-group.</span>
                        </div>
                        <div class="card-body">
                            <fieldset>
                                <div class="input-group input-group-sm">
                                    <input class="touchspin" type="text" value="60" />
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5 class="card-title">Large Horizontal Touchspin</h5>
                        </div>
                        <div class="card-body">
                            <p>Add <code>.input-group-lg</code> class to input-group.</p>
                            <fieldset>
                                <div class="input-group input-group-lg">
                                    <input class="touchspin" type="text" value="40" />
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap TouchSpin Spinners End-->
        <!-- Container-fluid Ends-->
    </div>

	@push('scripts')
    <script src="{{ asset('assets/js/touchspin/vendors.min.js') }}"></script>
    <script src="{{ asset('assets/js/touchspin/touchspin.js') }}"></script>
    <script src="{{ asset('assets/js/touchspin/input-groups.min.js') }}"></script>
	@endpush

@endsection
