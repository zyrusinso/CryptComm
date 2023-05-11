@extends('layouts.admin.master')

@section('title')Date Range Picker
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/daterange-picker.css') }}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Date Range Picker</h3>
		@endslot
		<li class="breadcrumb-item">Forms</li>
		<li class="breadcrumb-item">Form Widgets</li>
        <li class="breadcrumb-item active">Date Range Picker</li>
	@endcomponent

    <div class="container-fluid">
        <div class="card">
            <div class="card-header pb-0">
                <h5>Date Range Picker</h5>
            </div>
            <div class="card-body">
                <div class="row date-range-picker">
                    <div class="col-xl-6">
                        <div class="daterange-card">
                            <h6 class="sub-title">Date Range Picker</h6>
                            <p>The Date Range Picker use the current value of the input to initialize, and update the input if new dates are chosen.</p>
                            <div class="theme-form">
                                <div class="form-group">
                                    <input class="form-control digits" type="text" name="daterange" value="01/15/2017 - 02/15/2017" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="daterange-card">
                            <h6 class="sub-title">Predefined Ranges</h6>
                            <p>This example shows the option to predefine date ranges that the user can choose from a list.</p>
                            <div class="theme-form">
                                <div class="form-group">
                                    <input class="form-control digits" id="reportrange" type="text" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="daterange-card">
                            <h6 class="sub-title">Single Date Picker</h6>
                            <p>
                                The Date Range Picker can be turned into a single date picker widget with only one calendar. In this example, dropdowns to select a month and year have also been enabled at the top of the calendar to quickly jump
                                to different months.
                            </p>
                            <div class="theme-form">
                                <div class="form-group">
                                    <input class="form-control digits" type="text" name="birthdate" value="10/24/1989" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="daterange-card">
                            <h6 class="sub-title">Input Initially Empty</h6>
                            <p>
                                If you're using a date range as a filter, you may want to attach a picker to an input but leave it empty by default. This example shows how to accomplish that using the <code>autoUpdateInput</code> setting, and
                                the <code>apply</code> and <code>cancel</code> events.
                            </p>
                            <div class="theme-form">
                                <div class="form-group">
                                    <input class="form-control digits" type="text" name="datefilter" value="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="daterange-card">
                            <h6 class="sub-title">Date and Time</h6>
                            <p>
                                The Date Range Picker can also be used to select times. Hour, minute and (optional) second dropdowns are added below the calendars. An option exists to set the increment count of the minutes dropdown to e.g.
                                offer only 15-minute or 30-minute increments.
                            </p>
                            <div class="theme-form">
                                <div class="form-group">
                                    <input class="form-control digits" type="text" name="daterange2" value="01/01/2017 1:30 PM - 01/01/2017 2:00 PM" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	@push('scripts')
    <script src="{{ asset('assets/js/datepicker/daterange-picker/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/daterange-picker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/daterange-picker/daterange-picker.custom.js') }}"></script>
	@endpush

@endsection
