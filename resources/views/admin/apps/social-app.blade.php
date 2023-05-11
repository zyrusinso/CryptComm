@extends('layouts.admin.master')

@section('title')Social App
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/photoswipe.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Social App</h3>
		@endslot
		<li class="breadcrumb-item">Apps</li>
		<li class="breadcrumb-item active">Social App</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="user-profile social-app-profile">
	        <div class="row">
	            <div class="col-sm-12">
	                <div class="card profile-header">
	                    <img class="img-fluid bg-img-cover" src="{{asset('assets/images/user-profile/bg-profile.jpg')}}" alt="" />
	                    <div class="profile-img-wrrap"><img class="img-fluid bg-img-cover" src="{{asset('assets/images/user-profile/bg-profile.jpg')}}" alt="" /></div>
	                    <div class="userpro-box">
	                        <div class="img-wrraper">
	                            <div class="avatar"><img class="img-fluid" alt="" src="{{asset('assets/images/user/7.jpg')}}" /></div>
	                            <a class="icon-wrapper" href="#"><i class="icofont icofont-pencil-alt-5"> </i></a>
	                        </div>
	                        <div class="user-designation">
	                            <div class="title">
	                                <a target="_blank" href="">
	                                    <h4>Emay Walter</h4>
	                                    <h6>designer</h6>
	                                </a>
	                            </div>
	                            <div class="social-media">
	                                <ul class="user-list-social">
	                                    <li>
	                                        <a href="#"><i class="fa fa-facebook"></i></a>
	                                    </li>
	                                    <li>
	                                        <a href="#"><i class="fa fa-google-plus"></i></a>
	                                    </li>
	                                    <li>
	                                        <a href="#"><i class="fa fa-twitter"></i></a>
	                                    </li>
	                                    <li>
	                                        <a href="#"><i class="fa fa-instagram"></i></a>
	                                    </li>
	                                    <li>
	                                        <a href="#"><i class="fa fa-rss"></i></a>
	                                    </li>
	                                </ul>
	                            </div>
	                            <div class="follow">
	                                <ul class="follow-list">
	                                    <li>
	                                        <div class="follow-num counter">325</div>
	                                        <span>Follower</span>
	                                    </li>
	                                    <li>
	                                        <div class="follow-num counter">450</div>
	                                        <span>Following</span>
	                                    </li>
	                                    <li>
	                                        <div class="follow-num counter">500</div>
	                                        <span>Likes </span>
	                                    </li>
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <!--  user profile first-style start-->
	            <div class="col-sm-12 box-col-12">
	                <div class="card">
	                    <div class="social-tab">
	                        <ul class="nav nav-tabs" id="top-tab" role="tablist">
	                            <li class="nav-item">
	                                <a class="nav-link active" id="top-timeline" data-bs-toggle="tab" href="#timeline" role="tab" aria-controls="timeline" aria-selected="true"><i data-feather="clock"></i>Timline</a>
	                            </li>
	                            <li class="nav-item">
	                                <a class="nav-link" id="top-about" data-bs-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false"><i data-feather="alert-circle"></i>About </a>
	                            </li>
	                            <li class="nav-item">
	                                <a class="nav-link" id="top-friends" data-bs-toggle="tab" href="#friends" role="tab" aria-controls="friends" aria-selected="false"><i data-feather="users"></i>Friends</a>
	                            </li>
	                            <li class="nav-item">
	                                <a class="nav-link" id="top-photos" data-bs-toggle="tab" href="#photos" role="tab" aria-controls="photos" aria-selected="false"><i data-feather="image"></i>Photos</a>
	                            </li>
	                        </ul>
	                        <div class="input-group">
	                            <input class="form-control" type="text" placeholder="Search......." /><span class="input-group-text"> <i class="fa fa-search"></i></span>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="tab-content" id="top-tabContent">
	            <div class="tab-pane fade show active" id="timeline" role="tabpanel" aria-labelledby="timeline">
	                <div class="row">
	                    <div class="col-xl-3 xl-40 col-md-5 box-col-4">
	                        <div class="default-according style-1 faq-accordion job-accordion" id="accordionoc4">
	                            <div class="row">
	                                <div class="col-xl-12">
	                                    <div class="card">
	                                        <div class="card-header">
	                                            <h5 class="p-0">
	                                                <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon" aria-expanded="true" aria-controls="collapseicon">My Profile</button>
	                                            </h5>
	                                        </div>
	                                        <div class="collapse show" id="collapseicon" aria-labelledby="collapseicon" data-parent="#accordion">
	                                            <div class="card-body socialprofile filter-cards-view">
	                                                <div class="media">
	                                                    <img class="img-50 img-fluid m-r-20 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="" />
	                                                    <div class="media-body">
	                                                        <h5 class="font-primary f-w-600">My Page</h5>
	                                                        <span class="d-block">
	                                                            <span>
	                                                                <i class="fa fa-comments-o"> </i><span class="px-2">Messages<span class="badge badge-pill badge-light ms-1">9</span></span>
	                                                            </span>
	                                                        </span>
	                                                        <span class="d-block">
	                                                            <span>
	                                                                <i class="fa fa-bell-o"> </i><span class="px-2">Notification<span class="badge badge-pill badge-light ms-1">9</span></span>
	                                                            </span>
	                                                        </span>
	                                                    </div>
	                                                </div>
	                                                <div class="social-btngroup d-flex">
	                                                    <button class="btn btn-primary text-center me-2" type="button">Likes</button>
	                                                    <button class="btn btn-primary-light text-center" type="button">View</button>
	                                                </div>
	                                                <div class="likes-profile text-center">
	                                                    <h4 class="f-w-600 mb-1"><i class="fa fa-heart font-danger"></i> 884</h4>
	                                                </div>
	                                                <h6 class="text-center">35 New Likes This Week</h6>
	                                                <div class="customers text-center social-group">
	                                                    <ul>
	                                                        <li class="d-inline-block">
	                                                            <img
	                                                                class="img-30 rounded-circle"
	                                                                src="{{asset('assets/images/user/3.jpg')}}"
	                                                                alt=""
	                                                                data-container="body"
	                                                                data-bs-toggle="popover"
	                                                                data-placement="top"
	                                                                title=""
	                                                                data-original-title="Johny Waston"
	                                                            />
	                                                        </li>
	                                                        <li class="d-inline-block">
	                                                            <img
	                                                                class="img-30 rounded-circle"
	                                                                src="{{asset('assets/images/user/5.jpg')}}"
	                                                                alt=""
	                                                                data-container="body"
	                                                                data-bs-toggle="popover"
	                                                                data-placement="top"
	                                                                title=""
	                                                                data-original-title="Andew Jon"
	                                                            />
	                                                        </li>
	                                                        <li class="d-inline-block">
	                                                            <img
	                                                                class="img-30 rounded-circle"
	                                                                src="{{asset('assets/images/user/1.jpg')}}"
	                                                                alt=""
	                                                                data-container="body"
	                                                                data-bs-toggle="popover"
	                                                                data-placement="top"
	                                                                title=""
	                                                                data-original-title="Comeren Diaz"
	                                                            />
	                                                        </li>
	                                                        <li class="d-inline-block">
	                                                            <img
	                                                                class="img-30 rounded-circle"
	                                                                src="{{asset('assets/images/user/2.png')}}"
	                                                                alt=""
	                                                                data-container="body"
	                                                                data-bs-toggle="popover"
	                                                                data-placement="top"
	                                                                title=""
	                                                                data-original-title="Bucky Barnes"
	                                                            />
	                                                        </li>
	                                                        <li class="d-inline-block">
	                                                            <img
	                                                                class="img-30 rounded-circle"
	                                                                src="{{asset('assets/images/user/8.jpg')}}"
	                                                                alt=""
	                                                                data-container="body"
	                                                                data-bs-toggle="popover"
	                                                                data-placement="top"
	                                                                title=""
	                                                                data-original-title="Jason Borne"
	                                                            />
	                                                        </li>
	                                                        <li class="d-inline-block">
	                                                            <img
	                                                                class="img-30 rounded-circle"
	                                                                src="{{asset('assets/images/user/11.png')}}"
	                                                                alt=""
	                                                                data-container="body"
	                                                                data-bs-toggle="popover"
	                                                                data-placement="top"
	                                                                title=""
	                                                                data-original-title="Comeren Diaz"
	                                                            />
	                                                        </li>
	                                                    </ul>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-xl-12">
	                                    <div class="card"><img class="img-fluid" alt="" src="{{asset('assets/images/social-app/timeline-3.png')}}" /></div>
	                                </div>
	                                <div class="col-md-12 col-sm-6">
	                                    <div class="card">
	                                        <div class="card-header">
	                                            <h5 class="p-0">
	                                                <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon1" aria-expanded="true" aria-controls="collapseicon1">Mutual Friends</button>
	                                            </h5>
	                                        </div>
	                                        <div class="collapse show" id="collapseicon1" data-parent="#accordion" aria-labelledby="collapseicon1">
	                                            <div class="card-body social-status filter-cards-view">
	                                                <form>
	                                                    <div class="form-group m-0">
	                                                        <input class="form-control-social" type="search" placeholder="Search Contacts.." />
	                                                    </div>
	                                                </form>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/2.png')}}" alt="" />
	                                                    <div class="social-status social-online"></div>
	                                                    <div class="media-body">
	                                                        <a href=#><span class="f-w-600 d-block">Bucky Barnes</span></a><span class="d-block">winter@gmail.com</span>
	                                                    </div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/10.jpg')}}" alt="" />
	                                                    <div class="social-status social-busy"></div>
	                                                    <div class="media-body">
	                                                        <a href=#><span class="f-w-600 d-block">Sarah Loren</span></a><span class="d-block">barnes@gmail.com</span>
	                                                    </div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/6.jpg')}}" alt="" />
	                                                    <div class="social-status social-offline"></div>
	                                                    <div class="media-body">
	                                                        <a href=#><span class="f-w-600 d-block">Jason Borne</span></a><span class="d-block">jasonb@gmail.com</span>
	                                                    </div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/8.jpg')}}" alt="" />
	                                                    <div class="social-status social-offline"></div>
	                                                    <div class="media-body">
	                                                        <a href=#><span class="f-w-600 d-block">Comeren Diaz</span></a><span class="d-block">comere@gmail.com</span>
	                                                    </div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/14.png')}}" alt="" />
	                                                    <div class="social-status social-online"></div>
	                                                    <div class="media-body">
	                                                        <a href=#><span class="f-w-600 d-block">Andew Jon</span></a><span class="d-block">andrewj@gmail.com</span>
	                                                    </div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/4.jpg')}}" alt="" />
	                                                    <div class="social-status social-busy"></div>
	                                                    <div class="media-body"><span class="f-w-600 d-block">Johny Waston</span><span class="d-block">johny@gmail.com</span></div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/3.png')}}" alt="" />
	                                                    <div class="social-status social-offline"></div>
	                                                    <div class="media-body">
	                                                        <a href=#><span class="f-w-600 d-block">Johny William</span></a><span class="d-block">johnyw@gmail.com</span>
	                                                    </div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/2.png')}}" alt="" />
	                                                    <div class="social-status social-online"></div>
	                                                    <div class="media-body">
	                                                        <a href=#><span class="f-w-600 d-block">Bucky Barnes</span></a><span class="d-block">winter@gmail.com</span>
	                                                    </div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/10.jpg')}}" alt="" />
	                                                    <div class="social-status social-busy"></div>
	                                                    <div class="media-body">
	                                                        <a href=#><span class="f-w-600 d-block">Sarah Loren</span></a><span class="d-block">barnes@gmail.com</span>
	                                                    </div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/6.jpg')}}" alt="" />
	                                                    <div class="social-status social-offline"></div>
	                                                    <div class="media-body">
	                                                        <a href=#><span class="f-w-600 d-block">Jason Borne</span></a><span class="d-block">jasonb@gmail.com</span>
	                                                    </div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/8.jpg')}}" alt="" />
	                                                    <div class="social-status social-offline"></div>
	                                                    <div class="media-body">
	                                                        <a href=#><span class="f-w-600 d-block">Comeren Diaz</span></a><span class="d-block">comere@gmail.com</span>
	                                                    </div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/14.png')}}" alt="" />
	                                                    <div class="social-status social-online"></div>
	                                                    <div class="media-body">
	                                                        <a href=#><span class="f-w-600 d-block">Andew Jon</span></a><span class="d-block">andrewj@gmail.com</span>
	                                                    </div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/4.jpg')}}" alt="" />
	                                                    <div class="social-status social-busy"></div>
	                                                    <div class="media-body">
	                                                        <a href=#><span class="f-w-600 d-block">Johny Waston</span></a><span class="d-block">johny@gmail.com</span>
	                                                    </div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/3.png')}}" alt="" />
	                                                    <div class="social-status social-offline"></div>
	                                                    <div class="media-body">
	                                                        <a href=#><span class="f-w-600 d-block">Johny William</span></a><span class="d-block">johnyw@gmail.com</span>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-12 col-sm-6">
	                                    <div class="card">
	                                        <div class="card-header">
	                                            <h5 class="p-0">
	                                                <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon12" aria-expanded="true" aria-controls="collapseicon12">Activity Feed</button>
	                                            </h5>
	                                        </div>
	                                        <div class="collapse show" id="collapseicon12" aria-labelledby="collapseicon12" data-parent="#accordion">
	                                            <div class="card-body social-status filter-cards-view">
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/10.jpg')}}" alt="" />
	                                                    <div class="media-body">
	                                                        <a href=#><span class="f-w-600 d-block">Andew Jon</span></a>
	                                                        <p>Commented on Shaun Park's <a href="javascript:void(0)">Photo</a></p>
	                                                        <span class="light-span">20 min Ago</span>
	                                                    </div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/3.jpg')}}" alt="" />
	                                                    <div class="media-body">
	                                                        <a href=#><span class="f-w-600 d-block">Johny Waston</span></a>
	                                                        <p>Commented on Shaun Park's <a href="javascript:void(0)">Photo</a></p>
	                                                        <span class="light-span">1 hour Ago</span>
	                                                    </div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/5.jpg')}}" alt="" />
	                                                    <div class="media-body">
	                                                        <a href=#><span class="f-w-600 d-block">Comeren Diaz</span></a>
	                                                        <p>Commented on Shaun Park's <a href="javascript:void(0)">Photo</a></p>
	                                                        <span class="light-span">1 days Ago</span>
	                                                    </div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/4.jpg')}}" alt="" />
	                                                    <div class="media-body">
	                                                        <a href=#><span class="f-w-600 d-block">Sarah Loren</span></a>
	                                                        <p>Commented on Shaun Park's <a href="javascript:void(0)">Photo</a></p>
	                                                        <span class="light-span">2 days Ago</span>
	                                                    </div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/3.jpg')}}" alt="" />
	                                                    <div class="media-body">
	                                                        <a href=#><span class="f-w-600 d-block">Johny Waston</span></a>
	                                                        <p>Commented on Shaun Park's <a href="javascript:void(0)">Photo</a></p>
	                                                        <span class="light-span">5 days Ago</span>
	                                                    </div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/5.jpg')}}" alt="" />
	                                                    <div class="media-body">
	                                                        <a href=#><span class="f-w-600 d-block">Comeren Diaz</span></a>
	                                                        <p>Commented on Shaun Park's <a href="javascript:void(0)">Photo</a></p>
	                                                        <span class="light-span">6 days Ago</span>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-xl-6 xl-60 col-md-7 box-col-8">
	                        <div class="row">
	                            <div class="col-sm-12">
	                                <div class="card">
	                                    <div class="card-body">
	                                        <div class="new-users-social">
	                                            <div class="media">
	                                                <img class="rounded-circle image-radius m-r-15" src="{{asset('assets/images/user/1.jpg')}}" alt="" />
	                                                <div class="media-body">
	                                                    <h6 class="mb-0 f-w-700">ELANA</h6>
	                                                    <p>January, 12,2019</p>
	                                                </div>
	                                                <span class="pull-right mt-0"><i data-feather="more-vertical"></i></span>
	                                            </div>
	                                        </div>
	                                        <img class="img-fluid" alt="" src="{{asset('assets/images/social-app/timeline-1.png')}}" />
	                                        <div class="timeline-content">
	                                            <p>
	                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed urna in justo euismod condimentum. Fusce placerat enim et odio molestie sagittis.
	                                            </p>
	                                            <div class="like-content mt-2">
	                                                <span><i class="fa fa-heart font-danger"></i></span>
	                                                <span class="pull-right comment-number">
	                                                    <span>20 </span><span><i class="fa fa-share-alt me-0"></i></span>
	                                                </span>
	                                                <span class="pull-right comment-number">
	                                                    <span>10 </span><span><i class="fa fa-comments-o"></i></span>
	                                                </span>
	                                            </div>
	                                            <div class="social-chat">
	                                                <div class="your-msg">
	                                                    <div class="media">
	                                                        <img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="{{asset('assets/images/user/1.jpg')}}" />
	                                                        <div class="media-body">
	                                                            <span class="f-w-600">
	                                                                Jason Borne <span>1 Year Ago <i class="fa fa-reply font-primary"></i></span>
	                                                            </span>
	                                                            <p>we are working for the dance and sing songs. this car is very awesome for the youngster. please vote this car and like our post</p>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                                <div class="other-msg">
	                                                    <div class="media">
	                                                        <img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="{{asset('assets/images/user/2.png')}}" />
	                                                        <div class="media-body">
	                                                            <span class="f-w-600">
	                                                                Alexendra Dhadio <span>1 Month Ago <i class="fa fa-reply font-primary"></i></span>
	                                                            </span>
	                                                            <p>yes, really very awesome car i see the features of this car in the official website of #Mercedes-Benz and really impressed :-)</p>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                                <div class="other-msg">
	                                                    <div class="media">
	                                                        <img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="{{asset('assets/images/user/3.png')}}" />
	                                                        <div class="media-body">
	                                                            <span class="f-w-600">
	                                                                Olivia Jon <span>15 Days Ago <i class="fa fa-reply font-primary"></i></span>
	                                                            </span>
	                                                            <p>i like lexus cars, lexus cars are most beautiful with the awesome features, but this car is really outstanding than lexus</p>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                                <div class="your-msg">
	                                                    <div class="media">
	                                                        <img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="{{asset('assets/images/user/1.jpg')}}" />
	                                                        <div class="media-body">
	                                                            <span class="f-w-600">
	                                                                Issa Bell <span>1 Year Ago <i class="fa fa-reply font-primary"></i></span>
	                                                            </span>
	                                                            <p>we are working for the dance and sing songs. this car is very awesome for the youngster. please vote this car and like our post</p>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                                <div class="text-center"><a class="f-w-600" href="javascript:void(0)">More Commnets</a></div>
	                                            </div>
	                                            <div class="comments-box">
	                                                <div class="media">
	                                                    <img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="{{asset('assets/images/user/1.jpg')}}" />
	                                                    <div class="media-body">
	                                                        <div class="input-group text-box">
	                                                            <input class="form-control input-txt-bx" type="text" name="message-to-send" placeholder="Post Your commnets" />
	                                                            <div class="input-group-text"><img src="{{asset('assets/images/smiley.png')}}" alt="" /></div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-sm-12">
	                                <div class="card">
	                                    <div class="card-body">
	                                        <div class="new-users-social">
	                                            <div class="media">
	                                                <img class="rounded-circle image-radius m-r-15" src="{{asset('assets/images/user/1.jpg')}}" alt="" />
	                                                <div class="media-body">
	                                                    <h6 class="mb-0 f-w-700">ELANA</h6>
	                                                    <p>January, 12,2019</p>
	                                                </div>
	                                                <span class="pull-right mt-0"><i data-feather="more-vertical"></i></span>
	                                            </div>
	                                        </div>
	                                        <img class="img-fluid" alt="" src="{{asset('assets/images/social-app/timeline-2.png')}}" />
	                                        <div class="timeline-content">
	                                            <p>
	                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed urna in justo euismod condimentum. Fusce placerat enim et odio molestie sagittis.
	                                            </p>
	                                            <div class="like-content">
	                                                <span><i class="fa fa-heart font-danger"></i></span>
	                                                <span class="pull-right comment-number">
	                                                    <span>20 </span><span><i class="fa fa-share-alt me-0"></i></span>
	                                                </span>
	                                                <span class="pull-right comment-number">
	                                                    <span>10 </span><span><i class="fa fa-comments-o"></i></span>
	                                                </span>
	                                            </div>
	                                            <div class="social-chat">
	                                                <div class="your-msg">
	                                                    <div class="media">
	                                                        <img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="{{asset('assets/images/user/1.jpg')}}" />
	                                                        <div class="media-body">
	                                                            <span class="f-w-600">
	                                                                Jason Borne <span>1 Year Ago <i class="fa fa-reply font-primary"></i></span>
	                                                            </span>
	                                                            <p>we are working for the dance and sing songs. this car is very awesome for the youngster. please vote this car and like our post</p>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                                <div class="your-msg">
	                                                    <div class="media">
	                                                        <img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="{{asset('assets/images/user/1.jpg')}}" />
	                                                        <div class="media-body">
	                                                            <span class="f-w-600">
	                                                                Issa Bell <span>1 Year Ago <i class="fa fa-reply font-primary"></i></span>
	                                                            </span>
	                                                            <p>we are working for the dance and sing songs. this car is very awesome for the youngster. please vote this car and like our post</p>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                                <div class="text-center"><a class="f-w-600" href="javascript:void(0)">More Commnets</a></div>
	                                            </div>
	                                            <div class="comments-box">
	                                                <div class="media">
	                                                    <img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="{{asset('assets/images/user/1.jpg')}}" />
	                                                    <div class="media-body">
	                                                        <div class="input-group text-box">
	                                                            <input class="form-control input-txt-bx" type="text" name="message-to-send" placeholder="Post Your commnets" />
	                                                            <div class="input-group-text"><img src="{{asset('assets/images/smiley.png')}}" alt="" /></div>
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
	                    <div class="col-xl-3 xl-100 box-col-12">
	                        <div class="default-according style-1 faq-accordion job-accordion" id="accordionoc1">
	                            <div class="row">
	                                <div class="col-xl-12 col-md-6 xl-50 box-col-6">
	                                    <div class="card">
	                                        <div class="card-header">
	                                            <h5 class="p-0">
	                                                <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon2" aria-expanded="true" aria-controls="collapseicon2">Profile Intro</button>
	                                            </h5>
	                                        </div>
	                                        <div class="collapse show" id="collapseicon2" aria-labelledby="collapseicon2" data-parent="#accordion">
	                                            <div class="card-body filter-cards-view">
	                                                <div class="filter-view-group">
	                                                    <span class="f-w-600">About Me :</span>
	                                                    <p>
	                                                        Hi, I’m elana, I’m 30 and I work as a web Designer for the “Daydreams” Agency in Pier 56.
	                                                    </p>
	                                                </div>
	                                                <div class="filter-view-group">
	                                                    <span class="f-w-600">Favourite TV shows :</span>
	                                                    <p>
	                                                        Breaking Good, RedDevil, People of Interest, The Running Dead, Found, American Guy.
	                                                    </p>
	                                                </div>
	                                                <div class="filter-view-group">
	                                                    <span class="f-w-600">Favourite Music Bands :</span>
	                                                    <p>
	                                                        Breaking Good, RedDevil, People of Interest, The Running Dead, Found, American Guy.
	                                                    </p>
	                                                </div>
	                                                <div class="social-network theme-form">
	                                                    <span class="f-w-600">Social Networks</span>
	                                                    <button class="btn social-btn btn-fb mb-2 text-center"><i class="fa fa-facebook m-r-5"></i>Facebook</button>
	                                                    <button class="btn social-btn btn-twitter mb-2 text-center"><i class="fa fa-twitter m-r-5"></i>Twitter</button>
	                                                    <button class="btn social-btn btn-google text-center"><i class="fa fa-dribbble m-r-5"></i>Dribbble</button>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-xl-12 col-sm-6 xl-50 box-col-6">
	                                    <div class="card">
	                                        <div class="card-header">
	                                            <h5 class="p-0">
	                                                <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon3" aria-expanded="true" aria-controls="collapseicon3">Followers</button>
	                                            </h5>
	                                        </div>
	                                        <div class="collapse show" id="collapseicon3" aria-labelledby="collapseicon3" data-parent="#accordion">
	                                            <div class="card-body social-list filter-cards-view">
	                                                <div class="media">
	                                                    <img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="{{asset('assets/images/user/2.png')}}" />
	                                                    <div class="media-body">
	                                                        <a href=#><span class="d-block">Bucky Barnes</span></a><a href="javascript:void(0)">Add Friend</a>
	                                                    </div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="{{asset('assets/images/user/3.png')}}" />
	                                                    <div class="media-body">
	                                                        <a href=#><span class="d-block">Sarah Loren</span></a><a href="javascript:void(0)">Add Friend</a>
	                                                    </div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="{{asset('assets/images/user/3.jpg')}}" />
	                                                    <div class="media-body">
	                                                        <a href=#><span class="d-block">Jason Borne</span></a><a href="javascript:void(0)">Add Friend</a>
	                                                    </div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="{{asset('assets/images/user/10.jpg')}}" />
	                                                    <div class="media-body">
	                                                        <a href=#><span class="d-block">Comeren Diaz</span></a><a href="javascript:void(0)">Add Friend</a>
	                                                    </div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="{{asset('assets/images/user/11.png')}}" />
	                                                    <div class="media-body">
	                                                        <a href=#><span class="d-block">Andew Jon</span></a><a href="javascript:void(0)">Add Friend</a>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-xl-12 col-sm-6 xl-50 box-col-6">
	                                    <div class="card">
	                                        <div class="card-header">
	                                            <h5 class="p-0">
	                                                <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon10" aria-expanded="true" aria-controls="collapseicon10">Followings</button>
	                                            </h5>
	                                        </div>
	                                        <div class="collapse show" id="collapseicon10" aria-labelledby="collapseicon10" data-parent="#accordion">
	                                            <div class="card-body social-list filter-cards-view">
	                                                <div class="media">
	                                                    <img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="{{asset('assets/images/user/3.png')}}" />
	                                                    <div class="media-body">
	                                                        <a href=#><span class="d-block">Sarah Loren</span></a><a href="javascript:void(0)">Add Friend</a>
	                                                    </div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="{{asset('assets/images/user/2.png')}}" />
	                                                    <div class="media-body">
	                                                        <a href=#><span class="d-block">Bucky Barnes</span></a><a href="javascript:void(0)">Add Friend</a>
	                                                    </div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="{{asset('assets/images/user/10.jpg')}}" />
	                                                    <div class="media-body">
	                                                        <a href=#><span class="d-block">Comeren Diaz</span></a><a href="javascript:void(0)">Add Friend</a>
	                                                    </div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="{{asset('assets/images/user/3.jpg')}}" />
	                                                    <div class="media-body">
	                                                        <a href=#><span class="d-block">Jason Borne</span></a><a href="javascript:void(0)">Add Friend</a>
	                                                    </div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="{{asset('assets/images/user/11.png')}}" />
	                                                    <div class="media-body">
	                                                        <a href=#><span class="d-block">Andew Jon</span></a><a href="javascript:void(0)">Add Friend</a>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-xl-12 col-sm-6 xl-50 box-col-6">
	                                    <div class="card">
	                                        <div class="card-header">
	                                            <h5 class="p-0">
	                                                <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon4" aria-expanded="true" aria-controls="collapseicon4">Latest Photos</button>
	                                            </h5>
	                                        </div>
	                                        <div class="collapse show" id="collapseicon4" data-parent="#accordion" aria-labelledby="collapseicon4">
	                                            <div class="card-body photos filter-cards-view">
	                                                <ul>
	                                                    <li>
	                                                        <div class="latest-post"><img class="img-fluid" alt="" src="{{asset('assets/images/social-app/post-1.png')}}" /></div>
	                                                    </li>
	                                                    <li>
	                                                        <div class="latest-post"><img class="img-fluid" alt="" src="{{asset('assets/images/social-app/post-2.png')}}" /></div>
	                                                    </li>
	                                                    <li>
	                                                        <div class="latest-post"><img class="img-fluid" alt="" src="{{asset('assets/images/social-app/post-3.png')}}" /></div>
	                                                    </li>
	                                                    <li>
	                                                        <div class="latest-post"><img class="img-fluid" alt="" src="{{asset('assets/images/social-app/post-4.png')}}" /></div>
	                                                    </li>
	                                                    <li>
	                                                        <div class="latest-post"><img class="img-fluid" alt="" src="{{asset('assets/images/social-app/post-5.png')}}" /></div>
	                                                    </li>
	                                                    <li>
	                                                        <div class="latest-post"><img class="img-fluid" alt="" src="{{asset('assets/images/social-app/post-6.png')}}" /></div>
	                                                    </li>
	                                                    <li>
	                                                        <div class="latest-post"><img class="img-fluid" alt="" src="{{asset('assets/images/social-app/post-7.png')}}" /></div>
	                                                    </li>
	                                                    <li>
	                                                        <div class="latest-post"><img class="img-fluid" alt="" src="{{asset('assets/images/social-app/post-8.png')}}" /></div>
	                                                    </li>
	                                                </ul>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-xl-12 col-sm-6 xl-50 box-col-6">
	                                    <div class="card">
	                                        <div class="card-header">
	                                            <h5 class="p-0">
	                                                <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon13" aria-expanded="true" aria-controls="collapseicon13">Friends</button>
	                                            </h5>
	                                        </div>
	                                        <div class="collapse show" id="collapseicon13" data-parent="#accordion" aria-labelledby="collapseicon13">
	                                            <div class="card-body avatar-showcase filter-cards-view">
	                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="#" /></div>
	                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt="#" /></div>
	                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#" /></div>
	                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/2.png')}}" alt="#" /></div>
	                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/3.png')}}" alt="#" /></div>
	                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/6.jpg')}}" alt="#" /></div>
	                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/10.jpg')}}" alt="#" /></div>
	                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/14.png')}}" alt="#" /></div>
	                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#" /></div>
	                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/4.jpg')}}" alt="#" /></div>
	                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/11.png')}}" alt="#" /></div>
	                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/8.jpg')}}" alt="#" /></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-xl-12 col-md-6 xl-50 box-col-6">
	                                    <div class="card"><img class="img-fluid" src="{{asset('assets/images/social-app/timeline-4.png')}}" alt="" /></div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about">
	                <div class="row">
	                    <div class="col-xl-3 xl-40 col-lg-12 col-md-5 box-col-4">
	                        <div class="default-according style-1 faq-accordion job-accordion" id="accordionoc2">
	                            <div class="row">
	                                <div class="col-xl-12">
	                                    <div class="card">
	                                        <div class="card-header">
	                                            <h5 class="p-0">
	                                                <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon5" aria-expanded="true" aria-controls="collapseicon5">My Profile</button>
	                                            </h5>
	                                        </div>
	                                        <div class="collapse show" id="collapseicon5" aria-labelledby="collapseicon5" data-parent="#accordion">
	                                            <div class="card-body socialprofile filter-cards-view">
	                                                <div class="media">
	                                                    <img class="img-50 img-fluid m-r-20 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="" />
	                                                    <div class="media-body">
	                                                        <h5 class="font-primary f-w-600">My Page</h5>
	                                                        <span class="d-block">
	                                                            <span>
	                                                                <i class="fa fa-comments-o"> </i><span class="px-2">Messages<span class="badge badge-pill badge-light">9</span></span>
	                                                            </span>
	                                                        </span>
	                                                        <span class="d-block">
	                                                            <span>
	                                                                <i class="fa fa-bell-o"></i><span class="px-2">Notification<span class="badge badge-pill badge-light">9</span></span>
	                                                            </span>
	                                                        </span>
	                                                    </div>
	                                                </div>
	                                                <div class="social-btngroup d-flex">
	                                                    <button class="btn btn-primary text-center me-2" type="button">Likes</button>
	                                                    <button class="btn btn-light text-center" type="button">View</button>
	                                                </div>
	                                                <div class="likes-profile text-center">
	                                                    <h4 class="f-w-600"><i class="fa fa-heart font-danger"></i> 884</h4>
	                                                </div>
	                                                <h6 class="text-center">35 New Likes This Week</h6>
	                                                <div class="customers text-center social-group">
	                                                    <ul>
	                                                        <li class="d-inline-block">
	                                                            <img
	                                                                class="img-30 rounded-circle"
	                                                                src="{{asset('assets/images/user/3.jpg')}}"
	                                                                alt=""
	                                                                data-container="body"
	                                                                data-bs-toggle="popover"
	                                                                data-placement="top"
	                                                                title=""
	                                                                data-original-title="Johny Waston"
	                                                            />
	                                                        </li>
	                                                        <li class="d-inline-block">
	                                                            <img
	                                                                class="img-30 rounded-circle"
	                                                                src="{{asset('assets/images/user/5.jpg')}}"
	                                                                alt=""
	                                                                data-container="body"
	                                                                data-bs-toggle="popover"
	                                                                data-placement="top"
	                                                                title=""
	                                                                data-original-title="Andew Jon"
	                                                            />
	                                                        </li>
	                                                        <li class="d-inline-block">
	                                                            <img
	                                                                class="img-30 rounded-circle"
	                                                                src="{{asset('assets/images/user/1.jpg')}}"
	                                                                alt=""
	                                                                data-container="body"
	                                                                data-bs-toggle="popover"
	                                                                data-placement="top"
	                                                                title=""
	                                                                data-original-title="Comeren Diaz"
	                                                            />
	                                                        </li>
	                                                        <li class="d-inline-block">
	                                                            <img
	                                                                class="img-30 rounded-circle"
	                                                                src="{{asset('assets/images/user/2.png')}}"
	                                                                alt=""
	                                                                data-container="body"
	                                                                data-bs-toggle="popover"
	                                                                data-placement="top"
	                                                                title=""
	                                                                data-original-title="Bucky Barnes"
	                                                            />
	                                                        </li>
	                                                        <li class="d-inline-block">
	                                                            <img
	                                                                class="img-30 rounded-circle"
	                                                                src="{{asset('assets/images/user/8.jpg')}}"
	                                                                alt=""
	                                                                data-container="body"
	                                                                data-bs-toggle="popover"
	                                                                data-placement="top"
	                                                                title=""
	                                                                data-original-title="Jason Borne"
	                                                            />
	                                                        </li>
	                                                        <li class="d-inline-block">
	                                                            <img
	                                                                class="img-30 rounded-circle"
	                                                                src="{{asset('assets/images/user/11.png')}}"
	                                                                alt=""
	                                                                data-container="body"
	                                                                data-bs-toggle="popover"
	                                                                data-placement="top"
	                                                                title=""
	                                                                data-original-title="Comeren Diaz"
	                                                            />
	                                                        </li>
	                                                    </ul>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-xl-12">
	                                    <div class="card"><img class="img-fluid" alt="" src="{{asset('assets/images/social-app/timeline-3.png')}}" /></div>
	                                </div>
	                                <div class="col-xl-12">
	                                    <div class="card">
	                                        <div class="card-header">
	                                            <h5 class="p-0">
	                                                <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon6" aria-expanded="true" aria-controls="collapseicon6">Mutual Friends</button>
	                                            </h5>
	                                        </div>
	                                        <div class="collapse show" id="collapseicon6" data-parent="#accordion" aria-labelledby="collapseicon6">
	                                            <div class="card-body social-status filter-cards-view">
	                                                <form>
	                                                    <div class="form-group m-0">
	                                                        <input class="form-control-social" type="search" placeholder="Search Contacts.." />
	                                                    </div>
	                                                </form>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/2.png')}}" alt="" />
	                                                    <div class="social-status social-online"></div>
	                                                    <div class="media-body"><span class="f-w-600 d-block">Bucky Barnes</span><span class="d-block">winter@gmail.com</span></div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/10.jpg')}}" alt="" />
	                                                    <div class="social-status social-busy"></div>
	                                                    <div class="media-body"><span class="f-w-600 d-block">Sarah Loren</span><span class="d-block">barnes@gmail.com</span></div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/6.jpg')}}" alt="" />
	                                                    <div class="social-status social-offline"></div>
	                                                    <div class="media-body"><span class="f-w-600 d-block">Jason Borne</span><span class="d-block">jasonb@gmail.com</span></div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/8.jpg')}}" alt="" />
	                                                    <div class="social-status social-offline"></div>
	                                                    <div class="media-body"><span class="f-w-600 d-block">Comeren Diaz</span><span class="d-block">comere@gmail.com</span></div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/14.png')}}" alt="" />
	                                                    <div class="social-status social-online"></div>
	                                                    <div class="media-body"><span class="f-w-600 d-block">Andew Jon</span><span class="d-block">andrewj@gmail.com</span></div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/4.jpg')}}" alt="" />
	                                                    <div class="social-status social-busy"></div>
	                                                    <div class="media-body"><span class="f-w-600 d-block">Johny Waston</span><span class="d-block">johny@gmail.com</span></div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/3.png')}}" alt="" />
	                                                    <div class="social-status social-offline"></div>
	                                                    <div class="media-body"><span class="f-w-600 d-block">Johny William</span><span class="d-block">johnyw@gmail.com</span></div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/2.png')}}" alt="" />
	                                                    <div class="social-status social-online"></div>
	                                                    <div class="media-body"><span class="f-w-600 d-block">Bucky Barnes</span><span class="d-block">winter@gmail.com</span></div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/10.jpg')}}" alt="" />
	                                                    <div class="social-status social-busy"></div>
	                                                    <div class="media-body"><span class="f-w-600 d-block">Sarah Loren</span><span class="d-block">barnes@gmail.com</span></div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/6.jpg')}}" alt="" />
	                                                    <div class="social-status social-offline"></div>
	                                                    <div class="media-body"><span class="f-w-600 d-block">Jason Borne</span><span class="d-block">jasonb@gmail.com</span></div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/8.jpg')}}" alt="" />
	                                                    <div class="social-status social-offline"></div>
	                                                    <div class="media-body"><span class="f-w-600 d-block">Comeren Diaz</span><span class="d-block">comere@gmail.com</span></div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/14.png')}}" alt="" />
	                                                    <div class="social-status social-online"></div>
	                                                    <div class="media-body"><span class="f-w-600 d-block">Andew Jon</span><span class="d-block">andrewj@gmail.com</span></div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/4.jpg')}}" alt="" />
	                                                    <div class="social-status social-busy"></div>
	                                                    <div class="media-body"><span class="f-w-600 d-block">Johny Waston</span><span class="d-block">johny@gmail.com</span></div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/3.png')}}" alt="" />
	                                                    <div class="social-status social-offline"></div>
	                                                    <div class="media-body"><span class="f-w-600 d-block">Johny William</span><span class="d-block">johnyw@gmail.com</span></div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-xl-12">
	                                    <div class="card">
	                                        <div class="card-header">
	                                            <h5 class="p-0">
	                                                <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon14" aria-expanded="true" aria-controls="collapseicon14">Activity Feed</button>
	                                            </h5>
	                                        </div>
	                                        <div class="collapse show" id="collapseicon14" aria-labelledby="collapseicon14" data-parent="#accordion">
	                                            <div class="card-body social-status filter-cards-view">
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/10.jpg')}}" alt="" />
	                                                    <div class="media-body">
	                                                        <span class="f-w-600 d-block">Andew Jon</span>
	                                                        <p>Commented on Shaun Park's <a href="javascript:void(0)">Photo</a></p>
	                                                        <span class="light-span">20 min Ago</span>
	                                                    </div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/3.jpg')}}" alt="" />
	                                                    <div class="media-body">
	                                                        <span class="f-w-600 d-block">Johny Waston</span>
	                                                        <p>Commented on Shaun Park's <a href="javascript:void(0)">Photo</a></p>
	                                                        <span class="light-span">1 hour Ago</span>
	                                                    </div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/5.jpg')}}" alt="" />
	                                                    <div class="media-body">
	                                                        <span class="f-w-600 d-block">Comeren Diaz</span>
	                                                        <p>Commented on Shaun Park's <a href="javascript:void(0)">Photo</a></p>
	                                                        <span class="light-span">1 days Ago</span>
	                                                    </div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/4.jpg')}}" alt="" />
	                                                    <div class="media-body">
	                                                        <span class="f-w-600 d-block">Sarah Loren</span>
	                                                        <p>Commented on Shaun Park's <a href="javascript:void(0)">Photo</a></p>
	                                                        <span class="light-span">2 days Ago</span>
	                                                    </div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/3.jpg')}}" alt="" />
	                                                    <div class="media-body">
	                                                        <span class="f-w-600 d-block">Johny Waston</span>
	                                                        <p>Commented on Shaun Park's <a href="javascript:void(0)">Photo</a></p>
	                                                        <span class="light-span">5 days Ago</span>
	                                                    </div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 rounded-circle m-r-15" src="{{asset('assets/images/user/5.jpg')}}" alt="" />
	                                                    <div class="media-body">
	                                                        <span class="f-w-600 d-block">Comeren Diaz</span>
	                                                        <p>Commented on Shaun Park's <a href="javascript:void(0)">Photo</a></p>
	                                                        <span class="light-span">6 days Ago</span>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-xl-6 xl-60 col-lg-12 col-md-7 box-col-8">
	                        <div class="row">
	                            <div class="col-sm-12">
	                                <div class="card">
	                                    <div class="card-header">
	                                        <h5>Pepole You May Know</h5>
	                                    </div>
	                                    <div class="card-body avatar-showcase pt-0">
	                                        <div class="pepole-knows">
	                                            <ul>
	                                                <li>
	                                                    <div class="add-friend text-center">
	                                                        <img class="img-60 img-fluid rounded-circle" alt="" src="{{asset('assets/images/user/2.png')}}" /><span class="d-block f-w-600">Jason Borne</span>
	                                                        <button class="btn btn-primary btn-xs">Add Friend</button>
	                                                    </div>
	                                                </li>
	                                                <li>
	                                                    <div class="add-friend text-center">
	                                                        <img class="img-60 img-fluid rounded-circle" alt="" src="{{asset('assets/images/user/3.png')}}" /><span class="d-block f-w-600">Anna Mull</span>
	                                                        <button class="btn btn-primary btn-xs">Add Friend</button>
	                                                    </div>
	                                                </li>
	                                                <li>
	                                                    <div class="add-friend text-center">
	                                                        <img class="img-60 img-fluid rounded-circle" alt="" src="{{asset('assets/images/user/3.jpg')}}" /><span class="d-block f-w-600">Dion Cast</span>
	                                                        <button class="btn btn-primary btn-xs">Add Friend</button>
	                                                    </div>
	                                                </li>
	                                                <li>
	                                                    <div class="add-friend text-center">
	                                                        <img class="img-60 img-fluid rounded-circle" alt="" src="{{asset('assets/images/user/4.jpg')}}" /><span class="d-block f-w-600">Karlene Lex</span>
	                                                        <button class="btn btn-primary btn-xs">Add Friend</button>
	                                                    </div>
	                                                </li>
	                                                <li>
	                                                    <div class="add-friend text-center">
	                                                        <img class="img-60 img-fluid rounded-circle" alt="" src="{{asset('assets/images/user/8.jpg')}}" /><span class="d-block f-w-600">Vella Chism</span>
	                                                        <button class="btn btn-primary btn-xs">Add Friend</button>
	                                                    </div>
	                                                </li>
	                                                <li>
	                                                    <div class="add-friend text-center">
	                                                        <img class="img-60 img-fluid rounded-circle" alt="" src="{{asset('assets/images/user/10.jpg')}}" /><span class="d-block f-w-600">Wai Schalk</span>
	                                                        <button class="btn btn-primary btn-xs">Add Friend</button>
	                                                    </div>
	                                                </li>
	                                            </ul>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-sm-12">
	                                <div class="card">
	                                    <div class="card-header social-header">
	                                        <h5 class="f-w-600">
	                                            Hobbies and Interests<span class="pull-right"><i data-feather="more-vertical"></i></span>
	                                        </h5>
	                                    </div>
	                                    <div class="card-body pt-0">
	                                        <div class="row details-about">
	                                            <div class="col-sm-6">
	                                                <div class="your-details">
	                                                    <h6 class="f-w-600">Hobbies:</h6>
	                                                    <p>I like to ride the bike to work, swimming, and working out. I also like reading design magazines, go to museums, and binge watching a good tv show while it’s raining outside.</p>
	                                                </div>
	                                            </div>
	                                            <div class="col-sm-6">
	                                                <div class="your-details your-details-xs">
	                                                    <h6 class="f-w-600">Favourite Music Bands / Artists:</h6>
	                                                    <p>Iron Maid, DC/AC, Megablow, The Ill, Kung Fighters, System of a Revenge.</p>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="row details-about">
	                                            <div class="col-sm-6">
	                                                <div class="your-details">
	                                                    <h6 class="f-w-600">Favourite TV Shows:</h6>
	                                                    <p>Breaking Good, RedDevil, People of Interest, The Running Dead, Found, American Guy.</p>
	                                                </div>
	                                            </div>
	                                            <div class="col-sm-6">
	                                                <div class="your-details your-details-xs">
	                                                    <h6 class="f-w-600">Favourite Books:</h6>
	                                                    <p>The Crime of the Century, Egiptian Mythology 101, The Scarred Wizard, Lord of the Wings, Amongst Gods, The Oracle, A Tale of Air and Water.</p>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="row details-about">
	                                            <div class="col-sm-6">
	                                                <div class="your-details">
	                                                    <h6 class="f-w-600">Favourite Movies:</h6>
	                                                    <p>Idiocratic, The Scarred Wizard and the Fire Crown, Crime Squad Ferrum Man.</p>
	                                                </div>
	                                            </div>
	                                            <div class="col-sm-6">
	                                                <div class="your-details your-details-xs">
	                                                    <h6 class="f-w-600">Favourite Writers:</h6>
	                                                    <p>Martin T. Georgeston, Jhonathan R. Token, Ivana Rowle, Alexandr Platt, Marcus Roth.</p>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="row details-about">
	                                            <div class="col-sm-6">
	                                                <div class="your-details">
	                                                    <h6 class="f-w-600">Favourite Games:</h6>
	                                                    <p>The First of Us, Assassin’s Squad, Dark Assylum, NMAK16, Last Cause 4, Grand Snatch Auto.</p>
	                                                </div>
	                                            </div>
	                                            <div class="col-sm-6">
	                                                <div class="your-details your-details-xs">
	                                                    <h6 class="f-w-600">Other Interests:</h6>
	                                                    <p>Swimming, Surfing, Sviho Diving, Anime, Photography, Tattoos, Street Art.</p>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-sm-12">
	                                <div class="card">
	                                    <div class="card-header social-header">
	                                        <h5>
	                                            <span class="f-w-600">Education and Employement</span><span class="pull-right"><i data-feather="more-vertical"></i></span>
	                                        </h5>
	                                    </div>
	                                    <div class="card-body pt-0">
	                                        <div class="row details-about">
	                                            <div class="col-sm-6">
	                                                <div class="your-details">
	                                                    <h6 class="f-w-600">The New College of Design</h6>
	                                                    <p>2001 - 2006</p>
	                                                    <p>Breaking Good, RedDevil, People of Interest, The Running Dead, Found, American Guy.</p>
	                                                </div>
	                                            </div>
	                                            <div class="col-sm-6">
	                                                <div class="your-details your-details-xs">
	                                                    <h6 class="f-w-600">Digital Design Intern</h6>
	                                                    <p>2006-2008</p>
	                                                    <p>Digital Design Intern for the “Multimedz” agency. Was in charge of the communication with the clients.</p>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="row details-about">
	                                            <div class="col-sm-6">
	                                                <div class="your-details">
	                                                    <h6 class="f-w-600">Rembrandt Institute</h6>
	                                                    <p>2008</p>
	                                                    <p>Five months Digital Illustration course. Professor: Leonardo Stagg.</p>
	                                                </div>
	                                            </div>
	                                            <div class="col-sm-6">
	                                                <div class="your-details your-details-xs">
	                                                    <h6 class="f-w-600">UI/UX Designer</h6>
	                                                    <p>2001 - 2006</p>
	                                                    <p>Breaking Good, RedDevil, People of Interest, The Running Dead, Found, American Guy.</p>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="row details-about">
	                                            <div class="col-sm-6">
	                                                <div class="your-details">
	                                                    <h6 class="f-w-600">The Digital College</h6>
	                                                    <p>2010</p>
	                                                    <p>6 months intensive Motion Graphics course. After Effects and Premire. Professor: Donatello Urtle.</p>
	                                                </div>
	                                            </div>
	                                            <div class="col-sm-6">
	                                                <div class="your-details your-details-xs">
	                                                    <h6 class="f-w-600">The New College of Design</h6>
	                                                    <p>2008 - 2013</p>
	                                                    <p>UI/UX Designer for the “Daydreams” agency.</p>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-sm-12">
	                                <div class="card">
	                                    <div class="card-header">
	                                        <h5>Viewed Your Profile</h5>
	                                    </div>
	                                    <div class="card-body avatar-showcase pt-0">
	                                        <div class="pepole-knows">
	                                            <ul>
	                                                <li>
	                                                    <div class="add-friend text-center">
	                                                        <img class="img-60 img-fluid rounded-circle" alt="" src="{{asset('assets/images/user/2.png')}}" /><span class="d-block f-w-600">Jason Borne</span>
	                                                        <button class="btn btn-primary btn-xs">Add Friend</button>
	                                                    </div>
	                                                </li>
	                                                <li>
	                                                    <div class="add-friend text-center">
	                                                        <img class="img-60 img-fluid rounded-circle" alt="" src="{{asset('assets/images/user/3.png')}}" /><span class="d-block f-w-600">Anna Mull</span>
	                                                        <button class="btn btn-primary btn-xs">Add Friend</button>
	                                                    </div>
	                                                </li>
	                                                <li>
	                                                    <div class="add-friend text-center">
	                                                        <img class="img-60 img-fluid rounded-circle" alt="" src="{{asset('assets/images/user/3.jpg')}}" /><span class="d-block f-w-600">Dion Cast</span>
	                                                        <button class="btn btn-primary btn-xs">Add Friend</button>
	                                                    </div>
	                                                </li>
	                                                <li>
	                                                    <div class="add-friend text-center">
	                                                        <img class="img-60 img-fluid rounded-circle" alt="" src="{{asset('assets/images/user/4.jpg')}}" /><span class="d-block f-w-600">Karlene Lex</span>
	                                                        <button class="btn btn-primary btn-xs">Add Friend</button>
	                                                    </div>
	                                                </li>
	                                                <li>
	                                                    <div class="add-friend text-center">
	                                                        <img class="img-60 img-fluid rounded-circle" alt="" src="{{asset('assets/images/user/8.jpg')}}" /><span class="d-block f-w-600">Vella Chism</span>
	                                                        <button class="btn btn-primary btn-xs">Add Friend</button>
	                                                    </div>
	                                                </li>
	                                                <li>
	                                                    <div class="add-friend text-center">
	                                                        <img class="img-60 img-fluid rounded-circle" alt="" src="{{asset('assets/images/user/10.jpg')}}" /><span class="d-block f-w-600">Wai Schalk</span>
	                                                        <button class="btn btn-primary btn-xs">Add Friend</button>
	                                                    </div>
	                                                </li>
	                                            </ul>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-sm-12">
	                                <div class="card">
	                                    <div class="card-header">
	                                        <h5>Activity Log</h5>
	                                    </div>
	                                    <div class="card-body pt-0">
	                                        <div class="activity-log">
	                                            <div class="my-activity">
	                                                <h6 class="f-w-600">Today</h6>
	                                                <p>
	                                                    <span><i class="m-r-20" data-feather="thumbs-up"></i></span>Comeren Diaz likes your photos.
	                                                </p>
	                                                <p>
	                                                    <span><i class="m-r-20" data-feather="user-plus"></i></span>Karlene Lex and Comeren Diaz now friends.
	                                                </p>
	                                                <p>
	                                                    <span><i class="m-r-20" data-feather="message-square"></i></span>Sarah Loren wrote on your timeline
	                                                </p>
	                                                <p>
	                                                    <span><i class="m-r-20" data-feather="thumbs-up"></i></span>Johny Waston likes your post's.
	                                                </p>
	                                                <p>
	                                                    <span><i class="m-r-20" data-feather="user-plus"></i></span>Andew Jon became friends with Comeren Diaz.
	                                                </p>
	                                                <p>
	                                                    <span><i class="m-r-20" data-feather="user-plus"></i></span>Johny Waston became friends with Bucky Barnes.
	                                                </p>
	                                            </div>
	                                            <div class="my-activity">
	                                                <h6 class="f-w-600">25 December</h6>
	                                                <p>
	                                                    <span><i class="m-r-20" data-feather="thumbs-up"></i></span>Comeren Diaz likes your photos.
	                                                </p>
	                                                <p>
	                                                    <span><i class="m-r-20" data-feather="thumbs-up"></i></span>Johny Waston likes your post's.
	                                                </p>
	                                                <p>
	                                                    <span><i class="m-r-20" data-feather="user-plus"></i></span>Karlene Lex and Comeren Diaz now friends.
	                                                </p>
	                                                <p>
	                                                    <span><i class="m-r-20" data-feather="user-plus"></i></span>Johny Waston became friends with Bucky Barnes.
	                                                </p>
	                                                <p>
	                                                    <span><i class="m-r-20" data-feather="message-square"></i></span>Sarah Loren wrote on your timeline
	                                                </p>
	                                                <p>
	                                                    <span><i class="m-r-20" data-feather="message-square"></i></span>Comeren Diaz wrote on your timeline
	                                                </p>
	                                            </div>
	                                            <div class="my-activity">
	                                                <h6 class="f-w-600">8 september</h6>
	                                                <p>
	                                                    <span><i class="m-r-20" data-feather="thumbs-up"></i></span>Comeren Diaz likes your photos.
	                                                </p>
	                                                <p>
	                                                    <span><i class="m-r-20" data-feather="thumbs-up"></i></span>Johny Waston likes your post's.
	                                                </p>
	                                                <p>
	                                                    <span><i class="m-r-20" data-feather="user-plus"></i></span>Karlene Lex and Comeren Diaz now friends.
	                                                </p>
	                                                <p>
	                                                    <span><i class="m-r-20" data-feather="user-plus"></i></span>Johny Waston became friends with Bucky Barnes.
	                                                </p>
	                                                <p>
	                                                    <span><i class="m-r-20" data-feather="message-square"></i></span>Sarah Loren wrote on your timeline
	                                                </p>
	                                                <p>
	                                                    <span><i class="m-r-20" data-feather="user-plus"></i></span>Andew Jon became friends with Comeren Diaz.
	                                                </p>
	                                            </div>
	                                            <div class="my-activity">
	                                                <h6 class="f-w-600">6 June</h6>
	                                                <p>
	                                                    <span><i class="m-r-20" data-feather="thumbs-up"></i></span>Comeren Diaz likes your photos.
	                                                </p>
	                                                <p>
	                                                    <span><i class="m-r-20" data-feather="user-plus"></i></span>Karlene Lex and Comeren Diaz now friends.
	                                                </p>
	                                                <p>
	                                                    <span><i class="m-r-20" data-feather="message-square"></i></span>Sarah Loren wrote on your timeline
	                                                </p>
	                                                <p>
	                                                    <span><i class="m-r-20" data-feather="thumbs-up"></i></span>Johny Waston likes your post's.
	                                                </p>
	                                                <p>
	                                                    <span><i class="m-r-20" data-feather="user-plus"></i></span>Andew Jon became friends with Comeren Diaz.
	                                                </p>
	                                                <p>
	                                                    <span><i class="m-r-20" data-feather="user-plus"></i></span>Johny Waston became friends with Bucky Barnes.
	                                                </p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-xl-3 xl-100 box-col-12">
	                        <div class="default-according style-1 faq-accordion job-accordion" id="accordionoc3">
	                            <div class="row">
	                                <div class="col-xl-12 xl-50 box-col-6">
	                                    <div class="card">
	                                        <div class="card-header">
	                                            <h5 class="p-0">
	                                                <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon7" aria-expanded="true" aria-controls="collapseicon7">Profile Intro</button>
	                                            </h5>
	                                        </div>
	                                        <div class="collapse show" id="collapseicon7" aria-labelledby="collapseicon" data-parent="#accordion" aria-controls="collapseicon7">
	                                            <div class="card-body filter-cards-view">
	                                                <div class="filter-view-group">
	                                                    <span class="f-w-600">About Me :</span>
	                                                    <p>
	                                                        Hi, I’m elana, I’m 30 and I work as a web Designer for the “Daydreams” Agency in Pier 56.
	                                                    </p>
	                                                </div>
	                                                <div class="filter-view-group">
	                                                    <span class="f-w-600">Favourite TV shows :</span>
	                                                    <p>
	                                                        Breaking Good, RedDevil, People of Interest, The Running Dead, Found, American Guy.
	                                                    </p>
	                                                </div>
	                                                <div class="filter-view-group">
	                                                    <span class="f-w-600">Favourite Music Bands :</span>
	                                                    <p>
	                                                        Breaking Good, RedDevil, People of Interest, The Running Dead, Found, American Guy.
	                                                    </p>
	                                                </div>
	                                                <div class="social-network theme-form">
	                                                    <span class="f-w-600">Social Networks</span>
	                                                    <button class="btn social-btn btn-fb mb-2 text-center"><i class="fa fa-facebook m-r-5"></i>Facebook</button>
	                                                    <button class="btn social-btn btn-twitter mb-2 text-center"><i class="fa fa-twitter m-r-5"></i>Twitter</button>
	                                                    <button class="btn social-btn btn-google text-center"><i class="fa fa-dribbble m-r-5"></i>Dribbble</button>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-xl-12 xl-50 box-col-6">
	                                    <div class="card">
	                                        <div class="card-header">
	                                            <h5 class="p-0">
	                                                <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon8" aria-expanded="true" aria-controls="collapseicon8">Followers</button>
	                                            </h5>
	                                        </div>
	                                        <div class="collapse show" id="collapseicon8" aria-labelledby="collapseicon8" data-parent="#accordion">
	                                            <div class="card-body social-list filter-cards-view">
	                                                <div class="media">
	                                                    <img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="{{asset('assets/images/user/2.png')}}" />
	                                                    <div class="media-body"><span class="d-block">Bucky Barnes</span><a href="javascript:void(0)">Add Friend</a></div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="{{asset('assets/images/user/3.png')}}" />
	                                                    <div class="media-body"><span class="d-block">Sarah Loren</span><a href="javascript:void(0)">Add Friend</a></div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="{{asset('assets/images/user/3.jpg')}}" />
	                                                    <div class="media-body"><span class="d-block">Jason Borne</span><a href="javascript:void(0)">Add Friend</a></div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="{{asset('assets/images/user/10.jpg')}}" />
	                                                    <div class="media-body"><span class="d-block">Comeren Diaz</span><a href="javascript:void(0)">Add Friend</a></div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="{{asset('assets/images/user/11.png')}}" />
	                                                    <div class="media-body"><span class="d-block">Andew Jon</span><a href="javascript:void(0)">Add Friend</a></div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-xl-12 xl-50 box-col-6">
	                                    <div class="card">
	                                        <div class="card-header">
	                                            <h5 class="p-0">
	                                                <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon11" aria-expanded="true" aria-controls="collapseicon11">Followings</button>
	                                            </h5>
	                                        </div>
	                                        <div class="collapse show" id="collapseicon11" aria-labelledby="collapseicon11" data-parent="#accordion">
	                                            <div class="card-body social-list filter-cards-view">
	                                                <div class="media">
	                                                    <img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="{{asset('assets/images/user/3.png')}}" />
	                                                    <div class="media-body"><span class="d-block">Sarah Loren</span><a href="javascript:void(0)">Add Friend</a></div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="{{asset('assets/images/user/2.png')}}" />
	                                                    <div class="media-body"><span class="d-block">Bucky Barnes</span><a href="javascript:void(0)">Add Friend</a></div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="{{asset('assets/images/user/10.jpg')}}" />
	                                                    <div class="media-body"><span class="d-block">Comeren Diaz</span><a href="javascript:void(0)">Add Friend</a></div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="{{asset('assets/images/user/3.jpg')}}" />
	                                                    <div class="media-body"><span class="d-block">Jason Borne</span><a href="javascript:void(0)">Add Friend</a></div>
	                                                </div>
	                                                <div class="media">
	                                                    <img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="{{asset('assets/images/user/11.png')}}" />
	                                                    <div class="media-body"><span class="d-block">Andew Jon</span><a href="javascript:void(0)">Add Friend</a></div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-xl-12 xl-50 box-col-6">
	                                    <div class="card">
	                                        <div class="card-header">
	                                            <h5 class="p-0">
	                                                <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon9" aria-expanded="true" aria-controls="collapseicon9">Latest Photos</button>
	                                            </h5>
	                                        </div>
	                                        <div class="collapse show" id="collapseicon9" data-parent="#accordion" aria-labelledby="collapseicon9">
	                                            <div class="card-body photos filter-cards-view">
	                                                <ul class="text-center">
	                                                    <li>
	                                                        <div class="latest-post"><img class="img-fluid" alt="" src="{{asset('assets/images/social-app/post-1.png')}}" /></div>
	                                                    </li>
	                                                    <li>
	                                                        <div class="latest-post"><img class="img-fluid" alt="" src="{{asset('assets/images/social-app/post-2.png')}}" /></div>
	                                                    </li>
	                                                    <li>
	                                                        <div class="latest-post"><img class="img-fluid" alt="" src="{{asset('assets/images/social-app/post-3.png')}}" /></div>
	                                                    </li>
	                                                    <li>
	                                                        <div class="latest-post"><img class="img-fluid" alt="" src="{{asset('assets/images/social-app/post-4.png')}}" /></div>
	                                                    </li>
	                                                    <li>
	                                                        <div class="latest-post"><img class="img-fluid" alt="" src="{{asset('assets/images/social-app/post-5.png')}}" /></div>
	                                                    </li>
	                                                    <li>
	                                                        <div class="latest-post"><img class="img-fluid" alt="" src="{{asset('assets/images/social-app/post-6.png')}}" /></div>
	                                                    </li>
	                                                    <li>
	                                                        <div class="latest-post"><img class="img-fluid" alt="" src="{{asset('assets/images/social-app/post-7.png')}}" /></div>
	                                                    </li>
	                                                    <li>
	                                                        <div class="latest-post"><img class="img-fluid" alt="" src="{{asset('assets/images/social-app/post-8.png')}}" /></div>
	                                                    </li>
	                                                </ul>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-xl-12 xl-50 box-col-6">
	                                    <div class="card">
	                                        <div class="card-header">
	                                            <h5 class="p-0">
	                                                <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon15" aria-expanded="true" aria-controls="collapseicon15">Friends</button>
	                                            </h5>
	                                        </div>
	                                        <div class="collapse show" id="collapseicon15" data-parent="#accordion" aria-labelledby="collapseicon15">
	                                            <div class="card-body avatar-showcase filter-cards-view">
	                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="#" /></div>
	                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt="#" /></div>
	                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#" /></div>
	                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/2.png')}}" alt="#" /></div>
	                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/3.png')}}" alt="#" /></div>
	                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/6.jpg')}}" alt="#" /></div>
	                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/10.jpg')}}" alt="#" /></div>
	                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/14.png')}}" alt="#" /></div>
	                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#" /></div>
	                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/4.jpg')}}" alt="#" /></div>
	                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/11.png')}}" alt="#" /></div>
	                                                <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/8.jpg')}}" alt="#" /></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-xl-12 xl-50 box-col-6">
	                                    <div class="card"><img class="img-fluid" src="{{asset('assets/images/social-app/timeline-4.png')}}" alt="" /></div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="tab-pane fade" id="friends" role="tabpanel" aria-labelledby="friends">
	                <div class="row">
	                    <div class="col-sm-6 col-lg-6 col-xl-4">
	                        <div class="card custom-card">
	                            <div class="card-header"><img class="img-fluid" src="{{asset('assets/images/user-card/1.jpg')}}" alt="" /></div>
	                            <div class="card-profile"><img class="rounded-circle" src="{{asset('assets/images/avtar/3.jpg')}}" alt="" /></div>
	                            <ul class="card-social">
	                                <li>
	                                    <a href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
	                                </li>
	                                <li>
	                                    <a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a>
	                                </li>
	                                <li>
	                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
	                                </li>
	                                <li>
	                                    <a href="javascript:void(0)"><i class="fa fa-instagram"></i></a>
	                                </li>
	                                <li>
	                                    <a href="javascript:void(0)"><i class="fa fa-rss"></i></a>
	                                </li>
	                            </ul>
	                            <div class="text-center profile-details">
	                                <h4>Mark Jecno</h4>
	                                <h6>Manager</h6>
	                            </div>
	                            <div class="card-footer row">
	                                <div class="col-4 col-sm-4">
	                                    <h6>Follower</h6>
	                                    <h3 class="counter">9564</h3>
	                                </div>
	                                <div class="col-4 col-sm-4">
	                                    <h6>Following</h6>
	                                    <h3><span class="counter">49</span>K</h3>
	                                </div>
	                                <div class="col-4 col-sm-4">
	                                    <h6>Total Post</h6>
	                                    <h3><span class="counter">96</span>M</h3>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-sm-6 col-lg-6 col-xl-4">
	                        <div class="card custom-card">
	                            <div class="card-header"><img class="img-fluid" src="{{asset('assets/images/user-card/2.jpg')}}" alt="" /></div>
	                            <div class="card-profile"><img class="rounded-circle" src="{{asset('assets/images/avtar/16.jpg')}}" alt="" /></div>
	                            <ul class="card-social">
	                                <li>
	                                    <a href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
	                                </li>
	                                <li>
	                                    <a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a>
	                                </li>
	                                <li>
	                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
	                                </li>
	                                <li>
	                                    <a href="javascript:void(0)"><i class="fa fa-instagram"></i></a>
	                                </li>
	                                <li>
	                                    <a href="javascript:void(0)"><i class="fa fa-rss"></i></a>
	                                </li>
	                            </ul>
	                            <div class="text-center profile-details">
	                                <h4>Johan Deo</h4>
	                                <h6>Designer</h6>
	                            </div>
	                            <div class="card-footer row">
	                                <div class="col-4 col-sm-4">
	                                    <h6>Follower</h6>
	                                    <h3 class="counter">2578</h3>
	                                </div>
	                                <div class="col-4 col-sm-4">
	                                    <h6>Following</h6>
	                                    <h3><span class="counter">26</span>K</h3>
	                                </div>
	                                <div class="col-4 col-sm-4">
	                                    <h6>Total Post</h6>
	                                    <h3><span class="counter">96</span>M</h3>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-sm-6 col-lg-6 col-xl-4">
	                        <div class="card custom-card">
	                            <div class="card-header"><img class="img-fluid" src="{{asset('assets/images/user-card/3.jpg')}}" alt="" /></div>
	                            <div class="card-profile"><img class="rounded-circle" src="{{asset('assets/images/avtar/11.jpg')}}" alt="" /></div>
	                            <ul class="card-social">
	                                <li>
	                                    <a href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
	                                </li>
	                                <li>
	                                    <a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a>
	                                </li>
	                                <li>
	                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
	                                </li>
	                                <li>
	                                    <a href="javascript:void(0)"><i class="fa fa-instagram"></i></a>
	                                </li>
	                                <li>
	                                    <a href="javascript:void(0)"><i class="fa fa-rss"></i></a>
	                                </li>
	                            </ul>
	                            <div class="text-center profile-details">
	                                <h4>Dev John</h4>
	                                <h6>Devloper</h6>
	                            </div>
	                            <div class="card-footer row">
	                                <div class="col-4 col-sm-4">
	                                    <h6>Follower</h6>
	                                    <h3 class="counter">6545</h3>
	                                </div>
	                                <div class="col-4 col-sm-4">
	                                    <h6>Following</h6>
	                                    <h3><span class="counter">91</span>K</h3>
	                                </div>
	                                <div class="col-4 col-sm-4">
	                                    <h6>Total Post</h6>
	                                    <h3><span class="counter">21</span>M</h3>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-sm-6 col-lg-6 col-xl-4">
	                        <div class="card custom-card">
	                            <div class="card-header"><img class="img-fluid" src="{{asset('assets/images/user-card/7.jpg')}}" alt="" /></div>
	                            <div class="card-profile"><img class="rounded-circle" src="{{asset('assets/images/avtar/16.jpg')}}" alt="" /></div>
	                            <ul class="card-social">
	                                <li>
	                                    <a href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
	                                </li>
	                                <li>
	                                    <a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a>
	                                </li>
	                                <li>
	                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
	                                </li>
	                                <li>
	                                    <a href="javascript:void(0)"><i class="fa fa-instagram"></i></a>
	                                </li>
	                                <li>
	                                    <a href="javascript:void(0)"><i class="fa fa-rss"></i></a>
	                                </li>
	                            </ul>
	                            <div class="text-center profile-details">
	                                <h4>Johan Deo</h4>
	                                <h6>Designer</h6>
	                            </div>
	                            <div class="card-footer row">
	                                <div class="col-4 col-sm-4">
	                                    <h6>Follower</h6>
	                                    <h3 class="counter">2578</h3>
	                                </div>
	                                <div class="col-4 col-sm-4">
	                                    <h6>Following</h6>
	                                    <h3><span class="counter">26</span>K</h3>
	                                </div>
	                                <div class="col-4 col-sm-4">
	                                    <h6>Total Post</h6>
	                                    <h3><span class="counter">96</span>M</h3>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-sm-6 col-lg-6 col-xl-4">
	                        <div class="card custom-card">
	                            <div class="card-header"><img class="img-fluid" src="{{asset('assets/images/user-card/5.jpg')}}" alt="" /></div>
	                            <div class="card-profile"><img class="rounded-circle" src="{{asset('assets/images/avtar/11.jpg')}}" alt="" /></div>
	                            <ul class="card-social">
	                                <li>
	                                    <a href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
	                                </li>
	                                <li>
	                                    <a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a>
	                                </li>
	                                <li>
	                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
	                                </li>
	                                <li>
	                                    <a href="javascript:void(0)"><i class="fa fa-instagram"></i></a>
	                                </li>
	                                <li>
	                                    <a href="javascript:void(0)"><i class="fa fa-rss"></i></a>
	                                </li>
	                            </ul>
	                            <div class="text-center profile-details">
	                                <h4>Dev John</h4>
	                                <h6>Devloper</h6>
	                            </div>
	                            <div class="card-footer row">
	                                <div class="col-4 col-sm-4">
	                                    <h6>Follower</h6>
	                                    <h3 class="counter">6545</h3>
	                                </div>
	                                <div class="col-4 col-sm-4">
	                                    <h6>Following</h6>
	                                    <h3><span class="counter">91</span>K</h3>
	                                </div>
	                                <div class="col-4 col-sm-4">
	                                    <h6>Total Post</h6>
	                                    <h3><span class="counter">21</span>M</h3>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-sm-6 col-lg-6 col-xl-4">
	                        <div class="card custom-card">
	                            <div class="card-header"><img class="img-fluid" src="{{asset('assets/images/user-card/6.jpg')}}" alt="" /></div>
	                            <div class="card-profile"><img class="rounded-circle" src="{{asset('assets/images/avtar/3.jpg')}}" alt="" /></div>
	                            <ul class="card-social">
	                                <li>
	                                    <a href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
	                                </li>
	                                <li>
	                                    <a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a>
	                                </li>
	                                <li>
	                                    <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
	                                </li>
	                                <li>
	                                    <a href="javascript:void(0)"><i class="fa fa-instagram"></i></a>
	                                </li>
	                                <li>
	                                    <a href="javascript:void(0)"><i class="fa fa-rss"></i></a>
	                                </li>
	                            </ul>
	                            <div class="text-center profile-details">
	                                <h4>Mark Jecno</h4>
	                                <h6>Manager</h6>
	                            </div>
	                            <div class="card-footer row">
	                                <div class="col-4 col-sm-4">
	                                    <h6>Follower</h6>
	                                    <h3 class="counter">9564</h3>
	                                </div>
	                                <div class="col-4 col-sm-4">
	                                    <h6>Following</h6>
	                                    <h3><span class="counter">49</span>K</h3>
	                                </div>
	                                <div class="col-4 col-sm-4">
	                                    <h6>Total Post</h6>
	                                    <h3><span class="counter">96</span>M</h3>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="tab-pane fade" id="photos" role="tabpanel" aria-labelledby="photos">
	                <div class="row">
	                    <div class="col-sm-12">
	                        <div class="card">
	                            <div class="my-gallery card-body row gallery-with-description" itemscope="">
	                                <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
	                                    <a href="{{asset('assets/images/big-lightgallry/01.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                        <img src="{{asset('assets/images/lightgallry/01.jpg')}}" itemprop="thumbnail" alt="Image description" />
	                                        <div class="caption">
	                                            <h4>Johan Deo</h4>
	                                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                                        </div>
	                                    </a>
	                                    <figcaption itemprop="caption description">
	                                        <h4>Johan Deo</h4>
	                                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                                    </figcaption>
	                                </figure>
	                                <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
	                                    <a href="{{asset('assets/images/big-lightgallry/02.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                        <img src="{{asset('assets/images/lightgallry/02.jpg')}}" itemprop="thumbnail" alt="Image description" />
	                                        <div class="caption">
	                                            <h4>Dev John</h4>
	                                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                                        </div>
	                                    </a>
	                                    <figcaption itemprop="caption description">
	                                        <h4>Dev John</h4>
	                                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                                    </figcaption>
	                                </figure>
	                                <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
	                                    <a href="{{asset('assets/images/big-lightgallry/03.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                        <img src="{{asset('assets/images/lightgallry/03.jpg')}}" itemprop="thumbnail" alt="Image description" />
	                                        <div class="caption">
	                                            <h4>Johan Deo</h4>
	                                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                                        </div>
	                                    </a>
	                                    <figcaption itemprop="caption description">
	                                        <h4>Johan Deo</h4>
	                                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                                    </figcaption>
	                                </figure>
	                                <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
	                                    <a href="{{asset('assets/images/big-lightgallry/04.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                        <img src="{{asset('assets/images/lightgallry/04.jpg')}}" itemprop="thumbnail" alt="Image description" />
	                                        <div class="caption">
	                                            <h4>Comeren Diaz</h4>
	                                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                                        </div>
	                                    </a>
	                                    <figcaption itemprop="caption description">
	                                        <h4>Comeren Diaz</h4>
	                                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                                    </figcaption>
	                                </figure>
	                                <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
	                                    <a href="{{asset('assets/images/big-lightgallry/05.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                        <img src="{{asset('assets/images/lightgallry/05.jpg')}}" itemprop="thumbnail" alt="Image description" />
	                                        <div class="caption">
	                                            <h4>Andew Jon</h4>
	                                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                                        </div>
	                                    </a>
	                                    <figcaption itemprop="caption description">
	                                        <h4>Andew Jon</h4>
	                                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                                    </figcaption>
	                                </figure>
	                                <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
	                                    <a href="{{asset('assets/images/big-lightgallry/011.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                        <img src="{{asset('assets/images/lightgallry/011.jpg')}}" itemprop="thumbnail" alt="Image description" />
	                                        <div class="caption">
	                                            <h4>Sarah Loren</h4>
	                                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                                        </div>
	                                    </a>
	                                    <figcaption itemprop="caption description">
	                                        <h4>Sarah Loren</h4>
	                                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                                    </figcaption>
	                                </figure>
	                                <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
	                                    <a href="{{asset('assets/images/big-lightgallry/010.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                        <img src="{{asset('assets/images/lightgallry/010.jpg')}}" itemprop="thumbnail" alt="Image description" />
	                                        <div class="caption">
	                                            <h4>Andew Jon</h4>
	                                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                                        </div>
	                                    </a>
	                                    <figcaption itemprop="caption description">
	                                        <h4>Andew Jon</h4>
	                                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                                    </figcaption>
	                                </figure>
	                                <figure class="col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
	                                    <a href="{{asset('assets/images/big-lightgallry/08.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                        <img src="{{asset('assets/images/lightgallry/08.jpg')}}" itemprop="thumbnail" alt="Image description" />
	                                        <div class="caption">
	                                            <h4>Bucky Barnes</h4>
	                                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                                        </div>
	                                    </a>
	                                    <figcaption itemprop="caption description">
	                                        <h4>Bucky Barnes</h4>
	                                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                                    </figcaption>
	                                </figure>
	                            </div>
	                            <!-- Root element of PhotoSwipe. Must have class pswp.-->
	                            <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
	                                <!--
	                          Background of PhotoSwipe.
	                          It's a separate element, as animating opacity is faster than rgba().
	                          -->
	                                <div class="pswp__bg"></div>
	                                <!-- Slides wrapper with overflow:hidden.-->
	                                <div class="pswp__scroll-wrap">
	                                    <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory.-->
	                                    <!-- don't modify these 3 pswp__item elements, data is added later on.-->
	                                    <div class="pswp__container">
	                                        <div class="pswp__item"></div>
	                                        <div class="pswp__item"></div>
	                                        <div class="pswp__item"></div>
	                                    </div>
	                                    <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed.-->
	                                    <div class="pswp__ui pswp__ui--hidden">
	                                        <div class="pswp__top-bar">
	                                            <!-- Controls are self-explanatory. Order can be changed.-->
	                                            <div class="pswp__counter"></div>
	                                            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
	                                            <button class="pswp__button pswp__button--share" title="Share"></button>
	                                            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
	                                            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
	                                            <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR-->
	                                            <!-- element will get class pswp__preloader--active when preloader is running-->
	                                            <div class="pswp__preloader">
	                                                <div class="pswp__preloader__icn">
	                                                    <div class="pswp__preloader__cut">
	                                                        <div class="pswp__preloader__donut"></div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
	                                            <div class="pswp__share-tooltip"></div>
	                                        </div>
	                                        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
	                                        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
	                                        <div class="pswp__caption">
	                                            <div class="pswp__caption__center"></div>
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
	<script src="{{asset('assets/js/photoswipe/photoswipe.min.js')}}"></script>
    <script src="{{asset('assets/js/photoswipe/photoswipe-ui-default.min.js')}}"></script>
    <script src="{{asset('assets/js/photoswipe/photoswipe.js')}}"></script>
	@endpush

@endsection