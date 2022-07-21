@extends('layouts.app')

@section('content')
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">{{ __('Register') }}</p>

                                    <form class="mx-1 mx-md-4" method="POST" action="{{ route('register') }}"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>

                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="name">{{ __('Name') }}</label>

                                                <input type="text" id="name" name="name"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    value="{{ old('name') }}">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>

                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="email">{{ __('Your Email') }}</label>

                                                <input type="email" id="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    value="{{ old('email') }}">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="password">{{ __('Password') }}</label>
                                                <input type="password" id="password" name="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    autocomplete="new-password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label"
                                                    for="password_confirmation">{{ __('Confirm Password') }}
                                                </label>
                                                <input type="password" name="password_confirmation"
                                                    id="password_confirmation"
                                                    class="form-control @error('password_confirmation') is-invalid @enderror" />
                                                @error('password_confirmation')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label"
                                                    for="phone_number">{{ __('Phone Number') }}</label>
                                                <input type="number" id="phone_number" name="phone_number"
                                                    class="form-control
                                                @error('phone_number') is-invalid @enderror"
                                                    value="{{ old('phone_number') }}">
                                                @error('phone_number')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label"
                                                    for="profile_pic">{{ __('Upload Profile Picture') }}
                                                </label>
                                                <input class="form-control @error('profile_pic') is-invalid @enderror"
                                                    type="file" name="profile_pic" id="profile_pic" />
                                                @error('profile_pic')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <div class="small text-muted mt-2">
                                                    {{ __('Upload your profile picture. Max file size 50 MB') }}
                                                </div>
                                            </div>
                                        </div>




                                        <h6 class="mb-0 me-4">{{ __('Gender') }}</h6>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input @error('gender') is-invalid @enderror"
                                                    type="radio" name="gender" id="femaleGender" value="female" />
                                                <label class="form-check-label"
                                                    for="femaleGender">{{ __('Female') }}</label>
                                            </div>
                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input @error('gender') is-invalid @enderror"
                                                    type="radio" name="gender" id="maleGender" value="male" />
                                                <label class="form-check-label"
                                                    for="maleGender">{{ __('Male') }}</label>
                                            </div>
                                            @error('gender')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>



                                        <div class="row">
                                            <div class="col-md-4 mb-4">
                                                <select class="form-select" name="city">
                                                    <option disabled selected>City</option>
                                                    <option value="cairo">Cairo</option>
                                                    <option value="minya">Minya</option>
                                                    <option value="alex">Alex</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label"
                                                    for="national_id_pic">{{ __('Upload National ID') }}
                                                </label>
                                                <input
                                                    class="form-control @error('national_id_first_pic') is-invalid @enderror"
                                                    type="file" name="national_id_first_pic"
                                                    id="national_id_first_pic" />
                                                @error('national_id_first_pic')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                                <div class="form-outline flex-fill mb-0">
                                                    <input
                                                        class="form-control @error('national_id_second_pic') is-invalid @enderror"
                                                        type="file" name="national_id_second_pic"
                                                        id="national_id_second_pic" />
                                                    @error('national_id_second_pic')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <div class="small text-muted mt-2">
                                                        {{ __('Upload your National ID picture. Max file size 50 MB') }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <h6 class="mb-0 me-4">{{ __('Gender') }}</h6>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input @error('role') is-invalid @enderror"
                                                    type="radio" name="role" id="femaleGender" value="vendor" />
                                                <label class="form-check-label"
                                                    for="femaleGender">{{ __('vendor') }}</label>
                                            </div>
                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input @error('gender') is-invalid @enderror"
                                                    type="radio" name="role" id="maleGender" value="delivery" />
                                                <label class="form-check-label"
                                                    for="maleGender">{{ __('delivery') }}</label>
                                            </div>
                                            @error('role')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>




                                        {{-- <div class="form-check d-flex justify-content-center mb-5">
                                            <input class="form-check-input me-2" type="checkbox" value=""
                                                id="form2Example3c" />
                                            <label class="form-check-label" for="form2Example3">
                                                I agree all statements in <a href="#!">Terms of service</a>
                                            </label>
                                        </div> --}}

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button class="btn btn-primary btn-lg">{{ __('Continue') }}</button>
                                        </div>
                                    </form>
                                </div>



                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                        class="img-fluid" alt="Sample image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
