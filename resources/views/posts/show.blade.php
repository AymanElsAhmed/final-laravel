@extends('layouts.app')

@section('content')
    <div class="container bg-lightl">
        {{-- <div class="container"> --}}
        <div class="row">
            {{-- <div class="col-sm-12 offset-sm-2 offset-md-0"> --}}
            <div class="col">
                <img src="{{ asset('productpic') . '/' . $post->product->product_pic }}" class="img-fluid"
                    alt="{{ $post->product->name }}">
            </div>

            <div class="col">
                {{-- title   desc details name hr productPrice delveryPrice from to hr --}}
                {{-- <div class="container"> --}}
                <div class="h2">
                    {{ $post->title }}
                </div>
                <h3>
                    وصف:
                </h3>
                <p>{{ $post->description }}</p>

                <h3>
                    بيانات المنتج:
                </h3>

                <div>
                    <h5>
                        الاسم:
                        {{ $post->product->name }}
                    </h5>
                    <h5>
                        السعر:
                        {{ $post->product->price }}
                    </h5>
                </div>
            </div>

        </div>
        {{-- ROW_1 --}}


        <!-- Comment Button -->


        @auth
            {{-- @delivery --}}
                <div class="row mt-5 mb-3">
                    <div class="col-sm-7 offset-sm-3 offset-md-0 ">
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#addcomment" role="button" aria-expanded="false"
                            aria-controls="addcomment">
                            {{ __('Add Comment') }}
                        </a>
                    </div>
                </div>



                <div class="row">
                    <div class="col col-md-12">
                        <div class="collapse multi-collapse" id="addcomment">
                            <div class="card card-body">
                                <!-- store comment -->
                                <form class="row g-3" method="POST" action="{{ route('comments.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    {{-- <!-- <input class="hidden" name="post_id" value="{{$post->id}}"> --> --}}
                                    <div class="col-12">
                                        <label for="name" class="form-label text-primary">نبذة عن خبرتك</label>
                                        <input type="text" class="form-control" id="description" name="description">
                                        @error('description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="price" class="form-label text-primary">تاريخ التسليم</label>
                                        <input type="date" class="form-control" id="delivery_date" name="delivery_date">
                                        @error('delivery_date')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="weight" class="form-label text-primary">سعر التوصيل</label>
                                        <input type="number" class="form-control" id="deliver_price" name="deliver_price">
                                        @error('deliver_price')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary">حفظ</button>
                                    </div>
                                </form>
                                <!-- end store comment -->
                            </div>
                        </div>
                    </div>
                </div>
            {{-- @enddelivery --}}
        @endauth
        <!-- end comment button -->





        <div class="row">
            @foreach ($post->comment as $comment)
                <div class="col-sm-12 my-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-text">
                                <span class="text-muted">
                                    <img src="{{ asset('profilepic') . '/' . $comment->user->profile_pic }}"
                                        class="card-img-top  rounded-circle" alt="..."
                                        style="width:70px; height:70px;"></span>

                                <span class="fw-bold fs-5">{{ $comment->user->name }}</span>
                            </div>
                            <p class="card-text">
                                <span class="text-muted">الوصف:</span>
                                &nbsp; {{ $comment->description }}
                            </p>
                            <p class="card-text">
                                <span class="text-muted"> تاريخ التسليم :</span>
                                &nbsp;{{ $comment->delivery_date }}
                            </p>
                            <p class="card-text">
                                <span class="text-muted">سعر التوصيل:</span>
                                &nbsp;{{ $comment->deliver_price }}
                            </p>

                            @auth
                                @delivery
                                    @if (auth()->user()->id === $comment->user_id)
                                        <div class="d-flex justify-content-end">
                                            <a class="btn btn-primary mx-2 align-self-start" data-bs-toggle="collapse"
                                                href="#commentedit{{ $loop->iteration }}" role="button" aria-expanded="false"
                                                aria-controls="commentedit{{ $loop->iteration }}">{{ __('Edit') }}</a>

                                            <form action="{{ route('comments.destroy', $comment->id) }}" method="post"
                                                class="mb-3">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger "> حذف </button>
                                            </form>

                                        </div>


                                        <div class="row">
                                            <div class="col col-md-12 col-lg-12">
                                                <div class="collapse multi-collapse" id="commentedit{{ $loop->iteration }}">
                                                    <div class="card card-body">
                                                        <!-- store comment -->
                                                        <form action="{{ route('comments.update', $comment->id) }}" method="POST">
                                                            @method('PUT')
                                                            @csrf
                                                            {{-- <!-- <input class="hidden" name="post_id" value="{{$post->id}}"> --> --}}
                                                            <div class="col-12">
                                                                <label for="name" class="form-label text-primary">نبذة عن
                                                                    خبرتك</label>
                                                                <input type="text" class="form-control" id="description"
                                                                    name="description"
                                                                    value="{{ old('description', $comment->description) }}">
                                                                @error('description')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="price" class="form-label text-primary">تاريخ
                                                                    التسليم</label>
                                                                <input type="date" class="form-control" id="delivery_date"
                                                                    name="delivery_date"
                                                                    value="{{ old('delivery_date', $comment->delivery_date) }}">
                                                                @error('delivery_date')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="weight" class="form-label text-primary">سعر
                                                                    التوصيل</label>
                                                                <input type="number" class="form-control" id="deliver_price"
                                                                    name="deliver_price"
                                                                    value="{{ old('deliver_price', $comment->deliver_price) }}">
                                                                @error('deliver_price')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>


                                                            <div class="col-12 text-center">
                                                                <button type="submit" class="btn btn-primary">حفظ</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                    @endif
                                @enddelivery
                            @endauth
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
