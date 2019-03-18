<nav class="navbar navbar-default navbar-static-top" style="height: 80px;">
    <div class="container" style="width: 100%;">
        <div class="navbar-header" style="margin-bottom: 15px;">
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <!-- Branding Image -->
            <a class="navbar-brand" href="home"><img name="img" src="http://cproject.in.cs.ucy.ac.cy/NicosOrphanouEstates/test/public/images/logo.png" id="logo" height="50px" width="155px"></a>
        </div>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav" style="margin-top: 15px;">
                <li><a href="home">HOME</a></li>
                <li class="dropdown mega-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">SERVICES<span class="caret"></span></a>
                    <ul class="dropdown-menu" style="background: #f4511e;">
                        <li onclick="buyrent()"><a href="BuyRent">TO SALE / TO RENT</a></li>
                        <li><a href="SellLet">SELL / LET</a></li>
                    </ul>
                </li>
                <li><a href="about">ABOUT US</a></li>
                <li onclick="contact()"><a href="contact">CONTACT US</a></li>
                <li><a href="news">NEWS</a></li>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right" style="margin-top: 15px; margin-right: 5px; background: #f4511e;">
                <!-- Authentication Links -->
                @if (Auth::guest())
                <li class="log hidden" name="log" id="log"><a href="{{ route('login') }}">Login</a></li>
                @else
                @if( Auth::guard('admin')->check())
                <li class="dropdown mega-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">INFORMATIONS<span class="caret"></span></a>
                    <ul class="dropdown-menu" style="background: #f4511e;">
                        <li><a href="#"><strong><b>articles</b></strong></a></li>
                        <li><a href="property"><strong><b>PROPERTIES</b></strong></a></li>
                        <li><a href="customers"><strong><b>CUSTOMERS</b></strong></a></li>
                        <li><a href="employees"><strong><b>EMPLOYEES</b></strong></a></li>
                        <li><a href="collaborators"><strong><b>COLLABORATORS</b></strong></a></li>
                        <li><a id="noti" href="notifications"><strong><b>NOTIFICATIONS</b></strong></a></li>
                        <li><a href="rights"><strong><b>RIGHTS</b></strong></a></li>
                    </ul>
                </li>
                <li><a href="{{ route('register') }}">Register</a></li>
                @endif
                @if (Auth::guard('web')->check())
                <li class="dropdown mega-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">INFORMATION<span class="caret"></span></a>
                    <ul class="dropdown-menu" style="background: #f4511e;">
                        @if( Auth::user()->ADD_ARTICLE == "1")
                        <li><a href="#"><strong><b>articles</b></strong></a></li>
                        @endif
                        @if( Auth::user()->ADD_PROPERTY_PLOT == "1")
                        <li><a href="property"><strong><b>PROPERTIES</b></strong></a></li>
                        @endif
                        @if( Auth::user()->ADD_CUSTOMER == "1")
                        <li><a href="customers"><strong><b>CUSTOMERS</b></strong></a></li>
                        @endif
                        @if( Auth::user()->ADD_EMPLOYEE == "1")
                        <li><a href="employees"><strong><b>EMPLOYEES</b></strong></a></li>
                        @endif
                        @if( Auth::user()->ADD_COLLABORATOR == "1")
                        <li><a href="collaborators"><strong><b>COLLABORATORS</b></strong></a></li>
                        @endif
                        @if( Auth::user()->NOTIFICATIONS)
                        <li><a href="notifications"><strong><b>NOTIFICATIONS</b></strong></a></li>
                        @endif
                    </ul>
                </li>
                @endif
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu" style="background: #f4511e; border-color: #cd3100; :hover {background: #fff !important}">
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @endif
                <li class="dropdown mega-dropdown info hidden" id="info" name="info">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">INFORMATION<span class="caret"></span></a>
                    <ul class="dropdown-menu" style="background: #f4511e;">
                        <li><a href="#"><strong><b>articles</b></strong></a></li>
                        <li><a href="property"><strong><b>PROPERTIES</b></strong></a></li>
                        <li><a href="customers"><strong><b>CUSTOMERS</b></strong></a></li>
                        <li><a href="employees"><strong><b>EMPLOYEES</b></strong></a></li>
                        <li><a href="collaborators"><strong><b>COLLABORATORS</b></strong></a></li>
                        <li><a id="noti" href="notifications"><strong><b>NOTIFICATIONS</b></strong></a></li>
                        <li><a href="rights"><strong><b>RIGHTS</b></strong></a></li>
                    </ul>
                </li>
                <li class="info hidden" id="info" name="info"><a href="{{ route('register') }}">Register</a></li>
                <li class="dropdown info hidden" id="info" name="info">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{-- @if(Auth::guard('admin')->name != null) --}}
                        Admin
                        {{-- @endif --}}
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu" style="background: #f4511e; border-color: #cd3100; :hover {background: #fff !important}">
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>