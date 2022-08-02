@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="m-auto py-2 w-md-50 shadow-lg rounded-3">

                    <div class="container py-5">
                        <h1 class="text-center text-primary">{{ __('إضافة منتج') }}</h1>


                        <div class="container mb-5">
                            <form class="row g-3" method="POST" action="{{ route('products.store') }}"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="col-12">
                                    <label for="name"
                                        class="form-label  text-primary @error('name') is-invalid @enderror">{{ __('الاسم') }}</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="price"
                                        class="form-label text-primary @error('price') is-invalid @enderror">{{ __('السعر') }}</label>
                                    <input type="text" class="form-control" id="price" name="price">
                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="weight"
                                        class="form-label text-primary @error('weight') is-invalid @enderror">{{ __('الوزن') }}</label>
                                    <input type="text" class="form-control" id="weight" placeholder="الوزن اختياري"
                                        name="weight">
                                    @error('weight')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="quantity"
                                        class="form-label text-primary @error('quantity') is-invalid @enderror">{{ __('الكمية') }}</label>
                                    <input type="text" class="form-control" id="quantity"
                                        placeholder="الكمية الإفتراضيه ب 1" name="quantity">
                                    @error('quantity')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <lab el for="category" class="form-label text-primary @error('category') is-invalid @enderror">
                                        {{ __('اختر تصنيفا') }}</lab>
                                    <select id="category" class="form-select overflow-hidden" name="category_id">
                                        <option value="0" name="category_id">{{ __('اختر تصنيفا') }}</option>

                                        @foreach ($cats as $cat)
                                            <option value="{{ $cat->id }}" name="category_id">{{ $cat->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label for="productPic"
                                        class="form-label text-primary @error('product_pic') is-invalid @enderror">{{ __('أضف صور المنتج') }}</label>
                                    <input class="form-control" type="file" id="productPic" multiple name="product_pic">
                                    @error('product_pic')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary">{{ __('اضافة') }}</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
