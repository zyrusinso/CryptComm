@extends('layouts.admin.master')

@section('title')Email App
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Email Application</h3>
		@endslot
		<li class="breadcrumb-item">Apps</li>
		<li class="breadcrumb-item">Email</li>
		<li class="breadcrumb-item active">Email App</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="email-wrap">
	        <div class="row">
	            <div class="col-xl-3 col-md-6 xl-30">
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
	                                            <a class="btn-primary btn-block btn-mail w-100" id="pills-darkhome-tab" data-bs-toggle="pill" href="#pills-darkhome" role="tab" aria-controls="pills-darkhome" aria-selected="true">
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
	            <div class="col-xl-9 col-md-12 xl-70">
	                <div class="email-right-aside">
	                    <div class="card email-body">
	                        <div class="email-profile">
	                            <div>
	                                <div class="pe-0 b-r-light"></div>
	                                <div class="email-top">
	                                    <div class="row">
	                                        <div class="col-12">
	                                            <div class="media">
	                                                <label class="email-chek d-block" for="chk-ani">
	                                                    <input class="checkbox_animated" id="chk-ani" type="checkbox" checked="" />
	                                                </label>
	                                                <div class="media-body">
	                                                    <div class="dropdown">
	                                                        <button class="btn btn-primary dropdown-toggle" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
	                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	                                                            <a class="dropdown-item" href="javascript:void(0)">Refresh</a><a class="dropdown-item" href="javascript:void(0)">Mark as important</a>
	                                                            <a class="dropdown-item" href="javascript:void(0)">Move to span</a><a class="dropdown-item" href="javascript:void(0)">Move to trush </a>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="inbox">
	                                    <div class="media">
	                                        <div class="media-size-email">
	                                            <label class="d-block mb-0" for="chk-ani">
	                                                <input class="checkbox_animated" id="chk-ani" type="checkbox" checked="" />
	                                            </label>
	                                            <i class="like" data-feather="star"></i><img class="me-3 rounded-circle" src="{{asset('assets/images/user/user.png')}}" alt="" />
	                                        </div>
	                                        <div class="media-body">
	                                            <h6>Pork Lorn</h6>
	                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
	                                            <span>11:59 PM</span>
	                                        </div>
	                                    </div>
	                                    <div class="media">
	                                        <div class="media-size-email">
	                                            <label class="d-block mb-0" for="chk-ani">
	                                                <input class="checkbox_animated" id="chk-ani" type="checkbox" checked="" />
	                                            </label>
	                                            <i data-feather="star"></i><img class="me-3 rounded-circle" src="{{asset('assets/images/user/user.png')}}" alt="" />
	                                        </div>
	                                        <div class="media-body">
	                                            <h6>Dee Deo</h6>
	                                            <p>Popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
	                                            <span>09:59 AM</span>
	                                        </div>
	                                    </div>
	                                    <div class="media">
	                                        <div class="media-size-email">
	                                            <label class="d-block mb-0" for="chk-ani">
	                                                <input class="checkbox_animated" id="chk-ani" type="checkbox" checked="" />
	                                            </label>
	                                            <i class="like" data-feather="star"></i><img class="me-3 rounded-circle" src="{{asset('assets/images/user/user.png')}}" alt="" />
	                                        </div>
	                                        <div class="media-body">
	                                            <h6>Peg Legge</h6>
	                                            <p>A Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words.</p>
	                                            <span>07:59 AM</span>
	                                        </div>
	                                    </div>
	                                    <div class="media">
	                                        <div class="media-size-email">
	                                            <label class="d-block mb-0" for="chk-ani">
	                                                <input class="checkbox_animated" id="chk-ani" type="checkbox" />
	                                            </label>
	                                            <i data-feather="star"></i><img class="me-3 rounded-circle" src="{{asset('assets/images/user/user.png')}}" alt="" />
	                                        </div>
	                                        <div class="media-body">
	                                            <h6>Olive Yew</h6>
	                                            <p>Looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.</p>
	                                            <span>05:59 AM</span>
	                                        </div>
	                                    </div>
	                                    <div class="media">
	                                        <div class="media-size-email">
	                                            <label class="d-block mb-0" for="chk-ani">
	                                                <input class="checkbox_animated" id="chk-ani" type="checkbox" checked="" />
	                                            </label>
	                                            <i class="like" data-feather="star"></i><img class="me-3 rounded-circle" src="{{asset('assets/images/user/user.png')}}" alt="" />
	                                        </div>
	                                        <div class="media-body">
	                                            <h6>Abby Normal</h6>
	                                            <p>very popular during the Renaissance. The first line of Lorem Ipsum.</p>
	                                            <span>09:29 AM</span>
	                                        </div>
	                                    </div>
	                                    <div class="media">
	                                        <div class="media-size-email">
	                                            <label class="d-block mb-0" for="chk-ani">
	                                                <input class="checkbox_animated" id="chk-ani" type="checkbox" />
	                                            </label>
	                                            <i class="like" data-feather="star"></i><img class="me-3 rounded-circle" src="{{asset('assets/images/user/user.png')}}" alt="" />
	                                        </div>
	                                        <div class="media-body">
	                                            <h6>Clyde Stale</h6>
	                                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
	                                            <span>06:03 AM</span>
	                                        </div>
	                                    </div>
	                                    <div class="media">
	                                        <div class="media-size-email">
	                                            <label class="d-block mb-0" for="chk-ani">
	                                                <input class="checkbox_animated" id="chk-ani" type="checkbox" />
	                                            </label>
	                                            <i data-feather="star"></i><img class="me-3 rounded-circle" src="{{asset('assets/images/user/user.png')}}" alt="" />
	                                        </div>
	                                        <div class="media-body">
	                                            <h6>Art Decco</h6>
	                                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
	                                            <span>01:11 AM</span>
	                                        </div>
	                                    </div>
	                                    <div class="media">
	                                        <div class="media-size-email">
	                                            <label class="d-block mb-0" for="chk-ani">
	                                                <input class="checkbox_animated" id="chk-ani" type="checkbox" checked="" />
	                                            </label>
	                                            <i data-feather="star"></i><img class="me-3 rounded-circle" src="{{asset('assets/images/user/user.png')}}" alt="" />
	                                        </div>
	                                        <div class="media-body">
	                                            <h6>Hugo First</h6>
	                                            <p>Randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum</p>
	                                            <span>09:09 AM</span>
	                                        </div>
	                                    </div>
	                                    <div class="media">
	                                        <div class="media-size-email">
	                                            <label class="d-block mb-0" for="chk-ani">
	                                                <input class="checkbox_animated" id="chk-ani" type="checkbox" checked="" />
	                                            </label>
	                                            <i data-feather="star"></i><img class="me-3 rounded-circle" src="{{asset('assets/images/user/user.png')}}" alt="" />
	                                        </div>
	                                        <div class="media-body">
	                                            <h6>Col Fays</h6>
	                                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
	                                            <span>06:10 AM</span>
	                                        </div>
	                                    </div>
	                                    <div class="media">
	                                        <div class="media-size-email">
	                                            <label class="d-block mb-0" for="chk-ani">
	                                                <input class="checkbox_animated" id="chk-ani" type="checkbox" />
	                                            </label>
	                                            <i class="like" data-feather="star"></i><img class="me-3 rounded-circle" src="{{asset('assets/images/user/user.png')}}" alt="" />
	                                        </div>
	                                        <div class="media-body">
	                                            <h6>Toi Story</h6>
	                                            <p>
	                                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
	                                                provident.
	                                            </p>
	                                            <span>09:59 AM</span>
	                                        </div>
	                                    </div>
	                                    <div class="media">
	                                        <div class="media-size-email">
	                                            <label class="d-block mb-0" for="chk-ani">
	                                                <input class="checkbox_animated" id="chk-ani" type="checkbox" />
	                                            </label>
	                                            <i class="like" data-feather="star"></i><img class="me-3 rounded-circle" src="{{asset('assets/images/user/user.png')}}" alt="" />
	                                        </div>
	                                        <div class="media-body">
	                                            <h6>Jen Tile</h6>
	                                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
	                                            <span>00:59 AM</span>
	                                        </div>
	                                    </div>
	                                    <div class="media">
	                                        <div class="media-size-email">
	                                            <label class="d-block mb-0" for="chk-ani">
	                                                <input class="checkbox_animated" id="chk-ani" type="checkbox" />
	                                            </label>
	                                            <i class="like" data-feather="star"></i><img class="me-3 rounded-circle" src="{{asset('assets/images/user/user.png')}}" alt="" />
	                                        </div>
	                                        <div class="media-body">
	                                            <h6>C. Yasoon</h6>
	                                            <p>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
	                                            <span>05:59 AM</span>
	                                        </div>
	                                    </div>
	                                    <div class="media">
	                                        <div class="media-size-email">
	                                            <label class="d-block mb-0" for="chk-ani">
	                                                <input class="checkbox_animated" id="chk-ani" type="checkbox" checked="" />
	                                            </label>
	                                            <i data-feather="star"></i><img class="me-3 rounded-circle" src="{{asset('assets/images/user/user.png')}}" alt="" />
	                                        </div>
	                                        <div class="media-body">
	                                            <h6>Anne Teak</h6>
	                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
	                                            <span>09:59 AM</span>
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
	@endpush

@endsection