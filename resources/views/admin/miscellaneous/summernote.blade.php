@extends('layouts.admin.master')

@section('title')Summer Note
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/summernote.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Summer Note</h3>
		@endslot
		<li class="breadcrumb-item">Editors</li>
		<li class="breadcrumb-item active">Summer Note</li>
	@endcomponent
	
	<div class="container-fluid summer-note">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Default Summer note</h5>
	                </div>
	                <div class="card-body">
	                    <div class="summernote">
	                        <p>
	                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
	                            Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the
	                            undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of
	                            ethics, very popular during the Renaissance. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
	                            don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the
	                            Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to
	                            generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. Contrary to popular belief, Lorem Ipsum is not
	                            simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of
	                            the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32
	                            and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. There are many
	                            variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use
	                            a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making
	                            this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated
	                            Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
	                            Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem
	                            Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The
	                            Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. There are many variations of passages of Lorem Ipsum available, but
	                            the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there
	                            isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It
	                            uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition,
	                            injected humour, or non-characteristic words etc.
	                        </p>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Air-mode Summernote</h5>
	                </div>
	                <div class="card-body pt-0">
	                    <div class="inline-editor">
	                        <h5 class="mb-3 mt-3">You can select content and edit inline</h5>
	                        <p>
	                            Lorem ipsum dolor sit amet, consectetur adipisicing elitconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud Exercitation ullamco
	                            laboris nisi ut aliquip ex ea commodo consequat.
	                        </p>
	                        <ul class="list-icons">
	                            <li><i class="icofont icofont-heart-alt primary-color"></i> Lorem ipsum dolor sit amet</li>
	                            <li><i class="icofont icofont-heart-alt primary-color"></i> Consectetur adipiscing elit</li>
	                            <li><i class="icofont icofont-heart-alt primary-color"></i> Integer molestie lorem at massa</li>
	                        </ul>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Hint for words Summernote</h5>
	                </div>
	                <div class="card-body">
	                    <div class="hint2basic"></div>
	                </div>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Click To Edit Summernote</h5>
	                </div>
	                <div class="card-body">
	                    <div class="click2edit m-b-30"><span>Hello Click on Edit button & Change The Text Then Save It.</span></div>
	                    <button class="btn btn-primary" id="edit" onclick="edit()" type="button">Edit</button>
	                    <button class="btn btn-primary" id="save" onclick="save()" type="button">Save</button>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	
	@push('scripts')
	<script src="{{asset('assets/js/jquery.ui.min.js')}}"></script>
    <script src="{{asset('assets/js/editor/summernote/summernote.js')}}"></script>
    <script src="{{asset('assets/js/editor/summernote/summernote.custom.js')}}"></script>
    <script src="{{asset('assets/js/tooltip-init.js')}}"></script>
	@endpush

@endsection