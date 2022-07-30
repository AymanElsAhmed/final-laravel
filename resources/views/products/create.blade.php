@extends('layouts.app')

@section('content')

<div style="margin: auto;
width: 50%;
box-shadow: 1px 2px 3px 4px rgba(104, 145, 184, 0.4);
padding: 10px;">
<p class="h1 text-center text-primary"> إضافة منتج</p> 

<div class="container" style="margin-bottom: 30px;">
<form class="row g-3"  method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data" >
  @csrf  
  <div class="col-12">
      <label for="name" class="form-label text-primary">الاسم</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="col-12">
      <label for="price" class="form-label text-primary">السعر</label>
      <input type="number" class="form-control" id="price" name="price">
    </div>
    <div class="col-12">
      <label for="weight" class="form-label text-primary">الوزن</label>
      <input type="number" class="form-control" id="weight" placeholder="الوزن اختياري" name="weight">
    </div>
    <div class="col-12">
      <label for="quantity" class="form-label text-primary">الكمية</label>
      <input type="number" class="form-control" id="quantity" placeholder="الكمية الإفتراضيه ب 1" name="quantity">
    </div>

    <div class="col-12">
      <label for="category" class="form-label text-primary">أضف تصنيف</label>
      <select id="category" class="form-select" name="category_id">
        @foreach ($cats as $cat)
        
        <option value="{{$cat->id}}" name="category_id">{{$cat->name}}</option>
        
        @endforeach
      </select>
    </div>

    <div class="col-12">
        <label for="productPic" class="form-label text-primary">أضف صور المنتج</label>
        <input class="form-control" type="file" id="productPic" multiple name="product_pic">
      </div>
    <div class="col-12 text-center">
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
 </div>
@endsection