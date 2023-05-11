@extends('layouts.admin.master')

@section('title')Project List
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Project List</h3>
		@endslot
		<li class="breadcrumb-item">Apps</li>
		<li class="breadcrumb-item active">Project List</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row project-cards">
	        <div class="col-md-12 project-list">
	            <div class="card">
	                <div class="row">
	                    <div class="col-md-6 p-0">
	                        <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
	                            <li class="nav-item">
	                                <a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="true"><i data-feather="target"></i>All</a>
	                            </li>
	                            <li class="nav-item">
	                                <a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false"><i data-feather="info"></i>Doing</a>
	                            </li>
	                            <li class="nav-item">
	                                <a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><i data-feather="check-circle"></i>Done</a>
	                            </li>
	                        </ul>
	                    </div>
	                    <div class="col-md-6 p-0">
	                        <div class="form-group mb-0 me-0"></div>
	                        <a class="btn btn-primary" href="projectcreate"> <i data-feather="plus-square"> </i>Create New Project</a>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-body">
	                    <div class="tab-content" id="top-tabContent">
	                        <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
	                            <div class="row">
	                                <div class="col-xxl-4 col-lg-6">
	                                    <div class="project-box">
	                                        <span class="badge badge-primary">Doing</span>
	                                        <h6>Viho admin Design</h6>
	                                        <div class="media">
	                                            <img class="img-20 me-2 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" />
	                                            <div class="media-body">
	                                                <p>Themeforest, australia</p>
	                                            </div>
	                                        </div>
	                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	                                        <div class="row details">
	                                            <div class="col-6"><span>Issues </span></div>
	                                            <div class="col-6 font-primary">12</div>
	                                            <div class="col-6"><span>Resolved</span></div>
	                                            <div class="col-6 font-primary">5</div>
	                                            <div class="col-6"><span>Comment</span></div>
	                                            <div class="col-6 font-primary">7</div>
	                                        </div>
	                                        <div class="customers">
	                                            <ul>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block ms-2">
	                                                    <p class="f-12">+10 More</p>
	                                                </li>
	                                            </ul>
	                                        </div>
	                                        <div class="project-status mt-4">
	                                            <div class="media mb-0">
	                                                <p>70%</p>
	                                                <div class="media-body text-end"><span>Done</span></div>
	                                            </div>
	                                            <div class="progress" style="height: 5px;">
	                                                <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar" style="width: 70%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-xxl-4 col-lg-6">
	                                    <div class="project-box">
	                                        <span class="badge badge-secondary">Done</span>
	                                        <h6>Universal admin Design</h6>
	                                        <div class="media">
	                                            <img class="img-20 me-2 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" />
	                                            <div class="media-body">
	                                                <p>Envato, australia</p>
	                                            </div>
	                                        </div>
	                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	                                        <div class="row details">
	                                            <div class="col-6"><span>Issues </span></div>
	                                            <div class="col-6 font-secondary">24</div>
	                                            <div class="col-6"><span>Resolved</span></div>
	                                            <div class="col-6 font-secondary">24</div>
	                                            <div class="col-6"><span>Comment</span></div>
	                                            <div class="col-6 font-secondary">40</div>
	                                        </div>
	                                        <div class="customers">
	                                            <ul>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block ms-2">
	                                                    <p class="f-12">+3 More</p>
	                                                </li>
	                                            </ul>
	                                        </div>
	                                        <div class="project-status mt-4">
	                                            <div class="media mb-0">
	                                                <p>100%</p>
	                                                <div class="media-body text-end"><span>Done</span></div>
	                                            </div>
	                                            <div class="progress" style="height: 5px;">
	                                                <div class="progress-bar-animated bg-secondary" role="progressbar" style="width: 100%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-xxl-4 col-lg-6">
	                                    <div class="project-box">
	                                        <span class="badge badge-secondary">Done</span>
	                                        <h6>Poco admin Design</h6>
	                                        <div class="media">
	                                            <img class="img-20 me-2 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" />
	                                            <div class="media-body">
	                                                <p>Envato, australia</p>
	                                            </div>
	                                        </div>
	                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	                                        <div class="row details">
	                                            <div class="col-6"><span>Issues </span></div>
	                                            <div class="col-6 font-secondary">40</div>
	                                            <div class="col-6"><span>Resolved</span></div>
	                                            <div class="col-6 font-secondary">40</div>
	                                            <div class="col-6"><span>Comment</span></div>
	                                            <div class="col-6 font-secondary">20</div>
	                                        </div>
	                                        <div class="customers">
	                                            <ul>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block ms-2">
	                                                    <p class="f-12">+2 More</p>
	                                                </li>
	                                            </ul>
	                                        </div>
	                                        <div class="project-status mt-4">
	                                            <div class="media mb-0">
	                                                <p>100%</p>
	                                                <div class="media-body text-end"><span>Done</span></div>
	                                            </div>
	                                            <div class="progress" style="height: 5px;">
	                                                <div class="progress-bar-animated bg-secondary" role="progressbar" style="width: 100%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-xxl-4 col-lg-6">
	                                    <div class="project-box">
	                                        <span class="badge badge-secondary">Done</span>
	                                        <h6>Universal admin Design</h6>
	                                        <div class="media">
	                                            <img class="img-20 me-2 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" />
	                                            <div class="media-body">
	                                                <p>Envato, australia</p>
	                                            </div>
	                                        </div>
	                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	                                        <div class="row details">
	                                            <div class="col-6"><span>Issues </span></div>
	                                            <div class="col-6 font-secondary">24</div>
	                                            <div class="col-6"><span>Resolved</span></div>
	                                            <div class="col-6 font-secondary">24</div>
	                                            <div class="col-6"><span>Comment</span></div>
	                                            <div class="col-6 font-secondary">40</div>
	                                        </div>
	                                        <div class="customers">
	                                            <ul>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block ms-2">
	                                                    <p class="f-12">+3 More</p>
	                                                </li>
	                                            </ul>
	                                        </div>
	                                        <div class="project-status mt-4">
	                                            <div class="media mb-0">
	                                                <p>100%</p>
	                                                <div class="media-body text-end"><span>Done</span></div>
	                                            </div>
	                                            <div class="progress" style="height: 5px;">
	                                                <div class="progress-bar-animated bg-secondary" role="progressbar" style="width: 100%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-xxl-4 col-lg-6">
	                                    <div class="project-box">
	                                        <span class="badge badge-primary">Doing</span>
	                                        <h6>Viho admin Design</h6>
	                                        <div class="media">
	                                            <img class="img-20 me-2 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" />
	                                            <div class="media-body">
	                                                <p>Themeforest, australia</p>
	                                            </div>
	                                        </div>
	                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	                                        <div class="row details">
	                                            <div class="col-6"><span>Issues </span></div>
	                                            <div class="col-6 font-primary">12</div>
	                                            <div class="col-6"><span>Resolved</span></div>
	                                            <div class="col-6 font-primary">5</div>
	                                            <div class="col-6"><span>Comment</span></div>
	                                            <div class="col-6 font-primary">7</div>
	                                        </div>
	                                        <div class="customers">
	                                            <ul>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block ms-2">
	                                                    <p class="f-12">+10 More</p>
	                                                </li>
	                                            </ul>
	                                        </div>
	                                        <div class="project-status mt-4">
	                                            <div class="media mb-0">
	                                                <p>70%</p>
	                                                <div class="media-body text-end"><span>Done</span></div>
	                                            </div>
	                                            <div class="progress" style="height: 5px;">
	                                                <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar" style="width: 70%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-xxl-4 col-lg-6">
	                                    <div class="project-box">
	                                        <span class="badge badge-secondary">Done</span>
	                                        <h6>Poco admin Design</h6>
	                                        <div class="media">
	                                            <img class="img-20 me-2 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" />
	                                            <div class="media-body">
	                                                <p>Envato, australia</p>
	                                            </div>
	                                        </div>
	                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	                                        <div class="row details">
	                                            <div class="col-6"><span>Issues </span></div>
	                                            <div class="col-6 font-secondary">40</div>
	                                            <div class="col-6"><span>Resolved</span></div>
	                                            <div class="col-6 font-secondary">40</div>
	                                            <div class="col-6"><span>Comment</span></div>
	                                            <div class="col-6 font-secondary">20</div>
	                                        </div>
	                                        <div class="customers">
	                                            <ul>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block ms-2">
	                                                    <p class="f-12">+2 More</p>
	                                                </li>
	                                            </ul>
	                                        </div>
	                                        <div class="project-status mt-4">
	                                            <div class="media mb-0">
	                                                <p>100%</p>
	                                                <div class="media-body text-end"><span>Done</span></div>
	                                            </div>
	                                            <div class="progress" style="height: 5px;">
	                                                <div class="progress-bar-animated bg-secondary" role="progressbar" style="width: 100%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
	                            <div class="row">
	                                <div class="col-xxl-4 col-lg-6">
	                                    <div class="project-box">
	                                        <span class="badge badge-primary">Doing</span>
	                                        <h6>Viho admin Design</h6>
	                                        <div class="media">
	                                            <img class="img-20 me-2 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" />
	                                            <div class="media-body">
	                                                <p>Themeforest, australia</p>
	                                            </div>
	                                        </div>
	                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	                                        <div class="row details">
	                                            <div class="col-6"><span>Issues </span></div>
	                                            <div class="col-6 font-primary">12</div>
	                                            <div class="col-6"><span>Resolved</span></div>
	                                            <div class="col-6 font-primary">5</div>
	                                            <div class="col-6"><span>Comment</span></div>
	                                            <div class="col-6 font-primary">7</div>
	                                        </div>
	                                        <div class="customers">
	                                            <ul>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block ms-2">
	                                                    <p class="f-12">+10 More</p>
	                                                </li>
	                                            </ul>
	                                        </div>
	                                        <div class="project-status mt-4">
	                                            <div class="media mb-0">
	                                                <p>70%</p>
	                                                <div class="media-body text-end"><span>Done</span></div>
	                                            </div>
	                                            <div class="progress" style="height: 5px;">
	                                                <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar" style="width: 70%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-xxl-4 col-lg-6">
	                                    <div class="project-box">
	                                        <span class="badge badge-primary">Doing</span>
	                                        <h6>Universal admin Design</h6>
	                                        <div class="media">
	                                            <img class="img-20 me-2 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" />
	                                            <div class="media-body">
	                                                <p>Envato, australia</p>
	                                            </div>
	                                        </div>
	                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	                                        <div class="row details">
	                                            <div class="col-6"><span>Issues </span></div>
	                                            <div class="col-6 font-primary">24</div>
	                                            <div class="col-6"><span>Resolved</span></div>
	                                            <div class="col-6 font-primary">24</div>
	                                            <div class="col-6"><span>Comment</span></div>
	                                            <div class="col-6 font-primary">40</div>
	                                        </div>
	                                        <div class="customers">
	                                            <ul>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block ms-2">
	                                                    <p class="f-12">+3 More</p>
	                                                </li>
	                                            </ul>
	                                        </div>
	                                        <div class="project-status mt-4">
	                                            <div class="media mb-0">
	                                                <p>100%</p>
	                                                <div class="media-body text-end"><span>Done</span></div>
	                                            </div>
	                                            <div class="progress" style="height: 5px;">
	                                                <div class="progress-bar-animated bg-primary" role="progressbar" style="width: 100%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-xxl-4 col-lg-6">
	                                    <div class="project-box">
	                                        <span class="badge badge-primary">Doing</span>
	                                        <h6>Poco admin Design</h6>
	                                        <div class="media">
	                                            <img class="img-20 me-2 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" />
	                                            <div class="media-body">
	                                                <p>Envato, australia</p>
	                                            </div>
	                                        </div>
	                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	                                        <div class="row details">
	                                            <div class="col-6"><span>Issues </span></div>
	                                            <div class="col-6 font-primary">40</div>
	                                            <div class="col-6"><span>Resolved</span></div>
	                                            <div class="col-6 font-primary">40</div>
	                                            <div class="col-6"><span>Comment</span></div>
	                                            <div class="col-6 font-primary">20</div>
	                                        </div>
	                                        <div class="customers">
	                                            <ul>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block ms-2">
	                                                    <p class="f-12">+2 More</p>
	                                                </li>
	                                            </ul>
	                                        </div>
	                                        <div class="project-status mt-4">
	                                            <div class="media mb-0">
	                                                <p>100%</p>
	                                                <div class="media-body text-end"><span>Done</span></div>
	                                            </div>
	                                            <div class="progress" style="height: 5px;">
	                                                <div class="progress-bar-animated bg-primary" role="progressbar" style="width: 100%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-xxl-4 col-lg-6">
	                                    <div class="project-box">
	                                        <span class="badge badge-primary">Doing</span>
	                                        <h6>Universal admin Design</h6>
	                                        <div class="media">
	                                            <img class="img-20 me-2 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" />
	                                            <div class="media-body">
	                                                <p>Envato, australia</p>
	                                            </div>
	                                        </div>
	                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	                                        <div class="row details">
	                                            <div class="col-6"><span>Issues </span></div>
	                                            <div class="col-6 font-primary">24</div>
	                                            <div class="col-6"><span>Resolved</span></div>
	                                            <div class="col-6 font-primary">24</div>
	                                            <div class="col-6"><span>Comment</span></div>
	                                            <div class="col-6 font-primary">40</div>
	                                        </div>
	                                        <div class="customers">
	                                            <ul>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block ms-2">
	                                                    <p class="f-12">+3 More</p>
	                                                </li>
	                                            </ul>
	                                        </div>
	                                        <div class="project-status mt-4">
	                                            <div class="media mb-0">
	                                                <p>100%</p>
	                                                <div class="media-body text-end"><span>Done</span></div>
	                                            </div>
	                                            <div class="progress" style="height: 5px;">
	                                                <div class="progress-bar-animated bg-primary" role="progressbar" style="width: 100%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-xxl-4 col-lg-6">
	                                    <div class="project-box">
	                                        <span class="badge badge-primary">Doing</span>
	                                        <h6>Viho admin Design</h6>
	                                        <div class="media">
	                                            <img class="img-20 me-2 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" />
	                                            <div class="media-body">
	                                                <p>Themeforest, australia</p>
	                                            </div>
	                                        </div>
	                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	                                        <div class="row details">
	                                            <div class="col-6"><span>Issues </span></div>
	                                            <div class="col-6 font-primary">12</div>
	                                            <div class="col-6"><span>Resolved</span></div>
	                                            <div class="col-6 font-primary">5</div>
	                                            <div class="col-6"><span>Comment</span></div>
	                                            <div class="col-6 font-primary">7</div>
	                                        </div>
	                                        <div class="customers">
	                                            <ul>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block ms-2">
	                                                    <p class="f-12">+10 More</p>
	                                                </li>
	                                            </ul>
	                                        </div>
	                                        <div class="project-status mt-4">
	                                            <div class="media mb-0">
	                                                <p>70%</p>
	                                                <div class="media-body text-end"><span>Done</span></div>
	                                            </div>
	                                            <div class="progress" style="height: 5px;">
	                                                <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar" style="width: 70%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-xxl-4 col-lg-6">
	                                    <div class="project-box">
	                                        <span class="badge badge-primary">Doing</span>
	                                        <h6>Poco admin Design</h6>
	                                        <div class="media">
	                                            <img class="img-20 me-2 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" />
	                                            <div class="media-body">
	                                                <p>Envato, australia</p>
	                                            </div>
	                                        </div>
	                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	                                        <div class="row details">
	                                            <div class="col-6"><span>Issues </span></div>
	                                            <div class="col-6 font-primary">40</div>
	                                            <div class="col-6"><span>Resolved</span></div>
	                                            <div class="col-6 font-primary">40</div>
	                                            <div class="col-6"><span>Comment</span></div>
	                                            <div class="col-6 font-primary">20</div>
	                                        </div>
	                                        <div class="customers">
	                                            <ul>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block ms-2">
	                                                    <p class="f-12">+2 More</p>
	                                                </li>
	                                            </ul>
	                                        </div>
	                                        <div class="project-status mt-4">
	                                            <div class="media mb-0">
	                                                <p>100%</p>
	                                                <div class="media-body text-end"><span>Done</span></div>
	                                            </div>
	                                            <div class="progress" style="height: 5px;">
	                                                <div class="progress-bar-animated bg-primary" role="progressbar" style="width: 100%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
	                            <div class="row">
	                                <div class="col-xxl-4 col-lg-6">
	                                    <div class="project-box">
	                                        <span class="badge badge-secondary">Done</span>
	                                        <h6>Viho admin Design</h6>
	                                        <div class="media">
	                                            <img class="img-20 me-2 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" />
	                                            <div class="media-body">
	                                                <p>Themeforest, australia</p>
	                                            </div>
	                                        </div>
	                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	                                        <div class="row details">
	                                            <div class="col-6"><span>Issues </span></div>
	                                            <div class="col-6 font-secondary">12</div>
	                                            <div class="col-6"><span>Resolved</span></div>
	                                            <div class="col-6 font-secondary">5</div>
	                                            <div class="col-6"><span>Comment</span></div>
	                                            <div class="col-6 font-secondary">7</div>
	                                        </div>
	                                        <div class="customers">
	                                            <ul>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block ms-2">
	                                                    <p class="f-12">+10 More</p>
	                                                </li>
	                                            </ul>
	                                        </div>
	                                        <div class="project-status mt-4">
	                                            <div class="media mb-0">
	                                                <p>70%</p>
	                                                <div class="media-body text-end"><span>Done</span></div>
	                                            </div>
	                                            <div class="progress" style="height: 5px;">
	                                                <div class="progress-bar-animated bg-secondary progress-bar-striped" role="progressbar" style="width: 70%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-xxl-4 col-lg-6">
	                                    <div class="project-box">
	                                        <span class="badge badge-secondary">Done</span>
	                                        <h6>Universal admin Design</h6>
	                                        <div class="media">
	                                            <img class="img-20 me-2 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" />
	                                            <div class="media-body">
	                                                <p>Envato, australia</p>
	                                            </div>
	                                        </div>
	                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	                                        <div class="row details">
	                                            <div class="col-6"><span>Issues </span></div>
	                                            <div class="col-6 font-secondary">24</div>
	                                            <div class="col-6"><span>Resolved</span></div>
	                                            <div class="col-6 font-secondary">24</div>
	                                            <div class="col-6"><span>Comment</span></div>
	                                            <div class="col-6 font-secondary">40</div>
	                                        </div>
	                                        <div class="customers">
	                                            <ul>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block ms-2">
	                                                    <p class="f-12">+3 More</p>
	                                                </li>
	                                            </ul>
	                                        </div>
	                                        <div class="project-status mt-4">
	                                            <div class="media mb-0">
	                                                <p>100%</p>
	                                                <div class="media-body text-end"><span>Done</span></div>
	                                            </div>
	                                            <div class="progress" style="height: 5px;">
	                                                <div class="progress-bar-animated bg-secondary" role="progressbar" style="width: 100%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-xxl-4 col-lg-6">
	                                    <div class="project-box">
	                                        <span class="badge badge-secondary">Done</span>
	                                        <h6>Poco admin Design</h6>
	                                        <div class="media">
	                                            <img class="img-20 me-2 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" />
	                                            <div class="media-body">
	                                                <p>Envato, australia</p>
	                                            </div>
	                                        </div>
	                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	                                        <div class="row details">
	                                            <div class="col-6"><span>Issues </span></div>
	                                            <div class="col-6 font-secondary">40</div>
	                                            <div class="col-6"><span>Resolved</span></div>
	                                            <div class="col-6 font-secondary">40</div>
	                                            <div class="col-6"><span>Comment</span></div>
	                                            <div class="col-6 font-secondary">20</div>
	                                        </div>
	                                        <div class="customers">
	                                            <ul>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block ms-2">
	                                                    <p class="f-12">+2 More</p>
	                                                </li>
	                                            </ul>
	                                        </div>
	                                        <div class="project-status mt-4">
	                                            <div class="media mb-0">
	                                                <p>100%</p>
	                                                <div class="media-body text-end"><span>Done</span></div>
	                                            </div>
	                                            <div class="progress" style="height: 5px;">
	                                                <div class="progress-bar-animated bg-secondary" role="progressbar" style="width: 100%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-xxl-4 col-lg-6">
	                                    <div class="project-box">
	                                        <span class="badge badge-secondary">Done</span>
	                                        <h6>Universal admin Design</h6>
	                                        <div class="media">
	                                            <img class="img-20 me-2 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" />
	                                            <div class="media-body">
	                                                <p>Envato, australia</p>
	                                            </div>
	                                        </div>
	                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	                                        <div class="row details">
	                                            <div class="col-6"><span>Issues </span></div>
	                                            <div class="col-6 font-secondary">24</div>
	                                            <div class="col-6"><span>Resolved</span></div>
	                                            <div class="col-6 font-secondary">24</div>
	                                            <div class="col-6"><span>Comment</span></div>
	                                            <div class="col-6 font-secondary">40</div>
	                                        </div>
	                                        <div class="customers">
	                                            <ul>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block ms-2">
	                                                    <p class="f-12">+3 More</p>
	                                                </li>
	                                            </ul>
	                                        </div>
	                                        <div class="project-status mt-4">
	                                            <div class="media mb-0">
	                                                <p>100%</p>
	                                                <div class="media-body text-end"><span>Done</span></div>
	                                            </div>
	                                            <div class="progress" style="height: 5px;">
	                                                <div class="progress-bar-animated bg-secondary" role="progressbar" style="width: 100%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-xxl-4 col-lg-6">
	                                    <div class="project-box">
	                                        <span class="badge badge-primary">Done</span>
	                                        <h6>Viho admin Design</h6>
	                                        <div class="media">
	                                            <img class="img-20 me-2 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" />
	                                            <div class="media-body">
	                                                <p>Themeforest, australia</p>
	                                            </div>
	                                        </div>
	                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	                                        <div class="row details">
	                                            <div class="col-6"><span>Issues </span></div>
	                                            <div class="col-6 font-secondary">12</div>
	                                            <div class="col-6"><span>Resolved</span></div>
	                                            <div class="col-6 font-secondary">5</div>
	                                            <div class="col-6"><span>Comment</span></div>
	                                            <div class="col-6 font-secondary">7</div>
	                                        </div>
	                                        <div class="customers">
	                                            <ul>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block ms-2">
	                                                    <p class="f-12">+10 More</p>
	                                                </li>
	                                            </ul>
	                                        </div>
	                                        <div class="project-status mt-4">
	                                            <div class="media mb-0">
	                                                <p>70%</p>
	                                                <div class="media-body text-end"><span>Done</span></div>
	                                            </div>
	                                            <div class="progress" style="height: 5px;">
	                                                <div class="progress-bar-animated bg-secondary progress-bar-striped" role="progressbar" style="width: 70%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-xxl-4 col-lg-6">
	                                    <div class="project-box">
	                                        <span class="badge badge-secondary">Done</span>
	                                        <h6>Poco admin Design</h6>
	                                        <div class="media">
	                                            <img class="img-20 me-2 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" />
	                                            <div class="media-body">
	                                                <p>Envato, australia</p>
	                                            </div>
	                                        </div>
	                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	                                        <div class="row details">
	                                            <div class="col-6"><span>Issues </span></div>
	                                            <div class="col-6 font-secondary">40</div>
	                                            <div class="col-6"><span>Resolved</span></div>
	                                            <div class="col-6 font-secondary">40</div>
	                                            <div class="col-6"><span>Comment</span></div>
	                                            <div class="col-6 font-secondary">20</div>
	                                        </div>
	                                        <div class="customers">
	                                            <ul>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="" data-original-title="" title="" /></li>
	                                                <li class="d-inline-block ms-2">
	                                                    <p class="f-12">+2 More</p>
	                                                </li>
	                                            </ul>
	                                        </div>
	                                        <div class="project-status mt-4">
	                                            <div class="media mb-0">
	                                                <p>100%</p>
	                                                <div class="media-body text-end"><span>Done</span></div>
	                                            </div>
	                                            <div class="progress" style="height: 5px;">
	                                                <div class="progress-bar-animated bg-secondary" role="progressbar" style="width: 100%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
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
	<script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
    <script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
    <script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
    <script src="{{asset('assets/js/height-equal.js')}}"></script>
	@endpush

@endsection