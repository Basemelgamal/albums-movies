<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title> Smart Movies </title>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="author" content="RoQaY">
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" Smart Movies website">
    <meta name="keywords" content=" Smart Movies ">
    <meta name="csrf-token" content="V2G8zLS7dL5HzdfwxaBDewvJvAKCyeThQE4NBtJv">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::TO('/') }}/public/assets/website/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::TO('/') }}/public/assets/website/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::TO('/') }}/public/assets/website/css/animate.css">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::TO('/') }}/public/assets/website/css/all.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::TO('/') }}/public/assets/website/css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::TO('/') }}/public/assets/website/css/responsive.css">
    {{-------------------- Header --------------------}}
    @yield('header')

</head>
<body>

    <div class="body_wrapper">
        <div class="preloader">
            <div class="preloader-loading">
                <img src="{{ URL::TO('/') }}/public/assets/website/images/logo-m.png" data-src="{{ URL::TO('/') }}/public/assets/website/images/logo-m.png" class="lazyload">
            </div>
        </div>
        <div class="top_nav">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <ul class="d-flex about-site">
                            <li><a href="#">Questions</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Terms Of Privacy</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <ul class="d-flex social ">
                            <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
                            <li> <a href="#"> <i class="fab fa-twitter"></i> </a></li>
                            <li> <a href="#"> <i class="fab fa-instagram"></i> </a></li>
                            <li> <a href="#"> <i class="fab fa-snapchat-ghost"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ URL::TO('/') }}/public/assets/website/images/logo-m.png" data-src="{{ URL::TO('/') }}/public/assets/website/images/logo-m.png"
                        class="lazyload"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <ul class="menu-bars">
                            <li><span></span></li>
                            <li><span></span></li>
                            <li><span></span></li>
                        </ul>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Movies Demos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Packages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            @auth
                                @if(auth()->user()->hasRole('admin') || auth()->user()->hasRole('superadmin'))
                                    <button class="btn btn-gradiant">
                                        <a href="{{ route('admin') }}">Admin</a>
                                    </button>
                                @endif
                                <button class="btn btn-gradiant">
                                    <a href="{{ route('profile') }}">Profile</a>
                                </button>
                                <button class="btn btn-gradiant">
                                    <a href="{{ route('logout') }}">Logout</a>
                                </button>
                            @else
                                <button class="btn btn-gradiant">
                                    <a href="{{ route('login') }}">login</a>
                                </button>
                            @endauth
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {{-------------------- Start Content --------------------}}
        <main>
            @yield('content')
        </main>
        {{-------------------- Start Footer --------------------}}
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a class="navbar-brand" href="index.html"><img src="{{ URL::TO('/') }}/public/assets/website/images/logo-m.png" data-src="{{ URL::TO('/') }}/public/assets/website/images/logo-m.png" class="lazyload"></a>
                        <p> Interact With The Content In An Interesting Educational Experience, Using Studying Means
                            Anywhere & Anytime Directly From your Computer. </p>
                    </div>
                    <div class="col-md-4">
                        <h5>Links</h5>
                        <div class="links d-flex">
                            <ul>
                                <li> <a href="#"> > Create Account</a></li>
                                <li> <a href="#"> > movie</a></li>
                                <li> <a href="#"> > Team </a></li>
                                <li> <a href="#"> > Company </a></li>
                            </ul>
                            <ul>
                                <li> <a href="#"> > Questions</a></li>
                                <li> <a href="#"> > Blog</a></li>
                                <li> <a href="#"> > Terms of Privacy </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h5>Contact Us</h5>
                        <div><a href="mailto:info@smartmovie.com"> <i class="fas fa-envelope"></i>
                                info@smartmovie.com</a></div>
                        <form action="">
                            <div class="input-group mb-2">
                                <input type="email" class="form-control" id="inlineFormInputGroup"
                                    placeholder=" Your Email ">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <button class="btn btn-gradiant m-0">
                                            <a href="#">Send</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <ul class="d-flex social ">
                            <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
                            <li> <a href="#"> <i class="fab fa-twitter"></i> </a></li>
                            <li> <a href="#"> <i class="fab fa-instagram"></i> </a></li>
                            <li> <a href="#"> <i class="fab fa-snapchat-ghost"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyrights">
                <p>© All Rights reserved to Smart Movies website 2017</p>
            </div>
        </footer>
        <span class="scroll-top"> <a href="#"><i class="fas fa-chevron-up"></i></a> </span>

    </div>
    {{-------------------- Start Scripts -------------------}}
    <script src="{{ URL::TO('/') }}/public/assets/website/js/jquery-3.3.1.min.js"></script>
    <script src="{{ URL::TO('/') }}/public/assets/website/js/bootstrap.min.js"></script>
    <script src="{{ URL::TO('/') }}/public/assets/website/js/popper.min.js"></script>
    <script src="{{ URL::TO('/') }}/public/assets/website/js/lazysizes.min.js"></script>
    <script src="{{ URL::TO('/') }}/public/assets/website/js/fontawesome.min.js"></script>
    <script src="{{ URL::TO('/') }}/public/assets/website/js/all.min.js"></script>
    <script src="{{ URL::TO('/') }}/public/assets/website/js/wow.min.js"></script>
    <script src="{{ URL::TO('/') }}/public/assets/website/js/main.js"></script>
    {{-------------------- Start Additional Scripts --------------------}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('additional_scripts')
    @if(\Session::has('alert'))
        @if( \Session::get('alert')['icon'] == 'success')
            <script>
                Swal.fire({
                    icon: "{{ \Session::get('alert')['icon']??'notice' }}",
                    title: "{{ \Session::get('alert')['title']??''}}",
                    showConfirmButton: false,
                    timer: 1500
                    })
            </script>
        @else
        <script>
            Swal.fire({
                icon: "{{ \Session::get('alert')['icon']    ?? '' }}",
                title: "{{ \Session::get('alert')['title']  ?? ''}}",
                text: "{{ \Session::get('alert')['text']    ?? '' }}",
            });
        </script>
        @endif
    @endif
</body>
</html>
