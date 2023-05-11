@extends('layouts.admin.master')

@section('title')User Profile
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/photoswipe.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>User Profile</h3>
		@endslot
		<li class="breadcrumb-item">Users</li>
		<li class="breadcrumb-item active">User Profile</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="user-profile">
	        <div class="row">
	            <!-- user profile header start-->
	            <div class="col-sm-12">
	                <div class="card profile-header">
	                    <img class="img-fluid bg-img-cover" src="{{asset('assets/images/user-profile/bg-profile.jpg')}}" alt="" />
	                    <div class="profile-img-wrrap"><img class="img-fluid bg-img-cover" src="{{asset('assets/images/user-profile/bg-profile.jpg')}}" alt="" /></div>
	                    <div class="userpro-box">
	                        <div class="img-wrraper">
	                            <div class="avatar"><img class="img-fluid" alt="" src="{{asset('assets/images/user/7.jpg')}}" /></div>
	                            <a class="icon-wrapper" href="#"><i class="icofont icofont-pencil-alt-5"></i></a>
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
	                                        <span>Likes</span>
	                                    </li>
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <!-- user profile header end-->
	            <div class="col-xl-3 col-lg-12 col-md-5 xl-35">
	                <div class="default-according style-1 faq-accordion job-accordion">
	                    <div class="row">
	                        <div class="col-xl-12">
	                            <div class="card">
	                                <div class="card-header">
	                                    <h5 class="p-0">
	                                        <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon2" aria-expanded="true" aria-controls="collapseicon2">About Me</button>
	                                    </h5>
	                                </div>
	                                <div class="collapse show" id="collapseicon2" aria-labelledby="collapseicon2" data-parent="#accordion">
	                                    <div class="card-body post-about">
	                                        <ul>
	                                            <li>
	                                                <div class="icon"><i data-feather="briefcase"></i></div>
	                                                <div>
	                                                    <h5>UX desginer at Pixelstrap</h5>
	                                                    <p>banglore - 2021</p>
	                                                </div>
	                                            </li>
	                                            <li>
	                                                <div class="icon"><i data-feather="book"></i></div>
	                                                <div>
	                                                    <h5>studied computer science</h5>
	                                                    <p>at london univercity - 2015</p>
	                                                </div>
	                                            </li>
	                                            <li>
	                                                <div class="icon"><i data-feather="heart"></i></div>
	                                                <div>
	                                                    <h5>relationship status</h5>
	                                                    <p>single</p>
	                                                </div>
	                                            </li>
	                                            <li>
	                                                <div class="icon"><i data-feather="map-pin"></i></div>
	                                                <div>
	                                                    <h5>lived in london</h5>
	                                                    <p>last 5 year</p>
	                                                </div>
	                                            </li>
	                                            <li>
	                                                <div class="icon"><i data-feather="droplet"></i></div>
	                                                <div>
	                                                    <h5>blood group</h5>
	                                                    <p>O+ positive</p>
	                                                </div>
	                                            </li>
	                                        </ul>
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
	                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-6">
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
	                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-6">
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
	                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-6">
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
	                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-6">
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
	                    </div>
	                </div>
	            </div>
	            <div class="col-xl-9 col-lg-12 col-md-7 xl-65">
	                <div class="row">
	                    <!-- profile post start-->
	                    <div class="col-sm-12">
	                        <div class="card">
	                            <div class="profile-post">
	                                <div class="post-header">
	                                    <div class="media">
	                                        <img class="img-thumbnail rounded-circle me-3" src="{{asset('assets/images/user/7.jpg')}}" alt="Generic placeholder image" />
	                                        <div class="media-body align-self-center">
	                                            <a href="#"> <h5 class="user-name">Emay Walter</h5></a>
	                                            <h6>22 Hours ago</h6>
	                                        </div>
	                                    </div>
	                                    <div class="post-setting"><i class="fa fa-ellipsis-h"></i></div>
	                                </div>
	                                <div class="post-body">
	                                    <div class="img-container">
	                                        <div class="my-gallery" id="aniimated-thumbnials" itemscope="">
	                                            <figure itemprop="associatedMedia" itemscope="">
	                                                <a href="{{asset('assets/images/user-profile/post1.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                                    <img class="img-fluid rounded" src="{{asset('assets/images/user-profile/post1.jpg')}}" itemprop="thumbnail" alt="gallery" />
	                                                </a>
	                                                <figcaption itemprop="caption description">Image caption 1</figcaption>
	                                            </figure>
	                                        </div>
	                                    </div>
	                                    <div class="post-react">
	                                        <ul>
	                                            <li><img class="rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" /></li>
	                                            <li><img class="rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt="" /></li>
	                                            <li><img class="rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="" /></li>
	                                        </ul>
	                                        <h6>+5 people react this post</h6>
	                                    </div>
	                                    <p>
	                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
	                                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
	                                        qui officia deserunt mollit anim id est laborum.
	                                    </p>
	                                    <ul class="post-comment">
	                                        <li>
	                                            <label>
	                                                <a href="#"><i data-feather="heart"></i>&nbsp;&nbsp;Like<span class="counter">50</span></a>
	                                            </label>
	                                        </li>
	                                        <li>
	                                            <label>
	                                                <a href="#"><i data-feather="message-square"></i>&nbsp;&nbsp;Comment<span class="counter">70</span></a>
	                                            </label>
	                                        </li>
	                                        <li>
	                                            <label>
	                                                <a href="#"><i data-feather="share"></i>&nbsp;&nbsp;share<span class="counter">20</span></a>
	                                            </label>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- profile post end-->
	                    <!-- profile post start-->
	                    <div class="col-sm-12">
	                        <div class="card">
	                            <div class="profile-post">
	                                <div class="post-header">
	                                    <div class="media">
	                                        <img class="img-thumbnail rounded-circle me-3" src="{{asset('assets/images/user/7.jpg')}}" alt="Generic placeholder image" />
	                                        <div class="media-body align-self-center">
	                                            <a href="#"> <h5 class="user-name">Emay Walter</h5></a>
	                                            <h6>5 Hours ago</h6>
	                                        </div>
	                                    </div>
	                                    <div class="post-setting"><i class="fa fa-ellipsis-h"></i></div>
	                                </div>
	                                <div class="post-body">
	                                    <div class="img-container">
	                                        <div class="row mt-4 pictures my-gallery" id="aniimated-thumbnials-2" itemscope="">
	                                            <figure class="col-sm-6" itemprop="associatedMedia" itemscope="">
	                                                <a href="{{asset('assets/images/user-profile/post2.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                                    <img class="img-fluid rounded" src="{{asset('assets/images/user-profile/post2.jpg')}}" itemprop="thumbnail" alt="gallery" />
	                                                </a>
	                                                <figcaption itemprop="caption description">Image caption 1</figcaption>
	                                            </figure>
	                                            <figure class="col-sm-6" itemprop="associatedMedia" itemscope="">
	                                                <a href="{{asset('assets/images/user-profile/post3.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                                    <img class="img-fluid rounded" src="{{asset('assets/images/user-profile/post3.jpg')}}" itemprop="thumbnail" alt="gallery" />
	                                                </a>
	                                                <figcaption itemprop="caption description">Image caption 2</figcaption>
	                                            </figure>
	                                        </div>
	                                    </div>
	                                    <div class="post-react">
	                                        <ul>
	                                            <li><img class="rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" /></li>
	                                            <li><img class="rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt="" /></li>
	                                            <li><img class="rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="" /></li>
	                                        </ul>
	                                        <h6>+25 people react this post</h6>
	                                    </div>
	                                    <p>
	                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
	                                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
	                                        qui officia deserunt mollit anim id est laborum.
	                                    </p>
	                                    <ul class="post-comment">
	                                        <li>
	                                            <label>
	                                                <a href="#"><i data-feather="heart"></i>&nbsp;&nbsp;Like<span class="counter">520</span></a>
	                                            </label>
	                                        </li>
	                                        <li>
	                                            <label>
	                                                <a href="#"><i data-feather="message-square"></i>&nbsp;&nbsp;Comment<span class="counter">85</span></a>
	                                            </label>
	                                        </li>
	                                        <li>
	                                            <label>
	                                                <a href="#"><i data-feather="share"></i>&nbsp;&nbsp;share<span class="counter">30</span></a>
	                                            </label>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- profile post end   -->
	                    <!-- profile post start-->
	                    <div class="col-sm-12">
	                        <div class="card">
	                            <div class="profile-post">
	                                <div class="post-header">
	                                    <div class="media">
	                                        <img class="img-thumbnail rounded-circle me-3" src="{{asset('assets/images/user/7.jpg')}}" alt="Generic placeholder image" />
	                                        <div class="media-body align-self-center">
	                                            <a href="#"> <h5 class="user-name">Emay Walter</h5></a>
	                                            <h6>2 Hours ago</h6>
	                                        </div>
	                                    </div>
	                                    <div class="post-setting"><i class="fa fa-ellipsis-h"></i></div>
	                                </div>
	                                <div class="post-body">
	                                    <div class="img-container">
	                                        <div class="my-gallery" id="aniimated-thumbnials" itemscope="">
	                                            <figure itemprop="associatedMedia" itemscope="">
	                                                <a href="{{asset('assets/images/user-profile/post4.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                                    <img class="img-fluid rounded" src="{{asset('assets/images/user-profile/post4.jpg')}}" itemprop="thumbnail" alt="gallery" />
	                                                </a>
	                                                <figcaption itemprop="caption description">Image caption 1</figcaption>
	                                            </figure>
	                                        </div>
	                                    </div>
	                                    <div class="post-react">
	                                        <ul>
	                                            <li><img class="rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" /></li>
	                                            <li><img class="rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt="" /></li>
	                                            <li><img class="rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="" /></li>
	                                        </ul>
	                                        <h6>+20 people react this post</h6>
	                                    </div>
	                                    <p>
	                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
	                                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
	                                        qui officia deserunt mollit anim id est laborum.
	                                    </p>
	                                    <ul class="post-comment">
	                                        <li>
	                                            <label>
	                                                <a href="#"><i data-feather="heart"></i>&nbsp;&nbsp;Like<span class="counter">407</span></a>
	                                            </label>
	                                        </li>
	                                        <li>
	                                            <label>
	                                                <a href="#"><i data-feather="message-square"></i>&nbsp;&nbsp;Comment<span class="counter">302</span></a>
	                                            </label>
	                                        </li>
	                                        <li>
	                                            <label>
	                                                <a href="#"><i data-feather="share"></i>&nbsp;&nbsp;share<span class="counter">180</span></a>
	                                            </label>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- profile post end                           -->
	                </div>
	            </div>
	            <!-- user profile fifth-style end-->
	            <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
	                <div class="pswp__bg"></div>
	                <div class="pswp__scroll-wrap">
	                    <div class="pswp__container">
	                        <div class="pswp__item"></div>
	                        <div class="pswp__item"></div>
	                        <div class="pswp__item"></div>
	                    </div>
	                    <div class="pswp__ui pswp__ui--hidden">
	                        <div class="pswp__top-bar">
	                            <div class="pswp__counter"></div>
	                            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
	                            <button class="pswp__button pswp__button--share" title="Share"></button>
	                            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
	                            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
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
	
	@push('scripts')
	<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
    <script src="{{asset('assets/js/photoswipe/photoswipe.min.js')}}"></script>
    <script src="{{asset('assets/js/photoswipe/photoswipe-ui-default.min.js')}}"></script>
    <script src="{{asset('assets/js/photoswipe/photoswipe.js')}}"></script>
	@endpush

@endsection