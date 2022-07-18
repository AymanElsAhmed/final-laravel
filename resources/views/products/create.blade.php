@extends('layouts.app')

@section('content')

    <div class="container">
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

    </div>

@endsection