@extends('layouts.app')

@section('content')
    {{-- <div class="form-inline pull-right w-50 m-auto mb-4">
       
    </div> --}}

    <div class="container">

        {{-- <div class="position-relative " style="margin: 30px"> --}}
        <div class="row">

            {{-- <div class="position-absolute top-50 start-0 translate-middle-y"> --}}
            <div class="">
                <a href="{{ route('posts.create') }}" class="btn btn-primary">إنشاء منشور</a>
            </div>

            {{-- <div class="position-absolute top-50 start-50 translate-middle w-50"> --}}
            <div class="">
                <form class="d-flex" role="search" type="get" action="{{ route('posts.index') }}">
                    <button class="btn btn-primary" type="submit">بحث</button>
                    <input class="form-control me-2" name="search" type="search" aria-label="Search">
                </form>
            </div>

        </div>

    </div>



    {{-- <div class="container-fluid pb-3" style="margin-top: 60px"> --}}
    <div class="container-fluid pb-3 mt-5">
        <div class="d-grid gap-3">
            <div class="bg-light border rounded-3">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($posts as $post)
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="{{ asset('productpic') . '/' . $post->product->product_pic }}"
                                    class="card-img-top img-fluid" alt="...">

                                <div class="card-body  " style="text-align: center ">
                                    <h1 style="color: #007EA7"> {{ $post['title'] }} </h1>
                                    <p class="card-text"><span class="text-muted">الوصف:</span> &nbsp;
                                        {{ $post['description'] }} </p>
                                    <p class="card-text"> <span class="text-muted">التوصيل من :</span>
                                        &nbsp;{{ $post['from'] }} </p>
                                    <p class="card-text"> <span class="text-muted">الى:</span> &nbsp;{{ $post['to'] }}
                                    </p>
                                   
                                    <br>
                                    <div class="btn-group text-center ">
                                
                                        <a class="btn btn-primary" href="{{ route('posts.show', [$post->id]) }}">عرض
                                            المنشور</a>
                                    </div>
                                </div>
                                <p class="text-muted text-center">{{ $post->created_at }}</p>

                                <div class="text-center" style="margin-bottom: 10px">

                                    <a href="#" style="text-decoration:none ">
                                        <img src="{{ asset('profilepic') . '/' . $post->user->profile_pic }}"
                                            class="card-img-top  rounded-circle" alt="..."
                                            style="width:70px; height:70px;  ">

                                    </a>
                                    <p> <a href="#" style="text-decoration:none"><small
                                                style="color: #007EA7">{{ $post->user->name }}</small></a></p>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>

        </div>
    </div>
@endsection
