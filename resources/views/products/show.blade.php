@extends('layouts.app')

@section('content')
    <div class="container">


        <div class="card mb-3" dir="rtl">
            <img src="{{ asset('productpic'). '/'. $product->product_pic }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$product->name}} </h5>
              <p class="card-text ">السعر: {{$product->price}}</p>

              <p class="card-text   " >الكمية: {{$product->quantity}}</p>

              {{-- <p class="card-text"><small class="text-muted"{{$product->created_at}}></small></p> --}}
            </div>
          </div>
          <div class="row" dir="rtl">
          <a href="{{route("products.show", $product->id)}}" class="btn btn-primary col-3">عرض </a>

          <a href="{{route("products.edit", $product->id)}}" class="btn btn-warning col-3">تعديل </a>
              
          <form action="{{ route("products.destroy", $product->id )}}" method="post" class=" col-3">
          @csrf
          @method('DELETE')
      
            <button type="submit" class="btn btn-danger"> حذف  </button>
          
          </form>
        </div>
 
    </div>
@endsection
