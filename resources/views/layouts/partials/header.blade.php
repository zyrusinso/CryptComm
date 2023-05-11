<div class="page-main-header">
  <div class="main-header-right row m-0">
    <div class="main-header-left" style="">
      @if(auth()->user()) <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle">    </i></div> @endif
      <div class="logo-wrapper" style="margin-left: 15px;">
        <a href="{{ route('index') }}">
        <div class="d-flex justify-content-center items-center">
          <a href="{{ route('index') }}" class="align-self-center"><img class="img-fluid logo-mobile" src="{{asset('assets/img/logo.png')}}" alt="" width="55" height="55"></a>
          <div class="d-flex flex-column text-center headTitle" style="margin-left: 5px; margin-top: 3px;">
            <h3 style="font-weight: bold;" class="header-title">CRYPTCOMM</h3>
            <span style="margin-top: -13px;" class="header-description">({{ __('app.header.description') }})</span>
          </div>
        </div>
      </div>
      <div class="dark-logo-wrapper" style="margin-left: 15px;">
        <a href="{{ route('index') }}">
        <div class="d-flex justify-content-center items-center">
          <a href="{{ route('index') }}" class="align-self-center"><img class="img-fluid logo-mobile" src="{{asset('assets/img/logo.png')}}" alt="" width="55" height="55"></a>
          <div class="d-flex flex-column text-center headTitle" style="margin-left: 5px; margin-top: 3px;">
            <h3 style="font-weight: bold;" class="header-title">CRYPTCOMM</h3>
            <span style="margin-top: -13px;" class="header-description">({{ __('app.header.description') }})</span>
          </div>
        </div>
      </div>
    </div>
    <div class="nav-right col pull-right right-menu p-0">
      <ul class="nav-menus">
        @if (session()->get("locale") == 'ph')
          <li>
            <a class="text-dark" href="{{ route('setLang', 'en') }}">
              <i class="flag-icon flag-icon-ph"></i>
              <span class="text-bold cart-count">PH</span>
            </a>
          </li>
        @endif
        @if (session()->get("locale") == 'en')
          <li>
            <a class="text-dark" href="{{ route('setLang', 'ph') }}">
              <i class="flag-icon flag-icon-us"></i>
              <span class="text-bold cart-count">US</span>
            </a>
          </li>
        @endif
        
        <li><a class="text-dark" href="#" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
        <li>
          <div class="mode"><i class="fa fa-moon-o"></i></div>
        </li>
        {{-- <li>
          <div class="notification-box">
            <a class="text-dark" href="#"><i data-feather="message-square"></i></a>
            <span class="dot-animated"></span>
          </div>
        </li> --}}
        <li>
          <div class="notification-box">
            <a class="text-dark" href="{{ route('cart.index') }}"><i data-feather="shopping-cart"></i></a>
            <span class="cart-count">{{ count(App\Models\Ecommerce\Cart::getCurrentUserCart()) }}</span>
          </div>
        </li>
        <li class="onhover-dropdown p-0">
          @guest
            <button class="btn btn-primary-light" type="button" onclick="document.location = '{{ route('login') }}'"><i data-feather="log-in"></i>@lang('app.login')</button>
          @else
          <button class="btn btn-primary-light" type="button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i data-feather="log-out"></i>@lang('app.logout')</button>
          @endguest
        </li>
      </ul>
    </div>
    <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
  </div>
</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
  @csrf
</form>