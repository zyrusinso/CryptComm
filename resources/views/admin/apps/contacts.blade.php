@extends('layouts.admin.master')

@section('title')Contacts
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/sweetalert2.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Contacts</h3>
		@endslot
		<li class="breadcrumb-item">Apps</li>
		<li class="breadcrumb-item active">Contacts</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="email-wrap bookmark-wrap">
	        <div class="row">
	            <div class="col-xl-3">
	                <div class="email-sidebar">
	                    <a class="btn btn-primary email-aside-toggle" href="javascript:void(0)">contact filter </a>
	                    <div class="email-left-aside">
	                        <div class="card">
	                            <div class="card-body">
	                                <div class="email-app-sidebar left-bookmark">
	                                    <div class="media">
	                                        <div class="media-size-email"><img class="me-3 rounded-circle" src="{{asset('assets/images/user/user.png')}}" alt="" /></div>
	                                        <div class="media-body">
	                                            <a href="#"> <h6 class="f-w-700">MARK JENCO</h6></a>
	                                            <p>Markjecno@gmail.com</p>
	                                        </div>
	                                    </div>
	                                    <ul class="nav main-menu contact-options" role="tablist">
	                                        <li class="nav-item">
	                                            <button class="badge-light btn-block btn-mail w-100" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="me-2" data-feather="users"></i> New Contacts</button>
	                                            <div class="modal fade modal-bookmark" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                                <div class="modal-dialog modal-lg" role="document">
	                                                    <div class="modal-content">
	                                                        <div class="modal-header">
	                                                            <h5 class="modal-title" id="exampleModalLabel">Add Contact</h5>
	                                                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
	                                                        </div>
	                                                        <div class="modal-body">
	                                                            <form class="form-bookmark needs-validation" id="bookmark-form" novalidate="">
	                                                                <div class="row g-2">
	                                                                    <div class="mb-3 col-md-12 mt-0">
	                                                                        <label for="con-name">Name</label>
	                                                                        <div class="row">
	                                                                            <div class="col-sm-6">
	                                                                                <input class="form-control" id="con-name" type="text" required="" placeholder="First Name" autocomplete="off" />
	                                                                            </div>
	                                                                            <div class="col-sm-6">
	                                                                                <input class="form-control" id="con-last" type="text" required="" placeholder="Last Name" autocomplete="off" />
	                                                                            </div>
	                                                                        </div>
	                                                                    </div>
	                                                                    <div class="mb-3 col-md-12 mt-0">
	                                                                        <label for="con-mail">Email Address</label>
	                                                                        <input class="form-control" id="con-mail" type="text" required="" autocomplete="off" />
	                                                                    </div>
	                                                                    <div class="mb-3 col-md-12 my-0">
	                                                                        <label for="con-phone">Phone</label>
	                                                                        <div class="row">
	                                                                            <div class="col-sm-6">
	                                                                                <input class="form-control" id="con-phone" type="number" required="" autocomplete="off" />
	                                                                            </div>
	                                                                            <div class="col-sm-6">
	                                                                                <select class="form-control" id="con-select">
	                                                                                    <option>Mobile</option>
	                                                                                    <option>Work</option>
	                                                                                    <option>Others</option>
	                                                                                </select>
	                                                                            </div>
	                                                                        </div>
	                                                                    </div>
	                                                                </div>
	                                                                <input id="index_var" type="hidden" value="5" />
	                                                                <button class="btn btn-secondary" type="submit" onclick="submitContact()">Save</button>
	                                                                <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cancel</button>
	                                                            </form>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </li>
	                                        <li class="nav-item"><span class="main-title"> Views</span></li>
	                                        <li>
	                                            <a id="pills-personal-tab" data-bs-toggle="pill" href="#pills-personal" role="tab" aria-controls="pills-personal" aria-selected="true"><span class="title"> Personal</span></a>
	                                        </li>
	                                        <li>
	                                            <button class="btn btn-category" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1"><span class="title"> + Add Category</span></button>
	                                            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
	                                                <div class="modal-dialog" role="document">
	                                                    <div class="modal-content">
	                                                        <div class="modal-header">
	                                                            <h5 class="modal-title" id="exampleModalLabel1">Add Category</h5>
	                                                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
	                                                        </div>
	                                                        <div class="modal-body">
	                                                            <form class="form-bookmark">
	                                                                <div class="row g-2">
	                                                                    <div class="mb-3 col-md-12">
	                                                                        <input class="form-control" type="text" required="" placeholder="Enter category name" autocomplete="off" />
	                                                                    </div>
	                                                                </div>
	                                                                <button class="btn btn-secondary" type="button">Save</button>
	                                                                <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cancel</button>
	                                                            </form>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </li>
	                                        <li>
	                                            <a class="show" id="pills-organization-tab" data-bs-toggle="pill" href="#pills-organization" role="tab" aria-controls="pills-organization" aria-selected="false">
	                                                <span class="title"> Organization</span>
	                                            </a>
	                                        </li>
	                                        <li>
	                                            <a href="javascript:void(0)"><span class="title">Follow up</span></a>
	                                        </li>
	                                        <li>
	                                            <a href="javascript:void(0)"><span class="title">Favorites</span></a>
	                                        </li>
	                                        <li>
	                                            <a href="javascript:void(0)"><span class="title">Ideas</span></a>
	                                        </li>
	                                        <li>
	                                            <a href="javascript:void(0)"><span class="title">Important</span></a>
	                                        </li>
	                                        <li>
	                                            <a href="javascript:void(0)"><span class="title">Business</span></a>
	                                        </li>
	                                        <li>
	                                            <a href="javascript:void(0)"><span class="title">Holidays</span></a>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="col-xl-9 col-md-12 box-col-8">
	                <div class="email-right-aside bookmark-tabcontent contacts-tabs">
	                    <div class="card email-body radius-left">
	                        <div class="ps-0">
	                            <div class="tab-content">
	                                <div class="tab-pane fade active show" id="pills-personal" role="tabpanel" aria-labelledby="pills-personal-tab">
	                                    <div class="card mb-0">
	                                        <div class="card-header d-flex">
	                                            <h5>Personal</h5>
	                                            <span class="f-14 pull-right mt-0">5 Contacts</span>
	                                        </div>
	                                        <div class="card-body p-0">
	                                            <div class="row list-persons" id="addcon">
	                                                <div class="col-xl-4 xl-50 col-md-5 box-col-6">
	                                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	                                                        <a
	                                                            class="contact-tab-0 nav-link active"
	                                                            id="v-pills-user-tab"
	                                                            data-bs-toggle="pill"
	                                                            onclick="activeDiv(0)"
	                                                            href="#v-pills-user"
	                                                            role="tab"
	                                                            aria-controls="v-pills-user"
	                                                            aria-selected="true"
	                                                        >
	                                                            <div class="media">
	                                                                <img class="img-50 img-fluid m-r-20 rounded-circle update_img_0" src="{{asset('assets/images/user/2.png')}}" alt="" />
	                                                                <div class="media-body">
	                                                                    <h6><span class="first_name_0">Bucky </span><span class="last_name_0">Barnes</span></h6>
	                                                                    <p class="email_add_0">barnes@gmail.com</p>
	                                                                </div>
	                                                            </div>
	                                                        </a>
	                                                        <a
	                                                            class="contact-tab-1 nav-link"
	                                                            id="v-pills-profile-tab"
	                                                            data-bs-toggle="pill"
	                                                            onclick="activeDiv(1)"
	                                                            href="#v-pills-profile"
	                                                            role="tab"
	                                                            aria-controls="v-pills-profile"
	                                                            aria-selected="false"
	                                                        >
	                                                            <div class="media">
	                                                                <img class="img-50 img-fluid m-r-20 rounded-circle update_img_1" src="{{asset('assets/images/user/8.jpg')}}" alt="" />
	                                                                <div class="media-body">
	                                                                    <h6><span class="first_name_1">Comeren </span><span class="last_name_1">Diaz</span></h6>
	                                                                    <p class="email_add_1">comeren@gmail.com</p>
	                                                                </div>
	                                                            </div>
	                                                        </a>
	                                                        <a
	                                                            class="contact-tab-2 nav-link"
	                                                            id="v-pills-messages-tab"
	                                                            data-bs-toggle="pill"
	                                                            onclick="activeDiv(2)"
	                                                            href="#v-pills-messages"
	                                                            role="tab"
	                                                            aria-controls="v-pills-messages"
	                                                            aria-selected="false"
	                                                        >
	                                                            <div class="media">
	                                                                <img class="img-50 img-fluid m-r-20 rounded-circle update_img_2" src="{{asset('assets/images/user/1.jpg')}}" alt="" />
	                                                                <div class="media-body">
	                                                                    <h6><span class="first_name_2">Issa </span><span class="last_name_2">Bell</span></h6>
	                                                                    <p class="email_add_2">issabell@gmail.com</p>
	                                                                </div>
	                                                            </div>
	                                                        </a>
	                                                        <a
	                                                            class="contact-tab-3 nav-link"
	                                                            id="v-pills-settings-tab"
	                                                            data-bs-toggle="pill"
	                                                            onclick="activeDiv(3)"
	                                                            href="#v-pills-settings"
	                                                            role="tab"
	                                                            aria-controls="v-pills-settings"
	                                                            aria-selected="false"
	                                                        >
	                                                            <div class="media">
	                                                                <img class="img-50 img-fluid m-r-20 rounded-circle update_img_3" src="{{asset('assets/images/user/14.png')}}" alt="" />
	                                                                <div class="media-body">
	                                                                    <h6><span class="first_name_3">Andew </span><span class="last_name_3">Jon</span></h6>
	                                                                    <p class="email_add_3">andewjon@gmail.com</p>
	                                                                </div>
	                                                            </div>
	                                                        </a>
	                                                        <a
	                                                            class="contact-tab-4 nav-link"
	                                                            id="v-pills-contact1-tab"
	                                                            data-bs-toggle="pill"
	                                                            onclick="activeDiv(4)"
	                                                            href="#v-pills-contact1"
	                                                            role="tab"
	                                                            aria-controls="v-pills-settings"
	                                                            aria-selected="false"
	                                                        >
	                                                            <div class="media">
	                                                                <img class="img-50 img-fluid m-r-20 rounded-circle update_img_4" src="{{asset('assets/images/user/5.jpg')}}" alt="" />
	                                                                <div class="media-body">
	                                                                    <h6><span class="first_name_4">Jason </span><span class="last_name_4">Borne</span></h6>
	                                                                    <p class="email_add_4">jasonb@gmail.com</p>
	                                                                </div>
	                                                            </div>
	                                                        </a>
	                                                        <a
	                                                            class="contact-tab-5 nav-link"
	                                                            id="v-pills-contact8-tab"
	                                                            data-bs-toggle="pill"
	                                                            onclick="activeDiv(5)"
	                                                            href="#v-pills-contact2"
	                                                            role="tab"
	                                                            aria-controls="v-pills-settings"
	                                                            aria-selected="false"
	                                                        >
	                                                            <div class="media">
	                                                                <img class="img-50 img-fluid m-r-20 rounded-circle update_img_5" src="{{asset('assets/images/avtar/11.jpg')}}" alt="" />
	                                                                <div class="media-body">
	                                                                    <h6><span class="first_name_5">Monty </span><span class="last_name_5">Carlo</span></h6>
	                                                                    <p class="email_add_5">monty@gmail.com</p>
	                                                                </div>
	                                                            </div>
	                                                        </a>
	                                                        <a
	                                                            class="contact-tab-6 nav-link"
	                                                            id="v-pills-contact3-tab"
	                                                            data-bs-toggle="pill"
	                                                            onclick="activeDiv(6)"
	                                                            href="#v-pills-contact3"
	                                                            role="tab"
	                                                            aria-controls="v-pills-settings"
	                                                            aria-selected="false"
	                                                        >
	                                                            <div class="media">
	                                                                <img class="img-50 img-fluid m-r-20 rounded-circle update_img_6" src="{{asset('assets/images/avtar/16.jpg')}}" alt="" />
	                                                                <div class="media-body">
	                                                                    <h6><span class="first_name_6">Brock </span><span class="last_name_6">Lee</span></h6>
	                                                                    <p class="email_add_6">lee@gmail.com</p>
	                                                                </div>
	                                                            </div>
	                                                        </a>
	                                                    </div>
	                                                </div>
	                                                <div class="col-xl-8 xl-50 col-md-7 box-col-6">
	                                                    <div class="tab-content" id="v-pills-tabContent">
	                                                        <div class="tab-pane contact-tab-0 tab-content-child fade show active" id="v-pills-user" role="tabpanel" aria-labelledby="v-pills-user-tab">
	                                                            <div class="profile-mail">
	                                                                <div class="media align-items-center">
	                                                                    <img class="img-100 img-fluid m-r-20 rounded-circle update_img_0" src="{{asset('assets/images/user/2.png')}}" alt="" />
	                                                                    <input class="updateimg" type="file" name="img" onchange="readURL(this,0)" />
	                                                                    <div class="media-body mt-0">
	                                                                        <h5><span class="first_name_0">Bucky </span><span class="last_name_0">Barnes</span></h5>
	                                                                        <p class="email_add_0">barnes@gmail.com</p>
	                                                                        <ul>
	                                                                            <li><a href="javascript:void(0)" onclick="editContact(0)">Edit</a></li>
	                                                                            <li><a href="javascript:void(0)" onclick="deleteContact(0)">Delete</a></li>
	                                                                            <li><a href="javascript:void(0)" onclick="history(0)">History</a></li>
	                                                                            <li><a href="javascript:void(0)" onclick="printContact(0)" data-bs-toggle="modal" data-bs-target="#printModal">Print</a></li>
	                                                                        </ul>
	                                                                    </div>
	                                                                </div>
	                                                                <div class="email-general">
	                                                                    <h6 class="mb-3">General</h6>
	                                                                    <ul>
	                                                                        <li>Name <span class="font-primary first_name_0">Bucky</span></li>
	                                                                        <li>Gender <span class="font-primary">Male</span></li>
	                                                                        <li>
	                                                                            Birthday<span class="font-primary"> <span class="birth_day_0">18</span><span class="birth_month_0 ms-1">May</span><span class="birth_year_0 ms-1">1994</span></span>
	                                                                        </li>
	                                                                        <li>Personality<span class="font-primary personality_0">Cool</span></li>
	                                                                        <li>City<span class="font-primary city_0">moline acres</span></li>
	                                                                        <li>Mobile No<span class="font-primary mobile_num_0">+0 1800 76855</span></li>
	                                                                        <li>Email Address <span class="font-primary email_add_0">barnes@gmail.com </span></li>
	                                                                        <li>Website<span class="font-primary url_add_0">www.test.com</span></li>
	                                                                        <li>Interest<span class="font-primary interest_0">photography</span></li>
	                                                                    </ul>
	                                                                </div>
	                                                            </div>
	                                                        </div>
	                                                        <div class="tab-pane contact-tab-1 tab-content-child fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
	                                                            <div class="profile-mail">
	                                                                <div class="media">
	                                                                    <img class="img-100 img-fluid m-r-20 rounded-circle update_img_1" src="{{asset('assets/images/user/8.jpg')}}" alt="" />
	                                                                    <input class="updateimg" type="file" name="img" onchange="readURL(this,1)" />
	                                                                    <div class="media-body mt-0">
	                                                                        <h5><span class="first_name_1">Comeren </span><span class="last_name_1">Diaz</span></h5>
	                                                                        <p class="email_add_1">comeren@gmail.com</p>
	                                                                        <ul>
	                                                                            <li><a href="javascript:void(0)" onclick="editContact(1)">Edit</a></li>
	                                                                            <li><a href="javascript:void(0)" onclick="deleteContact(1)">Delete</a></li>
	                                                                            <li><a href="javascript:void(0)" onclick="history(1)">History</a></li>
	                                                                            <li><a href="javascript:void(0)" onclick="printContact(1)" data-bs-toggle="modal" data-bs-target="#printModal">Print</a></li>
	                                                                        </ul>
	                                                                    </div>
	                                                                </div>
	                                                                <div class="email-general">
	                                                                    <h6 class="mb-3">General</h6>
	                                                                    <ul>
	                                                                        <li>Name <span class="font-primary first_name_1">Comeren</span></li>
	                                                                        <li>Gender <span class="font-primary">Female</span></li>
	                                                                        <li>
	                                                                            Birthday<span class="font-primary"> <span class="birth_day_1">7</span><span class="birth_month_1 ms-1">Feb</span><span class="birth_year_1 ms-1">1995</span></span>
	                                                                        </li>
	                                                                        <li>Personality<span class="font-primary personality_1">Cool</span></li>
	                                                                        <li>City<span class="font-primary city_1">Delhi</span></li>
	                                                                        <li>Mobile No<span class="font-primary mobile_num_1">+0 1800 55812</span></li>
	                                                                        <li>Email Address <span class="font-primary email_add_1">comeren@gmail.com</span></li>
	                                                                        <li>Website<span class="font-primary url_add_1">www.cometest@.com</span></li>
	                                                                        <li>Interest<span class="font-primary interest_1">sports</span></li>
	                                                                    </ul>
	                                                                </div>
	                                                            </div>
	                                                        </div>
	                                                        <div class="tab-pane contact-tab-2 tab-content-child fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
	                                                            <div class="profile-mail">
	                                                                <div class="media">
	                                                                    <img class="img-100 img-fluid m-r-20 rounded-circle update_img_2" src="{{asset('assets/images/user/1.jpg')}}" alt="" />
	                                                                    <input class="updateimg" type="file" name="img" onchange="readURL(this,2)" />
	                                                                    <div class="media-body mt-0">
	                                                                        <h5><span class="first_name_2">Issa </span><span class="last_name_2">Bell</span></h5>
	                                                                        <p class="email_add_2">issabell@gmail.com</p>
	                                                                        <ul>
	                                                                            <li><a href="javascript:void(0)" onclick="editContact(2)">Edit</a></li>
	                                                                            <li><a href="javascript:void(0)" onclick="deleteContact(2)">Delete</a></li>
	                                                                            <li><a href="javascript:void(0)" onclick="history(2)">History</a></li>
	                                                                            <li><a href="javascript:void(0)" onclick="printContact(2)" data-bs-toggle="modal" data-bs-target="#printModal">Print</a></li>
	                                                                        </ul>
	                                                                    </div>
	                                                                </div>
	                                                                <div class="email-general">
	                                                                    <h6 class="mb-3">General</h6>
	                                                                    <ul>
	                                                                        <li>Name <span class="font-primary first_name_2">Issa</span></li>
	                                                                        <li>Gender <span class="font-primary">Male</span></li>
	                                                                        <li>
	                                                                            Birthday<span class="font-primary"> <span class="birth_day_2">20</span><span class="birth_month_2 ms-1">Jul</span><span class="birth_year_2 ms-1">1993</span></span>
	                                                                        </li>
	                                                                        <li>Personality<span class="font-primary personality_2">Cool</span></li>
	                                                                        <li>City<span class="font-primary city_2">Mumbai</span></li>
	                                                                        <li>Mobile No<span class="font-primary mobile_num_2">+0 1800 87412</span></li>
	                                                                        <li>Email Address <span class="font-primary email_add_2">issabell@gmail.com</span></li>
	                                                                        <li>Website<span class="font-primary url_add_2">www.belltest@.com</span></li>
	                                                                        <li>Interest<span class="font-primary interest_2">cooking</span></li>
	                                                                    </ul>
	                                                                </div>
	                                                            </div>
	                                                        </div>
	                                                        <div class="tab-pane contact-tab-3 tab-content-child fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
	                                                            <div class="profile-mail">
	                                                                <div class="media">
	                                                                    <img class="img-100 img-fluid m-r-20 rounded-circle update_img_3" src="{{asset('assets/images/user/14.png')}}" alt="" />
	                                                                    <input class="updateimg" type="file" name="img" onchange="readURL(this,3)" />
	                                                                    <div class="media-body mt-0">
	                                                                        <h5><span class="first_name_3">Andew </span><span class="last_name_3">Jon</span></h5>
	                                                                        <p class="email_add_3">andewjon@gmail.com</p>
	                                                                        <ul>
	                                                                            <li><a href="javascript:void(0)" onclick="editContact(3)">Edit</a></li>
	                                                                            <li><a href="javascript:void(0)" onclick="deleteContact(3)">Delete</a></li>
	                                                                            <li><a href="javascript:void(0)" onclick="history(3)">History</a></li>
	                                                                            <li><a href="javascript:void(0)" onclick="printContact(3)" data-bs-toggle="modal" data-bs-target="#printModal">Print</a></li>
	                                                                        </ul>
	                                                                    </div>
	                                                                </div>
	                                                                <div class="email-general">
	                                                                    <h6 class="mb-3">General</h6>
	                                                                    <ul>
	                                                                        <li>Name <span class="font-primary first_name_3">Andew</span></li>
	                                                                        <li>Gender <span class="font-primary">Male</span></li>
	                                                                        <li>
	                                                                            Birthday<span class="font-primary"> <span class="birth_day_3">25</span><span class="birth_month_3 ms-1">Aug</span><span class="birth_year_3 ms-1">1996</span></span>
	                                                                        </li>
	                                                                        <li>Personality<span class="font-primary personality_3">Cool</span></li>
	                                                                        <li>City<span class="font-primary city_3">Amreli</span></li>
	                                                                        <li>Mobile No<span class="font-primary mobile_num_3">+0 1800 79877</span></li>
	                                                                        <li>Email Address <span class="font-primary email_add_3">andewjon@gmail.com</span></li>
	                                                                        <li>Website<span class="font-primary url_add_3">www.test@.com</span></li>
	                                                                        <li>Interest<span class="font-primary interest_3">photography</span></li>
	                                                                    </ul>
	                                                                </div>
	                                                            </div>
	                                                        </div>
	                                                        <div class="tab-pane contact-tab-4 tab-content-child fade" id="v-pills-contact1" role="tabpanel" aria-labelledby="v-pills-contact1-tab">
	                                                            <div class="profile-mail">
	                                                                <div class="media">
	                                                                    <img class="img-100 img-fluid m-r-20 rounded-circle update_img_4" src="{{asset('assets/images/user/5.jpg')}}" alt="" />
	                                                                    <input class="updateimg" type="file" name="img" onchange="readURL(this,4)" />
	                                                                    <div class="media-body mt-0">
	                                                                        <h5><span class="first_name_4">Jason </span><span class="last_name_4">Borne</span></h5>
	                                                                        <p class="email_add_4">jasonb@gmail.com</p>
	                                                                        <ul>
	                                                                            <li><a href="javascript:void(0)" onclick="editContact(4)">Edit</a></li>
	                                                                            <li><a href="javascript:void(0)" onclick="deleteContact(4)">Delete</a></li>
	                                                                            <li><a href="javascript:void(0)" onclick="history(4)">History</a></li>
	                                                                            <li><a href="javascript:void(0)" onclick="printContact(4)" data-bs-toggle="modal" data-bs-target="#printModal">Print</a></li>
	                                                                        </ul>
	                                                                    </div>
	                                                                </div>
	                                                                <div class="email-general">
	                                                                    <h6 class="mb-3">General</h6>
	                                                                    <ul>
	                                                                        <li>Name <span class="font-primary first_name_4">Jason</span></li>
	                                                                        <li>Gender <span class="font-primary">Male</span></li>
	                                                                        <li>
	                                                                            Birthday<span class="font-primary"> <span class="birth_day_4">30</span><span class="birth_month_4 ms-1">Oct</span><span class="birth_year_4 ms-1">1992</span></span>
	                                                                        </li>
	                                                                        <li>Personality<span class="font-primary personality_4">Cool</span></li>
	                                                                        <li>City<span class="font-primary city_4">Delhi</span></li>
	                                                                        <li>Mobile No<span class="font-primary mobile_num_4">+0 1800 11547</span></li>
	                                                                        <li>Email Address <span class="font-primary email_add_4">jasonb@gmail.com</span></li>
	                                                                        <li>Website<span class="font-primary url_add_4">www.jason@.com</span></li>
	                                                                        <li>Interest<span class="font-primary interest_4">photography</span></li>
	                                                                    </ul>
	                                                                </div>
	                                                            </div>
	                                                        </div>
	                                                        <div class="tab-pane contact-tab-5 tab-content-child fade" id="v-pills-contact8" role="tabpanel" aria-labelledby="v-pills-contact1-tab">
	                                                            <div class="profile-mail">
	                                                                <div class="media">
	                                                                    <img class="img-100 img-fluid m-r-20 rounded-circle update_img_5" src="{{asset('assets/images/avtar/11.jpg')}}" alt="" />
	                                                                    <input class="updateimg" type="file" name="img" onchange="readURL(this,5)" />
	                                                                    <div class="media-body mt-0">
	                                                                        <h5><span class="first_name_5">Monty </span><span class="last_name_5">Carlo</span></h5>
	                                                                        <p class="email_add_5">monty@gmail.com</p>
	                                                                        <ul>
	                                                                            <li><a href="javascript:void(0)" onclick="editContact(5)">Edit</a></li>
	                                                                            <li><a href="javascript:void(0)" onclick="deleteContact(5)">Delete</a></li>
	                                                                            <li><a href="javascript:void(0)" onclick="history(5)">History</a></li>
	                                                                            <li><a href="javascript:void(0)" onclick="printContact(5)" data-bs-toggle="modal" data-bs-target="#printModal">Print</a></li>
	                                                                        </ul>
	                                                                    </div>
	                                                                </div>
	                                                                <div class="email-general">
	                                                                    <h6 class="mb-3">General</h6>
	                                                                    <ul>
	                                                                        <li>Name <span class="font-primary first_name_5">Monty</span></li>
	                                                                        <li>Gender <span class="font-primary">Male</span></li>
	                                                                        <li>
	                                                                            Birthday<span class="font-primary"> <span class="birth_day_5">12</span><span class="birth_month_5 ms-1">Nov</span><span class="birth_year_5 ms-1">1994</span></span>
	                                                                        </li>
	                                                                        <li>Personality<span class="font-primary personality_5">Cool</span></li>
	                                                                        <li>City<span class="font-primary city_5">Amreli</span></li>
	                                                                        <li>Mobile No<span class="font-primary mobile_num_5">+0 1800 87944</span></li>
	                                                                        <li>Email Address <span class="font-primary email_add_5">monty@gmail.com</span></li>
	                                                                        <li>Website<span class="font-primary url_add_5">www.mon@.com</span></li>
	                                                                        <li>Interest<span class="font-primary interest_5">sports</span></li>
	                                                                    </ul>
	                                                                </div>
	                                                            </div>
	                                                        </div>
	                                                        <div class="tab-pane contact-tab-6 tab-content-child fade" id="v-pills-contact9" role="tabpanel" aria-labelledby="v-pills-contact8-tab">
	                                                            <div class="profile-mail">
	                                                                <div class="media">
	                                                                    <img class="img-100 img-fluid m-r-20 rounded-circle update_img_6" src="{{asset('assets/images/avtar/16.jpg')}}" alt="" />
	                                                                    <input class="updateimg" type="file" name="img" onchange="readURL(this,6)" />
	                                                                    <div class="media-body mt-0">
	                                                                        <h5><span class="first_name_6">Brock </span><span class="last_name_6">Lee</span></h5>
	                                                                        <p class="email_add_6">lee@gmail.com</p>
	                                                                        <ul>
	                                                                            <li><a href="javascript:void(0)" onclick="editContact(6)">Edit</a></li>
	                                                                            <li><a href="javascript:void(0)" onclick="deleteContact(6)">Delete</a></li>
	                                                                            <li><a href="javascript:void(0)" onclick="history(6)">History</a></li>
	                                                                            <li><a href="javascript:void(0)" onclick="printContact(6)" data-bs-toggle="modal" data-bs-target="#printModal">Print</a></li>
	                                                                        </ul>
	                                                                    </div>
	                                                                </div>
	                                                                <div class="email-general">
	                                                                    <h6 class="mb-3">General</h6>
	                                                                    <ul>
	                                                                        <li>Name <span class="font-primary first_name_6">Brock</span></li>
	                                                                        <li>Gender <span class="font-primary">Male</span></li>
	                                                                        <li>
	                                                                            Birthday<span class="font-primary"> <span class="birth_day_6">8</span><span class="birth_month_6 ms-1">Dec</span><span class="birth_year_6 ms-1">1992</span></span>
	                                                                        </li>
	                                                                        <li>Personality<span class="font-primary personality_6">Cool</span></li>
	                                                                        <li>City<span class="font-primary city_6">Ahemdabad</span></li>
	                                                                        <li>Mobile No<span class="font-primary mobile_num_6">+0 1800 58712</span></li>
	                                                                        <li>Email Address <span class="font-primary email_add_6">lee@gmail.com</span></li>
	                                                                        <li>Website<span class="font-primary url_add_6">www.lee.com</span></li>
	                                                                        <li>Interest<span class="font-primary interest_6">photography </span></li>
	                                                                    </ul>
	                                                                </div>
	                                                            </div>
	                                                        </div>
	                                                    </div>
	                                                    <div class="contact-editform">
	                                                        <form>
	                                                            <div class="row g-2">
	                                                                <div class="mt-0 mb-3 col-md-12">
	                                                                    <label>Name</label>
	                                                                    <div class="row">
	                                                                        <div class="col-sm-6">
	                                                                            <input class="form-control" id="first_name" type="text" required="" placeholder="First Name" value="first_name" />
	                                                                        </div>
	                                                                        <div class="col-sm-6">
	                                                                            <input class="form-control" id="last_name" type="text" required="" placeholder="Last Name" value="last_name" />
	                                                                        </div>
	                                                                    </div>
	                                                                </div>
	                                                                <div class="mt-0 mb-3 col-md-12">
	                                                                    <label>Email Address</label>
	                                                                    <input class="form-control" id="email_add" type="text" required="" autocomplete="off" />
	                                                                </div>
	                                                                <div class="mt-0 mb-3 col-md-12">
	                                                                    <label>Phone</label>
	                                                                    <div class="row">
	                                                                        <div class="col-sm-6">
	                                                                            <input class="form-control" id="mobile_num" type="text" required="" autocomplete="off" />
	                                                                        </div>
	                                                                        <div class="col-sm-6">
	                                                                            <select class="form-control">
	                                                                                <option>Mobile</option>
	                                                                                <option>Work</option>
	                                                                                <option>Others</option>
	                                                                            </select>
	                                                                        </div>
	                                                                    </div>
	                                                                </div>
	                                                            </div>
	                                                            <div class="row g-2 more-data">
	                                                                <div class="mt-0 mb-3 col-md-12">
	                                                                    <label>URLS</label>
	                                                                    <div class="row">
	                                                                        <div class="col-lg-6 col-sm-6">
	                                                                            <input class="form-control" id="url_add" type="text" required="" />
	                                                                        </div>
	                                                                        <div class="col-lg-4 col-sm-6">
	                                                                            <select class="js-example-basic-single">
	                                                                                <option value="pw">Personal web address</option>
	                                                                                <option value="cw">Company web address</option>
	                                                                                <option value="fb">Fabebook URL</option>
	                                                                                <option value="tw">Twitter URL</option>
	                                                                            </select>
	                                                                        </div>
	                                                                    </div>
	                                                                </div>
	                                                                <div class="mt-0 mb-3 col-md-12">
	                                                                    <label>Personal</label>
	                                                                    <div class="d-block">
	                                                                        <label class="me-3" for="edo-ani"> <input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani" checked="" /><span>Male</span> </label>
	                                                                        <label for="edo-ani1"> <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani" /><span>Female</span> </label>
	                                                                    </div>
	                                                                </div>
	                                                                <div class="mt-0 mb-3 col-md-12">
	                                                                    <div class="row">
	                                                                        <div class="col-lg-2 col-sm-4">
	                                                                            <select class="form-control" id="birth_day">
	                                                                                <option class="f-w-600">Day</option>
	                                                                                <option>01</option>
	                                                                                <option>02</option>
	                                                                                <option>03</option>
	                                                                                <option>04</option>
	                                                                                <option>05</option>
	                                                                                <option>06</option>
	                                                                                <option>07</option>
	                                                                                <option>08</option>
	                                                                                <option>09</option>
	                                                                                <option>10</option>
	                                                                                <option>11</option>
	                                                                                <option>12</option>
	                                                                                <option>13</option>
	                                                                                <option>14</option>
	                                                                                <option>15</option>
	                                                                                <option>16</option>
	                                                                                <option>17</option>
	                                                                                <option>18</option>
	                                                                                <option>19</option>
	                                                                                <option>20</option>
	                                                                                <option>21</option>
	                                                                                <option>22</option>
	                                                                                <option>23</option>
	                                                                                <option>24</option>
	                                                                                <option>25</option>
	                                                                                <option>26</option>
	                                                                                <option>27</option>
	                                                                                <option>28</option>
	                                                                                <option>29</option>
	                                                                                <option>30</option>
	                                                                                <option>31</option>
	                                                                            </select>
	                                                                        </div>
	                                                                        <div class="col-lg-3 col-sm-4">
	                                                                            <select class="form-control" id="birth_month">
	                                                                                <option class="f-w-600">Month</option>
	                                                                                <option>January</option>
	                                                                                <option>February</option>
	                                                                                <option>March</option>
	                                                                                <option>April</option>
	                                                                                <option>May</option>
	                                                                                <option>June</option>
	                                                                                <option>July</option>
	                                                                                <option>August</option>
	                                                                                <option>September</option>
	                                                                                <option>October</option>
	                                                                                <option>November</option>
	                                                                                <option>December</option>
	                                                                            </select>
	                                                                        </div>
	                                                                        <div class="col-lg-3 col-sm-4">
	                                                                            <input class="form-control" id="birth_year" type="text" />
	                                                                        </div>
	                                                                    </div>
	                                                                </div>
	                                                                <div class="mt-0 mb-3 col-md-12">
	                                                                    <div class="row">
	                                                                        <div class="col-sm-6">
	                                                                            <label>Personality</label>
	                                                                            <input class="form-control" id="personality" type="text" required="" autocomplete="off" />
	                                                                        </div>
	                                                                        <div class="col-sm-6">
	                                                                            <label>Interest</label>
	                                                                            <input class="form-control" id="interest" type="text" required="" autocomplete="off" />
	                                                                        </div>
	                                                                    </div>
	                                                                </div>
	                                                                <div class="mb-3 col-md-12">
	                                                                    <label>Home Address</label>
	                                                                    <div class="row">
	                                                                        <div class="col-12">
	                                                                            <div class="form-group">
	                                                                                <input class="form-control" type="text" placeholder="Address" />
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="col-sm-6">
	                                                                            <div class="form-group">
	                                                                                <input class="form-control" id="city" type="text" placeholder="City" />
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="col-sm-6">
	                                                                            <div class="form-group">
	                                                                                <input class="form-control" type="text" placeholder="State" />
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="col-sm-6">
	                                                                            <div>
	                                                                                <input class="form-control" type="text" placeholder="Country" />
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="col-sm-6">
	                                                                            <div>
	                                                                                <input class="form-control" type="text" placeholder="Pin Code" />
	                                                                            </div>
	                                                                        </div>
	                                                                    </div>
	                                                                </div>
	                                                            </div>
	                                                            <a class="ps-0 edit-information f-w-600" href="javascript:void(0)">Edit more information</a>
	                                                            <button class="btn btn-secondary update-contact" type="button">Save</button>
	                                                            <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cancel</button>
	                                                        </form>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="fade tab-pane" id="pills-organization" role="tabpanel" aria-labelledby="pills-organization">
	                                    <div class="card mb-0">
	                                        <div class="card-header d-flex">
	                                            <h5>Organization</h5>
	                                            <span class="f-14 pull-right mt-0">10 Contacts</span>
	                                        </div>
	                                        <div class="card-body p-0">
	                                            <div class="row list-persons">
	                                                <div class="col-xl-4 xl-50 col-md-5 box-col-6">
	                                                    <div class="nav flex-column nav-pills" id="v-pills-tab1" role="tablist" aria-orientation="vertical">
	                                                        <a class="nav-link active" id="v-pills-iduser-tab" data-bs-toggle="pill" href="#v-pills-iduser" role="tab" aria-controls="v-pills-iduser" aria-selected="true">
	                                                            <div class="media">
	                                                                <img class="img-50 img-fluid m-r-20 rounded-circle" src="{{asset('assets/images/user/user.png')}}" alt="" />
	                                                                <div class="media-body">
	                                                                    <h6>Mark jecno</h6>
	                                                                    <p>markjecno@gmail.com</p>
	                                                                </div>
	                                                            </div>
	                                                        </a>
	                                                        <a class="nav-link" id="v-pills-iduser1-tab" data-bs-toggle="pill" href="#v-pills-iduser1" role="tab" aria-controls="v-pills-iduser1" aria-selected="false">
	                                                            <div class="media">
	                                                                <img class="img-50 img-fluid m-r-20 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" />
	                                                                <div class="media-body">
	                                                                    <h6>Jason Borne</h6>
	                                                                    <p>jasonb@gmail.com</p>
	                                                                </div>
	                                                            </div>
	                                                        </a>
	                                                        <a class="nav-link" id="v-pills-iduser2-tab" data-bs-toggle="pill" href="#v-pills-iduser2" role="tab" aria-controls="v-pills-iduser2" aria-selected="false">
	                                                            <div class="media">
	                                                                <img class="img-50 img-fluid m-r-20 rounded-circle" src="{{asset('assets/images/user/4.jpg')}}" alt="" />
	                                                                <div class="media-body">
	                                                                    <h6>Sarah Loren</h6>
	                                                                    <p>barnes@gmail.com</p>
	                                                                </div>
	                                                            </div>
	                                                        </a>
	                                                        <a class="nav-link" id="v-pills-iduser3-tab" data-bs-toggle="pill" href="#v-pills-iduser3" role="tab" aria-controls="v-pills-iduser3" aria-selected="false">
	                                                            <div class="media">
	                                                                <img class="img-50 img-fluid m-r-20 rounded-circle" src="{{asset('assets/images/user/10.jpg')}}" alt="" />
	                                                                <div class="media-body">
	                                                                    <h6>Andew Jon</h6>
	                                                                    <p>andrewj@gmail.com</p>
	                                                                </div>
	                                                            </div>
	                                                        </a>
	                                                    </div>
	                                                </div>
	                                                <div class="col-xl-8 xl-50 col-md-7 box-col-6">
	                                                    <div class="tab-content" id="v-pills-tabContent1">
	                                                        <div class="tab-pane fade show active" id="v-pills-iduser" role="tabpanel" aria-labelledby="v-pills-iduser-tab">
	                                                            <div class="profile-mail">
	                                                                <div class="media">
	                                                                    <img class="img-100 img-fluid m-r-20 rounded-circle update_img_5" src="{{asset('assets/images/user/user.png')}}" alt="" />
	                                                                    <div class="media-body mt-0">
	                                                                        <h5><span class="first_name_5">Mark </span><span class="last_name_5">jecno</span></h5>
	                                                                        <p class="email_add_5">markjecno@gmail.com</p>
	                                                                        <ul>
	                                                                            <li><a href="javascript:void(0)" onclick="printContact(5)" data-bs-toggle="modal" data-bs-target="#printModal">Print</a></li>
	                                                                        </ul>
	                                                                    </div>
	                                                                </div>
	                                                                <div class="email-general">
	                                                                    <h6>General</h6>
	                                                                    <p>Email Address: <span class="font-primary email_add_5">markjecno@gmail.com</span></p>
	                                                                    <div class="gender">
	                                                                        <h6>Personal</h6>
	                                                                        <p>Gender: <span>Male</span></p>
	                                                                    </div>
	                                                                </div>
	                                                            </div>
	                                                        </div>
	                                                        <div class="tab-pane fade" id="v-pills-iduser1" role="tabpanel" aria-labelledby="v-pills-iduser1-tab">
	                                                            <div class="profile-mail">
	                                                                <div class="media">
	                                                                    <img class="img-100 img-fluid m-r-20 rounded-circle update_img_6" src="{{asset('assets/images/user/3.jpg')}}" alt="" />
	                                                                    <div class="media-body mt-0">
	                                                                        <h5><span class="first_name_6">Jason </span><span class="last_name_6">Borne</span></h5>
	                                                                        <p class="email_add_6">jasonb@gmail.com</p>
	                                                                        <ul>
	                                                                            <li><a href="javascript:void(0)" onclick="printContact(6)" data-bs-toggle="modal" data-bs-target="#printModal">Print</a></li>
	                                                                        </ul>
	                                                                    </div>
	                                                                </div>
	                                                                <div class="email-general">
	                                                                    <h6>General</h6>
	                                                                    <p>Email Address: <span class="font-primary email_add_6">jasonb@gmail.com</span></p>
	                                                                    <div class="gender">
	                                                                        <h6>Personal</h6>
	                                                                        <p>Gender: <span>Male</span></p>
	                                                                    </div>
	                                                                </div>
	                                                            </div>
	                                                        </div>
	                                                        <div class="tab-pane fade" id="v-pills-iduser2" role="tabpanel" aria-labelledby="v-pills-iduser2-tab">
	                                                            <div class="profile-mail">
	                                                                <div class="media">
	                                                                    <img class="img-100 img-fluid m-r-20 rounded-circle update_img_7" src="{{asset('assets/images/user/4.jpg')}}" alt="" />
	                                                                    <div class="media-body mt-0">
	                                                                        <h5><span class="first_name_7">Sarah </span><span class="last_name_7">Loren</span></h5>
	                                                                        <p class="email_add_7">barnes@gmail.com</p>
	                                                                        <ul>
	                                                                            <li><a href="javascript:void(0)" onclick="printContact(7)" data-bs-toggle="modal" data-bs-target="#printModal">Print</a></li>
	                                                                        </ul>
	                                                                    </div>
	                                                                </div>
	                                                                <div class="email-general">
	                                                                    <h6>General</h6>
	                                                                    <p>Email Address: <span class="font-primary email_add_7">barnes@gmail.com</span></p>
	                                                                    <div class="gender">
	                                                                        <h6>Personal</h6>
	                                                                        <p>Gender: <span>Female</span></p>
	                                                                    </div>
	                                                                </div>
	                                                            </div>
	                                                        </div>
	                                                        <div class="tab-pane fade" id="v-pills-iduser3" role="tabpanel" aria-labelledby="v-pills-iduser3-tab">
	                                                            <div class="profile-mail">
	                                                                <div class="media">
	                                                                    <img class="img-100 img-fluid m-r-20 rounded-circle update_img_8" src="{{asset('assets/images/user/10.jpg')}}" alt="" />
	                                                                    <div class="media-body mt-0">
	                                                                        <h5><span class="first_name_8">Andew </span><span class="last_name_8">Jon</span></h5>
	                                                                        <p class="email_add_8">andrewj@gmail.com</p>
	                                                                        <ul>
	                                                                            <li><a href="javascript:void(0)" onclick="printContact(8)" data-bs-toggle="modal" data-bs-target="#printModal">Print</a></li>
	                                                                        </ul>
	                                                                    </div>
	                                                                </div>
	                                                                <div class="email-general">
	                                                                    <h6>General</h6>
	                                                                    <p>Email Address: <span class="font-primary email_add_8">andrewj@gmail.com</span></p>
	                                                                    <div class="gender">
	                                                                        <h6>Personal</h6>
	                                                                        <p>Gender: <span>Female</span></p>
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
	                                <div id="right-history">
	                                    <div class="modal-header p-l-20 p-r-20">
	                                        <h6 class="modal-title w-100">
	                                            Contact History
	                                            <span class="pull-right">
	                                                <a class="closehistory" href="javascript:void(0)"><i class="icofont icofont-close"></i></a>
	                                            </span>
	                                        </h6>
	                                    </div>
	                                    <div class="history-details">
	                                        <div class="text-center">
	                                            <i class="icofont icofont-ui-edit"></i>
	                                            <p>Contact has not been modified yet.</p>
	                                        </div>
	                                        <div class="media">
	                                            <i class="icofont icofont-star me-3"></i>
	                                            <div class="media-body mt-0">
	                                                <h6 class="mt-0">Contact Created</h6>
	                                                <p class="mb-0">Contact is created via mail</p>
	                                                <span class="f-12">Sep 10, 2019 4:00</span>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="modal fade modal-bookmark" id="printModal" tabindex="-1" role="dialog" aria-hidden="true">
	                                    <div class="modal-dialog modal-dialog-centered" role="document">
	                                        <div class="modal-content">
	                                            <div class="modal-header">
	                                                <h5 class="modal-title">Print preview</h5>
	                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
	                                            </div>
	                                            <div class="modal-body list-persons">
	                                                <div class="profile-mail pt-0" id="DivIdToPrint">
	                                                    <div class="media">
	                                                        <img class="img-100 img-fluid m-r-20 rounded-circle" id="updateimg" src="{{asset('assets/images/user/2.png')}}" alt="" />
	                                                        <div class="media-body mt-0">
	                                                            <h5><span id="printname">Bucky </span><span id="printlast">Barnes</span></h5>
	                                                            <p id="printmail">barnes@gmail.com</p>
	                                                        </div>
	                                                    </div>
	                                                    <div class="email-general">
	                                                        <h6>General</h6>
	                                                        <p>Email Address: <span class="font-primary" id="mailadd">barnes@gmail.com </span></p>
	                                                    </div>
	                                                </div>
	                                                <button class="btn btn-secondary" id="btnPrint" type="button" onclick="printDiv();">Print</button>
	                                                <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cancel</button>
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
	<script src="{{asset('assets/js/notify/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('assets/js/sweet-alert/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
    <script src="{{asset('assets/js/form-validation-custom.js')}}"></script>
    <script src="{{asset('assets/js/bookmark/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/js/contacts/custom.js')}}"></script>
	@endpush

@endsection