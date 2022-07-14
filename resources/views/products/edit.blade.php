@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit {{ $product->name }}</h1>

        <form action="{{ route('products.show', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <input type="text" name="name" placeholder="{{ __('Name') }}"
                    value="{{ $product->name ? $product->name : old('name') }}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <input type="text" name="price" placeholder="{{ __('Price') }}"
                    value="{{ $product->price ? $product->price : old('price') }}">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <input type="text" name="weight" placeholder="{{ __('weight') }}" value="{{ $product->weight ? $product->weight : old('weight') }}">
                @error('weight')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <input type="text" name="quantity" placeholder="{{ __('Quantity') }}" value="{{ $product->quantity ? $product->quantity : old('quantity') }}">
                @error('quantity')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <button type="submit">Update</button>
        </form>

    </div>
@endsection
