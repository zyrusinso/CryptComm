@extends('layouts.admin.master')

@section('title')Masonry Gallery
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/photoswipe.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Masonry Gallery</h3>
		@endslot
		<li class="breadcrumb-item">Gallery</li>
		<li class="breadcrumb-item active">Masonry Gallery</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12 box-col-4">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>MASONRY GALLERY</h5>
	                </div>
	                <div class="card-body photoswipe-pb-responsive">
	                    <div class="my-gallery row grid gallery" id="aniimated-thumbnials" itemscope="">
	                        <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-masonry/1.jpg')}}" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="{{asset('assets/images/masonry/1.jpg')}}" itemprop="thumbnail" alt="Image description" /></a>
	                            <figcaption itemprop="caption description">Image caption 1</figcaption>
	                        </figure>
	                        <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-masonry/2.jpg')}}" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="{{asset('assets/images/masonry/2.jpg')}}" itemprop="thumbnail" alt="Image description" /></a>
	                            <figcaption itemprop="caption description">Image caption 2</figcaption>
	                        </figure>
	                        <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-masonry/3.jpg')}}" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="{{asset('assets/images/masonry/3.jpg')}}" itemprop="thumbnail" alt="Image description" /></a>
	                            <figcaption itemprop="caption description">Image caption 3</figcaption>
	                        </figure>
	                        <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-masonry/4.jpg')}}" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="{{asset('assets/images/masonry/4.jpg')}}" itemprop="thumbnail" alt="Image description" /></a>
	                            <figcaption itemprop="caption description">Image caption 4</figcaption>
	                        </figure>
	                        <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-masonry/5.jpg')}}" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="{{asset('assets/images/masonry/5.jpg')}}" itemprop="thumbnail" alt="Image description" /></a>
	                            <figcaption itemprop="caption description">Image caption 5</figcaption>
	                        </figure>
	                        <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-masonry/6.jpg')}}" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="{{asset('assets/images/masonry/6.jpg')}}" itemprop="thumbnail" alt="Image description" /></a>
	                            <figcaption itemprop="caption description">Image caption 6</figcaption>
	                        </figure>
	                        <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-masonry/7.jpg')}}" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="{{asset('assets/images/masonry/7.jpg')}}" itemprop="thumbnail" alt="Image description" /></a>
	                            <figcaption itemprop="caption description">Image caption 7</figcaption>
	                        </figure>
	                        <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-masonry/8.jpg')}}" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="{{asset('assets/images/masonry/8.jpg')}}" itemprop="thumbnail" alt="Image description" /></a>
	                            <figcaption itemprop="caption description">Image caption 8</figcaption>
	                        </figure>
	                        <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-masonry/9.jpg')}}" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="{{asset('assets/images/masonry/9.jpg')}}" itemprop="thumbnail" alt="Image description" /></a>
	                            <figcaption itemprop="caption description">Image caption 9</figcaption>
	                        </figure>
	                        <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-masonry/10.jpg')}}" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="{{asset('assets/images/masonry/10.jpg')}}" itemprop="thumbnail" alt="Image description" /></a>
	                            <figcaption itemprop="caption description">Image caption 10</figcaption>
	                        </figure>
	                        <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-masonry/11.jpg')}}" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="{{asset('assets/images/masonry/11.jpg')}}" itemprop="thumbnail" alt="Image description" /></a>
	                            <figcaption itemprop="caption description">Image caption 11</figcaption>
	                        </figure>
	                        <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-masonry/12.jpg')}}" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="{{asset('assets/images/masonry/12.jpg')}}" itemprop="thumbnail" alt="Image description" /></a>
	                            <figcaption itemprop="caption description">Image caption 12</figcaption>
	                        </figure>
	                        <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-masonry/13.jpg')}}" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="{{asset('assets/images/masonry/13.jpg')}}" itemprop="thumbnail" alt="Image description" /></a>
	                            <figcaption itemprop="caption description">Image caption 13</figcaption>
	                        </figure>
	                        <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-masonry/14.jpg')}}" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="{{asset('assets/images/masonry/14.jpg')}}" itemprop="thumbnail" alt="Image description" /></a>
	                            <figcaption itemprop="caption description">Image caption 14</figcaption>
	                        </figure>
	                        <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-masonry/15.jpg')}}" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="{{asset('assets/images/masonry/15.jpg')}}" itemprop="thumbnail" alt="Image description" /></a>
	                            <figcaption itemprop="caption description">Image caption 15</figcaption>
	                        </figure>
	                        <figure class="col-md-3 col-sm-6 grid-item" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-masonry/1.jpg')}}" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="{{asset('assets/images/masonry/1.jpg')}}" itemprop="thumbnail" alt="Image description" /></a>
	                            <figcaption itemprop="caption description">Image caption 16</figcaption>
	                        </figure>
	                    </div>
	                </div>
	                <!-- Root element of PhotoSwipe. Must have class pswp.-->
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
	<script src="{{asset('assets/js/isotope.pkgd.js')}}"></script>
    <script src="{{asset('assets/js/photoswipe/photoswipe.min.js')}}"></script>
    <script src="{{asset('assets/js/photoswipe/photoswipe-ui-default.min.js')}}"></script>
    <script src="{{asset('assets/js/photoswipe/photoswipe.js')}}"></script>
    <script src="{{asset('assets/js/masonry-gallery.js')}}"></script>
	@endpush

@endsection