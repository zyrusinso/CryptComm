@extends('layouts.admin.master')

@section('title')Scroller
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatable-extension.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Scroller</h3>
		@endslot
		<li class="breadcrumb-item">Tables</li>
		<li class="breadcrumb-item">Extension Data Tables</li>
		<li class="breadcrumb-item active">Scroller</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                    <h5>Basic Table Scroll</h5>
	                    <span>
	                        Scroller is a plug-in for DataTables which enhances DataTables' built-in scrolling features to allow large amounts of data to be rendered on page very quickly.This is done by Scroller through the use of a virtual
	                        rendering technique that will render only the part of the table that is actually required for the current view.
	                    </span>
	                </div>
	                <div class="card-body">
	                    <div class="dt-ext table-responsive">
	                        <table class="display nowrap" id="basic-scroller">
	                            <thead>
	                                <tr>
	                                    <th>ID</th>
	                                    <th>First name</th>
	                                    <th>Last name</th>
	                                    <th>ZIP / Post code</th>
	                                    <th>Country</th>
	                                </tr>
	                            </thead>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                    <h5>State Saving</h5>
	                    <span>
	                        Scroller will automatically integrate with DataTables in order to save the scrolling position of the table, if state saving is enabled in the DataTable (stateSave). This example shows that in practice - to
	                        demonstrate, scroll the table and then reload the page.
	                    </span>
	                </div>
	                <div class="card-body">
	                    <div class="dt-ext table-responsive">
	                        <table class="display nowrap" id="state-saving">
	                            <thead>
	                                <tr>
	                                    <th>ID</th>
	                                    <th>First name</th>
	                                    <th>Last name</th>
	                                    <th>ZIP / Post code</th>
	                                    <th>Country</th>
	                                </tr>
	                            </thead>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                    <h5>API</h5>
	                    <span>This example shows a trivial use of the API methods that Scroller adds to the DataTables API to scroll to a row once the table's data has been loaded.</span>
	                </div>
	                <div class="card-body">
	                    <div class="dt-ext table-responsive">
	                        <table class="display nowrap" id="api">
	                            <thead>
	                                <tr>
	                                    <th>ID</th>
	                                    <th>First name</th>
	                                    <th>Last name</th>
	                                    <th>ZIP / Post code</th>
	                                    <th>Country</th>
	                                </tr>
	                            </thead>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	
	@push('scripts')
	<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/jszip.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.autoFill.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.select.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.colReorder.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/custom.js')}}"></script>
	@endpush

@endsection