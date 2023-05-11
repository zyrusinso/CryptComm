@extends('layouts.admin.master')

@section('title')Tree View
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/tree.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Tree View</h3>
		@endslot
		<li class="breadcrumb-item">Advance</li>
        <li class="breadcrumb-item active">Tree View</li>
    @endcomponent
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Basic Tree</h5>
                    </div>
                    <div class="card-body">
                        <div id="treeBasic">
                            <ul>
                                <li>
                                    Admin
                                    <ul>
                                        <li data-jstree='{"opened":true}'>
                                            Assets
                                            <ul>
                                                <li data-jstree='{"opened":false}'>
                                                    Css
                                                    <ul>
                                                        <li data-jstree='{"selected":false,"type":"file"}'>Css one</li>
                                                        <li data-jstree='{"type":"file"}'>Css two</li>
                                                    </ul>
                                                </li>
                                                <li data-jstree='{"opened":true}'>
                                                    Js
                                                    <ul>
                                                        <li data-jstree='{"selected":true,"type":"file"}'>Js one</li>
                                                        <li data-jstree='{"type":"file"}'>Js two</li>
                                                    </ul>
                                                </li>
                                                <li data-jstree='{"opened":true}'>
                                                    Scss
                                                    <ul>
                                                        <li data-jstree='{"opened":false}'>
                                                            Sub Child
                                                            <ul>
                                                                <li data-jstree='{"selected":false,"type":"file"}'>Sub File</li>
                                                                <li data-jstree='{"type":"file"}'>Sub File</li>
                                                            </ul>
                                                        </li>
                                                        <li data-jstree='{"type":"file"}'>Scss two</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li data-jstree='{"opened":true}'>
                                            Default
                                            <ul>
                                                <li data-jstree='{"type":"file"}'>Dashboard</li>
                                                <li data-jstree='{"type":"file"}'>Typography</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li data-jstree='{"type":"file"}'>index file</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Checkbox Tree</h5>
                    </div>
                    <div class="card-body">
                        <div id="treecheckbox">
                            <ul>
                                <li>
                                    Admin
                                    <ul>
                                        <li data-jstree='{"opened":true}'>
                                            Assets
                                            <ul>
                                                <li data-jstree='{"opened":false}'>
                                                    Css
                                                    <ul>
                                                        <li data-jstree='{"selected":false,"type":"file"}'>Css one</li>
                                                        <li data-jstree='{"type":"file"}'>Css two</li>
                                                    </ul>
                                                </li>
                                                <li data-jstree='{"opened":true}'>
                                                    Js
                                                    <ul>
                                                        <li data-jstree='{"selected":true,"type":"file"}'>Js one</li>
                                                        <li data-jstree='{"type":"file"}'>Js two</li>
                                                    </ul>
                                                </li>
                                                <li data-jstree='{"opened":true}'>
                                                    Scss
                                                    <ul>
                                                        <li data-jstree='{"opened":false}'>
                                                            Sub Child
                                                            <ul>
                                                                <li data-jstree='{"selected":false,"type":"file"}'>Sub File</li>
                                                                <li data-jstree='{"type":"file"}'>Sub File</li>
                                                            </ul>
                                                        </li>
                                                        <li data-jstree='{"type":"file"}'>Scss two</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li data-jstree='{"opened":true}'>
                                            Default
                                            <ul>
                                                <li data-jstree='{"type":"file"}'>Dashboard</li>
                                                <li data-jstree='{"type":"file"}'>Typography</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li data-jstree='{"type":"file"}'>index file</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Drag Tree</h5>
                    </div>
                    <div class="card-body">
                        <div id="dragTree">
                            <ul>
                                <li>
                                    Admin
                                    <ul>
                                        <li data-jstree='{"opened":true}'>
                                            Assets
                                            <ul>
                                                <li data-jstree='{"opened":false}'>
                                                    Css
                                                    <ul>
                                                        <li data-jstree='{"selected":false,"type":"file"}'>Css one</li>
                                                        <li data-jstree='{"type":"file"}'>Css two</li>
                                                    </ul>
                                                </li>
                                                <li data-jstree='{"opened":true}'>
                                                    Js
                                                    <ul>
                                                        <li data-jstree='{"selected":true,"type":"file"}'>Js one</li>
                                                        <li data-jstree='{"type":"file"}'>Js two</li>
                                                    </ul>
                                                </li>
                                                <li data-jstree='{"opened":true}'>
                                                    Scss
                                                    <ul>
                                                        <li data-jstree='{"opened":false}'>
                                                            Sub Child
                                                            <ul>
                                                                <li data-jstree='{"selected":false,"type":"file"}'>Sub File</li>
                                                                <li data-jstree='{"type":"file"}'>Sub File</li>
                                                            </ul>
                                                        </li>
                                                        <li data-jstree='{"type":"file"}'>Scss two</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li data-jstree='{"opened":true}'>
                                            Default
                                            <ul>
                                                <li data-jstree='{"type":"file"}'>Dashboard</li>
                                                <li data-jstree='{"type":"file"}'>Typography</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li data-jstree='{"type":"file"}'>index file</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Contextmenu Tree</h5>
                    </div>
                    <div class="card-body">
                        <div id="contextmenu">
                            <ul>
                                <li>
                                    Admin
                                    <ul>
                                        <li data-jstree='{"opened":true}'>
                                            Assets
                                            <ul>
                                                <li data-jstree='{"opened":false}'>
                                                    Css
                                                    <ul>
                                                        <li data-jstree='{"selected":false,"type":"file"}'>Css one</li>
                                                        <li data-jstree='{"type":"file"}'>Css two</li>
                                                    </ul>
                                                </li>
                                                <li data-jstree='{"opened":true}'>
                                                    Js
                                                    <ul>
                                                        <li data-jstree='{"selected":true,"type":"file"}'>Js one</li>
                                                        <li data-jstree='{"type":"file"}'>Js two</li>
                                                    </ul>
                                                </li>
                                                <li data-jstree='{"opened":true}'>
                                                    Scss
                                                    <ul>
                                                        <li data-jstree='{"opened":false}'>
                                                            Sub Child
                                                            <ul>
                                                                <li data-jstree='{"selected":false,"type":"file"}'>Sub File</li>
                                                                <li data-jstree='{"type":"file"}'>Sub File</li>
                                                            </ul>
                                                        </li>
                                                        <li data-jstree='{"type":"file"}'>Scss two</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li data-jstree='{"opened":true}'>
                                            Default
                                            <ul>
                                                <li data-jstree='{"type":"file"}'>Dashboard</li>
                                                <li data-jstree='{"type":"file"}'>Typography</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li data-jstree='{"type":"file"}'>index file</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   

@push('scripts')
    <script src="{{asset('assets/js/tree/jstree.min.js')}}"></script>
    <script src="{{asset('assets/js/tree/tree.js')}}"></script>
@endpush

@endsection