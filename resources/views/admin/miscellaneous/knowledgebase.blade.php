@extends('layouts.admin.master')

@section('title')Knowledgebase
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Knowledgebase</h3>
		@endslot
		<li class="breadcrumb-item active">Knowledgebase</li>
	@endcomponent
	
	<div class="container-fluid faq-section">
	    <div class="row">
	        <div class="col-12">
	            <div class="knowledgebase-bg"><img class="bg-img-cover bg-center" src="{{asset('assets/images/knowledgebase/bg_1.jpg')}}" alt="looginpage" /></div>
	            <div class="knowledgebase-search">
	                <div>
	                    <h3>How Can I help you?</h3>
	                    <form class="form-inline" action="#" method="get">
	                        <div class="form-group w-100 mb-0">
	                            <i data-feather="search"></i>
	                            <input class="form-control-plaintext w-100" type="text" placeholder="Type question here" title="" />
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	        <div class="col-xl-4 xl-50 col-lg-6 box-col-6">
	            <div class="card bg-primary">
	                <div class="card-body">
	                    <div class="media faq-widgets">
	                        <div class="media-body">
	                            <h5>Articles</h5>
	                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
	                        </div>
	                        <i data-feather="book-open"></i>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="col-xl-4 xl-50 col-lg-6 box-col-6">
	            <div class="card bg-primary">
	                <div class="card-body">
	                    <div class="media faq-widgets">
	                        <div class="media-body">
	                            <h5>Knowledgebase</h5>
	                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
	                        </div>
	                        <i data-feather="aperture"></i>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="col-xl-4 col-lg-12 xl-100 box-col-12">
	            <div class="card bg-primary">
	                <div class="card-body">
	                    <div class="media faq-widgets">
	                        <div class="media-body">
	                            <h5>Support</h5>
	                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
	                        </div>
	                        <i data-feather="file-text"></i>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <div class="header-faq">
	                <h5 class="mb-0">Browse articles by category</h5>
	            </div>
	            <div class="row">
	                <div class="col-sm-12">
	                    <div class="card">
	                        <div class="card-header pb-0">
	                            <h5>Browse Articles</h5>
	                        </div>
	                        <div class="card-body">
	                            <div class="row browse">
	                                <div class="col-xl-4 xl-50 col-md-6">
	                                    <div class="browse-articles">
	                                        <h6>
	                                            <span><i data-feather="archive"></i></span>Quick Questions are answered
	                                        </h6>
	                                        <ul>
	                                            <li>
	                                                <h5><i data-feather="file-text"></i>Lorem Ipsum is simply dummy text of the printing</h5>
	                                            </li>
	                                            <li>
	                                                <h5><i data-feather="file-text"> </i>Lorem Ipsum has been the industry's standard dummy <span class="badge badge-primary pull-right">New</span></h5>
	                                            </li>
	                                            <li>
	                                                <h5><i data-feather="file-text"></i>When an unknown printer took a galley</h5>
	                                            </li>
	                                            <li>
	                                                <h5><i data-feather="file-text"></i>But also the leap into electronic typesetting,</h5>
	                                            </li>
	                                            <li>
	                                                <a class="f-w-600 font-primary" href="javascript:void(0)"> <i class="me-1" data-feather="arrow-right"></i><span>See More (40)</span></a>
	                                            </li>
	                                        </ul>
	                                    </div>
	                                </div>
	                                <div class="col-xl-4 xl-50 col-md-6">
	                                    <div class="browse-articles">
	                                        <h6>
	                                            <span><i data-feather="archive"></i></span> Integrating WordPress with Your Website
	                                        </h6>
	                                        <ul>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i>It was popularised in the 1960s with the release<span class="badge badge-primary pull-right">Review</span></h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i>Etraset sheets containing Lorem Ipsum passages</h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i>Desktop publishing software like Aldus PageMaker</h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i>Making this the first true generator on the Internet.</h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a class="f-w-600 font-primary" href="javascript:void(0)"> <i class="me-1" data-feather="arrow-right"></i><span> See More (90) </span></a>
	                                            </li>
	                                        </ul>
	                                    </div>
	                                </div>
	                                <div class="col-xl-4 xl-50 col-md-6">
	                                    <div class="browse-articles">
	                                        <h6>
	                                            <span><i data-feather="archive"></i></span>WordPress Site Maintenance
	                                        </h6>
	                                        <ul>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i>The point of using Lorem Ipsum is that it has a more-or-less</h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i>Normal distribution of letters, as opposed to using</h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i>Lorem Ipsum, you need to be sure there isn't anything</h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i>Repetition, injected humour, or non-characteristic words etc</h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a class="f-w-600 font-primary" href="javascript:void(0)"> <i class="me-1" data-feather="arrow-right"></i><span>See More (40)</span></a>
	                                            </li>
	                                        </ul>
	                                    </div>
	                                </div>
	                                <div class="col-xl-4 xl-50 col-md-6">
	                                    <div class="browse-articles browse-bottom">
	                                        <h6>
	                                            <span><i data-feather="archive"></i> Meta Tags in WordPress</span>
	                                        </h6>
	                                        <ul>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i>Nemo enim ipsam voluptatem quia voluptas sit <span class="badge badge-primary pull-right">Popular</span></h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i><span>Ipsum quia dolor sit amet, consectetur</span></h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i><span>Sed quia non numquam eius modi tempora incidunt</span></h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i><span>Lorem eum fugiat quo voluptas nulla pariatu</span></h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a class="f-w-600 font-primary" href="javascript:void(0)"> <i class="me-1" data-feather="arrow-right"></i><span>See More (90)</span></a>
	                                            </li>
	                                        </ul>
	                                    </div>
	                                </div>
	                                <div class="col-xl-4 xl-50 col-md-6">
	                                    <div class="browse-articles browse-bottom">
	                                        <h6>
	                                            <span><i data-feather="archive"></i></span>WordPress in Your Language
	                                        </h6>
	                                        <ul>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i>Desktop publishing software like Aldus PageMaker</h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i>Etraset sheets containing Lorem Ipsum passages</h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i>It was popularised in the 1960s with the release</h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i>Making this the first true generator on the Internet<span class="badge badge-primary pull-right">Closed</span></h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a class="f-w-600 font-primary" href="javascript:void(0)"> <i class="me-1" data-feather="arrow-right"></i><span>See More (50)</span></a>
	                                            </li>
	                                        </ul>
	                                    </div>
	                                </div>
	                                <div class="col-xl-4 xl-50 col-md-6">
	                                    <div class="browse-articles browse-bottom">
	                                        <h6>
	                                            <span><i data-feather="archive"></i></span>Know Your Sources
	                                        </h6>
	                                        <ul>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i>The point of using Lorem Ipsum</h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i>It has a more-or-less normal distribution of letters</h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i>Et harum quidem rerum facilis est et expedita</h5>
	                                                    <span class="badge badge-primary pull-right">Article</span>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i>Nam libero tempore, cum soluta nobis est eligendi</h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a class="f-w-600 font-primary" href="javascript:void(0)"> <i class="me-1" data-feather="arrow-right"></i><span>See More (26)</span></a>
	                                            </li>
	                                        </ul>
	                                    </div>
	                                </div>
	                                <div class="col-xl-4 xl-50 col-md-6">
	                                    <div class="browse-articles browse-bottom">
	                                        <h6>
	                                            <span><i data-feather="archive"></i></span>Validating a Website
	                                        </h6>
	                                        <ul>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i>When our power of choice is untrammelled</h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i>It will frequently occur that pleasures</h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i>who fail in their duty through weakness</h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i>At vero eos et accusamus et iusto</h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a class="f-w-600 font-primary" href="javascript:void(0)"> <i class="me-1" data-feather="arrow-right"></i><span>See More (10)</span></a>
	                                            </li>
	                                        </ul>
	                                    </div>
	                                </div>
	                                <div class="col-xl-4 xl-50 col-md-6">
	                                    <div class="browse-articles browse-bottom">
	                                        <h6>
	                                            <span><i data-feather="archive"></i></span>Quick Questions are answered
	                                        </h6>
	                                        <ul>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i>Quis autem vel eum iure reprehenderit</h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i>Ducimus blanditiis praesentium voluptatum</h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i>Omnis voluptas assumenda est<span class="badge badge-primary pull-right">Review</span></h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i>Produces no resultant pleasure</h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a class="f-w-600 font-primary" href="javascript:void(0)"> <i class="me-1" data-feather="arrow-right"></i><span>See More (21)</span></a>
	                                            </li>
	                                        </ul>
	                                    </div>
	                                </div>
	                                <div class="col-xl-4 xl-100">
	                                    <div class="browse-articles browse-bottom">
	                                        <h6>
	                                            <span><i data-feather="archive"></i></span>Integrating WordPress with Your Website
	                                        </h6>
	                                        <ul>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i>Lorem Ipsum passage, and going through</h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i>The first line of Lorem Ipsum, Lorem ipsum</h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i>Thus comes from a line in section</h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a href="javascript:void(0)">
	                                                    <h5><i data-feather="file-text"></i>First true generator on the Internet<span class="badge badge-primary pull-right">On hold</span></h5>
	                                                </a>
	                                            </li>
	                                            <li>
	                                                <a class="f-w-600 font-primary" href="javascript:void(0)"> <i class="me-1" data-feather="arrow-right"></i><span>See More (34)</span></a>
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
	        <div class="col-lg-12 featured-tutorial">
	            <div class="header-faq">
	                <h5 class="mb-0">Featured Tutorials</h5>
	            </div>
	            <div class="row">
	                <div class="col-xl-3 xl-50 col-sm-6 box-col-6">
	                    <div class="card features-faq product-box">
	                        <div class="faq-image product-img">
	                            <img class="img-fluid" src="{{asset('assets/images/faq/1.jpg')}}" alt="" />
	                            <div class="product-hover">
	                                <ul>
	                                    <li>
	                                        <a href="learning-detailed.html"><i class="icon-link"></i></a>
	                                    </li>
	                                    <li>
	                                        <a href="learning-detailed.html"><i class="icon-import"></i></a>
	                                    </li>
	                                </ul>
	                            </div>
	                        </div>
	                        <div class="card-body">
	                            <a href="learning-detailed.html"> <h6>Web Design</h6></a>
	                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
	                        </div>
	                        <div class="card-footer">
	                            <span>Dec 15, 2019</span>
	                            <ul class="pull-right">
	                                <li><i class="fa fa-star font-primary"></i></li>
	                                <li><i class="fa fa-star font-primary"></i></li>
	                                <li><i class="fa fa-star font-primary"></i></li>
	                                <li><i class="fa fa-star font-primary"></i></li>
	                                <li><i class="fa fa-star font-primary"></i></li>
	                            </ul>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-3 xl-50 col-sm-6 box-col-6">
	                    <div class="card features-faq product-box">
	                        <div class="faq-image product-img">
	                            <img class="img-fluid" src="{{asset('assets/images/faq/2.jpg')}}" alt="" />
	                            <div class="product-hover">
	                                <ul>
	                                    <li>
	                                        <a href="learning-detailed.html"><i class="icon-link"></i></a>
	                                    </li>
	                                    <li>
	                                        <a href="learning-detailed.html"><i class="icon-import"></i></a>
	                                    </li>
	                                </ul>
	                            </div>
	                        </div>
	                        <div class="card-body">
	                            <a href="learning-detailed.html"> <h6>Web Development</h6></a>
	                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
	                        </div>
	                        <div class="card-footer">
	                            <span>Dec 15, 2019</span>
	                            <ul class="pull-right">
	                                <li><i class="fa fa-star font-primary"></i></li>
	                                <li><i class="fa fa-star font-primary"></i></li>
	                                <li><i class="fa fa-star font-primary"></i></li>
	                                <li><i class="fa fa-star font-primary"></i></li>
	                                <li><i class="fa fa-star-o font-primary"></i></li>
	                            </ul>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-3 xl-50 col-sm-6 box-col-6">
	                    <div class="card features-faq product-box">
	                        <div class="faq-image product-img">
	                            <img class="img-fluid" src="{{asset('assets/images/faq/3.jpg')}}" alt="" />
	                            <div class="product-hover">
	                                <ul>
	                                    <li>
	                                        <a href="learning-detailed.html"><i class="icon-link"></i></a>
	                                    </li>
	                                    <li>
	                                        <a href="learning-detailed.html"><i class="icon-import"></i></a>
	                                    </li>
	                                </ul>
	                            </div>
	                        </div>
	                        <div class="card-body">
	                            <a href="learning-detailed.html"> <h6>UI Design</h6></a>
	                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
	                        </div>
	                        <div class="card-footer">
	                            <span>Dec 15, 2019</span>
	                            <ul class="pull-right">
	                                <li><i class="fa fa-star font-primary"></i></li>
	                                <li><i class="fa fa-star font-primary"></i></li>
	                                <li><i class="fa fa-star font-primary"></i></li>
	                                <li><i class="fa fa-star font-primary"></i></li>
	                                <li><i class="fa fa-star font-primary"></i></li>
	                            </ul>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-3 xl-50 col-sm-6 box-col-6">
	                    <div class="card features-faq product-box">
	                        <div class="faq-image product-img">
	                            <img class="img-fluid" src="{{asset('assets/images/faq/4.jpg')}}" alt="" />
	                            <div class="product-hover">
	                                <ul>
	                                    <li>
	                                        <a href="learning-detailed.html"><i class="icon-link"></i></a>
	                                    </li>
	                                    <li>
	                                        <a href="learning-detailed.html"><i class="icon-import"></i></a>
	                                    </li>
	                                </ul>
	                            </div>
	                        </div>
	                        <div class="card-body">
	                            <a href="learning-detailed.html"> <h6>UX Design</h6></a>
	                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
	                        </div>
	                        <div class="card-footer">
	                            <span>Dec 15, 2019</span>
	                            <ul class="pull-right">
	                                <li><i class="fa fa-star font-primary"></i></li>
	                                <li><i class="fa fa-star font-primary"></i></li>
	                                <li><i class="fa fa-star font-primary"></i></li>
	                                <li><i class="fa fa-star font-primary"></i></li>
	                                <li><i class="fa fa-star-half-o font-primary"></i></li>
	                            </ul>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="col-lg-12 latest-articles">
	            <div class="header-faq">
	                <h5 class="mb-0">Latest articles and videos</h5>
	            </div>
	            <div class="row">
	                <div class="col-xl-4 col-md-6">
	                    <div class="row">
	                        <div class="col-sm-12">
	                            <div class="card">
	                                <div class="card-body">
	                                    <div class="media">
	                                        <i class="m-r-30" data-feather="codepen"></i>
	                                        <div class="media-body">
	                                            <h6 class="f-w-600">Using Video</h6>
	                                            <p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-sm-12">
	                            <div class="card">
	                                <div class="card-body">
	                                    <div class="media">
	                                        <i class="m-r-30" data-feather="codepen"></i>
	                                        <div class="media-body">
	                                            <h6 class="f-w-600">Vel illum qu</h6>
	                                            <p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-sm-12">
	                            <div class="card">
	                                <div class="card-body">
	                                    <div class="media">
	                                        <i class="m-r-30" data-feather="codepen"></i>
	                                        <div class="media-body">
	                                            <h6 class="f-w-600">Cum sociis natoqu</h6>
	                                            <p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-4 col-md-6">
	                    <div class="row">
	                        <div class="col-sm-12">
	                            <div class="card">
	                                <div class="card-body">
	                                    <div class="media">
	                                        <i class="m-r-30" data-feather="file-text"></i>
	                                        <div class="media-body">
	                                            <h6 class="f-w-600">Donec pede justo</h6>
	                                            <p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-sm-12">
	                            <div class="card">
	                                <div class="card-body">
	                                    <div class="media">
	                                        <i class="m-r-30" data-feather="file-text"></i>
	                                        <div class="media-body">
	                                            <h6 class="f-w-600">Nam quam nunc</h6>
	                                            <p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-sm-12">
	                            <div class="card">
	                                <div class="card-body">
	                                    <div class="media">
	                                        <i class="m-r-30" data-feather="file-text"></i>
	                                        <div class="media-body">
	                                            <h6 class="f-w-600">Using Video</h6>
	                                            <p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-4">
	                    <div class="row">
	                        <div class="col-xl-12 col-md-6">
	                            <div class="card">
	                                <div class="card-body">
	                                    <div class="media">
	                                        <i class="m-r-30" data-feather="youtube"></i>
	                                        <div class="media-body">
	                                            <h6 class="f-w-600">Vel illum qu</h6>
	                                            <p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-xl-12 col-md-6">
	                            <div class="card">
	                                <div class="card-body">
	                                    <div class="media">
	                                        <i class="m-r-30" data-feather="youtube"></i>
	                                        <div class="media-body">
	                                            <h6 class="f-w-600">Cum sociis natoqu</h6>
	                                            <p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-xl-12">
	                            <div class="card">
	                                <div class="card-body">
	                                    <div class="media">
	                                        <i class="m-r-30" data-feather="youtube"></i>
	                                        <div class="media-body">
	                                            <h6 class="f-w-600">Donec pede justo</h6>
	                                            <p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
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