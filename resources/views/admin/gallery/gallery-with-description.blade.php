@extends('layouts.admin.master')

@section('title')Gallery Grid With Desc
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/photoswipe.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Gallery Grid With Description</h3>
		@endslot
		<li class="breadcrumb-item">Gallery</li>
		<li class="breadcrumb-item active">Gallery Grid With Desc</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>IMAGE GALLERY WITH DESCRIPTION</h5>
	                </div>
	                <div class="my-gallery card-body row gallery-with-description" itemscope="">
	                    <figure class="col-xl-3 col-sm-6 xl-33" itemprop="associatedMedia" itemscope="">
	                        <a href="{{asset('assets/images/big-lightgallry/01.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                            <img src="{{asset('assets/images/lightgallry/01.jpg')}}" itemprop="thumbnail" alt="Image description" />
	                            <div class="caption">
	                                <h4>Portfolio Title</h4>
	                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                            </div>
	                        </a>
	                        <figcaption itemprop="caption description">
	                            <h4>Portfolio Title</h4>
	                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                        </figcaption>
	                    </figure>
	                    <figure class="col-xl-3 col-sm-6 xl-33" itemprop="associatedMedia" itemscope="">
	                        <a href="{{asset('assets/images/big-lightgallry/02.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                            <img src="{{asset('assets/images/lightgallry/02.jpg')}}" itemprop="thumbnail" alt="Image description" />
	                            <div class="caption">
	                                <h4>Portfolio Title</h4>
	                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                            </div>
	                        </a>
	                        <figcaption itemprop="caption description">
	                            <h4>Portfolio Title</h4>
	                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                        </figcaption>
	                    </figure>
	                    <figure class="col-xl-3 col-sm-6 xl-33" itemprop="associatedMedia" itemscope="">
	                        <a href="{{asset('assets/images/big-lightgallry/03.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                            <img src="{{asset('assets/images/lightgallry/03.jpg')}}" itemprop="thumbnail" alt="Image description" />
	                            <div class="caption">
	                                <h4>Portfolio Title</h4>
	                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                            </div>
	                        </a>
	                        <figcaption itemprop="caption description">
	                            <h4>Portfolio Title</h4>
	                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                        </figcaption>
	                    </figure>
	                    <figure class="col-xl-3 col-sm-6 xl-33" itemprop="associatedMedia" itemscope="">
	                        <a href="{{asset('assets/images/big-lightgallry/04.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                            <img src="{{asset('assets/images/lightgallry/04.jpg')}}" itemprop="thumbnail" alt="Image description" />
	                            <div class="caption">
	                                <h4>Portfolio Title</h4>
	                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                            </div>
	                        </a>
	                        <figcaption itemprop="caption description">
	                            <h4>Portfolio Title</h4>
	                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                        </figcaption>
	                    </figure>
	                    <figure class="col-xl-3 col-sm-6 xl-33" itemprop="associatedMedia" itemscope="">
	                        <a href="{{asset('assets/images/big-lightgallry/01.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                            <img src="{{asset('assets/images/lightgallry/01.jpg')}}" itemprop="thumbnail" alt="Image description" />
	                            <div class="caption">
	                                <h4>Portfolio Title</h4>
	                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                            </div>
	                        </a>
	                        <figcaption itemprop="caption description">
	                            <h4>Portfolio Title</h4>
	                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                        </figcaption>
	                    </figure>
	                    <figure class="col-xl-3 col-sm-6 xl-33" itemprop="associatedMedia" itemscope="">
	                        <a href="{{asset('assets/images/big-lightgallry/02.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                            <img src="{{asset('assets/images/lightgallry/02.jpg')}}" itemprop="thumbnail" alt="Image description" />
	                            <div class="caption">
	                                <h4>Portfolio Title</h4>
	                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                            </div>
	                        </a>
	                        <figcaption itemprop="caption description">
	                            <h4>Portfolio Title</h4>
	                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                        </figcaption>
	                    </figure>
	                    <figure class="col-xl-3 col-sm-6 xl-33" itemprop="associatedMedia" itemscope="">
	                        <a href="{{asset('assets/images/big-lightgallry/03.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                            <img src="{{asset('assets/images/lightgallry/03.jpg')}}" itemprop="thumbnail" alt="Image description" />
	                            <div class="caption">
	                                <h4>Portfolio Title</h4>
	                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                            </div>
	                        </a>
	                        <figcaption itemprop="caption description">
	                            <h4>Portfolio Title</h4>
	                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                        </figcaption>
	                    </figure>
	                    <figure class="col-xl-3 col-sm-6 xl-33" itemprop="associatedMedia" itemscope="">
	                        <a href="{{asset('assets/images/big-lightgallry/04.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                            <img src="{{asset('assets/images/lightgallry/04.jpg')}}" itemprop="thumbnail" alt="Image description" />
	                            <div class="caption">
	                                <h4>Portfolio Title</h4>
	                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                            </div>
	                        </a>
	                        <figcaption itemprop="caption description">
	                            <h4>Portfolio Title</h4>
	                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. // Root element of PhotoSwipe. Must have class pswp.</p>
	                        </figcaption>
	                    </figure>
	                    <figure class="col-xl-3 col-sm-6 xl-33" itemprop="associatedMedia" itemscope="">
	                        <a href="{{asset('assets/images/big-lightgallry/01.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                            <img src="{{asset('assets/images/lightgallry/01.jpg')}}" itemprop="thumbnail" alt="Image description" />
	                            <div class="caption">
	                                <h4>Portfolio Title</h4>
	                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                            </div>
	                        </a>
	                        <figcaption itemprop="caption description">
	                            <h4>Portfolio Title</h4>
	                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                        </figcaption>
	                    </figure>
	                    <figure class="col-xl-3 col-sm-6 xl-33" itemprop="associatedMedia" itemscope="">
	                        <a href="{{asset('assets/images/big-lightgallry/02.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                            <img src="{{asset('assets/images/lightgallry/02.jpg')}}" itemprop="thumbnail" alt="Image description" />
	                            <div class="caption">
	                                <h4>Portfolio Title</h4>
	                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                            </div>
	                        </a>
	                        <figcaption itemprop="caption description">
	                            <h4>Portfolio Title</h4>
	                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                        </figcaption>
	                    </figure>
	                    <figure class="col-xl-3 col-sm-6 xl-33" itemprop="associatedMedia" itemscope="">
	                        <a href="{{asset('assets/images/big-lightgallry/03.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                            <img src="{{asset('assets/images/lightgallry/03.jpg')}}" itemprop="thumbnail" alt="Image description" />
	                            <div class="caption">
	                                <h4>Portfolio Title</h4>
	                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                            </div>
	                        </a>
	                        <figcaption itemprop="caption description">
	                            <h4>Portfolio Title</h4>
	                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                        </figcaption>
	                    </figure>
	                    <figure class="col-xl-3 col-sm-6 xl-33" itemprop="associatedMedia" itemscope="">
	                        <a href="{{asset('assets/images/big-lightgallry/04.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                            <img src="{{asset('assets/images/lightgallry/04.jpg')}}" itemprop="thumbnail" alt="Image description" />
	                            <div class="caption">
	                                <h4>Portfolio Title</h4>
	                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                            </div>
	                        </a>
	                        <figcaption itemprop="caption description">
	                            <h4>Portfolio Title</h4>
	                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                        </figcaption>
	                    </figure>
	                    <figure class="col-xl-3 col-sm-6 xl-33" itemprop="associatedMedia" itemscope="">
	                        <a href="{{asset('assets/images/big-lightgallry/01.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                            <img src="{{asset('assets/images/lightgallry/01.jpg')}}" itemprop="thumbnail" alt="Image description" />
	                            <div class="caption">
	                                <h4>Portfolio Title</h4>
	                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                            </div>
	                        </a>
	                        <figcaption itemprop="caption description">
	                            <h4>Portfolio Title</h4>
	                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                        </figcaption>
	                    </figure>
	                    <figure class="col-xl-3 col-sm-6 xl-33" itemprop="associatedMedia" itemscope="">
	                        <a href="{{asset('assets/images/big-lightgallry/02.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                            <img src="{{asset('assets/images/lightgallry/02.jpg')}}" itemprop="thumbnail" alt="Image description" />
	                            <div class="caption">
	                                <h4>Portfolio Title</h4>
	                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                            </div>
	                        </a>
	                        <figcaption itemprop="caption description">
	                            <h4>Portfolio Title</h4>
	                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                        </figcaption>
	                    </figure>
	                    <figure class="col-xl-3 col-sm-6 xl-33" itemprop="associatedMedia" itemscope="">
	                        <a href="{{asset('assets/images/big-lightgallry/03.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                            <img src="{{asset('assets/images/lightgallry/03.jpg')}}" itemprop="thumbnail" alt="Image description" />
	                            <div class="caption">
	                                <h4>Portfolio Title</h4>
	                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                            </div>
	                        </a>
	                        <figcaption itemprop="caption description">
	                            <h4>Portfolio Title</h4>
	                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                        </figcaption>
	                    </figure>
	                    <figure class="col-xl-3 col-sm-6 xl-33" itemprop="associatedMedia" itemscope="">
	                        <a href="{{asset('assets/images/big-lightgallry/04.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                            <img src="{{asset('assets/images/lightgallry/04.jpg')}}" itemprop="thumbnail" alt="Image description" />
	                            <div class="caption">
	                                <h4>Portfolio Title</h4>
	                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                            </div>
	                        </a>
	                        <figcaption itemprop="caption description">
	                            <h4>Portfolio Title</h4>
	                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
	                        </figcaption>
	                    </figure>
	                </div>
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

	
	@push('scripts')
	<script src="{{asset('assets/js/photoswipe/photoswipe.min.js')}}"></script>
    <script src="{{asset('assets/js/photoswipe/photoswipe-ui-default.min.js')}}"></script>
    <script src="{{asset('assets/js/photoswipe/photoswipe.js')}}"></script>
	@endpush

@endsection