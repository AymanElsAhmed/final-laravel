@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                >
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description</label>
            <textarea type="text" name="description" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" ></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">From</label>
            <input type="text" name="from" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                >
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">To</label>
            <input type="text" name="to" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                >
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Deliver Price</label>
            <input type="number" name="deliver_price" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" >
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Product name</label>
            <select name="product_id" id="product_id">
                {{-- <option value="0">{{ __('Choose Product') }}</option> --}}
                @foreach ($products as $product)
                    <option value="{{$product->id}}"
                       >{{ $product->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
