<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div> <!-- .site-mobile-menu -->

<!-- NAVBAR -->
<header class="site-navbar mt-3" id="top">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="site-logo col-6"><a href="/">Something</a></div>
            <nav class="mx-auto site-navigation">
                <ul class="site-menu js-clone-nav d-none d-lg-block">
                    <li><a href="/" class="nav-link active">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                  <!--  <li><a href="{{ route('gallery') }}">Portfolio</a></li> -->
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                     <li><a href="/program">Topics</a></li>
                    @auth
                     <li><a href="/projectusers">My Stories</a></li>
                    @endauth
                    @if(Auth::check())
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endif
                </ul>
            </nav>

            <div class="col-6 site-burger-menu d-block d-lg-none text-right">
                <a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a>
            </div>
        </div>
    </div>
</header>