@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="m-auto py-2 w-md-50 shadow-lg rounded-3">


                    <div class="container py-5">
                        <h1 class="text-center text-primary">{{ __('تعديل المنتج') }}</h1>

                        <div class="container">
                            <form class="row g-3" method="POST" action="{{ route('products.show', $product->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="col-12">
                                    <label for="name" class="form-label text-primary">الاسم</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name"
                                        value="{{ $product->name ? $product->name : old('name') }}">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="price" class="form-label text-primary">السعر</label>
                                    <input type="text" class="form-control @error('price') is-invalid @enderror"
                                        id="price" name="price"
                                        value="{{ $product->price ? $product->price : old('price') }}">
                                    @error('price')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="col-12">
                                    <label for="weight" class="form-label text-primary">الوزن</label>
                                    <input type="text" class="form-control @error('weight') is-invalid @enderror"
                                        id="weight" placeholder="الوزن اختياري" name="weight"
                                        value="{{ $product->weight ? $product->weight : old('weight') }}">
                                    @error('weight')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="col-12">
                                    <label for="quantity" class="form-label text-primary">الكمية</label>
                                    <input type="text" class="form-control @error('quantity') is-invalid @enderror"
                                        id="quantity" placeholder="الكمية الإفتراضيه ب 1" name="quantity"
                                        value="{{ $product->quantity ? $product->quantity : old('quantity') }}">
                                    @error('quantity')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="col-12">
                                    <label for="category" class="form-label text-primary">أضف تصنيف</label>
                                    <select id="category" class="form-select @error('category_id') is-invalid @enderror"
                                        name="category_id">
                                        @foreach ($cats as $cat)
                                            <option value="{{ $cat->id }}" name="category_id">{{ $cat->name }}
                                            </option>
                                        @endforeach

                                    </select>
                                    @error('category_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="productPic" class="form-label text-primary">أضف صور المنتج</label>
                                    <input class="form-control @error('product_pic') is-invalid @enderror" type="file"
                                        id="productPic" multiple name="product_pic"
                                        value="{{ $product->product__pic ? asset('productpic') . '/' . $product->product_pic : old('product_pic') }}">
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary">{{ __('تعديل') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
