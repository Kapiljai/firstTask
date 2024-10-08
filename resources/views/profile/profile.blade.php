@extends('layouts.header')
@section('title', 'User Profile')
@section('main-content')
    <section style="background-color: #eee;">
        <div class="container mt-3">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> / User Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
            <form action="{{ route('user.profile.update', $user->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                {{-- <img id="imagePreview" src="#" alt="Image Preview" style="max-width: 200px; display: none;" /> --}}
                                <div id="imagePreview">

                                    @if (empty($user->image))
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                            alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                    @else
                                        <img src="{{ asset('image/user/' . $user->image) }}" alt="avatar"
                                            class="rounded-circle img-fluid" style="width: 150px;">
                                    @endif
                                </div>
                                <h5 class="my-3">{{ ucwords($user->name) }}</h5>
                                <p class="text-muted mb-1">{{ ucwords($user->position) }}</p>
                                <p class="text-muted mb-4">{{ ucwords($user->address) }}</p>
                                <div class="d-flex justify-content-between mb-2">
                                    <button type="button" data-mdb-button-init data-mdb-ripple-init
                                        class="btn btn-primary">Follow</button>
                                    <button type="button" data-mdb-button-init data-mdb-ripple-init
                                        class="btn btn-outline-primary ms-1">Message</button>
                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                                    <input type="file" style="display: none;" class="form-control mt-2" name="image"
                                        id="image" onchange="previewAndUploadImage(event)">

                                    <label for="image" style="cursor: pointer;">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="30px" height="30px"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M9 3.793V9H7V3.864L5.914 4.95 4.5 3.536 8.036 0l.707.707.707.707 2.121 2.122-1.414 1.414L9 3.793zM16 11v5H0v-5h2v3h12v-3h2z"
                                                fill-rule="evenodd" />
                                        </svg>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-1 mb-lg-0">
                            <div class="card-body p-0">
                                <ul class="list-group list-group-flush rounded-3">
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <i class="fas fa-globe fa-lg text-warning"></i>
                                        <p class="mb-0">https://mdbootstrap.com</p>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <i class="fab fa-github fa-lg text-body"></i>
                                        <p class="mb-0">mdbootstrap</p>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                                        <p class="mb-0">@mdbootstrap</p>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                        <p class="mb-0">mdbootstrap</p>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                        <p class="mb-0">mdbootstrap</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </form>
                    <div class="col-lg-8">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Full Name</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">Johnatan Smith</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">example@example.com</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Phone</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">(097) 234-5678</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Mobile</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">(098) 765-4321</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Address</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- change password --}}
                        <div class="p-1 mb-2">
                            <div class="card  p-1">
                                <div class="shadow p-2 change-password ">
                                    <div class="text-center">Change Password</div>
                                </div>
                                <div class="card-body mt-3">
                                    <form id="change-password-form">
                                        @csrf
                                        <input type="hidden" id="user_id" name="user_id"
                                            value="{{ Auth::user()->id }}">
                                        <div class="row mb-3 change-password-input">
                                            <div class="col-sm-3">
                                                <label for="current_password" class="mt-2">Old Password:</label>
                                            </div>
                                            <div class="col-sm-9 change-password-input">
                                                <input type="password" class="form-control" name="current_password"
                                                    id="current_password" required placeholder="Enter Old Password">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <label for="new_password">New Password:</label>
                                            </div>
                                            <div class="col-sm-9 change-password-input">
                                                <input type="password" class="form-control" id="new_password"
                                                    name="new_password" required placeholder="Enter New Password">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <label for="repeatpassword" class="mt-2">Repeat Password</label>
                                            </div>
                                            <div class="col-sm-9 change-password-input">
                                                <input type="password" class="form-control" name="repeatpassword"
                                                    id="repeatpassword" required placeholder="Enter Repeat Password">
                                            </div>
                                        </div>

                                        <div class="change-password-button mt-3 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-success">Save
                                                Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

        </div>
        <script>
            function previewAndUploadImage(event) {
                var file = event.target.files[0];
                console.log(file);
                if (!file) {
                    console.log('No file selected.');
                    return;
                }

                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview img').attr('src', e.target.result).show();
                };
                reader.readAsDataURL(file);

                var formData = new FormData();
                formData.append('image', file);
                formData.append('user_id', '{{ $user->id }}');
                formData.append('_token', '{{ csrf_token() }}');

                $.ajax({
                    url: "{{ route('user.profile.update', $user->id) }}",
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Image Uploaded',
                            text: response.message,
                            confirmButtonText: 'OK'
                        });
                    },
                    error: function(response) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Upload Failed',
                            text: 'Image upload failed. Please try again.',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            }
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       
    </section>



@endsection
