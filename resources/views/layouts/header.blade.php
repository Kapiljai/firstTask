<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('logo/android-icon-36x36.png') }}">
    <title>@yield('title', 'Blog- Favourite Website')</title>
    <link rel="icon" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
    <link rel="icon" href="https://thumbs.dreamstime.com/b/lets-shopping-logo-design-template-cart-icon-designs-134743663.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
         <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<!--Start of Tawk.to Script-->
{{-- <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/66a0eb1332dca6db2cb47dda/1i3i9cht6';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
</script> --}}
    <!--End of Tawk.to Script-->
{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        document.addEventListener('contextmenu', event => event.preventDefault());
        document.addEventListener('keydown', function(event) {
            if (event.ctrlKey && (event.key === 'u' || event.key === 'U')) {
                event.preventDefault();
            }
        });
    });
</script> --}}
<body>
    <div class="container-fluid shadow-container">
        <header class="header-top d-flex justify-content-between align-items-center ">
            <div class="logo">
                <a href="{{ URL('/') }}">Favourite Blog</a>
            </div>

            <div class="search-bar-container d-flex">
                <select name="" id="" class="search-select">
                    <option value="">All Items</option>
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                </select>
                <input type="text" placeholder="Search...">
                <div class="icon-search d-flex align-items-center">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>

            <div class="header-links">
                <ul class="d-flex list-unstyled mb-0 ">
                    <li class="ms-2"><a href="" class="license">License</a></li>
                    <li class="ms-2"><a href="" class="pricing">Pricing</a></li>
                    <li class="ms-2"><a href="" class="template">Get Unlimited Template</a></li>
                    @if (Auth::check())
                    <li class="dropdown-profile">
                        <a class="nav-link dropdown-toggle-profile" id="profile">
                            @if (Auth::user()->f_name && Auth::user()->user()->l_name)
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) . strtoupper(substr(Auth::user()->l_name, 0, 1)) }}
                                
                            @else
                            {{Auth::user()->name}}
                                
                            @endif
                            
                        </a>
                        <div class="dropdown-menu-profile mt-2" id="profile-show">
                            <a class="dropdown-item-profile" href="{{route('user.profile')}}">Profile</a>
                            <a class="dropdown-item-profile" href="#">Account</a>
                            <a class="dropdown-item-profile" href="#">Setting</a>
                            <a class="dropdown-item-profile" href="{{route('help.center')}}">Help</a>
                            <form  action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class=" btn btn-primary mx-3 mb-4 mt-2 dropdown-item-profile">Logout</button>
                            </form>
                        </div>
                    </li>
                    @else
                    <li class="me-5"><a href="{{ route('login') }}" class="license me-2 fs-6"><i class="fa-solid fa-user"></i> Sign In</a></li>
                    @endif
                </ul>
            </div>
            <div class="menu-icon" id="menu_icon">
                <i class="fa fa-bars"></i>
            </div>
        </header>
        <nav class="navbar navbar-expand-lg navbar-item-container ms-4">
            <ul class="navbar-nav d-flex flex-wrap justify-content-around w-100">
                <li class="nav-item">
                    <a class="nav-link" href="#">Stock Video</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#">Video Templates</a>
                    <div class="dropdown-menu">
                        <div class="dropdown-links">
                            <a class="dropdown-link" href="#">Action</a>
                            <a class="dropdown-link" href="#">Another action</a>
                            <a class="dropdown-link" href="#">Something else here</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link">Music</a>
                    <div class="dropdown-menu">
                        <div class="dropdown-links">
                            <a class="dropdown-link" href="#">Action</a>
                            <a class="dropdown-link" href="#">Another action</a>
                            <a class="dropdown-link" href="#">Something else here</a>
                            <a class="dropdown-link" href="#">Action</a>
                            <a class="dropdown-link" href="#">Another action</a>
                            <a class="dropdown-link" href="#">Something else here</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Sound Effects</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Graphic Templates</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Graphics</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Presentation Templates</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Photos</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Fonts</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Add-ons</a></li>
                <li class="nav-item"><a class="nav-link" href="#">More</a></li>
                <li class="nav-item"><a class="nav-link me-5" href="#">Learn</a></li>
            </ul>
        </nav>
    </div>

    <div class="container">
        @yield('main-content')
    </div>
</body>
<script src="{{ asset('js/help-center.js') }}"></script>

<script>
$("#profile").click(function() {
                $("#profile-show").toggle("show");
                return false;
            });

            $(window).click(function(event) {
        if (!$(event.target).closest('.dropdown-profile').length) {
            $(".dropdown-menu-profile").hide();
        }
    });
</script>
<script>
    let menu_icon = document.getElementById('menu_icon');
</script>
</html>
