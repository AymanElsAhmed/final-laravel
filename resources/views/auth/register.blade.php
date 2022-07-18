@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('role') is-invalid @enderror" type="radio" name="role" id="flexRadioDefault1" value="delivery">
                            @error('role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            <label class="form-check-label" for="flexRadioDefault1">
                                delivery
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input @error('role') is-invalid @enderror" type="radio" name="role" id="flexRadioDefault2"  value="vendor">
                            @error('role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            <label class="form-check-label" for="flexRadioDefault2">
                                vendor
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="flexRadioDefault1" value="male">
                            @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            <label class="form-check-label" for="flexRadioDefault1">
                                male
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input @error('role') is-invalid @enderror" type="radio" name="gender" id="flexRadioDefault2"  value="female">
                            @error('role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            <label class="form-check-label" for="flexRadioDefault2">
                                female
                            </label>
                          </div>

                          <div class="mb-3">
                            <label class="form-label" for="inputImage">profile_pic:</label>
                            <input
                                type="file"
                                name="profile_pic"
                                id="inputImage"
                                class="form-control @error('profile_pic') is-invalid @enderror">
               
                            @error('profile_pic')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="inputImage">national_id_first_pic:</label>
                            <input
                                type="file"
                                name="national_id_first_pic"
                                id="inputImage"
                                class="form-control @error('national_id_first_pic') is-invalid @enderror">
               
                            @error('national_id_first_pic')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="inputImage">national_id_second_pic:</label>
                            <input
                                type="file"
                                name="national_id_second_pic"
                                id="inputImage"
                                class="form-control @error('national_id_second_pic') is-invalid @enderror">
               
                            @error('national_id_second_pic')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                       

                            <div class="col-md-6">
                            <label class="form-label" for="inputImage">city:</label>

                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required >

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                            <label class="form-label" for="inputImage">phone_number:</label>

                                <input id="phone_number" type="number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required >

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
