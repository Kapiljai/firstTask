<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon"
        href="https://thumbs.dreamstime.com/b/lets-shopping-logo-design-template-cart-icon-designs-134743663.jpg">
    <title>{{ __('register- Favourite Website') }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.css">
    <!-- Include bootstarp CSS and JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/sign_up.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

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
                    <h3 class="auth_header">
                        Create A Free Account In Favourite Blog
                    </h3>
                    <span class="agn1TDuY mt-3">
                    </span>
                </div>
            </div>

           
            <div class="col-lg-5">
                <div class="card  mb-4 auth-card">
                    <div class="login-with-social">
                        <div class="social-login">
                            <a href="#" class="fb btn">
                                <span class="mx-1"> <i class="fa-brands fa-facebook"></i> </span>Login with Facebook
                            </a>
                        </div>
                        <div class="social-login">
                            <a href="#" class="twitter btn">
                                <span class="mx-1"> <i class="fa-brands fa-x-twitter"></i></span> Login with Twitter
                            </a>
                        </div>
                        <div class="social-login">
                            <a href="#" class="google btn"><span class="mx-1"><i
                                        class="fa-brands fa-google-plus-g"></i>
                                </span>Login with Google+
                            </a>
                        </div>
                        <div class="social-login">
                            <button class="email btn" id="email"><span class="mx-1"><i
                                        class="fa-regular fa-envelope"></i>
                                </span>Continue with Email
                            </button>
                        </div>
                        <form action="{{ route('register.store') }}" method="post" id="form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <div class="form-input-text m-3">
                                        <label for="firstName" class="form-label">First Name :</label>
                                        <input type="text" id="firstName" name="f_name" placeholder="First Name"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <div class="form-input-text m-3">
                                        <label for="lastName" class="form-label">Last Name :</label>
                                        <input type="text" id="lastName" name="l_name" placeholder="Last Name"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>


                            <div class="row mt-1">
                                <div class="col-lg-12  form-group">
                                    <div class="form-input-text m-3">
                                        <label for="email" class="form-label">Email :</label>
                                        <input type="email" id="email" name="email" placeholder="Email here"
                                            class="form-control">
                                    </div>
                                </div>

                            </div>



                            <div class="row mt-1">
                                <div class="col-lg-12 form-group">
                                    <div class="form-input-text m-3">
                                        <label for="password" class="form-label">Password :</label>
                                        <input type="password" id="password" name="password"
                                            placeholder="Password here" class="form-control">
                                    </div>
                                </div>

                            </div>

                            <div class="btnsubmit m-2">
                                <button type="submit" id="btnsubmit">Submit</button>
                            </div>

                    </div>

                    <div class="mt-4">
                        <div class="checkbox form-group d-flex">
                            <input type ="checkbox" id="checkbox" name="checkbox" required>
                            <p class="checkbox_msg mt-2"> Send me tips, trends, freebies, updates & offers.</p>
                        </div>
                        <span class="checkbox_span">You can unsubscribe at any time.</span>
                    </div>
                    </form>
                    <div class="links d-flex mt-2 mx-3 mb-2">
                        <span class="text-dark f-w-5">Already have an Favourite Blog Account?</span> <a
                            href="{{ route('sign_in') }}"> Sign in here.</a>
                    </div>
                    <div class=" form-group mt-2 para">
                        <span>Favourite Blog collects and uses personal data in accordance with our</span>
                        <div class="terms_condition d-flex justify-content-between mt-4 mx-3">
                            <a href="#" class="terms text-dark">Privacy Policy</a>
                            <a href="#" class="terms text-dark">User Terms</a><a href="#"
                                class="terms text-dark">Fair Use Policy</a>
                        </div>

                    </div>

                </div>


            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#form").validate({
                    rules: {
                        f_name: {
                            required: true,
                        },
                        l_name: {
                            required: true,
                        },
                        email: {
                            required: true,
                        },
                        password: {
                            required: true,
                        },
                        checkbox: {
                            required: true,
                        },

                        messages: {
                            checkbox: {
                                required: "You must accept the terms and conditions."
                            }
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
                        if (element.attr("type") == "checkbox") {
                            error.insertAfter(element.closest(".checkbox"));
                        } else {
                            error.insertAfter(element);
                        }
                        // error.insertAfter(element);
                    },
                });
            });
        </script>

        <script>
            $(document).ready(function() {
                $('.email').on('click', function(e) {
                    e.preventDefault();
                    $('.login_form').toggle();
                });
            });
            $("#email").click(function() {
                $("#form").toggle("show");
                return false;
            });
        </script>
        
       
</body>


</html>
