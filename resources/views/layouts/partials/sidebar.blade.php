<header class="main-nav close_icon">
    <nav>
        @if (auth()->user())
            @if(auth()->user()->is_adminn == '1')
            {{-- Admin Sidebar --}}
                <div class="main-navbar">
                    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                    <div id="mainnav">
                        <ul class="nav-menu custom-scrollbar">
                            <li class="back-btn">
                                <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                            </li>

                            <li class="sidebar-main-title">
                                <div>
                                    <h6>{{ __('app.sidebar.general') }}</h6>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="nav-link menu-title link-nav {{routeActive('index')}}" href="{{ route('index') }}"><i data-feather="home"></i><span>@lang('app._dashboard')</span></a>
                            </li>
                            <li class="dropdown">
                                <a class="nav-link menu-title {{ prefixActive('ecommerce') }}" href="javascript:void(0)"><i data-feather="shopping-bag"></i><span>@lang('app._ecommerce')</span></a>                  
                                <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('ecommerce') }};">
                                    <li><a href="{{route('cart.index')}}" class="{{routeActive('cart.index')}}">@lang('app.cart')</a></li>
                                    <li><a href="{{route('dashboard.index')}}" class="{{routeActive('dashboard.index')}}">Default</a></li>
                                    <li><a href="{{route('dashboard.index')}}" class="{{routeActive('dashboard.index')}}">Ecommerce</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="nav-link menu-title {{ prefixActive('dashboard.index') }}" href="javascript:void(0)"><i data-feather="edit"></i><span>Blogs</span></a>                  
                                <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('dashboard.index') }};">
                                    <li><a href="{{route('dashboard.index')}}" class="{{routeActive('dashboard.index')}}">Default</a></li>
                                    <li><a href="{{route('dashboard.index')}}" class="{{routeActive('dashboard.index')}}">Ecommerce</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a class="nav-link menu-title link-nav {{routeActive('dashboard.index')}}" href="{{ route('dashboard.index') }}"><i data-feather="message-circle"></i><span>Chat</span></a>
                            </li>

                            <li class="dropdown">
                                <a class="nav-link menu-title {{ prefixActive('dashboard.index') }}" href="javascript:void(0)"><i data-feather="clock"></i><span>History</span></a>                  
                                <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('dashboard.index') }};">
                                    <li><a href="{{route('dashboard.index')}}" class="{{routeActive('dashboard.index')}}">Order History</a></li>
                                    <li><a href="{{route('dashboard.index')}}" class="{{routeActive('dashboard.index')}}">Tickets History</a></li>
                                </ul>
                            </li>

                            <li class="sidebar-main-title">
                                <div>
                                    <h6>Others</h6>
                                </div>
                            </li>

                            <li class="dropdown">
                                <a class="nav-link menu-title link-nav {{routeActive('dashboard.index')}}" href="{{ route('dashboard.index') }}"><i data-feather="link"></i><span>Privacy Policy</span></a>
                            </li>
                            <li class="dropdown">
                                <a class="nav-link menu-title link-nav {{routeActive('my-profile.index')}}" href="{{ route('my-profile.index') }}"><i data-feather="user"></i><span>Profile</span></a>
                            </li>

                            <li class="dropdown">
                                <a class="nav-link menu-title link-nav" type="button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" id="logoutBtn"><i data-feather="log-out"></i>Logout</a>
                            </li>
                        </ul>
                    </div>
                    <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                </div>
            @else
            {{-- User Sidebar --}}
                <div class="main-navbar">
                    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                    <div id="mainnav">
                        <ul class="nav-menu custom-scrollbar">
                            <li class="back-btn">
                                <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                            </li>

                            <li class="sidebar-main-title">
                                <div>
                                    <h6>{{ __('app.sidebar.general') }}</h6>
                                </div>
                            </li>
                            {{-- <li class="dropdown">
                                <a class="nav-link menu-title link-nav {{routeActive('index')}}" href="{{ route('index') }}"><i data-feather="home"></i><span>@lang('app._dashboard')</span></a>
                            </li> --}}
                            <li class="dropdown">
                                <a class="nav-link menu-title {{ prefixActive('ecommerce') }}" href="javascript:void(0)"><i data-feather="shopping-bag"></i><span>@lang('app._ecommerce')</span></a>                  
                                <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('ecommerce') }};">
                                    <li><a href="{{route('product.index')}}" class="{{routeActive('product.index')}}">@lang('app.products')</a></li>
                                    <li><a href="{{route('cart.index')}}" class="{{routeActive('cart.index')}}">@lang('app.cart')</a></li>
                                    {{-- <li><a href="{{route('order.index')}}" class="{{routeActive('order.index')}}">@lang('app.sidebar.order')</a></li> --}}
                                </ul>
                            </li>
                            {{-- <li class="dropdown">
                                <a class="nav-link menu-title {{ prefixActive('dashboard.index') }}" href="javascript:void(0)"><i data-feather="edit"></i><span>Blogs</span></a>                  
                                <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('dashboard.index') }};">
                                    <li><a href="{{route('dashboard.index')}}" class="{{routeActive('dashboard.index')}}">Default</a></li>
                                    <li><a href="{{route('dashboard.index')}}" class="{{routeActive('dashboard.index')}}">Ecommerce</a></li>
                                </ul>
                            </li> --}}

                            {{-- <li class="dropdown">
                                <a class="nav-link menu-title link-nav {{routeActive('blogs.index')}}" href="{{ route('blogs.index') }}"><i data-feather="edit"></i><span>@lang('app._blog')</span></a>
                            </li> --}}

                            {{-- <li class="dropdown">
                                <a class="nav-link menu-title link-nav {{routeActive('dashboard.index')}}" href="{{ route('dashboard.index') }}"><i data-feather="message-circle"></i><span>Chat</span></a>
                            </li> --}}

                            <li class="dropdown">
                                <a class="nav-link menu-title link-nav {{routeActive('history.index')}}" href="{{ route('history.index') }}"><i data-feather="clock"></i><span>@lang('app.sidebar.history')</span></a>
                            </li>

                            <li class="sidebar-main-title">
                                <div>
                                    <h6>@lang('app.sidebar.others')</h6>
                                </div>
                            </li>

                            {{-- <li class="dropdown">
                                <a class="nav-link menu-title link-nav {{routeActive('privacy-policy.index')}}" href="{{ route('privacy-policy.index') }}"><i data-feather="link"></i><span>@lang('app.privacy_policy')</span></a>
                            </li> --}}
                            <li class="dropdown">
                                <a class="nav-link menu-title link-nav {{routeActive('my-profile.index')}}" href="{{ route('my-profile.index') }}"><i data-feather="user"></i><span>@lang('app._profile')</span></a>
                            </li>

                            <li class="dropdown">
                                <a class="nav-link menu-title link-nav" type="button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" id="logoutBtn"><i data-feather="log-out"></i>@lang('app.logout')</a>
                            </li>
                        </ul>
                    </div>
                    <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                </div>
            @endif
        @else
            
        @endif
    </nav>
</header>
