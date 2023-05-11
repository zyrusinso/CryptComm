@extends('layouts.master')

@section('title'){{ __('app.cart') }}
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>{{ __('app.cart') }}</h3>
		@endslot
		<li class="breadcrumb-item">{{ __('app._ecommerce') }}</li>
		<li class="breadcrumb-item active">{{ __('app.cart') }}</li>
	@endcomponent
	
	@livewire('ecommerce.cart')
	
	@push('scripts')
	<script src="{{asset('assets/js/touchspin/vendors.min.js')}}"></script>
    <script src="{{asset('assets/js/touchspin/touchspin.js')}}"></script>
    <script src="{{asset('assets/js/touchspin/input-groups.min.js')}}"></script>
	<script src="{{asset('assets/js/sweet-alert2/sweetalert.all.min.js')}}"></script>

	@if(session()->has('success'))
		<script>
			Swal.fire(
				'Added to cart!',
				'{{ session()->get("success") }}',
				'success'
			)
		</script>
	@endif
	@endpush

@endsection