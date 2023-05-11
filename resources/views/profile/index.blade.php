@extends('layouts.master')

@section('title'){{ __('app._profile') }}
 {{ $title }}
@endsection

@push('css')
@livewireStyles

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}" defer></script>
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>{{ __('app._profile') }}</h3>
		@endslot
		<li class="breadcrumb-item">{{ __('app.profile.users') }}</li>
		<li class="breadcrumb-item active">{{ __('app._profile') }}</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="edit-profile">
	        <div class="row">
	            <div class="col-xl-4">
	                
				@if (Laravel\Fortify\Features::canUpdateProfileInformation())
					@livewire('profile.update-profile-information-form')
				@endif
	            </div>
	            <div class="col-xl-8">
					@if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
						@livewire('profile.update-password-form')
					@endif
					
					@livewire('profile.logout-other-browser-sessions-form')
					
					@if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
						@livewire('profile.delete-user-form')
					@endif
	            </div>
	        </div>
	    </div>
	</div>

	@push('scripts')
	@livewireScripts
	@endpush

@endsection