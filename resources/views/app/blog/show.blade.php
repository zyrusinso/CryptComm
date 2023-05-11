@extends('layouts.master')

@section('title')Blog Details
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>@lang('app.blog.blog_details')</h3>
		@endslot
		<li class="breadcrumb-item">@lang('app._blog')</li>
		<li class="breadcrumb-item active">@lang('app.blog.blog_details')</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="blog-single">
	                <div class="blog-box blog-details">
	                    <div class="banner-wrraper"><img class="img-fluid w-100 bg-img-cover" src="{{ asset($post->photo) ?? asset('assets/images/blog/blog-5.jpg') }}" alt="blog-main" /></div>
	                    <div class="card">
	                        <div class="card-body">
	                            <div class="blog-details">
	                                <ul class="blog-social">
	                                    <li>{{ Carbon\Carbon::parse($post->created_at)->format('M d Y') }}</li>
	                                    <li><i class="icofont icofont-user"></i>{{ App\Models\User::getUser($post->user_id)->username }}</li>
	                                    {{-- <li><i class="icofont icofont-thumbs-up"></i>02<span>Hits</span></li>
	                                    <li><i class="icofont icofont-ui-chat"></i>598 Comments</li> --}}
	                                </ul>
	                                <h4>
	                                    {{ $post->title }}
	                                </h4>
	                                <div class="single-blog-content-top">
	                                    <p>
	                                        {{ $post->description }}
	                                    </p>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                {{-- <div class="card comment-box">
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
	                </div> --}}
	            </div>
	        </div>
	    </div>
	</div>

	
	@push('scripts')
	@endpush

@endsection