
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

/* a {
text-decoration: none;
font-size: 22px;
color: black;
} */

button:hover, a:hover {
opacity: 0.7;
}
.checked {
color: gold;
}


</style>
@endsection
@section('content')


        <div class="container" >
        <div class="row"> 
      
            <div class=" col-md-12 col-lg-12 col-xl-12 mb-12 col-sm-12" >
               <div class="row" > 
                <div  class=" col-md-6 col-lg-6 col-xl-6 mb-6 col-sm-6">
                <h2 style="text-align:center">  </h2>
               <div class="card" style=" max-width: 700px ;  ">
           
                <img src="{{ asset('profilepic'). '/'. $order->comment->user->profile_pic }}" alt="vendor pic"  class="rounded-circle m-auto mt-2" style="width:100px;  height:100px; " >
       
                <h1>  {{$order->comment->user->name}}  
                </h1>
                <p class="title"> :{{$order->comment->user->phone_number}}</p>
                <p class="title"> {{$order->comment->user->email}}</p>
                
                
                
               </div>
            </div>
            <div  class=" col-md-6 col-lg-6 col-xl-6 mb-6 col-sm-6">
                <h2 style="text-align:center">  </h2>
               <div class="card" style=" max-width: 700px ;  ">
           
                <img src="{{ asset('profilepic'). '/'. $order->post->user->profile_pic }}" alt="vendor pic" class="rounded-circle m-auto mt-2" style="width:100px;  height:100px; "  >
       
                <h1> {{$order->post->user->name}} 
                </h1>
            
                <p class="title"> {{$order->post->user->phone_number}}</p>
                <p class="title">{{$order->post->user->email}} </p>
                
               </div>
               </div>
               </div>
            <hr>
     
      <div class="py-5">
        <div class="container">
          <div class="row hidden-md-up">
            <div class="col-md-4">
              <div class="card"style="width:300px; height:350px">
                <div class="card-block">
                    
                    <div class="card-body">
                      <h4 class="card-title">{{$order->client->name}}</h4>
                      <p class="card-text"> {{$order->client->adress}}</p>
                      <p class="card-text"> {{$order->client->phone_number}}</p>
                    </div>
                </div>
              </div>
            </div>
    
            <div class="col-md-4">
                <div class="card"style="width:300px; height:350px">
                  <div class="card-block ">
                      <img class="card-img-top" src="{{ asset('productpic'). '/'. $order->post->product->product_pic }}" alt="Card image" style="width:100%">
                      <div class="card-body">
                        <h4 class="card-title"> {{$order->post->product->name}}</h4>
                        <p class="card-title"> {{$order->post->product->price}}</p>
                        <p class="card-title"> {{$order->post->product->weight}}</p>
                        <p class="card-title"> {{$order->post->product->quantity}}</p>
                       
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card" style="width:300px; height:350px" >
                  <div class="card-block">
                      
                      <div class="card-body">
                        <h4 class="card-title">total:{{$order->post->product->price + $order->comment->deliver_price}}</h4>
                        <p class="card-text"> price:{{$order->post->product->price}} </p>
                        <p class="card-text"> delivery_price:{{$order->comment->deliver_price}} </p>
                        <p class="card-text"> تاريخ التسليم:{{$order->comment->delivery_date}} </p>
                       
                      </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
     <hr>
     <div class="row"> 
           <div class="row" > 
            <div  class=" col-md-12 col-lg-12 col-xl-12 mb-12 col-sm-12">
            <h2 style="text-align:center">  </h2>
           <div class="card" style=" max-width: 700px ;  "> 
            <h1> {{$order->post-> title}}
              
            </h1>
            <p class="title">  {{$order->post-> description}} </p>
            <p class="title"> {{$order->post->from}} </p>
            <p class="title"> {{$order->post->to}} </p>
            <p class="title">{{$order->post->deliver_price}} </p>
        </div> 
      
      
      
    </div>
    </div>
    </div>
    </div>
   





































{{-- <div class="container text-center border-danger mb-3" style="border:2px solid black " dir="rtl">
 

  
<div class="row">

    <div class="col-sm-3">
    <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <img src="{{ asset('profilepic'). '/'. $order->comment->user->profile_pic }}" class="card-img-top  rounded-circle" alt="..." style="width:70px; height:70px;  "></span> &nbsp; {{$order->comment->user->name}}  </p>

        <p class="card-text">{{$order->comment->user->phone_number}}</p>
        <p class="card-text">{{$order->comment->user->email}}</p>
   
      </div>
    </div>
  </div>
</div>


    </div>
    
    <div class="col-sm-9">
      <div class="row">
        <div class="col-8 col-sm-6">
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('profilepic'). '/'. $order->post->user->profile_pic }}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$order->post->user->name}}</h5>
        <p class="card-text">{{$order->post->user->phone_number}}</p>
        <p class="card-text">{{$order->post->user->email}}</p>
      
      </div>
    </div>
  </div>
</div>
        </div>
        <!-- {{$order->post->product->price + $order->comment->deliver_price}} -->
        <div class="col-4 col-sm-6">
        <div class="card text-bg-danger mb-3" style="max-width: 18rem;">
  <div class="card-header">{{$order->client->name}}</div>
  <div class="card-body">
    <h5 class="card-title">{{$order->client->adress}}</h5>
    <p class="card-text">{{$order->client->phone_number}}</p>
    </div>
    </div> </div>

        </div>
      </div>
    </div>
  </div>

 
</div> --}}



   {{-- <div class="col-sm-9">
      <div class="row">
        <div class="col-8 col-sm-6">
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
    <img src="{{ asset('productpic'). '/'. $order->post->product->product_pic }}" class="card-img-top img-fluid"  alt="...">
                        
    </div>
     <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$order->post->product->name}}</h5>
        <p class="card-text">{{$order->post->product->price}}</p>
        <p class="card-text">{{$order->post->product->weight}}</p>
        <p class="card-text">{{$order->post->product->quantity}}</p>
      </div>
    </div>
  </div>
</div>
        </div>
        </div> </div>
  <!-- {{$order->post->product->price + $order->comment->deliver_price}} --> --}}
     
{{-- 


<div class="container text-center">
  <div class="row">
    <div class="col-sm-3">
      Level 1: .col-sm-3
    </div>
    <div class="col-sm-9">
      <div class="row">
        <div class="col-8 col-sm-6">
        <div class="card text-bg-danger mb-3" style="max-width: 18rem;">
  <div class="card-header">total:{{$order->post->product->price + $order->comment->deliver_price}}</div>
  <div class="card-body">
    <h5 class="card-title">price:{{$order->post->product->price}}</h5>
    <p class="card-text">delivery_price:{{$order->comment->deliver_price}}</p>
    <p class="card-text">تاريخ التسليم:{{$order->comment->delivery_date}}</p>
    </div>
    </div> </div>
        </div>
        <div class="col-4 col-sm-6">
        <div class="col-4 col-sm-6">
        <div class="card text-bg-danger mb-3" style="max-width: 18rem;">
  <div class="card-header">{{$order->post->title}}</div>
  <div class="card-body">
    <h5 class="card-title">{{$order->post->description}}</h5>
    <p class="card-text">{{$order->post->from}}</p>
    <p class="card-text">{{$order->post->to}}</p>
    <p class="card-text">{{$order->post->deliver_price}}</p>
    </div>
    </div>

</div>
</div>  --}}
        </div>
      </div>
    </div>
  </div>
</div>

@endsection























