@extends('layouts.admin.master')

@section('title')Page Builder
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/page-builder.css') }}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Page Builder</h3>
		@endslot
		<li class="breadcrumb-item active">Page Builder</li>
	@endcomponent

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Page Builder</h5>
                    </div>
                    <div class="card-body">
                        <!-- Page grid builder start-->
                        <div class="page-builder">
                            <div id="myGrid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit exercitationem eaque aperiam rem quia quibusdam dolor ducimus quo similique eos pariatur nostrum aliquam nam eius, doloremque quis
                                            voluptatum unde. Porro voluptates aspernatur voluptate ipsam, magni vero. Accusamus, iusto tempore id!
                                        </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae laboriosam, excepturi quas.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5>Lorem ipsum dolor</h5>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea facilis vel aliquam aspernatur dolor placeat totam saepe perferendis. Odio quia vel sed eveniet cupiditate, illum doloremque sint veniam
                                            eum? Corporis?
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <h5>Pariatur reprehenderit</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo adipisci ipsa, consequuntur cum, sunt dolores veniam. Enim inventore in dolore deserunt vitae sequi nemo!</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h5>Pariatur reprehenderit</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea excepturi ducimus numquam aut error corporis aspernatur ipsum quos eius culpa!</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <h5>Lorem ipsum dolor.</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro distinctio atque molestiae optio, consequuntur? Iusto ratione cumque dolor aut dolore!</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5>Lorem ipsum dolor.</h5>
                                                <hr />
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis facilis molestias voluptatum laudantium fuga ratione tempora rem dolor dicta rerum vero ut, suscipit ex qui amet quam vel
                                                    cupiditate quaerat minus assumenda reiciendis, similique omnis delectus! Autem, repudiandae cumque eaque?
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <h5>Lorem ipsum dolor.</h5>
                                                <hr />
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet molestiae quaerat illum, consequuntur iusto aspernatur quam provident? Possimus!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h5>Lusto ratione</h5>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis fugit quasi officiis id laudantium error aut ut aperiam dicta saepe non vel, cupiditate illum ipsam velit deleniti natus incidunt impedit
                                            molestias dolore quos dolores enim. Aliquid ipsam eaque consequuntur quaerat, suscipit a in. Praesentium repudiandae quibusdam recusandae sequi eligendi quos, dignissimos, officiis officia minima
                                            necessitatibus eaque consequatur in id adipisci qui minus voluptatum quae debitis, quas maxime iure. Tempore vero unde quia reiciendis ad beatae voluptate omnis, ipsa expedita ab, quasi, neque.
                                            Doloribus, pariatur. Aut hic voluptate.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page grid builder start-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    @push('scripts') 
    <script src="{{ asset('assets/js/editor/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/js/editor/ckeditor/adapters/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/page-builder/jquery.grideditor.min.js') }}"></script>
    <script src="{{ asset('assets/js/page-builder/page-builder-custom.js') }}"></script>
	@endpush

@endsection