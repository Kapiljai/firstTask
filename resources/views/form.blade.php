<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.css">
    <style>
        .form-group.position-relative {
            position: relative;
            padding-right: 40px;
        }

        .form-group.valid .form-control {
            border: 1px solid green;
        }

        .form-group .icon.valid-icon {
            position: absolute;
            right: 60px;
            top: 70%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.2em;
            display: none;
        }

        .form-group .icon.error-icon {
            position: absolute;
            right: 60px;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.2em;
            display: none;
        }


        .form-group.valid .icon.valid-icon {
            display: flex;
            background-color: green;
            /* color: rgb(49, 17, 192); */
            color: #fff;

        }

        .form-group.error .icon.error-icon {
            display: flex;
            background-color: red;
            color: white;

        }

        .error-message {
            color: red;
            font-weight: 500;
            display: none;
        }

        .plus-icon {
            cursor: pointer;
            font-size: 15px;
            /* display: inline-block; */
            padding: 5px;
            border: 1px solid #ccc;
            /* border-radius: 50%; */
            /* margin-bottom: 20px; */
        }
        .plus-icon:hover {
            background-color: #f0f0f0;
            color: black;
        }
    #videoPreview {
            display: none;
            width: 100%;
            max-width: 220px;
            height: 200px;
            margin-top: 20px;
        }
    .hidden-input {
            display: none;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <a href="{{ url('/song') }}" class="btn btn-primary">Song </a>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto  mt-5">
                <div class="card mb-0 p-4">

                    <form action="/store" method="post" id="commentForm">
                        @csrf
                        <div class="mb-3 form-group position-relative mt-4">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Enter Here">
                            <span class="icon valid-icon">&#10003;</span>
                            <span class="icon error-icon">&#10007;</span>
                        </div>
                        <div class="mb-3 form-group position-relative">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter Here">
                            <span class="icon valid-icon">&#10003;</span>
                            <span class="icon error-icon">&#10007;</span>
                        </div>


                        <div class="mb-3 form-group position-relative">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Enter Here">
                            <span class="icon valid-icon">&#10003;</span>
                            <span class="icon error-icon">&#10007;</span>
                        </div>
                        <div class="mb-3 form-group position-relative">
                            <label for="confirm_password" class="form-label">Confirm Password:</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password"
                                placeholder="Enter Here">
                            <span class="icon valid-icon">&#10003;</span>
                            <span class="icon error-icon">&#10007;</span>
                        </div>

                        <div class="mb-3 form-group position-relative">
                            <label for="address" class="form-label">Address:</label>
                            <input type="text" class="form-control" id="address" name="address"
                                placeholder="Enter Here">
                            <span class="icon valid-icon">&#10003;</span>
                            <span class="icon error-icon">&#10007;</span>
                        </div>
                        <div class="mb-3 form-group position-relative">
                            <label for="price" class="form-label">Price:</label>
                            <input type="text" class="form-control" id="price" name="price"
                                placeholder="Enter Here">
                            <span class="icon valid-icon">&#10003;</span>
                            <span class="icon error-icon">&#10007;</span>
                        </div>

                        <div class="mb-3 form-group position-relative">
                            <label for="country" class="form-label">Country:</label>
                            <input type="text" class="form-control" id="country" name="country"
                                placeholder="Enter Here">
                            <span class="icon valid-icon">&#10003;</span>
                            <span class="icon error-icon">&#10007;</span>
                        </div>
                        <button type="submit" class="btn btn-primary mb-0 mt-3" id="btnsubmit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#commentForm").validate({
                rules: {
                    name: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 8
                    },
                    confirm_password: {
                        required: true,
                        equalTo: "#password"
                    },
                    address: {
                        required: true,
                    },
                    price: {
                        required: true
                    },
                    country: {
                        required: true
                    }
                },
                messages: {
                    name: "This field is required",
                    email: {
                        required: "This field is required",
                        email: "Please enter a valid email address"
                    },
                    password: {
                        required: "This field is required",
                        minlength: "Password must be at least 8 characters long"
                    },
                    confirm_password: {
                        required: "This field is required",
                        equalTo: "Passwords do not match"
                    }
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

            $('#btnsubmit').on("click", function() {
                $("#commentForm").valid();
            });
        });
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    var plusIcon = document.querySelector('.add_video_more');
    var videoInput = document.getElementById('videoInput');

    plusIcon.addEventListener('click', function() {
        videoInput.click();
    });

    videoInput.addEventListener('change', function(event) {
        var file = event.target.files[0];
        if (file) {
            console.log('Video selected:', file.name);
        }
    });
});
</script>
</body>
</html>
