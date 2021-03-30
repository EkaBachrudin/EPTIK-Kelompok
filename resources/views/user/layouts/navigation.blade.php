        <!-- Header -->
        <header id="header">

            <!-- Navbar -->
            <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand">
                <div class="container header">

                    <!-- Navbar Brand-->
                    <a class="navbar-brand" href="{{route('index')}}">
                        Kelompok <i class="leverage-2-0">EPTIK</i>
                    </a>

                    <!-- Nav holder -->
                    <div class="ml-auto"></div>

                    <!-- Navbar Items -->
                    <ul class="navbar-nav items">
                        <li class="nav-item">
                            <a href="{{route('index')}}" class="nav-link{{request()->is('/') ? ' active' : ''}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('post.index')}}" class="nav-link
                            {{request()->is('all-posts') ? ' active' : ''}}
                            {{request()->is('all-posts/*/specific') ? ' active' : ''}}
                            {{request()->is('show-post/*') ? ' active' : ''}}">All Post</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('about')}}" class="nav-link{{request()->is('about') ? ' active' : ''}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('member')}}" class="nav-link
                            {{request()->is('members') ? ' active' : ''}}
                            {{request()->is('members/*/detail') ? ' active' : ''}}">Members</a>
                        </li>
                    </ul>

                    <!-- Navbar Icons -->
                    <ul class="navbar-nav icons">
                        @guest
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#sign">
                                <i class="icon-login mr-1"></i> Login
                            </a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#islogin">
                                <i class="icon-user mr-1"></i> {{ Str::limit(Auth::user()->name, 6) }}  
                            </a>
                        </li>
                        @endguest
                    </ul>

                    <!-- Navbar Toggle -->
                    <ul class="navbar-nav toggle">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                                <i class="icon-menu m-0"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

        </header>