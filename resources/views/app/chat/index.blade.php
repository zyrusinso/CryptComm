
@extends('layouts.master')

@section('title')Chat
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Chat</h3>
		@endslot
		<li class="breadcrumb-item">Chat</li>
	@endcomponent
	
    <h1>Test</h1>
    
	@push('scripts')
	@endpush

@endsection