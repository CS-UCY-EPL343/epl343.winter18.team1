<nav class="navbar navbar-default navbar-static-top nav-down is-visible" data-nav-status="toggle" style="height: 80px;">

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

        <div class="collapse navbar-collapse" id="app-navbar-collapse" style="background-color: #f4511e;">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav" style="margin-top: 15px; background-color: #f4511e;">
                <li><a id="hom" href="home">HOME</a></li>
                <li class="dropdown mega-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">SERVICES<span class="caret"></span></a>
                    <ul class="dropdown-menu" style="background: #f4511e;">
                        <li><a id="buy" href="BuyRent" aria-expanded="true">FOR SALE / FOR RENT</a></li>
                        <li><a id="sel" href="SellLet" aria-expanded="true">ADVERTISE WITH US</a></li>
                    </ul>
                </li>
                <li><a id="abo" href="about">ABOUT US</a></li>
                <li><a id="con" href="contact">CONTACT US</a></li>
                <li><a id="new" href="news">NEWS</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right" style="margin-top: 15px; margin-right: 5px; background: #f4511e;">
                <!-- Authentication Links -->
                @if (!Auth::guard('admin')->check() && !Auth::guard('web')->check())
                <li class="log" name="log" id="log"><a href="{{ route('login') }}">Login</a></li>
                @endif
                @if( Auth::guard('admin')->check() )
                <li class="dropdown mega-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">INFORMATION<span class="caret"></span></a>
                    <ul class="dropdown-menu" style="background: #f4511e;">
                        <li><a id="art" href="articles"><strong><b>ARTICLES</b></strong></a></li>
                        <li><a id="pro" href="property"><strong><b>PROPERTIES</b></strong></a></li>
                        <li><a id="cus" href="customers"><strong><b>CUSTOMERS</b></strong></a></li>
                        <li><a id="emp" href="employees"><strong><b>EMPLOYEES</b></strong></a></li>
                        <li><a id="col" href="collaborators"><strong><b>COLLABORATORS</b></strong></a></li>
                        <li><a id="noti" href="notifications"><strong><b>NOTIFICATIONS</b></strong></a></li>
                        <li><a id="rig" href="rights"><strong><b>RIGHTS</b></strong></a></li>
                    </ul>
                </li>
                <li><a href="{{ route('register') }}">Register</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Admin
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
                @endif
                @if (Auth::guard('web')->check())
                    <li class="dropdown mega-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">INFORMATION<span class="caret"></span></a>
                        <ul class="dropdown-menu" style="background: #f4511e;">
                            @if( Auth::user()->ADD_ARTICLE == "1")
                            <li><a href="articles"><strong><b>ARTICLES</b></strong></a></li>
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
            </ul>
        </div>
    </div>
</nav>