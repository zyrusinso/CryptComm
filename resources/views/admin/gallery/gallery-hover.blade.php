@extends('layouts.admin.master')

@section('title')Gallery
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/photoswipe.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Image Hover Effects</h3>
		@endslot
		<li class="breadcrumb-item">Gallery</li>
		<li class="breadcrumb-item active">Hover Effects</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0 pb-0">
	                    <h5>Hover Effect <span class="digits">1</span></h5>
	                </div>
	                <div class="card-body">
	                    <div class="row my-gallery gallery" id="aniimated-thumbnials" itemscope="">
	                        <figure class="col-md-3 img-hover hover-1" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/08.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/08.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 1</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-1" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/09.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/09.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 2</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-1" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/010.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/010.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 3</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-1" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/011.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/011.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 4</figcaption>
	                        </figure>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0 pb-0">
	                    <h5>Hover Effect <span class="digits">2</span></h5>
	                </div>
	                <div class="card-body">
	                    <div class="row my-gallery gallery" id="aniimated-thumbnials1" itemscope="">
	                        <figure class="col-md-3 img-hover hover-2" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/08.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/08.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 1</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-2" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/09.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/09.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 2</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-2" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/010.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/010.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 3</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-2" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/011.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/011.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 4</figcaption>
	                        </figure>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0 pb-0">
	                    <h5>Hover Effect <span class="digits">3</span></h5>
	                </div>
	                <div class="card-body">
	                    <div class="row gallery my-gallery" id="aniimated-thumbnials2" itemscope="">
	                        <figure class="col-md-3 img-hover hover-3" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/08.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/08.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 1</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-3" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/09.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/09.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 2</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-3" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/010.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/010.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 3</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-3" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/011.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/011.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 4</figcaption>
	                        </figure>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0 pb-0">
	                    <h5>Hover Effect <span class="digits">4</span></h5>
	                </div>
	                <div class="card-body">
	                    <div class="row gallery my-gallery" id="aniimated-thumbnials3" itemscope="">
	                        <figure class="col-md-3 img-hover hover-4" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/08.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/08.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 1</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-4" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/09.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/09.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 2</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-4" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/010.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/010.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 3</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-4" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/011.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/011.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 4</figcaption>
	                        </figure>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0 pb-0">
	                    <h5>Hover Effect <span class="digits">5</span></h5>
	                </div>
	                <div class="card-body">
	                    <div class="row gallery my-gallery" id="aniimated-thumbnials4" itemscope="">
	                        <figure class="col-md-3 img-hover hover-5" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/08.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/08.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 1</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-5" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/09.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/09.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 2</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-5" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/010.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/010.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 3</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-5" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/011.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/011.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 4</figcaption>
	                        </figure>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0 pb-0">
	                    <h5>Hover Effect <span class="digits">6</span></h5>
	                </div>
	                <div class="card-body">
	                    <div class="row gallery my-gallery" id="aniimated-thumbnials5" itemscope="">
	                        <figure class="col-md-3 img-hover hover-6" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/08.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/08.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 1</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-6" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/09.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/09.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 2</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-6" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/010.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/010.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 3</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-6" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/011.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/011.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 4</figcaption>
	                        </figure>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0 pb-0">
	                    <h5>Hover Effect <span class="digits">7</span></h5>
	                </div>
	                <div class="card-body">
	                    <div class="row gallery my-gallery" id="aniimated-thumbnials6" itemscope="">
	                        <figure class="col-md-3 img-hover hover-7" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/08.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/08.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 1</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-7" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/09.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/09.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 2</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-7" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/010.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/010.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 3</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-7" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/011.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/011.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 4</figcaption>
	                        </figure>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0 pb-0">
	                    <h5>Hover Effect <span class="digits">8</span></h5>
	                </div>
	                <div class="card-body">
	                    <div class="row gallery my-gallery" id="aniimated-thumbnials7" itemscope="">
	                        <figure class="col-md-3 img-hover hover-8" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/08.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/08.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 1</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-8" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/09.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/09.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 2</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-8" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/010.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/010.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 3</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-8" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/011.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/011.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 4</figcaption>
	                        </figure>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Hover Effect <span class="digits">9</span></h5>
	                </div>
	                <div class="card-body">
	                    <div class="row gallery my-gallery" id="aniimated-thumbnials8" itemscope="">
	                        <figure class="col-md-3 img-hover hover-9" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/08.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/08.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 1</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-9" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/09.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/09.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 2</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-9" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/010.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/010.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 3</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-9" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/011.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/011.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 4</figcaption>
	                        </figure>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Hover Effect <span class="digits">10</span></h5>
	                </div>
	                <div class="card-body">
	                    <div class="row gallery my-gallery" id="aniimated-thumbnials9" itemscope="">
	                        <figure class="col-md-3 img-hover hover-10" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/08.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/08.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 1</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-10" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/09.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/09.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 2</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-10" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/010.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/010.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 3</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-10" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/011.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/011.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 4</figcaption>
	                        </figure>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Hover Effect <span class="digits">11</span></h5>
	                </div>
	                <div class="card-body">
	                    <div class="row gallery my-gallery" id="aniimated-thumbnials10" itemscope="">
	                        <figure class="col-md-3 img-hover hover-11" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/08.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/08.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 1</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-11" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/09.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/09.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 2</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-11" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/010.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/010.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 3</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-11" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/011.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/011.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 4</figcaption>
	                        </figure>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Hover Effect <span class="digits">12</span></h5>
	                </div>
	                <div class="card-body">
	                    <div class="row gallery my-gallery" id="aniimated-thumbnials11" itemscope="">
	                        <figure class="col-md-3 img-hover hover-12" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/08.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/08.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 1</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-12" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/09.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/09.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 2</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-12" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/010.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/010.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 3</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-12" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/011.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/011.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 4</figcaption>
	                        </figure>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Hover Effect <span class="digits">13</span></h5>
	                </div>
	                <div class="card-body">
	                    <div class="row gallery my-gallery" id="aniimated-thumbnials12" itemscope="">
	                        <figure class="col-md-3 img-hover hover-13" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/08.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/08.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 1</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-13" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/09.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/09.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 2</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-13" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/010.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/010.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 3</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-13" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/011.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/011.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 4</figcaption>
	                        </figure>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Hover Effect <span class="digits">14</span></h5>
	                </div>
	                <div class="card-body">
	                    <div class="row gallery my-gallery" id="aniimated-thumbnials13" itemscope="">
	                        <figure class="col-md-3 img-hover hover-14" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/08.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/08.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 1</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-14" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/09.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/09.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 2</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-14" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/010.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/010.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 3</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-14" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/011.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/011.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 4</figcaption>
	                        </figure>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Hover Effect <span class="digits">15</span></h5>
	                </div>
	                <div class="card-body">
	                    <div class="row gallery my-gallery" id="aniimated-thumbnials14" itemscope="">
	                        <figure class="col-md-3 img-hover hover-15" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/08.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/08.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 1</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-15" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/09.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/09.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 2</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-15" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/010.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/010.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 3</figcaption>
	                        </figure>
	                        <figure class="col-md-3 img-hover hover-15" itemprop="associatedMedia" itemscope="">
	                            <a href="{{asset('assets/images/big-lightgallry/011.jpg')}}" itemprop="contentUrl" data-size="1600x950">
	                                <div><img src="{{asset('assets/images/lightgallry/011.jpg')}}" itemprop="thumbnail" alt="Image description" /></div>
	                            </a>
	                            <figcaption itemprop="caption description">Image caption 4</figcaption>
	                        </figure>
	                    </div>
	                </div>
	            </div>
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
	
	@push('scripts')
	<script src="{{asset('assets/js/photoswipe/photoswipe.min.js')}}"></script>
    <script src="{{asset('assets/js/photoswipe/photoswipe-ui-default.min.js')}}"></script>
    <script src="{{asset('assets/js/photoswipe/photoswipe.js')}}"></script>
	@endpush

@endsection