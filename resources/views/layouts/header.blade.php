
	<header class="ttr-header">
            <div class="ttr-header-wrapper">
                <!--sidebar menu toggler start -->
                <div class="ttr-toggle-sidebar ttr-material-button">
                    <i class="ti-close ttr-open-icon"></i>
                    <i class="ti-menu ttr-close-icon"></i>
                </div>
                <!--sidebar menu toggler end -->
                <!--logo start -->
                <div class="ttr-logo-box">
                    <div>
                        <a href="{{route('home')}}" class="ttr-logo">
                            <img class="ttr-logo-mobile" alt="" src="{{url('images/logo-mobile.png')}}" width="30" height="30">
                            <img class="ttr-logo-desktop" alt="" src="{{url('images/logo-white.png')}}" width="160" height="27">
                        </a>
                    </div>
                </div>
                
                <div class="ttr-header-right ttr-with-seperator">
                    <!-- header right menu start -->
                    <ul class="ttr-header-navigation">
                        {{-- @include('layouts.notificaciones-header') --}}
                        <li>
                            <a href="#" class="ttr-material-button ttr-submenu-toggle">
                                <span class="ttr-user-avatar">
                                    <img alt="" src="{{url('admin/images/testimonials/pic1.jpg')}}" width="32" height="32">
                                </span>
                            </a>
                            <div class="ttr-header-submenu">
                                <ul>
                                    {{-- <li><a href="user-profile.html">Perfil</a></li> --}}
                                    <li>
                                        <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Cerrar sesión
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <!-- header right menu end -->
                </div>
            </div>
        </header>