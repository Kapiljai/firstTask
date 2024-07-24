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
        </header>

    </div>

    <div class="container">
        <div class="row">
            <div id="header">
            </div>
            <div class="col-lg-7 mx-auto">
                <div class="card mb-4 auth-card">
                    <form id="commentForm" method="POST" >
                        @csrf
                        <div class="login-with-social">
                            <h2 class="forget-password">Forgot Password?</h2>
                        </div>
                        <span class="forget-password-span">Enter your details below to request an Favourite Blog account password reset.</span>
                      

                        <div class="mb-3 form-group position-relative forget-password-input ">
                            <div class="forgot d-flex justify-content-between">
                                <label for="mobile_username" class="form-label"><span class="auth-form-label mb-0">
                                    Username:
                                </span></label>
                                
                            </div>

                            <input type="text" class="form-control m-2" id="mobile_username" name="mobile_username"
                                placeholder="Enter Here">
                            
                        </div>
                        
                        <div class="mb-3 form-group position-relative forget-password-input">
                            <label for="text" class="form-label"><span class="auth-form-label mb-0">
                                    Email:
                                </span>
                            </label>
                            <input type="text" class="form-control m-2" id="email" name="email"
                                placeholder="Enter Here">
                            
                        </div>
                       

                        <div class="btnsubmit forget-password-input mt-5 mb-4">
                            <button type="submit" id="btnsubmit">Submit</button>
                        </div>
                    </form>
                   
                </div>
            </div>


        </div>
    </div>

    
   


</body>


</html>
