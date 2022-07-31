@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="m-auto py-2 w-md-50 shadow-lg rounded-3">


                    <div class="container py-5">
                        <h1 class="text-center text-primary">{{ __('تعديل عميل') }}</h1>

                        <form class="row g-3" method="POST" action="{{ route('clients.update', $clients->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="col-12">
                                <label for="name" class="form-label text-primary">{{ __('الاسم') }}</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" placeholder="برجاء ادخال الاسم"
                                    value="{{ $clients->name }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-12">
                                <label for="adress" class="form-label text-primary">{{ __('العنوان') }}</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="adress" name="adress" placeholder="برجاء ادخال العنوان"
                                    value="{{ $clients->adress }}">
                                @error('adress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-12">
                                <label for="phone_number" class="form-label text-primary">{{ __('المحمول') }}</label>
                                <input type="text" class="form-control @error('phone_number') is-invalid @enderror"
                                    id="phone_number" name="phone_number" placeholder="برجاء ادخال رقم المحمول"
                                    value="{{ $clients->phone_number }}">
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-12 text-end">
                                <a href="{{ route('clients.index') }}" class="btn btn-danger">{{ __('إلغاء') }}</a>
                                <button type="submit" class="btn btn-primary">{{ __('حفظ') }}</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
