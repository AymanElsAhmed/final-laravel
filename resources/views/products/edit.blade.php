@extends('layouts.app')

@section('content')
<div style="margin: auto;
width: 50%;
box-shadow: 1px 2px 3px 4px rgba(104, 145, 184, 0.4);
padding: 10px;">
<h1 class="h1 text-center text-primary"> تعديل</h1>

<div class="container">
<form class="row g-3"  method="POST" action="{{ route('products.show', $product->id) }}" enctype="multipart/form-data" >
  @csrf  
  @method('PUT')
  <div class="col-12">
      <label for="name" class="form-label text-primary">الاسم</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ $product->name ? $product->name : old('name') }}">
      @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="col-12">
      <label for="price" class="form-label text-primary">السعر</label>
      <input type="number" class="form-control" id="price" name="price" value="{{ $product->price ? $product->price : old('price') }}">
      @error('price')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
  </div>

   
    <div class="col-12">
      <label for="weight" class="form-label text-primary">الوزن</label>
      <input type="number" class="form-control" id="weight" placeholder="الوزن اختياري" name="weight" value="{{ $product->weight ? $product->weight : old('weight') }}">
      @error('weight')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
  </div>

    
    <div class="col-12">
      <label for="quantity" class="form-label text-primary">الكمية</label>
      <input type="number" class="form-control" id="quantity" placeholder="الكمية الإفتراضيه ب 1" name="quantity" value="{{ $product->quantity ? $product->quantity : old('quantity') }}">
      @error('quantity')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
  </div>
    

    <div class="col-12">
      <label for="category" class="form-label text-primary">أضف تصنيف</label>
      <select id="category" class="form-select" name="category_id">
        @foreach ($cats as $cat)
        
        <option value="{{$cat->id}}" name="category_id">{{$cat->name}}</option>
        
        @endforeach

      </select>
      @error('category_id')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="col-12">
        <label for="productPic" class="form-label text-primary">أضف صور المنتج</label>
        <input class="form-control" type="file" id="productPic" multiple name="product_pic" value="{{ $product->product__pic ? asset('productpic'). '/'. $product->product_pic  : old('product_pic') }}">
      </div>
    <div class="col-12 text-center">
      <button type="submit" class="btn btn-primary">أضف منتج</button>
    </div>
  </form>
</div>


{{-- 
    <div class="container">
        <h1>Edit {{ $product->name }}</h1>

        <form action="{{ route('products.show', $product->id) }}" method="POST">
            @csrf
            @method('PUT')





            <div>
                <input type="text" name="quantity" placeholder="{{ __('Quantity') }}" 


            <button type="submit">Update</button>
        </form>

    </div> --}}
@endsection
