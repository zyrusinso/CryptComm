@extends('auth.layouts.master')

@section('title')Login {{ $title }}
@endsection

@push('css')

@endpush

@section('content')
    <section>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="login-card">
                    <form class="theme-form login-form" action="{{ route('login') }}" method="post">
                        @csrf

                        <div class="text-center">
                            <h4>{{ __('auth.login.title') }}</h4>
                            <h6>{{ __('auth.login.description') }}</h6>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="icon-email" style=""></i></span>
                                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" autocomplete="email" required="" placeholder="Email" value="{{ old('email') }}"/>
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
                                <span class="input-group-text"><i class="icon-lock" style=""></i></span>
                                <input class="form-control @error('password') is-invalid @enderror"" type="password" name="password" required="" placeholder="*********" autocomplete="current-password" />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <input id="remember" name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }} />
                                <label for="remember">{{ __('auth.login.remember_me') }}</label>
                            </div>
                        </div>
                        <div class="form-group d-flex loginBtnMobile justify-content-center">
                            <button class="btn btn-primary btn-block " type="submit" style="">{{ __('auth.login.sign_in') }}</button>
                        </div>
                        <div class="login-social-title">
                            <h5>{{ __('auth.login.authentication') }}</h5>
                        </div>
                        <p>{{ __('auth.login.no_account') }}<a class="ms-2" href="{{ route('register') }}">{{ __('auth.register.title') }}</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

	
    @push('scripts')
    @endpush

@endsection
