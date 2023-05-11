@extends('layouts.admin.master')

@section('title')Blog Single
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Blog Single</h3>
		@endslot
		<li class="breadcrumb-item">Blog</li>
		<li class="breadcrumb-item active">Blog Single</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="blog-single">
	                <div class="blog-box blog-details">
	                    <div class="banner-wrraper"><img class="img-fluid w-100 bg-img-cover" src="{{asset('assets/images/blog/blog-single.jpg')}}" alt="blog-main" /></div>
	                    <div class="card">
	                        <div class="card-body">
	                            <div class="blog-details">
	                                <ul class="blog-social">
	                                    <li>25 July 2018</li>
	                                    <li><i class="icofont icofont-user"></i>Mark <span>Jecno </span></li>
	                                    <li><i class="icofont icofont-thumbs-up"></i>02<span>Hits</span></li>
	                                    <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
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
	                                            <div class="col-md-4">
	                                                <a href="user-profile.html">
	                                                    <h6 class="mt-0">Jolio Mark<span> ( Designer )</span></h6>
	                                                </a>
	                                            </div>
	                                            <div class="col-md-8">
	                                                <ul class="comment-social">
	                                                    <li><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
	                                                    <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
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
	                                            <div class="col-md-4">
	                                                <a href="user-profile.html">
	                                                    <h6 class="mt-0">Jolio Mark<span> ( Designer )</span></h6>
	                                                </a>
	                                            </div>
	                                            <div class="col-md-8">
	                                                <ul class="comment-social">
	                                                    <li><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
	                                                    <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
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
	                                <div class="media">
	                                    <img class="align-self-center" src="{{asset('assets/images/blog/12.png')}}" alt="Generic placeholder image" />
	                                    <div class="media-body">
	                                        <div class="row">
	                                            <div class="col-md-4">
	                                                <a href="user-profile.html">
	                                                    <h6 class="mt-0">Jolio Mark<span> ( Designer )</span></h6>
	                                                </a>
	                                            </div>
	                                            <div class="col-md-8">
	                                                <ul class="comment-social">
	                                                    <li><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
	                                                    <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
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
	                                <div class="media">
	                                    <img class="align-self-center" src="{{asset('assets/images/blog/14.png')}}" alt="Generic placeholder image" />
	                                    <div class="media-body">
	                                        <div class="row">
	                                            <div class="col-md-4">
	                                                <a href="user-profile.html">
	                                                    <h6 class="mt-0 text-start">Jolio Mark<span> ( Designer )</span></h6>
	                                                </a>
	                                            </div>
	                                            <div class="col-md-8">
	                                                <ul class="comment-social">
	                                                    <li><i class="icofont icofont-thumbs-up"></i>02 Hits</li>
	                                                    <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
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
	    </div>
	</div>

	
	@push('scripts')
	@endpush

@endsection