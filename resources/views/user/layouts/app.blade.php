
<!DOCTYPE html>

<html lang="en">

<head>
<!-- =====================================================================================================
Halooo !!! ngintip aja nih NYARI APA NIH? HEHE...
=======================================================================================================-->

        <!-- ==============================================
        Basic Page Needs
        =============================================== -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>KELOMPOK PTIK</title>

        <meta name="description" content="Kelompok matakuliah EPTIK">
        <meta name="subject" content="Kelompok matakuliah EPTIK">
        <meta name="author" content="Eka Bachrudin Nursa">

        <!-- ==============================================
        Favicons
        =============================================== -->
        <link rel="shortcut icon" href="{{secure_asset('/user/assets/images/favicon.ico')}}">
        <link rel="apple-touch-icon" href="{{secure_asset('/user/assets/images/apple-touch-icon.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{secure_asset('/user/assets/images/apple-touch-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{secure_asset('/user/assets/images/apple-touch-icon-114x114.png')}}">

        <!-- ==============================================
        Vendor Stylesheet
        =============================================== -->
        <link rel="stylesheet" href="{{secure_asset('/user/assets/css/vendor/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{secure_asset('/user/assets/css/vendor/slider.min.css')}}">
        <link rel="stylesheet" href="{{secure_asset('/user/assets/css/main.css')}}">
        <link rel="stylesheet" href="/user/assets/css/vendor/icons.min.css">
        <link rel="stylesheet" href="{{secure_asset('/user/assets/css/vendor/animation.min.css')}}">
        <link rel="stylesheet" href="{{secure_asset('/user/assets/css/vendor/gallery.min.css')}}">
        <link rel="stylesheet" href="{{secure_asset('/user/assets/css/vendor/cookie-notice.min.css')}}">

        <!-- ==============================================
        Custom Stylesheet
        =============================================== -->
        <link rel="stylesheet" href="{{secure_asset('/user/assets/css/default.css')}}">
        <link rel="stylesheet" href="{{secure_asset('/user/assets/css/pink.css')}}">
        <style>
            :root {
                --header-bg-color: #111111;
                --nav-item-color: #f5f5f5;
                --top-nav-item-color: #f5f5f5;
                --hero-bg-color: #090909;

                --section-1-bg-color: #111111;
                --section-2-bg-color: #f5f5f5;
                --section-3-bg-color: #eeeeee;
                --section-4-bg-color: #191919;
                --section-5-bg-color: #111111;
                --section-6-bg-color: #f5f5f5;

                --footer-bg-color: #111111;
            }
        </style>
    </head>

    <body>

      @include('user.layouts.navigation')

       @yield('content')
        <!-- Footer -->
        <footer class="odd">

            <!-- Footer [links] -->
            <section id="footer" class="footer">
                <div class="container">
                    <div class="row items footer-widget">
                        <div class="col-12 col-lg-3 p-0">
                            <div class="row">
                                <div class="branding col-12 p-3 text-center text-lg-left item">
                                    <div class="brand">
                                        <a href="index.html" class="logo">
                                            Kelompok EPTIK.
                                        </a>
                                    </div>
                                    <p>Authentic and innovative.<br>Built to the smallest detail<br>with a focus on usability<br>and performance.</p>
                                    <ul class="navbar-nav social share-list mt-0 ml-auto">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-social-instagram ml-0"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-social-facebook"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-social-linkedin"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="icon-social-twitter"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 p-0">                            
                            <div class="row justify-content-between">
                                <div class="col-12 col-lg-4 p-3 text-center text-lg-left item">
                                    <h4 class="title">Get in Touch</h4>
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="icon-phone mr-2"></i>
                                                +62 896 0412 2618
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="icon-envelope mr-2"></i>
                                                ekabachrudin@gmail.com
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="icon-location-pin mr-2"></i>
                                                Nona Merah, Cibitung
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-4 p-3 text-center text-lg-left item">
                                    <h4 class="title">Shortcut Menu</h4>
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a href="{{route('index')}}" class="nav-link">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('post.index')}}" class="nav-link">All Post</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('about')}}" class="nav-link">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('member')}}" class="nav-link">Members</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Copyright -->
            <section id="copyright" class="p-3 copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 p-3 text-center text-lg-left">
                            <p>Webiste ini di buat untuk mata kuliah Etika Profesi Teknologi Informasi & Komunikasi <strong class="text-primary">UBSI 2021</strong></p>
                        </div>
                        <div class="col-12 col-md-6 p-3 text-center text-lg-right">
                            <p>© 2021 made with <i class="fa fa-heart" style="color:red"></i> by - Eka Bachrudin</p>
                        </div>
                    </div>
                </div>
            </section>

        </footer>

        <!-- #region Global ============================ -->

        @auth
            <!-- Modal [islogin] -->
        <div id="islogin" class="p-0 modal fade" role="dialog" aria-labelledby="search" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        <h4> <i class="icon-user mr-1"></i> {{ Auth::user()->name }}</h4> <i class="icon-close"></i>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 p-0 align-self-center">
                                <div class="row">
                                    <div class="col-12 p-0 pb-4">
                                        <h2>What do you want to do ?</h2>
                                        <p>Press the button below to admin or control panel.</p>
                                        <a href="/user-admin"><div class="btn primary-button"> <i class="icon-pencil"></i> My Posts </div></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 pb-4">
                                        <p>Press the button below to logout.</p>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <div class="col-12 p-0 input-group align-self-center">
                                                <button class="btn primary-button"><i class="icon-logout"></i>LOGOUT</button>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endauth

        <!-- Modal [sign] -->
        <div id="sign" class="p-0 modal fade" role="dialog" aria-labelledby="sign" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        Sign In Form <i class="icon-close"></i>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('login') }}" autocomplete="off">
                            @csrf
                            <div class="col-12 p-0 align-self-center">
                                <div class="row">
                                    <div class="col-12 p-0 pb-3">
                                        <h2>Sign In</h2>
                                        <p>Don't have an account? <a href="#" class="primary-color" data-toggle="modal" data-target="#register">Register now</a>.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-12 p-0 input-group ml-4">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        
                                        <label class="form-check-label ml-3" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group align-self-center">
                                        <button type="submit" class="btn primary-button"><i class="icon-login"></i>LOGIN</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal [register] -->
        <div id="register" class="p-0 modal fade" role="dialog" aria-labelledby="register" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        Register Form <i class="icon-close"></i>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('register') }}" autocomplete="off" class="row">
                            @csrf
                            <div class="col-12 p-0 align-self-center">
                                <div class="row">
                                    <div class="col-12 p-0 pb-3">
                                        <h2>Register</h2>
                                        <p>Have an account? <a href="#" class="primary-color" data-toggle="modal" data-target="#sign">Sign In</a>.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                        <input id="nim" type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" placeholder="Nim" required autofocus>
                                        @error('nim')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                        <input id="kelas" type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas" value="{{ old('kelas') }}" placeholder="Class" required autofocus>
                                        @error('kelas')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password confirmation" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group align-self-center">
                                        <button class="btn primary-button" type="submit"><i class="icon-rocket"></i>REGISTER</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal [responsive menu] -->
        <div id="menu" class="p-0 modal fade" role="dialog" aria-labelledby="menu" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        Menu <i class="icon-close"></i>
                    </div>
                    <div class="menu modal-body">
                        <div class="row w-100">
                            <div class="items p-0 col-12 text-center">
                                <!-- Append [navbar] -->
                            </div>
                            <div class="contacts p-0 col-12 text-center">
                                <!-- Append [navbar] -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll [to top] -->
        <div id="scroll-to-top" class="scroll-to-top">
            <a href="#header" class="smooth-anchor">
                <i class="icon-arrow-up"></i>
            </a>
        </div>        

        <!-- ==============================================
        Vendor Scripts
        =============================================== -->
        <script src="{{secure_asset('/user/assets/js/vendor/jquery.min.js')}}"></script>
        <script src="{{secure_asset('/user/assets/js/vendor/jquery.easing.min.js')}}"></script>
        <script src="{{secure_asset('/user/assets/js/vendor/jquery.inview.min.js')}}"></script>
        <script src="{{secure_asset('/user/assets/js/vendor/popper.min.js')}}"></script>
        <script src="{{secure_asset('/user/assets/js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{secure_asset('/user/assets/js/vendor/ponyfill.min.js')}}"></script>
        <script src="{{secure_asset('/user/assets/js/vendor/slider.min.js')}}"></script>
        <script src="{{secure_asset('/user/assets/js/vendor/animation.min.js')}}"></script>
        <script src="{{secure_asset('/user/assets/js/vendor/progress-radial.min.js')}}"></script>
        <script src="{{secure_asset('/user/assets/js/vendor/bricklayer.min.js')}}"></script>
        <script src="{{secure_asset('/user/assets/js/vendor/gallery.min.js')}}"></script>
        <script src="{{secure_asset('/user/assets/js/vendor/shuffle.min.js')}}"></script>
        <script src="{{secure_asset('/user/assets/js/vendor/cookie-notice.min.js')}}"></script>
        <script src="{{secure_asset('/user/assets/js/vendor/particles.min.js')}}"></script>
        <script src="{{secure_asset('/user/assets/js/main.js')}}"></script>
        <!-- #endregion Global ========================= -->

        <script>
            @if (count($errors) > 0)
                $('#register').modal('show');
                $('#sign').modal('show');
            @endif
        </script>

    </body>
</html>