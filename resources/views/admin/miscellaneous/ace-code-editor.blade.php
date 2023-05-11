@extends('layouts.admin.master')

@section('title')ACE Code Editor
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>ACE Code Editor</h3>
		@endslot
		<li class="breadcrumb-item">Editor</li>
		<li class="breadcrumb-item active">ACE Code Editor</li>
	@endcomponent
	
	<div class="container-fluid">
            <div class="row">
              <div class="col-xl-6">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Javascript Mode</h5>
                  </div>
                  <div class="card-body">
                    <div class="ace-editor" id="editor">
                      /* Sample JavaScript edit source */
                      // Define a module
                      var app = angular.module('app', ['ui.bootstrap']);
                      // Define a conroller.
                      app.controller('GrokController', ['$scope', '$filter',
                      function($scope, $filter) {
                      $scope.today = function() {
                      $scope.dt = new Date();
                      };
                      $scope.today();
                      $scope.isOpened = false;
                      $scope.open = function($event) {
                      $event.preventDefault();
                      $event.stopPropagation();
                      $scope.isOpened = true;
                      };
                      }]);
                      /* End of sample edit source */
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Html Mode</h5>
                  </div>
                  <div class="card-body">
                    <div class="ace-editor" id="html-editor">
                      &lt;!--Page header start--&gt;
                      &lt;div class="page-header"&gt;
                      &lt;div class="row"&gt;
                      &lt;div class="col-xl-6"&gt;
                      &lt;h3&gt;Ace Text editor&lt;/h3&gt;
                      &lt;small&gt;viho Admin panel&lt;/small&gt;
                      &lt;/div&gt;
                      &lt;div class="col-xl-6"&gt;
                      &lt;ol class="breadcrumb pull-right"&gt;
                      &lt;li class="breadcrumb-item"&gt;<a href="javascript:void(0)"><i class="fa fa-home"></i></a>&lt;/li&gt;
                                  &lt;li class="breadcrumb-item"&gt;Editor &lt;/li&gt;
                                  &lt;li class="breadcrumb-item active"&gt;Ace Text editor&lt;/li&gt;
                                &lt;/ol&gt;
                             &lt;/div&gt;
                          &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;!--Page header end--&gt;
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>css Mode</h5>
                  </div>
                  <div class="card-body">
                    <div class="ace-editor" id="css-editor">
                      .text-layer
                      {
                      font: 12px Monaco, "Courier New", monospace;
                      font-size: 3vmin;
                      cursor: text;
                      }
                      .blinker {
                      animation: blink 1s linear infinite alternate;
                      }
                      @keyframes blink {
                      0%, 40% {
                      opacity: 1
                      }
                      40.5%, 100% {
                      opacity: 1
                      }
                      }
                      @document url(http://c9.io/), url-prefix(http://ace.c9.io/build/),
                      domain(c9.io), regexp("https:.*") /**/
                      {
                      /**/
                      img[title]:before
                      {
                      content: attr(title) "\AImage \retrieved from" attr(src); /**/
                      white-space: pre;
                      display: block;
                      background: url(asdasd); "err
                      }
                      }
                      @viewport {
                      min-zoom: 1;
                      max-zoom: 200%;
                      user-zoom: fixed;
                      }
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>php Mode</h5>
                  </div>
                  <div class="card-body">
                    <div class="ace-editor" id="php-editor">
                      &lt;?php
                      function nfact($n) {
                      if ($n == 0) {
                      return 1;
                      }
                      else {
                      return $n * nfact($n - 1);
                      }
                      }
                      echo "\n\nPlease enter a whole number ... ";
                      $num = trim(fgets(STDIN));
                      // ===== PROCESS - Determing the factorial of the input number =====
                      $output = "\n\nFactorial " . $num . " = " . nfact($num) . "\n\n";
                      echo $output;
                      ?&gt;
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


	
	@push('scripts')
	<script src="{{asset('assets/js/editor/ace-editor/ace.js')}}"></script>
    <script src="{{asset('assets/js/editor/ace-editor/ace-custom.js')}}"></script>
    <script src="{{asset('assets/js/editor/ace-editor/mode-css.js')}}"></script>
    <script src="{{asset('assets/js/editor/ace-editor/mode-html.js')}}"></script>
    <script src="{{asset('assets/js/editor/ace-editor/mode-javascript.js')}}"></script>
    <script src="{{asset('assets/js/editor/ace-editor/mode-php.js')}}"></script>
    <script src="{{asset('assets/js/editor/ace-editor/theme-monokai.js')}}"></script>
    <script src="{{asset('assets/js/editor/ace-editor/worker-css.js')}}"></script>
    <script src="{{asset('assets/js/editor/ace-editor/worker-html.js')}}"></script>
    <script src="{{asset('assets/js/editor/ace-editor/worker-javascript.js')}}"></script>
    <script src="{{asset('assets/js/editor/ace-editor/worker-php.js')}}"></script>
	@endpush

@endsection