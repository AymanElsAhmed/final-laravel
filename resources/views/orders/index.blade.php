@extends('layouts.app')


@section('content')

<div class="container">
    @if ($orders->count() == 0)
    <h3>{{ __('No Orders Yet') }}</h3>
@else


<div class="row" dir="rtl">
<button class="btn btn-primary col-2 h-25"> add product</button>
</div>
    

<div class="row mb-3 mt-3 g-5 "  dir="rtl">

    

    @foreach ($orders as $order)
    {{-- {{dd($order->post->title)}} --}}

    {{-- <div class="card col-4 d-flex justify-content-between" style="margin-left:2px;"  > --}}
    {{-- <div class="col-4"  >
    <div class="card"  > --}}

    {{-- <img src="{{ asset('productpic'). '/'. $product->product_pic }}" class="card-img-top" alt="..."> --}}

    <div class="card-body">

    <h5 class="card-title text-center text-primary">{{$order->post->title}}</h5>
    <a href="{{route("orders.show",$order->id)}}" class="btn btn-primary">sda</a>

@endforeach
@endif

@endsection