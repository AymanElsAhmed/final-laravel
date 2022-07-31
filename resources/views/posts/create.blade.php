@extends('layouts.app')

@section('content')
    <div style="margin: auto;
width: 50%;
box-shadow: 1px 2px 3px 4px rgba(104, 145, 184, 0.4);
padding: 10px;">

        <p class="h1 text-center text-primary">
            {{ __('إضافة منشور') }}
        </p>

        <div class="container">
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">{{ __('العنوان') }}</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                        id="title" value="{{ old('title') }}">
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="description" class="form-label">{{ __('الوصف') }}</label>
                    <textarea type="text" name="description" class="form-control @error('name') is-invalid @enderror" id="description"
                        value="{{ old('description') }}"></textarea>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="from" class="form-label">{{ __('من') }}</label>
                    <input type="text" name="from" class="form-control  @error('name') is-invalid @enderror"
                        id="from" value="{{ old('from') }}">
                    @error('from')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="mb-3">
                    <label for="to" class="form-label">{{ __('إلى') }}</label>
                    <input type="text" name="to" class="form-control  @error('name') is-invalid @enderror"
                        id="to" value="{{ old('to') }}">
                    @error('to')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="deliver_price" class="form-label">{{ __('سعر التوصيل') }}</label>
                    <input type="number" name="deliver_price" class="form-control  @error('name') is-invalid @enderror"
                        id="deliver_price" value="{{ old('deliver_price') }}" min="0">
                    @error('deliver_price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    {{-- <label for="product_id" class="form-label">{{ __('اختر المنتج') }}</label>
                    <select class="form-select" name="product_id" id="product_id" value="{{ old('product_id') }}">
                        @error('product_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <option value="0" hidden>{{ __('المنتجات') }}</option>
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select> --}}

                    <label for="product_id" class="form-label">{{ __('اختر المنتج') }}</label>
                    <input class="form-control" list="productList" id="product_id"
                        placeholder="{{ __('ابحث عن المنتج') }}">
                    <datalist id="productList">
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </datalist>
                </div>


                <div class="mb-3">
                    {{-- <label for="client_id" class="form-label">{{ __('اختر الزبون') }}</label>
                    <select class="form-select" name="client_id" id="client_id" value="{{ old('client_id') }}">
                        @error('client_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <option value="0" hidden>{{ __('الزبائن') }}</option>
                        @foreach ($clients as $client)
                            <option value="{{ $client->id }}">{{ $client->name }}
                            </option>
                        @endforeach
                    </select> --}}

                    <label for="client_id" class="form-label">{{ __('اختر الزبون') }}</label>
                    <input class="form-control" list="clientsList" id="client_id" placeholder="{{ __('ابحث عن الزبون') }}">
                    <datalist id="clientsList">
                        @foreach ($clients as $client)
                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                        @endforeach
                    </datalist>
                </div>

                <div class="d-flex justify-content-between my-5">
                    <a href="{{ route('clients.index') }}" class="btn btn-outline-secondary">{{ __('رجوع') }}</a>
                    
                    <div class="text-end">
                        <a href="{{ route('clients.create') }}" class="btn btn-secondary">{{ __('زبون جديد') }}</a>
                        <button type="submit" class="btn btn-primary">{{ __('منشور جديد') }}</button>
                    </div>
                </div>
            </form>
        </div>
    @endsection
</div>
