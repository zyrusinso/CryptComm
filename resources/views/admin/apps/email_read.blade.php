@extends('layouts.admin.master')

@section('title')Email Read

 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Email Read</h3>
		@endslot
		<li class="breadcrumb-item">Apps</li>
		<li class="breadcrumb-item">Email</li>
		<li class="breadcrumb-item active">Email Read</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="email-wrap">
	        <div class="row">
	            <div class="col-xl-3 col-md-6 xl-40">
	                <div class="email-sidebar">
	                    <a class="btn btn-primary email-aside-toggle" href="javascript:void(0)">email filter</a>
	                    <div class="email-left-aside">
	                        <div class="card">
	                            <div class="card-body">
	                                <div class="email-app-sidebar">
	                                    <div class="media">
	                                        <div class="media-size-email"><img class="me-3 rounded-circle" src="{{asset('assets/images/user/user.png')}}" alt="" /></div>
	                                        <div class="media-body">
	                                            <h6 class="f-w-600">MARKJENCO</h6>
	                                            <p>Markjecno@gmail.com</p>
	                                        </div>
	                                    </div>
	                                    <ul class="nav main-menu" role="tablist">
	                                        <li class="nav-item">
	                                            <a class="btn-primary btn-block btn-mail" id="pills-darkhome-tab" data-bs-toggle="pill" href="#pills-darkhome" role="tab" aria-controls="pills-darkhome" aria-selected="true">
	                                                <i class="icofont icofont-envelope me-2"></i> NEW MAIL
	                                            </a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a class="show" id="pills-darkprofile-tab" data-bs-toggle="pill" href="#pills-darkprofile" role="tab" aria-controls="pills-darkprofile" aria-selected="false">
	                                                <span class="title"><i class="icon-import"></i> Inbox</span><span class="badge pull-right">(236)</span>
	                                            </a>
	                                        </li>
	                                        <li>
	                                            <a href="#">
	                                                <span class="title"><i class="icon-folder"></i> All mail</span>
	                                            </a>
	                                        </li>
	                                        <li>
	                                            <a href="#">
	                                                <span class="title"><i class="icon-new-window"></i> Sent</span><span class="badge pull-right">(69)</span>
	                                            </a>
	                                        </li>
	                                        <li>
	                                            <a href="#">
	                                                <span class="title"><i class="icon-pencil-alt"></i> DRAFT</span><span class="badge pull-right">(59)</span>
	                                            </a>
	                                        </li>
	                                        <li>
	                                            <a href="#">
	                                                <span class="title"><i class="icon-trash"></i> TRASH</span><span class="badge pull-right">(99)</span>
	                                            </a>
	                                        </li>
	                                        <li>
	                                            <a href="#">
	                                                <span class="title"><i class="icon-info-alt"></i> IMPORTANT</span>
	                                            </a>
	                                        </li>
	                                        <li>
	                                            <a href="#">
	                                                <span class="title"><i class="icon-star"></i> Starred</span>
	                                            </a>
	                                        </li>
	                                        <li>
	                                            <hr />
	                                        </li>
	                                        <li>
	                                            <a href="#">
	                                                <span class="title"><i class="icon-email"></i> UNREAD</span>
	                                            </a>
	                                        </li>
	                                        <li>
	                                            <a href="#">
	                                                <span class="title"><i class="icon-export"></i> SPAM</span>
	                                            </a>
	                                        </li>
	                                        <li>
	                                            <a href="#">
	                                                <span class="title"><i class="icon-share"></i> OUTBOX</span>
	                                            </a>
	                                        </li>
	                                        <li>
	                                            <a href="#">
	                                                <span class="title"><i class="icon-file"></i> UPDATE</span>
	                                            </a>
	                                        </li>
	                                        <li>
	                                            <a href="#">
	                                                <span class="title"><i class="icon-bell"></i> ALERT</span>
	                                            </a>
	                                        </li>
	                                        <li>
	                                            <a href="#">
	                                                <span class="title"><i class="icon-notepad"></i> NOTES</span><span class="badge pull-right">(20)</span>
	                                            </a>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="col-xl-9 col-md-12 xl-60">
	                <div class="email-right-aside">
	                    <div class="card email-body">
	                        <div class="email-profile">
	                            <div class="email-right-aside">
	                                <div class="email-body">
	                                    <div class="email-content">
	                                        <div class="email-top">
	                                            <div class="row">
	                                                <div class="col-xl-12">
	                                                    <div class="media">
	                                                        <img class="me-3 rounded-circle" src="{{asset('assets/images/user/user.png')}}" alt="" />
	                                                        <div class="media-body">
	                                                            <h6 class="d-block">Lorm lpsa</h6>
	                                                            <p>Mattis luctus. Donec nisi diam text.</p>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="email-wrapper">
	                                            <div class="emailread-group">
	                                                <div class="read-group">
	                                                    <p>Hello</p>
	                                                    <p>Dear Sir Good Morning,</p>
	                                                </div>
	                                                <div class="read-group">
	                                                    <h5>Elementum varius nisi vel tempus. Donec eleifend egestas viverra.</h5>
	                                                    <p>
	                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non diam facilisis, commodo libero et, commodo sapien. Pellentesque sollicitudin massa sagittis dolor facilisis, sit
	                                                        amet vulputate nunc molestie. Pellentesque maximus nibh id luctus porta. Ut consectetur dui nec nulla mattis luctus. Donec nisi diam, congue vitae felis at, ullamcorper bibendum
	                                                        tortor. Vestibulum pellentesque felis felis. Etiam ac tortor felis.
	                                                    </p>
	                                                    <p class="m-t-10">
	                                                        In elementum varius nisi vel tempus. Donec eleifend egestas viverra. Donec dapibus sollicitudin blandit. Donec scelerisque purus sit amet feugiat efficitur. Quisque feugiat semper
	                                                        sapien vel hendrerit. Mauris lacus felis, consequat nec pellentesque viverra, venenatis a lorem. Sed urna
	                                                    </p>
	                                                </div>
	                                            </div>
	                                            <div class="emailread-group">
	                                                <h6 class="text-muted mb-0"><i class="icofont icofont-clip"></i> ATTACHMENTS</h6>
	                                                <a class="text-muted text-end right-download font-primary f-w-600" href="#"><i class="fa fa-long-arrow-down me-2"></i>Download All</a>
	                                                <div class="clearfix"></div>
	                                                <div class="attachment">
	                                                    <ul>
	                                                        <li><img class="img-fluid" src="{{asset('assets/images/email/1.jpg')}}" alt="" /></li>
	                                                        <li><img class="img-fluid" src="{{asset('assets/images/email/2.jpg')}}" alt="" /></li>
	                                                        <li><img class="img-fluid" src="{{asset('assets/images/email/3.jpg')}}" alt="" /></li>
	                                                    </ul>
	                                                </div>
	                                            </div>
	                                            <div class="emailread-group">
	                                                <textarea class="form-control" rows="4" cols="50" placeholder="write about your nots"></textarea>
	                                                <div class="action-wrapper">
	                                                    <ul class="actions">
	                                                        <li>
	                                                            <a class="btn btn-primary" href="javascript:void(0)"><i class="fa fa-reply me-2"></i>Reply</a>
	                                                        </li>
	                                                        <li>
	                                                            <a class="btn btn-secondary" href="javascript:void(0)"><i class="fa fa-reply-all me-2"></i>Reply All</a>
	                                                        </li>
	                                                        <li>
	                                                            <a class="btn btn-danger" href="javascript:void(0)"><i class="fa fa-share me-2"></i>Forward</a>
	                                                        </li>
	                                                    </ul>
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
	</div>
	
	@push('scripts')
	<script src="{{asset('assets/js/editor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
    <script src="{{asset('assets/js/email-app.js')}}"></script>
	@endpush

@endsection