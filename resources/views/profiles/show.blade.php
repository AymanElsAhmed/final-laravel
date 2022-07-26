@extends('layouts.app')
@section('styles')
<style>
.rating-css div {
    color: #ffe400;
    font-size: 10px;
    font-family: sans-serif;
    font-weight: 100;
    text-align: center;
    text-transform: uppercase;
    padding: 20px 0;
  }
  .rating-css input {
    display: none;
  }
  .rating-css input + label {
    font-size: 30px;
    text-shadow: 1px 1px 0 #8f8420;
    cursor: pointer;
  }
  .rating-css input:checked + label ~ label {
    color: #b4afaf;
  }
  .rating-css label:active {
    transform: scale(0.8);
    transition: 0.3s ease;
  }</style>
@endsection


@section('content')
    {{-- @dd($postes); --}}

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form action="{{url('/rate')}}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{$user->id}}">
                <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Rate {{$user->name}}</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="rating-css card-text ">
                    <div class="star-icon">
                        <input type="radio" value="1" name="rate-value" checked id="rating1">
                        <label for="rating1" class="fa fa-star"></label>
                        <input type="radio" value="2" name="rate-value" id="rating2">
                        <label for="rating2" class="fa fa-star"></label>
                        <input type="radio" value="3" name="rate-value" id="rating3">
                        <label for="rating3" class="fa fa-star"></label>
                        <input type="radio" value="4" name="rate-value" id="rating4">
                        <label for="rating4" class="fa fa-star"></label>
                        <input type="radio" value="5" name="rate-value" id="rating5">
                        <label for="rating5" class="fa fa-star"></label>
                    </div>
                
            </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
          </div>
        </div>
      </div>


    @if ($user->role == 'vendor')
        <div class="container">
            <div class="row my-3">
                <h2 class="text-center text-primary"> الملف الشخصي للتاجر </h2>
            </div>


            <div class="row">
                <div class="card">
                    <img class="card-img-top rounded-circle m-auto mt-3"
                        src="{{ asset('profilepic') . '/' . $user->profile_pic }}" alt=""
                        style="height: 100px; width:100px;">

                    <div class="card-body text-center">
                        <h4 class="card-title">
                            {{ $user->name }}
                            <a href="{{route('profiles.edit',$user->id)}}"><i class="fas fa-edit"></i></a>
                        </h4>
                        

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Rate
                          </button>
                       
                </div>


                <div class="row mt-5">
                    <h5 class="text-primary text-center mt-5">المنشورات الخاصة بي</h5>
                </div>


                <div class="row">
                    <div class="bg-light border rounded-3 mt-3">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                            @foreach ($user->posts as $post)
                                <div class="col">
                                    <div class="card shadow-sm my-4">
                                        <img src="{{ asset('productpic') . '/' . $post->product->product_pic }}"
                                            class="card-img-top" alt="">

                                        <div class="card-body  " style="text-align: center ">
                                            <h1 style="color: #007EA7"> {{ $post->title }}</h1>

                                            <p class="card-text">
                                                <span class="text-muted">الوصف:</span> &nbsp;
                                                {{ $post->description }}
                                            </p>
                                            <div class="btn-group text-center ">
                                                <a class="btn btn-primary" href="{{ route('posts.show', [$post->id]) }}">
                                                    عرض المنشور
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>



                    <div class="row mt-5">
                        <h5 class=" text-primary text-center">التعليقات الخاصة بي</h5>
                    </div>




                    <div class="bg-light border rounded-3">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">


                            <div class="col">
                                <div class="card shadow-sm  m-4">
                                    <img src="{{ asset('profilepic') . '/' . $user->profile_pic }}"
                                        class=" rounded-circle m-auto mt-3 " class="card-img-top" alt="..."
                                        style="height: 100px; width:100px;">

                                    <div class="card-body  " style="text-align: center ">


                                        <p class="card-text"><span class="text-muted"> التعليق </p>


                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row mt-5">
                        <h5 class=" text-primary text-center"> طرق التواصل </h5>
                    </div>




                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 me-4 ">


                        <p>{{ $user->email }}
                          <a href=""><i class="fas fa-envelope"></i></a>
                        </p>

                        <p>{{ $user->city }}
                          <a href="#"><i class="fas fa-house-user"></i></a>
                        </p>

                        <p>
                            {{ $user->phone_number }}
                            <a href="#"><i class="fas fa-phone"></i></a>
                        </p>
                    </div>

                </div>
            </div>

            {{-- DONE --}}
        @else
            {{-- <div class="container">
                <div class="row">
                    <div class=" col-md-12 col-lg-12 col-xl-12 mb-12 col-sm-12">
                        <h2 class="text-center text-primary"> الملف الشخصي للمندوب</h2>
                        <div class="card ">
                            <div class="m-auto mt-3  ">
                                <img src="{{ asset('profilepic') . '/' . $user->profile_pic }}"
                                    class=" rounded-circle m-auto mt-3 " class="card-img-top" alt="..."
                                    style="height: 100px; width:100px;">
                                <h3>{{ $user->name }} <a href=""><i class="fas fa-edit"></i>
                                        </i> </a> </h3>
                                <p>
                                    <span class="fa fa-star checked" value="1"></span>
                                    <span class="fa fa-star checked" value="2"></span>
                                    <span class="fa fa-star checked" value="3"></span>
                                    <span class="fa fa-star" value="4"></span>
                                    <span class="fa fa-star" value="5"></span>
                                </p>
                            </div>
                            <h5 class=" text-primary text-center"> الطلبات الخاصه بي </h5>
                            <div class="bg-light border rounded-3">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 text-center">
                                    @foreach ($user->comments as $comment)
                                        <div class="col">
                                            <div class="card shadow-sm  m-3 p-3">
                                                <img src="{{ asset('productpic'). '/'. $post->product->product_pic }}" class="card-img-top" alt="...">
                                                <p class="card-text"><span class="text-muted text-primary"> التفاصيل</span>
                                                    &nbsp; {{ $comment->description }} </p>
                                                <p class="card-text"><span class="text-muted text-primary">تاريخ
                                                        التسليم</span>
                                                    &nbsp; {{ $comment->delivery_date }} </p>
                                                <p class="card-text"><span class="text-muted text-primary">السعر </span>
                                                    &nbsp;
                                                    {{ $comment->deliver_price }} </p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h5 class=" text-primary text-center"> الكومنتات الخاصه بي </h5>
                    </div>
                    <div class="bg-light border rounded-3">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                            <div class="col">
                                <div class="card shadow-sm  m-4">
                                    <img src="{{ asset('profilepic') . '/' . $user->profile_pic }}"
                                        class=" rounded-circle m-auto mt-3 " class="card-img-top" alt="..."
                                        style="height: 100px; width:100px;">
                                    <div class="card-body  " style="text-align: center ">
                                        <p class="card-text"><span class="text-muted"> التعليق </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class=" text-primary text-center"> طرق التواصل </h5>
                    <div>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 me-4 ">
                            <p>{{ $user->email }} <a href=""> <i class="fas fa-envelope"></i> </a> </p>
                            <p>{{ $user->city }} <a href=""> <i class="fas fa-house-user"></i> </a> </p>
                            <p>{{ $user->phone_number }} <a href=""> <i class="fas fa-phone"></i> </a> </p>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>
    @endif
@endsection