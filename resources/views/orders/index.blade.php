@extends('layouts.app')


@section('content')

    <div class="container ">
        @if ($orders->count() == 0)
            <h3>{{ __('You have no Orders yet') }}</h3>
            <a class="btn btn-primary" href="{{ route('orders.create') }}">{{ __('Add Order') }}</a>
        @else
            <div class="row">
                <button class="btn btn-primary col-2  h-25 me-3">{{ __('Add Product') }}</button>
            </div>
            @foreach ($orders as $order)
                <div class="card mt-3 p-2 col-md-4 col-lg-3 col-lg-xs-12">
                    <img src="{{ asset('productpic') . '/' . $order->post->product->product_pic }}" class="card-img-top"
                        alt="">
                    <div class="card-body">
                        <h5 class="card-title ">{{ $order->post->product->name }}</h5>
                        <p class="card-text m-auto">{{ $order->post->title }}</p>
                        <p class="card-text">{{ $order->post->description }}</p>
                        <a href="{{ route('orders.show', $order->id) }}"
                            class="btn btn-primary">{{ __('Order Detailes') }}</a>
                    </div>
                </div>
            @endforeach
            <div class="row mb-3 mt-3 g-5 "></div>
        @endif

    @endsection
