@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('posts.update', $post->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">{{ __('Title') }}</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                            id="title" name="title" value="{{ old('title', $post->title) }}">
                        @error('title')
                            <div class="aler alert-danger p-2 mt-1 rounded-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">{{ __('Description') }}</label>
                        <input type="text" name="description"
                            class="form-control @error('description') is-invalid @enderror" id="description"
                            value="{{ old('description', $post->description) }}">
                        @error('description')
                            <div class="aler alert-danger p-2 mt-1 rounded-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="from" class="form-label">{{ __('From') }}</label>
                        <input type="text" name="from" class="form-control @error('from') is-invalid @enderror"
                            id="from" value="{{ old('from', $post->from) }}">
                        @error('from')
                            <div class="aler alert-danger p-2 mt-1 rounded-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="to" class="form-label">{{ __('To') }}</label>
                        <input type="text" name="to" class="form-control @error('to') is-invalid @enderror"
                            id="to" value="{{ old('to', $post->to) }}">
                        @error('to')
                            <div class="aler alert-danger p-2 mt-1 rounded-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="deliver_price" class="form-label">{{ __('Deliver Price') }}</label>
                        <input type="text" name="deliver_price"
                            class="form-control @error('deliver_price') is-invalid @enderror" id="deliver_price"
                            value="{{ old('deliver_price', $post->deliver_price) }}">
                        @error('deliver_price')
                            <div class="aler alert-danger p-2 mt-1 rounded-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="product_id" class="form-label">{{ __('Product') }}</label>
                        <select name="product_id" id="product_id">
                            {{-- <option value="0">{{ __('Choose Product') }}</option> --}}
                            @foreach ($products as $product)
                                <option value="{{ old('id', $product->id) }}"
                                    {{ $product->id == $post->product_id ? 'selected' : '' }}>{{ $product->name }}
                                </option>
                            @endforeach
                        </select>
                        {{-- @error('product_id')
                            <div class="aler alert-danger p-2 mt-1 rounded-1">{{ $message }}</div>
                        @enderror --}}
                    </div>

                    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
