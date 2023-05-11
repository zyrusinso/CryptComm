@extends('layouts.admin.master')

@section('title')Detailed Course
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Detailed Course</h3>
		@endslot
		<li class="breadcrumb-item">Learning</li>
		<li class="breadcrumb-item active">Detailed Course</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row learning-block">
	        <div class="col-xl-9 xl-60 box-col-8">
	            <div class="blog-single">
	                <div class="blog-box blog-details">
	                    <div class="card"><img class="img-fluid w-100" src="{{asset('assets/images/faq/learning-1.jpg')}}" alt="blog-main" /></div>
	                    <div class="card">
	                        <div class="card-body">
	                            <div class="blog-details">
	                                <ul class="blog-social">
	                                    <li class="digits">25 July 2018</li>
	                                    <li><i class="icofont icofont-user"></i>Mark <span>Jecno </span></li>
	                                    <li class="digits"><i class="icofont icofont-thumbs-up"></i>02<span>Hits</span></li>
	                                    <li class="digits"><i class="icofont icofont-ui-chat"></i>598 Comments</li>
	                                </ul>
	                                <h4>
	                                    All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
	                                </h4>
	                                <div class="single-blog-content-top">
	                                    <p>
	                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
	                                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
	                                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
	                                    </p>
	                                    <p>
	                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
	                                        distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their
	                                        default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose
	                                        (injected humour and the like
	                                    </p>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="card comment-box">
	                    <div class="card-body">
	                        <h4>Comment</h4>
	                        <ul>
	                            <li>
	                                <div class="media align-self-center">
	                                    <img class="align-self-center" src="{{asset('assets/images/blog/comment.jpg')}}" alt="Generic placeholder image" />
	                                    <div class="media-body">
	                                        <div class="row">
	                                            <div class="col-md-4 xl-100">
	                                                <a href="user-profile.html">
	                                                    <h6 class="mt-0">Jolio Mark<span> ( Designer )</span></h6>
	                                                </a>
	                                            </div>
	                                            <div class="col-md-8 xl-100">
	                                                <ul class="comment-social learning-comment">
	                                                    <li class="digits"><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
	                                                    <li class="digits"><i class="icofont icofont-ui-chat"></i>598 Comments</li>
	                                                </ul>
	                                            </div>
	                                        </div>
	                                        <p>
	                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly
	                                            believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
	                                        </p>
	                                    </div>
	                                </div>
	                            </li>
	                            <li>
	                                <ul>
	                                    <li>
	                                        <div class="media">
	                                            <img class="align-self-center" src="{{asset('assets/images/blog/9.jpg')}}" alt="Generic placeholder image" />
	                                            <div class="media-body">
	                                                <div class="row">
	                                                    <div class="col-xl-12">
	                                                        <a href="user-profile.html">
	                                                            <h6 class="mt-0">Jolio Mark<span> ( Designer )</span></h6>
	                                                        </a>
	                                                    </div>
	                                                </div>
	                                                <p>
	                                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even
	                                                    slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
	                                                </p>
	                                            </div>
	                                        </div>
	                                    </li>
	                                </ul>
	                            </li>
	                            <li>
	                                <div class="media">
	                                    <img class="align-self-center" src="{{asset('assets/images/blog/4.jpg')}}" alt="Generic placeholder image" />
	                                    <div class="media-body">
	                                        <div class="row">
	                                            <div class="col-md-4 xl-100">
	                                                <a href="user-profile.html">
	                                                    <h6 class="mt-0">Jolio Mark<span> ( Designer )</span></h6>
	                                                </a>
	                                            </div>
	                                            <div class="col-md-8 xl-100">
	                                                <ul class="comment-social learning-comment">
	                                                    <li class="digits"><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
	                                                    <li class="digits"><i class="icofont icofont-ui-chat"></i>598 Comments</li>
	                                                </ul>
	                                            </div>
	                                        </div>
	                                        <p>
	                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly
	                                            believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
	                                        </p>
	                                    </div>
	                                </div>
	                            </li>
	                        </ul>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="col-xl-3 xl-40">
	            <div class="job-sidebar">
	                <a class="btn btn-primary job-toggle" href="javascript:void(0)">learning filter</a>
	                <div class="job-left-aside custom-scrollbar custom-scrollbar">
	                    <div class="default-according style-1 faq-accordion job-accordion" id="accordionoc">
	                        <div class="row">
	                            <div class="col-xl-12">
	                                <div class="card">
	                                    <div class="card-header">
	                                        <h5 class="mb-0 p-0">
	                                            <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseicon" aria-expanded="true" aria-controls="collapseicon">Find Course</button>
	                                        </h5>
	                                    </div>
	                                    <div class="collapse show" id="collapseicon" aria-labelledby="collapseicon" data-bs-parent="#accordion">
	                                        <div class="card-body filter-cards-view animate-chk">
	                                            <div class="job-filter">
	                                                <div class="faq-form"><input class="form-control" type="text" placeholder="Search.." /><i class="search-icon" data-feather="search"></i></div>
	                                            </div>
	                                            <div class="checkbox-animated">
	                                                <div class="learning-header"><span class="f-w-600">Categories</span></div>
	                                                <label class="d-block" for="chk-ani"> <input class="checkbox_animated" id="chk-ani" type="checkbox" /> Accounting </label>
	                                                <label class="d-block" for="chk-ani0"> <input class="checkbox_animated" id="chk-ani0" type="checkbox" /> Design </label>
	                                                <label class="d-block" for="chk-ani1"> <input class="checkbox_animated" id="chk-ani1" type="checkbox" /> Development </label>
	                                                <label class="d-block" for="chk-ani2"> <input class="checkbox_animated" id="chk-ani2" type="checkbox" /> Management </label>
	                                            </div>
	                                            <div class="checkbox-animated mt-0">
	                                                <div class="learning-header"><span class="f-w-600">Duration</span></div>
	                                                <label class="d-block" for="chk-ani6"> <input class="checkbox_animated" id="chk-ani6" type="checkbox" /> 0-50 hours </label>
	                                                <label class="d-block" for="chk-ani7"> <input class="checkbox_animated" id="chk-ani7" type="checkbox" /> 50-100 hours </label>
	                                                <label class="d-block" for="chk-ani8"> <input class="checkbox_animated" id="chk-ani8" type="checkbox" /> 100+ hours </label>
	                                            </div>
	                                            <div class="checkbox-animated mt-0">
	                                                <div class="learning-header"><span class="f-w-600">Price</span></div>
	                                                <label class="d-block" for="edo-ani"> <input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani" checked="" /> All Courses </label>
	                                                <label class="d-block" for="edo-ani1"> <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani" checked="" /> Paid Courses </label>
	                                                <label class="d-block" for="edo-ani2"> <input class="radio_animated" id="edo-ani2" type="radio" name="rdo-ani" checked="" /> Free Courses </label>
	                                            </div>
	                                            <div class="checkbox-animated mt-0">
	                                                <div class="learning-header"><span class="f-w-600">Status</span></div>
	                                                <label class="d-block" for="chk-ani3"> <input class="checkbox_animated" id="chk-ani3" type="checkbox" /> Registration </label>
	                                                <label class="d-block" for="chk-ani4"> <input class="checkbox_animated" id="chk-ani4" type="checkbox" /> Progress </label>
	                                                <label class="d-block" for="chk-ani5"> <input class="checkbox_animated" id="chk-ani5" type="checkbox" /> Completed </label>
	                                            </div>
	                                            <button class="btn btn-primary text-center" type="button">Filter</button>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-xl-12">
	                                <div class="card">
	                                    <div class="card-header">
	                                        <h5 class="mb-0 p-0">
	                                            <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseicon1" aria-expanded="true" aria-controls="collapseicon1">Categories</button>
	                                        </h5>
	                                    </div>
	                                    <div class="collapse show" id="collapseicon1" aria-labelledby="collapseicon1" data-bs-parent="#accordion">
	                                        <div class="categories">
	                                            <div class="learning-header"><span class="f-w-600">Design</span></div>
	                                            <ul>
	                                                <li><a href="#">UI Design </a><span class="badge badge-primary pull-right">28</span></li>
	                                                <li><a href="#">UX Design </a><span class="badge badge-primary pull-right">35</span></li>
	                                                <li><a href="#">Interface Design </a><span class="badge badge-primary pull-right">17</span></li>
	                                                <li><a href="#">User Experience </a><span class="badge badge-primary pull-right">26</span></li>
	                                            </ul>
	                                        </div>
	                                        <div class="categories pt-0">
	                                            <div class="learning-header"><span class="f-w-600">Development</span></div>
	                                            <ul>
	                                                <li><a href="#">Frontend Development</a><span class="badge badge-primary pull-right">48</span></li>
	                                                <li><a href="#">Backend Development</a><span class="badge badge-primary pull-right">19</span></li>
	                                            </ul>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-xl-12">
	                                <div class="card">
	                                    <div class="card-header">
	                                        <h5 class="mb-0 p-0">
	                                            <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseicon2" aria-expanded="true" aria-controls="collapseicon2">Upcoming Courses</button>
	                                        </h5>
	                                    </div>
	                                    <div class="collapse show" id="collapseicon2" aria-labelledby="collapseicon2" data-bs-parent="#accordion">
	                                        <div class="upcoming-course card-body">
	                                            <div class="media">
	                                                <div class="media-body">
	                                                    <span class="f-w-600">UX Development</span>
	                                                    <h6>Course By <a href="#"> Lorem ipsum</a></h6>
	                                                    <ul class="rating">
	                                                        <li><i class="fa fa-star font-warning"></i></li>
	                                                        <li><i class="fa fa-star font-warning"></i></li>
	                                                        <li><i class="fa fa-star font-warning"></i></li>
	                                                        <li><i class="fa fa-star font-warning"></i></li>
	                                                        <li><i class="fa fa-star-half-o font-warning"></i></li>
	                                                    </ul>
	                                                </div>
	                                                <div>
	                                                    <h5 class="mb-0 p-0 font-primary">18</h5>
	                                                    <span class="d-block">Dec</span>
	                                                </div>
	                                            </div>
	                                            <div class="media">
	                                                <div class="media-body">
	                                                    <span class="f-w-600">Business Analyst</span>
	                                                    <h6>Course By <a href="#">Lorem ipsum </a></h6>
	                                                    <ul class="rating">
	                                                        <li><i class="fa fa-star font-warning"></i></li>
	                                                        <li><i class="fa fa-star font-warning"></i></li>
	                                                        <li><i class="fa fa-star font-warning"></i></li>
	                                                        <li><i class="fa fa-star font-warning"></i></li>
	                                                        <li><i class="fa fa-star-half-o font-warning"></i></li>
	                                                    </ul>
	                                                </div>
	                                                <div>
	                                                    <h5 class="mb-0 p-0 font-primary">28</h5>
	                                                    <span class="d-block">Dec</span>
	                                                </div>
	                                            </div>
	                                            <div class="media">
	                                                <div class="media-body">
	                                                    <span class="f-w-600">Web Development</span>
	                                                    <h6>Course By <a href="#">Lorem ipsum </a></h6>
	                                                    <ul class="rating">
	                                                        <li><i class="fa fa-star font-warning"></i></li>
                                                        <li><i class="fa fa-star font-warning"></i></li>
                                                        <li><i class="fa fa-star font-warning"></i></li>
                                                        <li><i class="fa fa-star font-warning"></i></li>
                                                        <li><i class="fa fa-star-half-o font-warning"></i></li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h5 class="mb-0 p-0 font-primary">5</h5>
                                                    <span class="d-block">Jan </span>
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
	@endpush

@endsection