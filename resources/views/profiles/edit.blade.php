@extends('layouts.app')

@section('content')
    <div style="margin: auto; width: 50%; box-shadow: 1px 2px 3px 4px rgba(104, 145, 184, 0.4); padding: 10px;">
        <h1 class="h1 text-center text-primary">{{ __('Edit') }}</h1>

        <div class="container">
            <form class="row g-3" method="POST" 
            action="{{ route('profiles.show') }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- @dd($user) --}}

                <div class="col-12">
                    <label for="name" class="form-label text-primary">{{ __('Name') }}</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ $user->name ? $user->name : old('name') }}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12">
                    <label for="city" class="form-label text-primary">{{ __('City') }}</label>
                    <input type="text" class="form-control" id="city" name="city"
                        value="{{ $user->city ? $user->city : old('city') }}">
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12">
                    <label for="email" class="form-label text-primary">{{ __('Email') }}</label>
                    <input type="email" class="form-control" id="email" name="email"
                        value="{{ $user->email ? $user->email : old('email') }}">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="col-12">
                    <label for="phone_number" class="form-label text-primary">{{ __('Phone') }}</label>
                    <input type="number" class="form-control" id="phone_number" placeholder="الكمية الإفتراضيه ب 1"
                        name="phone_number" value="{{ $user->phone_number ? $user->phone_number : old('phone_number') }}">
                    @error('phone_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="col-12">
                    <label for="userPic" class="form-label text-primary">{{ __('Photo') }}</label>
                    <input class="form-control" type="file" id="userPic" multiple name="profile_pic"
                        value="{{ $user->profile_pic ? asset('profilepic') . '/' . $user->profile_pic : old('profile_pic') }}">
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                </div>
            </form>
        </div>
    @endsection
