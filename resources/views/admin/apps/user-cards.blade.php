@extends('layouts.admin.master')

@section('title')User Cards
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>User Cards</h3>
		@endslot
		<li class="breadcrumb-item">Users</li>
		<li class="breadcrumb-item active">User Cards</li>
	@endcomponent
	
	<div class="container-fluid user-card">
	    <div class="row">
	        <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
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
	                    <a href="#"> <h4>Mark Jecno</h4></a>
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
	        <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
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
	                    <a href="#"> <h4>Johan Deo</h4></a>
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
	        <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
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
	                    <a href="#"> <h4>Dev John</h4></a>
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
	        <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
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
	                    <a href="#"> <h4>Johan Deo</h4></a>
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
	        <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
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
	                    <a href="#"> <h4>Dev John</h4></a>
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
	        <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
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
	                    <a href="#"> <h4>Mark Jecno</h4></a>
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
	
	@push('scripts')
	@endpush

@endsection