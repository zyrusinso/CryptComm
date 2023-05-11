@extends('layouts.admin.master')

@section('title')Dropdown
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Dropdown</h3>
		@endslot
		<li class="breadcrumb-item">Base</li>
		<li class="breadcrumb-item active">Dropdown</li>
	@endcomponent

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Dropdown</h5>
                    </div>
                    <div class="card-body dropdown-basic">
                        <div class="dropdown">
                            <button class="dropbtn btn-primary" type="button">
                                Dropdown Button <span><i class="icofont icofont-arrow-down"></i></span>
                            </button>
                            <div class="dropdown-content"><a href="#">Action</a><a href="#">Another Action</a><a href="#">Something Else Here</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Color Dropdown</h5>
                    </div>
                    <div class="card-body dropdown-basic">
                        <div class="dropdown">
                            <div class="btn-group mb-0">
                                <button class="dropbtn btn-primary" type="button">
                                    Action <span><i class="icofont icofont-arrow-down"></i></span>
                                </button>
                                <div class="dropdown-content"><a href="#">Action</a><a href="#">Another Action</a><a href="#">Something Else Here</a><a href="#">Separated Link </a></div>
                            </div>
                        </div>
                        <div class="dropdown">
                            <div class="btn-group mb-0">
                                <button class="dropbtn btn-secondary" type="button">
                                    Action <span><i class="icofont icofont-arrow-down"></i></span>
                                </button>
                                <div class="dropdown-content"><a href="#">Action</a><a href="#">Another Action</a><a href="#">Something Else Here</a><a href="#">Separated Link </a></div>
                            </div>
                        </div>
                        <div class="dropdown">
                            <div class="btn-group mb-0">
                                <button class="dropbtn btn-success" type="button">
                                    Action <span><i class="icofont icofont-arrow-down"></i></span>
                                </button>
                                <div class="dropdown-content"><a href="#">Action</a><a href="#">Another Action</a><a href="#">Something Else Here</a><a href="#">Separated Link </a></div>
                            </div>
                        </div>
                        <div class="dropdown">
                            <div class="btn-group mb-0">
                                <button class="dropbtn btn-info" type="button">
                                    Action <span><i class="icofont icofont-arrow-down"></i></span>
                                </button>
                                <div class="dropdown-content"><a href="#">Action</a><a href="#">Another Action</a><a href="#">Something Else Here</a><a href="#">Separated Link </a></div>
                            </div>
                        </div>
                        <div class="dropdown">
                            <div class="btn-group mb-0">
                                <button class="dropbtn btn-warning txt-dark" type="button">
                                    Action <span><i class="icofont icofont-arrow-down"></i></span>
                                </button>
                                <div class="dropdown-content"><a href="#">Action</a><a href="#">Another Action</a><a href="#">Something Else Here</a><a href="#">Separated Link </a></div>
                            </div>
                        </div>
                        <div class="dropdown">
                            <div class="btn-group mb-0">
                                <button class="dropbtn btn-danger" type="button">
                                    Action <span><i class="icofont icofont-arrow-down"></i></span>
                                </button>
                                <div class="dropdown-content"><a href="#">Action</a><a href="#">Another Action</a><a href="#">Something Else Here</a><a href="#">Separated Link </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Dropdown Split Button</h5>
                    </div>
                    <div class="card-body dropdown-basic">
                        <div class="btn-group">
                            <button class="btn btn-primary" type="button">Primary Button</button>
                            <div class="dropdown separated-btn">
                                <button class="btn btn-primary" type="button"><i class="icofont icofont-arrow-down"></i></button>
                                <div class="dropdown-content"><a href="#">Link 1</a><a href="#">Link 2</a><a href="#">Link 3</a></div>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-secondary" type="button">Secondary Button</button>
                            <div class="dropdown separated-btn">
                                <button class="btn btn-secondary" type="button"><i class="icofont icofont-arrow-down"></i></button>
                                <div class="dropdown-content"><a href="#">Link 1</a><a href="#">Link 2</a><a href="#">Link 3</a></div>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-success" type="button">Success Button</button>
                            <div class="dropdown separated-btn">
                                <button class="btn btn-success" type="button"><i class="icofont icofont-arrow-down"></i></button>
                                <div class="dropdown-content"><a href="#">Link 1</a><a href="#">Link 2</a><a href="#">Link 3</a></div>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-info" type="button">Info Button</button>
                            <div class="dropdown separated-btn">
                                <button class="btn btn-info" type="button"><i class="icofont icofont-arrow-down"></i></button>
                                <div class="dropdown-content"><a href="#">Link 1</a><a href="#">Link 2</a><a href="#">Link 3</a></div>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-warning" type="button">Warning Button</button>
                            <div class="dropdown separated-btn">
                                <button class="btn btn-warning" type="button"><i class="icofont icofont-arrow-down"></i></button>
                                <div class="dropdown-content"><a href="#">Link 1</a><a href="#">Link 2</a><a href="#">Link 3</a></div>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-danger" type="button">Danger Button</button>
                            <div class="dropdown separated-btn">
                                <button class="btn btn-danger" type="button"><i class="icofont icofont-arrow-down"></i></button>
                                <div class="dropdown-content"><a href="#">Link 1</a><a href="#">Link 2</a><a href="#">Link 3</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Rounded Dropdown</h5>
                    </div>
                    <div class="card-body dropdown-basic">
                        <div class="dropdown">
                            <div class="btn-group mb-0">
                                <button class="dropbtn btn-primary btn-round" type="button">
                                    Primary Button <span><i class="icofont icofont-arrow-down"></i></span>
                                </button>
                                <div class="dropdown-content"><a href="#">Action</a><a href="#">Another Action</a><a href="#">Something Else Here</a><a href="#">Separated Link </a></div>
                            </div>
                        </div>
                        <div class="dropdown">
                            <div class="btn-group mb-0">
                                <button class="dropbtn btn-secondary btn-round" type="button">
                                    Secondary Button <span><i class="icofont icofont-arrow-down"></i></span>
                                </button>
                                <div class="dropdown-content"><a href="#">Action</a><a href="#">Another Action</a><a href="#">Something Else Here</a><a href="#">Separated Link </a></div>
                            </div>
                        </div>
                        <div class="dropdown">
                            <div class="btn-group mb-0">
                                <button class="dropbtn btn-success btn-round" type="button">
                                    Success Button <span><i class="icofont icofont-arrow-down"></i></span>
                                </button>
                                <div class="dropdown-content"><a href="#">Action</a><a href="#">Another Action</a><a href="#">Something Else Here</a><a href="#">Separated Link </a></div>
                            </div>
                        </div>
                        <div class="dropdown">
                            <div class="btn-group mb-0">
                                <button class="dropbtn btn-info btn-round" type="button">
                                    Info Button <span><i class="icofont icofont-arrow-down"></i></span>
                                </button>
                                <div class="dropdown-content"><a href="#">Action</a><a href="#">Another Action</a><a href="#">Something Else Here</a><a href="#">Separated Link </a></div>
                            </div>
                        </div>
                        <div class="dropdown">
                            <div class="btn-group mb-0">
                                <button class="dropbtn btn-warning txt-dark btn-round" type="button">
                                    Warning Button <span><i class="icofont icofont-arrow-down"></i></span>
                                </button>
                                <div class="dropdown-content"><a href="#">Action</a><a href="#">Another Action</a><a href="#">Something Else Here</a><a href="#">Separated Link </a></div>
                            </div>
                        </div>
                        <div class="dropdown">
                            <div class="btn-group mb-0">
                                <button class="dropbtn btn-danger btn-round" type="button">
                                    Danger Button <span><i class="icofont icofont-arrow-down"></i></span>
                                </button>
                                <div class="dropdown-content"><a href="#">Action</a><a href="#">Another Action</a><a href="#">Something Else Here</a><a href="#">Separated Link </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Dropdown With Divider</h5>
                        <span>Use a class </span>
                    </div>
                    <div class="card-body dropdown-basic">
                        <div class="dropdown">
                            <button class="dropbtn btn-primary" type="button">
                                Dropdown Button <span><i class="icofont icofont-arrow-down"></i></span>
                            </button>
                            <div class="dropdown-content"><a href="#">Link 1</a><a href="#">Link 2</a><a href="#">Link 3</a><a href="#">Another Link</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Dropdown With Header</h5>
                        <span>Use a class <code>.dropdown-header</code></span>
                    </div>
                    <div class="card-body dropdown-basic">
                        <div class="dropdown">
                            <button class="dropbtn btn-primary" type="button">
                                Dropdown Button <span><i class="icofont icofont-arrow-down"></i></span>
                            </button>
                            <div class="dropdown-content">
                                <h5 class="dropdown-header">Dropdown header</h5>
                                <a href="#">Link 1</a><a href="#">Link 2</a>
                                <h5 class="dropdown-header">Dropdown header</h5>
                                <a href="#">Another Link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Dropdown With Disable</h5>
                        <span>Use a class <code>.dropdown-disabled</code></span>
                    </div>
                    <div class="card-body dropup-basic dropdown-basic">
                        <div class="dropup dropdown">
                            <button class="dropbtn btn-primary" type="button">
                                Dropdown Button <span><i class="icofont icofont-arrow-up"></i></span>
                            </button>
                            <div class="dropup-content dropdown-content"><a href="#">Normal</a><a class="active" href="#">Active</a><a class="disabled" href="#">Disabled</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Dropdown With DropUp</h5>
                        <span>Use a class <code>.drop-up</code></span>
                    </div>
                    <div class="card-body dropup-basic dropdown-basic">
                        <div class="dropup dropdown">
                            <button class="dropbtn btn-primary" type="button">
                                Dropdown Button <span><i class="icofont icofont-arrow-up"></i></span>
                            </button>
                            <div class="dropup-content dropdown-content"><a href="#">Link 1</a><a href="#">Link 2</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@push('scripts') 
@endpush

@endsection
