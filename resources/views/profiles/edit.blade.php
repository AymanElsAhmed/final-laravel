@extends('layouts.app')

@section('content')
    {{-- // TODO --}}
    {{-- <div style="margin: auto; width: 50%; box-shadow: 1px 2px 3px 4px rgba(104, 145, 184, 0.4); padding: 10px;"> --}}

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="m-auto py-2 w-md-50 shadow-lg rounded-3">

                    <h1 class="h1 text-center text-primary">{{ __('تعديل') }}</h1>

                    {{-- <div class="row g-3"> --}}

                        <form method="POST" action="{{ route('profiles.update', $user->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="col-12">
                                <label for="city" class="form-label text-primary">{{ __('المدينة') }}</label>
                                <input type="text" class="form-control" id="city" name="city"
                                    value="{{ $user->city ? $user->city : old('city') }}">
                                @error('city')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label text-primary">{{ __('البريد الإلكتروني') }}</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ $user->email ? $user->email : old('email') }}">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="col-12">
                                <label for="phone_number" class="form-label text-primary">{{ __('رقم المحمول') }}</label>
                                <input type="text" class="form-control" id="phone_number"
                                    placeholder="الكمية الإفتراضيه ب 1" name="phone_number"
                                    value="{{ $user->phone_number ? $user->phone_number : old('phone_number') }}">
                                @error('phone_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="col-12">
                                <label for="userPic" class="form-label text-primary">{{ __('الصورة الشخصية') }}</label>

                                <input class="form-control" type="file" id="userPic" multiple name="profile_pic"
                                    value="{{ $user->profile_pic ? asset('profilepic') . '/' . $user->profile_pic : old('profile_pic') }}">

                                <img src="{{ asset('profilepic') . '/' . $user->profile_pic }}" alt=""
                                    class="img-fluid">

                            </div>

                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary">{{ __('حفظ') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
