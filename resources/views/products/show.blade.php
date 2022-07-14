@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('products.index') }}">{{ __('Back') }}</a>
        
        <a href="{{ route('products.edit', $product) }}">{{ __('Edit') }}</a>        

        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit">Delete</button>
        </form>

        <h1>{{ $product->name }}</h1>
        <p>
            <strong>{{ __('Price') }}:</strong>
            {{ $product->price }}
        </p>
        <p>
            <strong>{{ __('Weight') }}:</strong>
            {{ $product->weight }}
        </p>
        <p>
            <strong>{{ __('Quantity') }}:</strong>
            {{ $product->quantity }}
        </p>
        <p>
            <strong>{{ __('User') }}:</strong>
            {{ $product->user->name }}
        </p>
    </div>
@endsection
