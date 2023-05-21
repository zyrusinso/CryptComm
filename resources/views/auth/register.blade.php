@extends('auth.layouts.master')

@section('title')Sign Up
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sweetalert2.css') }}">
@endpush

@section('content')
    <section>
	    <div class="container-fluid p-0">
	        <div class="row m-0">
	            <div class="col-12 p-0">
	                <div class="login-card">
	                    <form class="theme-form login-form" method="POST" action="{{ route('register') }}">
                        @csrf

	                        <div class="text-center">
								<h4>{{ __('auth.register.create_account') }}</h4>
	                        	<h6>{{ __('auth.register.description') }}</h6>
							</div>
	                        <div class="form-group">
	                            <label>{{ __('auth.register.name') }}</label>
	                            <div class="small-group">
	                                <div class="input-group">
	                                    <span class="input-group-text"><i class="icon-user"></i></span>
	                                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" placeholder="{{ __('auth.register.name') }}" />
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
	                                </div>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label>Email</label>
	                            <div class="input-group">
	                                <span class="input-group-text"><i class="icon-email"></i></span>
	                                <input class="form-control @error('email') is-invalid @enderror" type="text " name="email" value="{{ old('email') }}" placeholder="Email" />
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label>Password</label>
	                            <div class="input-group">
	                                <span class="input-group-text"><i class="icon-lock"></i></span>
	                                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="*********" />
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label>{{ __('auth.register.confirm_password') }}</label>
	                            <div class="input-group">
	                                <span class="input-group-text"><i class="icon-lock"></i></span>
	                                <input class="form-control" type="password" name="password_confirmation" placeholder="*********" />
	                            </div>
	                        </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="form-group">
                                    <div class="checkbox">
                                        <input id="terms" type="checkbox" name="terms">
                                        <label class="custom-control-label" for="terms">
                                            {!! __('auth.register.terms_and_privacy', [
                                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'">'.__('auth.register.terms_and_condition').'</a>',
                                                        'privacy_policy' => '<a target="_blank" href="'.route('privacy-policy.index').'">'.__('auth.register.privacy_policy').'</a>',
                                                ]) !!}
                                        </label>
                                        @error('terms')
                                            <div class="invalid-feedback" style="display: block !important">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            @endif

	                        <div class="form-group d-flex justify-content-center">
	                            <button class="btn btn-primary btn-block ml-sm-auto" type="submit">{{ __('auth.register.create_account') }}</button>
	                        </div>
							
	                        <div class="login-social-title">
	                            <h5>{{ __('auth.register.authentication') }}</h5>
	                        </div>
	                        <p>{{ __('auth.register.have_account') }}<a class="ms-2" href="{{ route('login') }}">{{ __('auth.login.sign_in') }}</a></p>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>


    @push('scripts')
    <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>
    @endpush

@endsection
