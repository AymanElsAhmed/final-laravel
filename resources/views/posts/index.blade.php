@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($posts->count() == 0)
            <h3>{{ __('لا يوجد منشورات') }}</h3>
        @else
            <div class="row">
                <div class="col-sm-8 col-md-9">
                    <form class="d-flex" role="search" type="get" action="{{ route('posts.index') }}">
                        @csrf

                        <input class="form-control me-2" name="search" type="search" aria-label="Search">

                        <button class="btn btn-primary" type="submit">{{ __('ابحث') }}</button>
                    </form>
                </div>

                <div class="col-sm-3 col-md-2 offset-md-1">
                    <a href="{{ route('posts.create') }}" class="btn btn-primary">{{ __('اضف منشور') }}</a>
                </div>
            </div>
        @endif
    </div>



    <div class="container pb-3 mt-5">
        <div class="d-grid gap-3">

            {{-- <div class="bg-light border rounded-3"> --}}
            <div class="row">

                @foreach ($posts as $post)
                    {{-- <div class="col-sm-12 col-md-4 col-lg-2 offset-sm-3 offset-md-0 offset-lg-0 mb-4" style="width: 20rem;"> --}}
                    <div class="col-sm-12 col-md-4 col-lg-2 offset-sm-2 offset-md-0 offset-lg-0 mb-4" style="width: 23rem;">

                        <div class="card shadow-sm text-center h-100">
                            <img src="{{ asset('productpic') . '/' . $post->product->product_pic }}"
                                class="card-img-top img-fluid" alt="{{ $post->product->name }}"
                                style="height:200px; object-fit:cover;">

                            <div class="card-body">
                                <h1 style="color: #007EA7">{{ $post->title }}</h1>
                                <p class="card-text">
                                    <span class="text-muted">{{ __('الوصف: ') }}</span>
                                    {{ Str::words($post->description, 4) }}
                                </p>
                                <p class="card-text">
                                    <span class="text-muted">
                                        {{ __('التوصيل من: ') }}
                                    </span>
                                    {{ $post->from }}
                                </p>
                                <p class="card-text">
                                    <span class="text-muted">{{ __('إلى: ') }}
                                    </span>
                                    {{ $post->to }}
                                </p>

                                <div class="btn-group">
                                    <a class="btn btn-primary" href="{{ route('posts.show', $post->id) }}">
                                        {{ __('عرض') }}</a>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <a href="{{ route('profiles.show', $post->user->id) }}" style="text-decoration:none ">
                                    <img src="{{ asset('profilepic') . '/' . $post->user->profile_pic }}"
                                        class="col-12 card-img-top  rounded-circle" alt="{{ $post->user->name }}"
                                        style="width:70px; height:70px; object-fit:cover;">
                                </a>
                                <small class="col-12 fw-bold fs-6" style="color: #007EA7">{{ $post->user->name }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>
@endsection
