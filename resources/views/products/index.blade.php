@extends('layouts.app')

@section('content')
<div class="container">
    @if ($products->count() == 0)
    <h3>{{ __('No Products Yet') }}</h3>
@else

<form action="{{ route('products.index') }}" method="GET">
    
    <div class="mb-3 text-center" dir="rtl">
        <label for="search" class="form-label h2 text-primary">البحث</label>
        <input type="text" class="form-control" id="search" aria-describedby="search"  name="search">
        <div id="search" class="form-text">ابحث من خلال العنوان </div>
    </div>
    
</form>
    
<div class="row mb-3 mt-3 g-5 " dir="rtl">

    @foreach ($products as $product)

    <div class="card col-4">

    <img src="{{ asset('productpic'). '/'. $product->product_pic }}" class="card-img-top" alt="...">

    <div class="card-body">

    <h5 class="card-title text-center text-primary">{{$product->name}}</h5>

   

    <p class="card-text text-center">السعر: {{$product->price}}</p>

    <p class="card-text text-center  " >الكمية: {{$product->quantity}}</p>

    <div class="text-center">

        
    <a href="{{route("products.show", $product->id)}}" class="btn btn-primary">عرض </a>

    <a href="{{route("products.edit", $product->id)}}" class="btn btn-warning">تعديل </a>
        
    <form action="{{ route("products.destroy", $product->id )}}" method="post">
    @csrf
    @method('DELETE')

          <button type="submit" class="btn btn-danger"> حذف  </button>
    
    </form>
   

    </div>

     </div>

</div>
  @endforeach
    </div>
    @endif
</div>

@endsection
