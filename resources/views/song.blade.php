<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favourite Song Add Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Include SweetAlert2 CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb"
        crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.css">
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

        #videoContainer {
            display: none;
        }

        #instruction {
            /* display: none; */

            font-family: sans-serif;
            font-size: 15px;
            font-weight: 400;

        }
    </style>
</head>

<body>
  <div class="modal fade" id="source-code-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <pre id="source-code"></pre>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto  mt-5">
                <div class="card mb-0 p-4">
                    <h4 class="text-center">Favourite Song List Form</h4>
                    <form action="{{ route('store') }}" method="post" id="commentForm" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 form-group position-relative mt-4">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Here">
                            <span class="icon valid-icon">&#10003;</span>
                            <span class="icon error-icon">&#10007;</span>
                        </div>
                        <div class="mb-3 form-group position-relative">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Here">
                            <span class="icon valid-icon">&#10003;</span>
                            <span class="icon error-icon">&#10007;</span>
                        </div>

                        <div class="mt-4 mb-3 form-group position-relative">
                            <div class="d-flex justify-content-between">
                                <label for="video" class="form-label">New Video</label>
                            </div>
                            <span class="mt-3"><i id="plusIcon" class="fas fa-plus-circle"></i></span>
                            <div id="videoContainer" class="mt-5">
                                <iframe id="youtubeVideo" width="460" name="video" height="315"
                                    src="https://www.youtube.com/embed/" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <input type="hidden" id="videoInput" class="form-control mt-3" name="video"
                                placeholder="Add YouTube Video Key">
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
        $(document).ready(function () {
            $("#commentForm").validate({
                rules: {
                    name: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    video: {
                        required: true
                    }
                },
                messages: {
                    name: "This field is required",
                    email: {
                        required: "This field is required",
                        email: "Please enter a valid email address"
                    },
                    video: {
                        required: "This field is required",
                    },
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').addClass('error').removeClass('valid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').addClass('valid').removeClass('error');
                },
                errorPlacement: function (error, element) {
                    error.addClass('error-message');
                    error.insertAfter(element);
                },
            });

            $('#btnsubmit').on("click", function () {
                $("#commentForm").valid();
            });
        });
    </script>

    <script>
        document.getElementById('plusIcon').addEventListener('click', function () {
            Swal.fire({
                title: 'Enter YouTube Video Key',
                input: 'text',
                inputPlaceholder: 'Enter YouTube Video Key',
                showCancelButton: true,
                inputValidator: (value) => {
                    if (!value) {
                        return 'You need to write something!'
                    }
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    var key = result.value;
                    var iframe = document.getElementById('youtubeVideo');
                    var videoContainer = document.getElementById('videoContainer');

                    // Update the hidden input field with the video key
                    document.getElementById('videoInput').value = key;

                    // Update the iframe src and display the video container
                    iframe.src = "https://www.youtube.com/embed/" + key;
                    videoContainer.style.display = 'block';
                }
            });
        });
    </script>>
</body>

</html>
