@extends('layouts.app')

@section('content')


<h1 class="h1 text-center"> إضافة منتج</h1>

<div class="container">
<form class="row g-3" dir="rtl" method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data" >
  @csrf  
  <div class="col-12">
      <label for="name" class="form-label">الاسم</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="col-12">
      <label for="price" class="form-label">السعر</label>
      <input type="number" class="form-control" id="price" name="price">
    </div>
    <div class="col-12">
      <label for="weight" class="form-label">الوزن</label>
      <input type="number" class="form-control" id="weight" placeholder="الوزن اختياري" name="weight">
    </div>
    <div class="col-12">
      <label for="quantity" class="form-label">الكمية</label>
      <input type="number" class="form-control" id="quantity" placeholder="الكمية الإفتراضيه ب 1" name="quantity">
    </div>

    <div class="col-12">
      <label for="category" class="form-label">أضف تصنيف</label>
      <select id="category" class="form-select" name="category_id">
        @foreach ($cats as $cat)
        
        <option value="{{$cat->id}}" name="category_id">{{$cat->name}}</option>
        
        @endforeach
      </select>
    </div>

    <div class="col-12">
        <label for="productPic" class="form-label">أضف صور المنتج</label>
        <input class="form-control" type="file" id="productPic" multiple name="product_pic">
      </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">أضف منتج</button>
    </div>
  </form>
</div>

    {{-- <div class="container">
        <h1>create Product For {{$user->name}}</h1>

        <form action="{{ route('products.store')}}" method="POST">
            @csrf

            <div>
                <input type="text" name="name" placeholder="product name"
                    value="">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <input type="text" name="price" placeholder="product price"
                    value="">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <input type="text" name="weight" placeholder="product weight if exist" value="{{old('weight') }}">
                @error('weight')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <input type="text" name="quantity" placeholder="product quantity " value="{{ old('quantity') }}">
                @error('quantity')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit">save</button>
        </form>

    </div> --}}

@endsection