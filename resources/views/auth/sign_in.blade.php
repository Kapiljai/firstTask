<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon"
        href="https://thumbs.dreamstime.com/b/lets-shopping-logo-design-template-cart-icon-designs-134743663.jpg">
    <title>{{ __('login- Favourite Website') }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.css">
    <!-- Include bootstarp CSS and JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/sign_up.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <header class="header-top d-flex justify-content-between align-items-center mt-2">
            <div class="logo">
                <a href="{{ URL('/') }}"style="text-decoration: none;">Favourite Blog</a>
            </div>
            <div class="header-links">
                <ul class="list-unstyled mb-0">
                    <li class="ms-3" style="text-decoration: none;"><a href="{{ route('sign_in') }}" class="license"
                            style="text-decoration: none;"><i class="fa-solid fa-user"></i> Sign In</a></li>
                </ul>

            </div>
        </header>

    </div>

    <div class="container">
        <div class="row">
            <div id="header">
            </div>
            <div class="col-lg-7">
                    <div class="heading_auth  mt-5">
                        <h1 class="auth_header">
                            Great to have you back!
                        </h1>
                        <span class="agn1TDuY mt-3">You can sign in to Favourite Blog with your existing Favourite Blog account.</span>
                    </div>
                </div>

            <div class="col-lg-5">
                <div class="card mb-4 auth-card">
                    <form id="commentForm" method="POST"  action="{{route('login.authentication')}}">
                        @csrf
                        <div class="login-with-social">
                            <div class="social-login">
                                <a href="#" class="fb btn">
                                   <span class=" mx-1"> <i class="fa-brands fa-facebook"></i> </span>Login with Facebook
                                </a>
                            </div>
                            <div class="social-login">
                                <a href="#" class="twitter btn">
                                   <span class=" mx-1"> <i class="fa-brands fa-x-twitter"></i></span> Login with Twitter
                                </a>
                            </div>
                            <div class="social-login">
                                <a href="#" class="google btn"><span class=" mx-1"><i class="fa-brands fa-google-plus-g"></i>
                                </span>Login with Google+
                                </a>
                            </div>
                        </div>

                        <h4 class="text-center mt-3">
                            Or
                        </h4>
                        <div class="mb-3 form-group position-relative  mt-3">
                            <label for="text" class="form-label"><span class="auth-form-label mb-0">
                                    Username or Email:
                                </span>
                            </label>
                            <input type="text" class="form-control m-2" id="email" name="email"
                                placeholder="Enter Here">
                            <span class="icon valid-icon">&#10003;</span>
                            <span class="icon error-icon">&#10007;</span>
                        </div>
                        <div class="mb-3 form-group position-relative ">
                            <div class="forgot d-flex justify-content-between">
                                <label for="Password" class="form-label"><span class="auth-form-label mb-0">
                                    Password:
                                </span></label>
                                <a href="{{route('auth.forgot')}}" >Forgot Password</a>
                            </div>

                            <input type="Password" class="form-control m-2" id="password" name="password"
                                placeholder="Enter Here">
                            <span class="icon valid-icon">&#10003;</span>
                            <span class="icon error-icon">&#10007;</span>
                        </div>

                        <div class="btnsubmit">
                            <button type="submit" id="btnsubmit">Submit</button>
                        </div>
                    </form>
                    <div class="links d-flex mx-3 mb-2">
                    <span class="text-dark f-w-5">New Here ?</span>
                    <a href="{{ route('sign_up') }}">Create new Account</a>
                    </div>
                </div>
            </div>


        </div>
    </div>

    {{-- <div class="container-fluid">
        <footer>
            <div class="footer-container">
                <div class="footer-links">
                    <a href="#">About Elements</a>
                    <a href="#">Monthly Free Files</a>
                    <a href="#">Popular Searches</a>
                    <a href="#">License Terms</a>
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Cookies</a>
                    <a href="#">Do not sell or share my personal information</a>
                </div>
                <div class="footer-legal">
                    <p>© 2024 Envato Elements Pty Ltd. Trademarks and brands are the property of their respective owners.</p>
                </div>
            </div>
        </footer>
    </div> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#commentForm").validate({
                rules: {
                    email: {
                        required: true,
                    },
                    password: {
                        required: true,
                    },
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).closest('.form-group').addClass('error').removeClass('valid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).closest('.form-group').addClass('valid').removeClass('error');
                },
                errorPlacement: function(error, element) {
                    error.addClass('error-message');
                    error.insertAfter(element);
                },
            });
            
        });
    </script>


</body>


</html>
