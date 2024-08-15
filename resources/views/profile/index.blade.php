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
                <!-- Profile Image Form -->
                <div class="col-lg-4">
                    <form action="{{ route('user.profile.update', $user->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card mb-4">
                            <div class="card-body text-center">
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
                    </form>
                </div>

                <!-- Profile Details Form -->
                <div class="col-lg-8">
                    <form>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Full Name</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ ucwords($user->name) }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $user->email }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Phone</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $user->phone }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Mobile</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $user->mobile }}</p>
                                    </div>
                                </div>
                    </form>
                    <hr>
                    <div id="office-addresses">
                        <div class="address-form" data-index="1">
                            <form action="{{route('user.address')}}" method="post" id="address-form" class="new-form">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mt-2">Address</p>
                                    </div>
                                    <div class="col-sm-9 change-password-input  ">
                                        <input type="text" id="search_by_map" data-index="1" name="full_address"
                                            placeholder="Address Search Here..." class="search_by_map form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mt-2">Country</p>
                                    </div>
                                    <div class="col-sm-9 change-password-input  ">
                                        <input type="text" data-index="1" name="country" id="country" placeholder="Country Here..."
                                            class="form-control ">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mt-2">State</p>
                                    </div>
                                    <div class="col-sm-9 change-password-input  ">
                                        <input type="text"  data-index="1" name="state" id="state" placeholder="State Here..."
                                            class="form-control ">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mt-2">City</p>
                                    </div>
                                    <div class="col-sm-9 change-password-input  ">
                                        <input type="text"  data-index="1" name="city" id="city" placeholder="City Here..."
                                            class="form-control ">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mt-2">Zip Code</p>
                                    </div>
                                    <div class="col-sm-9 change-password-input  ">
                                        <input type="text"  data-index="1" name="zipcode" id="ZipCode"
                                            placeholder="Zipcode Here..." class="form-control ">
                                    </div>
                                </div>
                                <input type="submit" value="Submit" class="btn btn-success address-btn btn-sm">
                            </form>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 d-flex justify-content-between ad-more">
                            <span class="address">
                                Add More Address
                            </span>
                            <span class="plus-icon-head" id="add-more-head">
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Social Links Form -->
        <div class="col-lg-4">
            <form>
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
            </form>
        </div>

        <!-- Change Password Form -->
        <div class="col-lg-8">
            <form id="change-password-form" action="{{ route('user.change.password', $user->id) }}" method="POST">
                @csrf
                <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
                <div class="card p-1 mb-2">
                    <div class="shadow p-2 change-password text-center">
                        Change Password
                    </div>
                    <div class="card-body mt-3">
                        <div class="row mb-3">
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
                                <input type="password" class="form-control" id="new_password" name="new_password"
                                    required placeholder="Enter New Password">
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <label for="repeatpassword" class="mt-2">Repeat Password:</label>
                            </div>
                            <div class="col-sm-9 change-password-input">
                                <input type="password" class="form-control" name="repeatpassword" id="repeatpassword"
                                    required placeholder="Enter Repeat Password">
                            </div>
                        </div>
                        <div class="change-password-button mt-3 d-flex justify-content-end">
                            <button type="submit" class="btn btn-success">Save Changes</button>
                        </div>
                    </div>
                </div>
            </form>
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

        <script>
            $(document).ready(function() {
                $('#change-password-form').on('submit', function(e) {
                    e.preventDefault();
                    var userId = $('#user_id').val();
                    var formData = new FormData(this);
                    var csrfToken = $('meta[name="csrf-token"]').attr('content');
                    formData.append('_token', csrfToken);
                    $.ajax({
                        url: "{{ route('user.change.password', ['id' => Auth::user()->id]) }}",
                        method: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            console.log('AJAX request successful:', response);
                            Swal.fire({
                                icon: 'success',
                                title: 'Password Successfully Update',
                                text: response.message,
                                confirmButtonText: 'OK'
                            });
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            var response = jqXHR.responseJSON;
                            var errorMessage = response.message ||
                                'Something went wrong. Please try again.';

                            if (response.errors) {
                                $.each(response.errors, function(key, value) {
                                    errorMessage += value + '<br>';
                                });
                            }

                            Swal.fire({
                                icon: 'error',
                                title: 'Update Failed',
                                html: errorMessage,
                                confirmButtonText: 'OK'
                            });
                        }

                    });
                });
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVJSBxE9KQfA9pbBmfgZQ-wKKWwNz_6YA&loading=async&libraries=places&callback=initMap" async defer></script>
        <script>
            let index = 1;
            let autocompleteInstances = [];
            function initMap() {
                if (typeof google === 'undefined' || !google.maps || !google.maps.places) {
                    console.error('Google Maps API not loaded');
                    return;
                    }
                document.querySelectorAll('input.search_by_map').forEach((input) => {
                    let index = input.getAttribute('data-index');
                    if (input) {
                        let autocomplete = new google.maps.places.Autocomplete(input);
                        autocompleteInstances[index] = autocomplete;

                        google.maps.event.addListener(autocomplete, 'place_changed', function() {
                            handlePlaceChanged(autocomplete, index);
                        });
                    }
                });
            }

            function handlePlaceChanged(autocomplete, index) {
                try {
                    let place = autocomplete.getPlace();
                    if (!place.geometry) {
                        console.log("No details available for input: '" + autocomplete.getPlace().name + "'");
                        return;
                    }

                    let addressComponents = place.address_components;
                    let country = addressComponents.find(component => component.types.includes('country'));
                    if (country) {
                        document.querySelector(`input[name="country"][data-index="${index}"]`).value = country.long_name;
                    }

                    let state = addressComponents.find(component => component.types.includes('administrative_area_level_1'));
                    if (state) {
                        document.querySelector(`input[name="state"][data-index="${index}"]`).value = state.long_name;
                    }

                    let city = addressComponents.find(component => component.types.includes('locality'));
                    if (city) {
                        document.querySelector(`input[name="city"][data-index="${index}"]`).value = city.long_name;
                    }

                    let postalCode = addressComponents.find(component => component.types.includes('postal_code'));
                    if (postalCode) {
                        document.querySelector(`input[name="zipcode"][data-index="${index}"]`).value = postalCode.long_name;
                    }

                    document.querySelector(`input[name="full_address"][data-index="${index}"]`).value = place.formatted_address;
                } catch (error) {
                    console.error('Error handling place details:', error);
                }
            }

            document.addEventListener('DOMContentLoaded', function() {
                initMap();
            });
            document.getElementById('add-more-head').addEventListener('click', function() {
                index++;
                let newForm = `
                <div class="address-form_${index} address-form" id="address-form_${index}" data-index="${index}">
                    <form action="{{route('user.address')}}" method="post" id='address-form-${index}''>
                    @csrf
                    <div id ="message"></div>
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                         <div class="row">
                     <div class ="col-lg-12 d-flex justify-content-between" >
                    <span>Address ${index}</span>
                       <span style="cursor:pointer;" class="delete-address delete-address-icon text-red fs-6 float-end " data-index="${index}">
                                <i class="fas fa-trash-alt text-danger"></i>
                        </span>
               </div>
                </div>



                <div class="row mt-3">
                    <div class="col-sm-3">
                        <p class="mt-2">Address</p>
                    </div>
                    <div class="col-sm-9 change-password-input">
                        <input type="text" id="search_by_map_${index}" data-index="${index}" name="full_address"
                            placeholder="Address Search Here..." class="search_by_map form-control">
                    </div>
                </div>

                


              


                <div class="row">
                    <div class="col-sm-3">
                        <p class="mt-2">Country</p>
                    </div>
                    <div class="col-sm-9 change-password-input">
                        <input type="text" name="country" data-index="${index}" id="country_${index}" placeholder="Country Here..."
                            class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mt-2">State</p>
                    </div>
                    <div class="col-sm-9 change-password-input">
                        <input type="text" name="state" data-index="${index}" id="state_${index}" placeholder="State Here..."
                            class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mt-2">City</p>
                    </div>
                    <div class="col-sm-9 change-password-input">
                        <input type="text" name="city" data-index="${index}" id="city_${index}" placeholder="City Here..."
                            class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mt-2">Zip Code</p>
                    </div>
                    <div class="col-sm-9 change-password-input">
                        <input type="text" name="zipcode" data-index="${index}" id="zipcode_${index}"
                            placeholder="Zipcode Here..." class="form-control">
                    </div>
                </div>
                <input type="submit" value="Submit" class="btn btn-success address-btn btn-sm">
            </form>
        </div>
    `;
                document.getElementById('office-addresses').insertAdjacentHTML('beforeend', newForm);
                initMap(); 

                    $(document).on('click', '.delete-address', function() {
                    let index = $(this).data('index');
                    $(`.address-form_${index}`).remove();
                });
            });       

                    $(document).ready(function() {
                    $(document).on('submit', 'form', function(e) {
                        e.preventDefault(); 
                        var form = $(this);
                        let formData = new FormData(this); 
                        formData.append('user_id', '{{ $user->id }}');
                        var csrfToken = $('meta[name="csrf-token"]').attr('content');
                        formData.append('_token', csrfToken);

                        $.ajax({
                                url: "{{route('user.address')}}", 
                                type: "POST",
                                data: formData,
                                processData: false,
                                contentType: false,
                                success: function(response) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'User Address Successfully Stored',
                                        text: response.message,
                                        confirmButtonText: 'OK'
                                    });
                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                var response = jqXHR.responseJSON;
                                var errorMessage = response.message ||
                                    'Something went wrong. Please try again.';

                                if (response.errors) {
                                    $.each(response.errors, function(key, value) {
                                        errorMessage += value + '<br>';
                                    });
                                }

                                Swal.fire({
                                    icon: 'error',
                                    title: 'Update Failed',
                                    html: errorMessage,
                                    confirmButtonText: 'OK'
                                });
                            }

                        });
                    });
                 
         });
        </script>





<script>
    $(document).ready(function() {
        $('#address-form').on('submit', function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            formData.append('user_id' , '{{Auth::user()->id}}');
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            formData.append('_token', csrfToken);
            $.ajax({
                url: "{{ route('user.address')}}",
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'User Address Successfully Stored',
                        text: response.message,
                        confirmButtonText: 'OK'
                    });
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    var response = jqXHR.responseJSON;
                    var errorMessage = response.message ||
                        'Something went wrong. Please try again.';

                    if (response.errors) {
                        $.each(response.errors, function(key, value) {
                            errorMessage += value + '<br>';
                        });
                    }

                    Swal.fire({
                        icon: 'error',
                        title: 'Update Failed',
                        html: errorMessage,
                        confirmButtonText: 'OK'
                    });
                }

            });
        });
    });
</script>
    </section>
@endsection
