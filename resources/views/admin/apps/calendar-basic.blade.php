@extends('layouts.admin.master')

@section('title')Calender Basic
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/calendar.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Calender Basic</h3>
		@endslot
		<li class="breadcrumb-item">Apps</li>
		<li class="breadcrumb-item active">Calender Basic</li>
	@endcomponent
	
	<div class="container-fluid calendar-basic">
	    <div class="row">
	        <div class="col-12">
	            <div class="card">
	                <div class="card-body">
	                    <div class="row">
	                        <div class="col-md-12">
	                            <div id="menu">
	                                <div id="menu-navi">
	                                    <div class="menu-navi-left">
	                                        <button class="btn btn-primary move-today" type="button" data-action="move-today">Today</button>
	                                    </div>
	                                    <div class="render-range menu-navi-center" id="renderRange"></div>
	                                    <div class="menu-navi-right">
	                                        <button class="btn btn-primary" id="dropdownMenu-calendarType" type="button" data-bs-toggle="dropdown">
	                                            <i id="calendarTypeIcon"></i><span id="calendarTypeName">Dropdown</span><i class="fa fa-angle-down"></i>
	                                        </button>
	                                        <ul class="dropdown-menu" role="menu">
	                                            <li role="presentation">
	                                                <a class="dropdown-menu-title" role="menuitem" data-action="toggle-daily"><i class="fa fa-bars"></i>Daily</a>
	                                            </li>
	                                            <li role="presentation">
	                                                <a class="dropdown-menu-title" role="menuitem" data-action="toggle-weekly"><i class="fa fa-th-large"></i>Weekly</a>
	                                            </li>
	                                            <li role="presentation">
	                                                <a class="dropdown-menu-title" role="menuitem" data-action="toggle-monthly"><i class="fa fa-th"></i>Month</a>
	                                            </li>
	                                            <li role="presentation">
	                                                <a class="dropdown-menu-title" role="menuitem" data-action="toggle-weeks2"><i class="fa fa-th-large"></i>2 weeks</a>
	                                            </li>
	                                            <li role="presentation">
	                                                <a class="dropdown-menu-title" role="menuitem" data-action="toggle-weeks3"><i class="fa fa-th-large"></i>3 weeks</a>
	                                            </li>
	                                            <li class="dropdown-divider" role="presentation"></li>
	                                            <li role="presentation">
	                                                <a role="menuitem" data-action="toggle-workweek">
	                                                    <input class="tui-full-calendar-checkbox-square" type="checkbox" value="toggle-workweek" checked="" /><span class="checkbox-title"></span>Show weekends
	                                                </a>
	                                            </li>
	                                            <li role="presentation">
	                                                <a role="menuitem" data-action="toggle-start-day-1">
	                                                    <input class="tui-full-calendar-checkbox-square" type="checkbox" value="toggle-start-day-1" /><span class="checkbox-title"></span>Start Week on Monday
	                                                </a>
	                                            </li>
	                                            <li role="presentation">
	                                                <a role="menuitem" data-action="toggle-narrow-weekend">
	                                                    <input class="tui-full-calendar-checkbox-square" type="checkbox" value="toggle-narrow-weekend" /><span class="checkbox-title"></span>Narrower than weekdays
	                                                </a>
	                                            </li>
	                                        </ul>
	                                        <div class="move-btn">
	                                            <button class="btn btn-primary move-day" type="button" data-action="move-prev"><i class="fa fa-angle-left" data-action="move-prev"></i></button>
	                                            <button class="btn btn-primary move-day" type="button" data-action="move-next"><i class="fa fa-angle-right" data-action="move-next"></i></button>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div id="lnb">
	                                <div class="lnb-new-schedule">
	                                    <button class="btn lnb-new-schedule-btn btn-primary" id="btn-new-schedule" type="button" data-bs-toggle="modal">New schedule</button>
	                                </div>
	                                <div class="lnb-calendars" id="lnb-calendars">
	                                    <div class="lnb-calendars-d1" id="calendarList"></div>
	                                    <div class="lnb-calendars-item m-0 p-0">
	                                        <label> <input class="tui-full-calendar-checkbox-square" type="checkbox" value="all" checked="" /><span></span><strong>View all</strong> </label>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-md-12">
	                            <div id="right">
	                                <div id="calendar"></div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	
	@push('scripts')
	<script src="{{asset('assets/js/calendar/tui-code-snippet.min.js')}}"></script>
    <script src="{{asset('assets/js/calendar/tui-time-picker.min.js')}}"></script>
    <script src="{{asset('assets/js/calendar/tui-date-picker.min.js')}}"></script>
    <script src="{{asset('assets/js/calendar/moment.min.js')}}"></script>
    <script src="{{asset('assets/js/calendar/chance.min.js')}}"></script>
    <script src="{{asset('assets/js/calendar/tui-calendar.js')}}"></script>
    <script src="{{asset('assets/js/calendar/calendars.js')}}"></script>
    <script src="{{asset('assets/js/calendar/schedules.js')}}"></script>
    <script src="{{asset('assets/js/calendar/app.js')}}"></script>
	@endpush

@endsection