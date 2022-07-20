@extends('layouts.app')

@section('content')
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                value="{{ $data->title }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description</label>
            <input type="text" name="description" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" value="{{ $data->description }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">From</label>
            <input type="text" name="from" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                value="{{ $data->from }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">To</label>
            <input type="text" name="to" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                value="{{ $data->to }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Deliver Price</label>
            <input type="text" name="deliver_price" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" value="{{ $data->deliver_price }}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Product Id</label>
            <input type="text" name="product_id" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" value="{{ $data->product_id }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection