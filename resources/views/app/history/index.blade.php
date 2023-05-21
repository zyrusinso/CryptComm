@extends('layouts.master')

@section('title'){{ __('app.history.order.title') }}
{{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
@endpush

@section('content')
@component('components.breadcrumb')
@slot('breadcrumb_title')
<h3>{{ __('app.history.order.title') }}</h3>
@endslot
<li class="breadcrumb-item">{{ __('app.history.order.ecommerce') }}</li>
<li class="breadcrumb-item active">{{ __('app.history.order.title') }}</li>
@endcomponent

@livewire('order-history')

@push('scripts')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
@endpush

@endsection