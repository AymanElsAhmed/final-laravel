@extends('layouts.app')


@section('content')

<div class="container ">
    @if ($orders->count() == 0)
    <h3>{{ __('No Orders Yet') }}</h3>
@else
<div class="row" dir="rtl">
<button class="btn btn-primary col-2  h-25 me-3" > add product</button>
</div>
@foreach ($orders as $order)

<div class="card mt-3 p-2 col-md-4 col-lg-3 col-lg-xs-12" style="width: 18rem; float:right" dir="rtl">
  <img src="{{ asset('productpic'). '/'.$order->post->product->product_pic }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title ">{{$order->post->product->name }}</h5>
    <p class="card-text m-auto">{{$order->post->title}}</p>
    <p class="card-text">{{$order->post->description}}</p>
    <a href="{{route("orders.show",$order->id)}}" class="btn btn-primary">عرض تفاصيل الطلبية</a>
  </div>
</div>
@endforeach
<div class="row mb-3 mt-3 g-5 "  dir="rtl">

    

@endif

@endsection