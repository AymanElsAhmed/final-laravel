@extends('layouts.app')

@section('content')
<div style="margin: auto;
width: 50%;
box-shadow: 1px 2px 3px 4px rgba(104, 145, 184, 0.4);
padding: 10px;">

<p class="h1 text-center text-primary">إضافة بوست
</p>
    <div class="container">
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{ old('title') }}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description</label>
            <textarea type="text" name="description" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp"  value="{{ old('description') }}"></textarea>

            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">From</label>
            <input type="text" name="from" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{ old('from') }}">
            @error('from')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">To</label>
            <input type="text" name="to" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            value="{{ old('to') }}">
            @error('to')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Deliver Price</label>
            <input type="number" name="deliver_price" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp"
                value="{{ old('deliver_price') }}" min="0">
            @error('deliver_price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Product name</label>
            <select name="product_id" id="product_id"
            value="{{ old('product_id') }}">
            @error('product_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
                {{-- <option value="0">{{ __('Choose Product') }}</option> --}}
                @foreach ($products as $product)
                    <option value="{{$product->id}}"
                       >{{ $product->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">client name</label>
            <select name="client_id" id="client_id"
            value="{{ old('client_id') }}">
            @error('client_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
                {{-- <option value="0">{{ __('Choose Product') }}</option> --}}
                @foreach ($clients as $client)
                    <option value="{{$client->id}}"
                       >{{ $client->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <a href="{{route("clients.create")}}" class="btn btn-primary">أضف عميل جديد </a>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
</div>
