@extends('layouts.app')
@section('styles')

<style>
  .card {
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
margin: auto;
text-align: center;
font-family: arial;
}

.title {
color: grey;
font-size: 18px;
}

button {
border: none;
outline: 0;
display: inline-block;
padding: 8px;
color: white;
background-color: #000;
text-align: center;
cursor: pointer;
width: 100%;
font-size: 18px;
}

a {
text-decoration: none;
font-size: 22px;
color: black;
}

button:hover, a:hover {
opacity: 0.7;
}
.checked {
color: gold;
}

</style>
@endsection
@section('content')
    <div class="container">
        <div class="row mb-5 text-center">
            <div class="col-sm-8 col-md-6 offset-sm-2 offset-md-0">
                <div class="card my-sm-3 my-md-5">
                    <img src="{{ asset('profilepic') . '/' . $order->post->user->profile_pic }}" alt="Vendor pic"
                        class="rounded-circle m-auto mt-3" style="width:100px;  height:100px;">

                    <h5 class="card-title display-6 text-capitalize">{{ $order->post->user->name }}</h5>

                    <div class="card-body">
                        <div class="my-1">{{ $order->post->user->phone_number }}</div>
                        <div class="my-1">{{ $order->post->user->email }}</div>
                    </div>

                </div>
            </div>

            <div class="col-sm-8 col-md-6 offset-sm-2 offset-md-0">
                <div class="card my-sm-3 my-md-5">
                    <img src="{{ asset('profilepic') . '/' . $order->comment->user->profile_pic }}" alt="Delivery pic"
                        class="rounded-circle m-auto mt-3" style="width:100px;  height:100px;">

                    <h5 class="card-title display-6 text-capitalize">{{ $order->comment->user->name }}</h5>

                    <div class="card-body">
                        <div class="my-1">{{ $order->comment->user->phone_number }}</div>
                        <div class="my-1">{{ $order->comment->user->email }}</div>
                    </div>
                </div>
            </div>
        </div>



        <hr>



        <div class="py-5" style="min-height : 2000px">
            <div class="container">
               <div class="row">
                    <div class="col-md-4">





                        <div class="card text-white bg-dark mb-3 py-3">
                            <div class="card-header">Client_1</div>
                            <div class="card-body">
                                <h5 class="card-title">Dark card title</h5>
                                <p class="card-text">324 sdgdsgv</p>
                                <p class="card-text">1000000000</p>
                            </div>
                        </div>




                        <div style="max-width: 540px;" class="card">
                            <div class="row g-0 text-white bg-dark">
                                <div class="col-md-4">
                                    <img src="http://127.0.0.1:8000/productpic/1658663787-AymanProduct.jpg" alt="Card image"
                                        class="img-fluid rounded-start h-100 w-100">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Product_1</h5>
                                        <p class="card-text">
                                            <small class="fw-bold">Price: </small>
                                            325
                                        </p>
                                        <p class="card-text">
                                            <small class="fw-bold">Weight: </small>
                                            2
                                        </p>
                                        <p class="card-text">
                                            <small class="fw-bold">Quantity: </small>
                                            34
                                        </p>
                                        <p class="card-text">
                                            <small class="text-muted">
                                                <small class="fw-bold">From: </small>
                                                Cairo</small>
                                            ||
                                            <small class="text-muted">
                                                <small class="fw-bold">To: </small>
                                                Giza</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>

                    <div class="col-md-8">
                        <div style="" class="card text-white bg-primary ">
                            <div class="card-block">

                                <div class="card-body">
                                    <h4 class="card-title">
                                        <small class="fw-bold">Total:</small>
                                        456
                                    </h4>

                                    <p class="card-text">
                                        <small class="fw-bold">Price:</small>
                                        325
                                    </p>
                                    <small class="fw-bold">Price:</small>
                                    <p class="card-text">
                                        <small class="fw-bold">Delivery Price:</small>
                                        131
                                    </p>
                                    <p class="card-text">
                                        <small class="fw-bold">Delivery Date:</small>
                                        2022-07-24 23:06:55
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>












































































































                {{-- <div class="card border-dark mb-3" style="max-width: 18rem;">
                            <div class="card-header">{{ $order->client->name }}</div>
                            <div class="card-body text-dark">
                                <h5 class="card-title">Dark card title</h5>
                                <p class="card-text">{{ $order->client->adress }}</p>
                                <p class="card-text">{{ $order->client->phone_number }}</p>
                            </div>
                        </div> --}}


                {{-- <div class="card text-white bg-dark mb-3">
                            <div class="card-header">{{ $order->client->name }}</div>
                            <div class="card-body">
                                <h5 class="card-title">Dark card title</h5>
                                <p class="card-text">{{ $order->client->adress }}</p>
                                <p class="card-text">{{ $order->client->phone_number }}</p>
                            </div>
                        </div> --}}

                {{-- <div class="card text-white bg-secondary mb-3">
                            <div class="card-header">{{ $order->client->name }}</div>
                            <div class="card-body">
                                <h5 class="card-title">Dark card title</h5>
                                <p class="card-text">{{ $order->client->adress }}</p>
                                <p class="card-text">{{ $order->client->phone_number }}</p>
                            </div>
                        </div> --}}

                {{-- </div>

                    <div class="col-md-4"> --}}




                {{-- <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('productpic') . '/' . $order->post->product->product_pic }}" alt="Card image"
                                class="img-fluid rounded-start h-100 w-100">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $order->post->product->name }}</h5>
                                <p class="card-text">
                                    <small class="fw-bold">{{ __('Price: ') }}</small>
                                    {{ $order->post->product->price }}
                                </p>
                                <p class="card-text">
                                    <small class="fw-bold">{{ __('Weight: ') }}</small>
                                    {{ $order->post->product->weight }}
                                </p>
                                <p class="card-text">
                                    <small class="fw-bold">{{ __('Quantity: ') }}</small>
                                    {{ $order->post->product->quantity }}
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">
                                        <small class="fw-bold">{{ __('From: ') }}</small>
                                        {{ $order->post->from }}</small>
                                    || <small class="text-muted">
                                        <small class="fw-bold">{{ __('To: ') }}</small>
                                        {{ $order->post->to }}</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div> --}}


                {{-- <div class="card"style="width:300px; height:350px">
                            <div class="card-block ">
                                <img class="card-img-top"
                                    src="{{ asset('productpic') . '/' . $order->post->product->product_pic }}"
                                    alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <h4 class="card-title"> {{ $order->post->product->name }}</h4>
                                    <p class="card-title"> {{ $order->post->product->price }}</p>
                                    <p class="card-title"> {{ $order->post->product->weight }}</p>
                                    <p class="card-title"> {{ $order->post->product->quantity }}</p>

                                </div>
                            </div>
                        </div> --}}
                {{-- </div> --}}

                {{-- <div class="col-md-4">
                <div class="card" style="width:300px; height:350px">
                    <div class="card-block">

                        <div class="card-body">
                            <h4 class="card-title">
                                <small class="fw-bold">{{ __('Total:') }}</small>
                                {{ $order->post->product->price + $order->comment->deliver_price }}
                            </h4>

                            <p class="card-text">
                                <small class="fw-bold">{{ __('Price:') }}</small>
                                {{ $order->post->product->price }}
                            </p>
                            <small class="fw-bold">{{ __('Price:') }}</small>
                            <p class="card-text">
                                <small class="fw-bold">{{ __('Delivery Price:') }}</small>
                                {{ $order->comment->deliver_price }}
                            </p>
                            <p class="card-text">
                                <small class="fw-bold">{{ __('Delivery Date:') }}</small>
                                {{ $order->comment->delivery_date }}
                            </p>
                        </div>
                    </div>
                </div>
            </div> --}}
            </div>
        </div>
    </div>


    </div>
@endsection
