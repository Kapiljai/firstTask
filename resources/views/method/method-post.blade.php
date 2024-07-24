<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('logo/android-icon-36x36.png') }}">
    <title>{{ __('Blog- Favourite Website') }}</title>
    <link rel="icon" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Include SweetAlert2 CSS and JS -->

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon"
        href="https://thumbs.dreamstime.com/b/lets-shopping-logo-design-template-cart-icon-designs-134743663.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

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

            <div class= " header-links">
                <ul class="d-flex list-unstyled mb-0 ">
                    <li class="ms-3"><a href="" class="license">License</a></li>
                    <li class="ms-3"><a href="" class="pricing">Pricing</a></li>
                    <li class="ms-3"><a href="" class="template">Get Unlimited Template</a></li>
                   @if (Auth::check())
                   <li class="nav-item dropdown">
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button type="submit" class="nav-link ">Video Templates</button>
                    </form>
                    
                    <div class="dropdown-menu">
                        <div class="dropdown-links">
                            <a class="dropdown-link" href="#">Action</a>
                            <a class="dropdown-link" href="#">Another action</a>
                            <a class="dropdown-link" href="#">Something else here</a>
                        </div>
                    </div>
                   @else
                   <li class="ms-3"><a href="{{ route('sign_in') }}" class="license"><i class="fa-solid fa-user"></i>
                    Sign In</a></li>
                   @endif
                  
                </ul>

            </div>
            <div class="menu-icon" id="menu_icon">
                <i class="fa fa-bars"></i>
            </div>
        </header>
        <nav class="navbar navbar-expand-lg navbar-item-container ms-4">
            <ul class="navbar-nav d-flex flex-wrap justify-content-around w-100">
                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        Stock Video
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link " href="#">Video Templates</a>
                    <div class="dropdown-menu">
                        <div class="dropdown-links">
                            <a class="dropdown-link" href="#">Action</a>
                            <a class="dropdown-link" href="#">Another action</a>
                            <a class="dropdown-link" href="#">Something else here</a>
                        </div>
                    </div>

                </li>
                <li class="nav-item dropdown"><a class="nav-link ">Music</a>
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
       <h4>{!!$message!!}</h4>
    </div>

</body>


</html>
