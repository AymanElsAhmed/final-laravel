@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  
</head>
<body>
  {{-- @dd($postes); --}}
  @if ($users->role == "vendor")
        <div class="container">
        <div class="row">
            <div class=" col-md-12 col-lg-12 col-xl-12 mb-12 col-sm-12">
                <h2  class="text-center text-primary"> الملف الشخصي للتاجر </h2>
               <div class="card " >
                <div class="m-auto mt-3  "  >
                <img src="{{ asset('profilepic'). '/'. auth()->user()->profile_pic}}"  class=" rounded-circle m-auto mt-3 " class="card-img-top" alt="..." style= "height: 100px; width:100px;" >    
       
                  <h3 >{{ $users->name }} <a href=""><i class="fas fa-edit"></i>

                  </i>  </a> </h3>
                  
                  
                  <p>
                    <span class="fa fa-star checked" value="1"></span>
                    <span class="fa fa-star checked" value="2"></span>
                    <span class="fa fa-star checked" value="3"></span>
                    <span class="fa fa-star" value="4"></span>
                    <span class="fa fa-star" value="5"></span>
                    
                  </p> 
                </div>
      <h5 class=" text-primary text-center"> المنشورات الخاصه بي </h5>
      <div class="bg-light border rounded-3">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3" >
        @foreach ($posts as $post)
        
            <div class="col" >
                <div class="card shadow-sm  m-4">
                  <img src="{{ asset('productpic'). '/'. $post->product->product_pic }}" class="card-img-top" alt="...">
                    
                   <div class="card-body  " style="text-align: center " >
                    <h1 style="color: #007EA7"> {{$post["title"]}} </h1>
           
         <p class="card-text"><span class="text-muted" >الوصف:</span> &nbsp; {{$post["description"]}}  </p>
                        <div class="btn-group text-center ">
                        <a class="btn btn-primary" href="{{route('posts.show' , [$post->id])}}">عرض المنشور</a>
                        </div>
                    </div>
                    
                
            @endforeach
        </div>
       
      </div>
      
        </div>
      </div>
      <h5 class=" text-primary text-center"> الكومنتات الخاصه بي </h5>
      <div class="bg-light border rounded-3">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3" >
        
        
            <div class="col" >
                <div class="card shadow-sm  m-4">
                  <img src="{{ asset('profilepic'). '/'. auth()->user()->profile_pic}}"  class=" rounded-circle m-auto mt-3 " class="card-img-top" alt="..." style= "height: 100px; width:100px;" > 
                    
                   <div class="card-body  " style="text-align: center " >
                   
           
                  <p class="card-text"><span class="text-muted" > التعليق  </p>
                       
                       
                    </div>
                    
                
                  </div>
              </div>
      
           </div>
      </div>
           <h5 class=" text-primary text-center" >  طرق التواصل </h5>
      <div >

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 me-4 " >
        
        
          <p >{{ $users->email }} <a href=""> <i class="fas fa-envelope"></i>   </a> </p>
                 
          <p >{{ $users->city }}  <a href="">  <i class="fas fa-house-user"></i> </a> </p>
         
          <p >{{ $users->phone_number }}  <a href=""> <i class="fas fa-phone"></i> </a> </p>
                    
                
                  </div>
              </div>
      
           </div>
           
      </div>




       
   

  
@else
<div class="container">
  <div class="row">
      <div class=" col-md-12 col-lg-12 col-xl-12 mb-12 col-sm-12">
          <h2  class="text-center text-primary"> الملف الشخصي  للمندوب</h2>
         <div class="card " >
          <div class="m-auto mt-3  "  >
          <img src="{{ asset('profilepic'). '/'. auth()->user()->profile_pic}}"  class=" rounded-circle m-auto mt-3 " class="card-img-top" alt="..." style= "height: 100px; width:100px;" >    
 
            <h3 >{{ $users->name }} <a href=""><i class="fas fa-edit"></i>

            </i>  </a> </h3>
            
            
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
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 text-center" >
            @foreach ($comments as $comment)
            
                <div class="col" >
                    <div class="card shadow-sm  m-3 p-3">
                      {{-- <img src="{{ asset('productpic'). '/'. $post->product->product_pic }}" class="card-img-top" alt="..."> --}}
                     
                      <p class="card-text"><span class="text-muted text-primary" > التفاصيل</span> &nbsp; {{$comment -> description}} </p>
                      <p class="card-text"><span class="text-muted text-primary" >تاريخ التسليم</span> &nbsp; {{$comment -> delivery_date}} </p>
                      <p class="card-text"><span class="text-muted text-primary" >السعر  </span> &nbsp; {{$comment -> deliver_price}} </p>   
                       
                        
                    
                @endforeach
            </div>
           
          </div>
          
            </div>
          </div>
          <h5 class=" text-primary text-center"> الكومنتات الخاصه بي </h5>
          <div class="bg-light border rounded-3">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3" >
            
            
                <div class="col" >
                    <div class="card shadow-sm  m-4">
                      <img src="{{ asset('profilepic'). '/'. auth()->user()->profile_pic}}"  class=" rounded-circle m-auto mt-3 " class="card-img-top" alt="..." style= "height: 100px; width:100px;" > 
                      
                       <div class="card-body  " style="text-align: center " >
                       
               
                      <p class="card-text"><span class="text-muted" > التعليق  </p>
                           
                           
                        </div>
                        
                    
                      </div>
                  </div>
          
               </div>
          </div>
               <h5 class=" text-primary text-center" >  طرق التواصل </h5>
          <div >
    
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 me-4 " >
            
            
              <p >{{ $users->email }} <a href=""> <i class="fas fa-envelope"></i>   </a> </p>
                     
              <p >{{ $users->city }}  <a href="">  <i class="fas fa-house-user"></i> </a> </p>
             
              <p >{{ $users->phone_number }}  <a href=""> <i class="fas fa-phone"></i> </a> </p>
                        
                    
                      </div>
                  </div>
          
               </div>
               
          </div>










 




@endif        



@endsection
</body>
</html>