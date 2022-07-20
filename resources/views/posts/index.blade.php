
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>All Posts</title>
</head>
<body>
    

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Link</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>

          <ul>
            <li class="nav-item">
              
        <a class="navbar-brand" href="#">
          <img src="{{ asset('profilepic'). '/'. auth()->user()->profile_pic}}"  class="rounded" class="card-img-top" alt="..." style="width:40px;" >    
        </a>
              </li>
          </ul>
      </form>
     
    </div>
  </div>
</nav>

{{-- <div class="form-inline pull-right w-50 m-auto mb-4">
       
    </div> --}}
    <div class="position-relative "  style="margin: 30px">

    <div class="position-absolute top-50 start-0 translate-middle-y"> <a href="{{route('posts.create')}}" class="btn btn-primary">انشاء منشور </a>
    </div>
  <div class="position-absolute top-50 start-50 translate-middle w-50">
     <form class="d-flex" role="search" type="get" action="{{route('posts.index')}}">
    <button class="btn btn-primary" type="submit">بحث</button>
        <input class="form-control me-2" name="search" type="search" aria-label="Search">

      </form>  </div>
    </div>

    
       

<div class="container-fluid pb-3" style="margin-top: 60px">
    <div class="d-grid gap-3" style="grid-template-columns: 1fr 4fr;">
        <div class="bg-light border rounded-3">
            <div class="container">
            
                <ul class="list-group" id="myList">
                  <li class="list-group-item"><a href="#">First item</a></li>
                  <li class="list-group-item"><a href="#">Second item</a></li>
                  <li class="list-group-item"><a href="#">Third item</a></li>
                  <li class="list-group-item"><a href="#"> Fourth </a> </li>
                  <li class="list-group-item"><a href="#">First item</a></li>
                  <li class="list-group-item"><a href="#">Second item</a></li>
                  <li class="list-group-item"><a href="#">Third item</a></li>
                  <li class="list-group-item"><a href="#"> Fourth </a> </li>
                  <li class="list-group-item"><a href="#">First item</a></li>
                  <li class="list-group-item"><a href="#">Second item</a></li>
                  <li class="list-group-item"><a href="#">Third item</a></li>
                  <li class="list-group-item"><a href="#"> Fourth </a> </li>
                </ul>  
              </div>
        </div>
        <div class="bg-light border rounded-3">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" dir="rtl">
            @foreach ($posts as $post)
                <div class="col" >
                    <div class="card shadow-sm">
                      <img src="{{ asset('productpic'). '/'. $post->product->product_pic }}" class="card-img-top" alt="...">
                        
                       <div class="card-body  " style="text-align: center " >
                        <h1 style="color: #007EA7"> {{$post["title"]}} </h1>
                        <p class="card-text"><span class="text-muted" >الوصف:</span> &nbsp; {{$post["description"]}}  </p>
                        <p class="card-text"> <span  class="text-muted">التوصيل من :</span> &nbsp;{{$post["from"]}}  </p>
                        <p class="card-text"> <span class="text-muted">الى:</span>  &nbsp;{{$post["to"]}}  </p>
                        {{-- <p class="card-text"><span>سعر التوصيل:</span> &nbsp;{{$post["deliver_price"]}}</p>
                        <p class="card-text"> <span>اسم المنتج:</span> &nbsp;{{$post->product->name}}</p>
                        <p class="card-text"> <span>كمية المنتج:</span> &nbsp; {{$post->product->quantity}}</p>
                        <p class="card-text"><span>سعر المنتج:</span> &nbsp;{{$post->product->price}}</p>
                        <p class="card-text"><span>وزن المنتج:</span> &nbsp;{{$post->product->weight}}</p> --}}


                         {{-- <a class="btn btn-info" href="{{ route('products.show', $post->product->id) }}">لعرض تفاصيل اكثر عن المنتج</a> --}}
                        <br>
                            <div class="btn-group text-center ">
                                <!-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                               
                                <a class="btn btn-primary" href="{{route('posts.show' , [$post->id])}}">عرض المنشور</a>
                            </div>
                        </div>
                        <p class="text-muted text-center">{{$post->created_at}}</p>

                        <div class="text-center" style="margin-bottom: 10px">

                            <a  href="#"  style="text-decoration:none ">
                              <img src="{{ asset('profilepic'). '/'. $post->user->profile_pic }}" class="card-img-top  rounded-circle" alt="..." style="width:70px; height:70px;  ">

                              </a>
                              <p> <a href="#"  style="text-decoration:none" ><small  style="color: #007EA7">{{$post->user->name}}</small></a></p>
                            </div>
                    </div>
                    </div>
                @endforeach
               
               
                </div>
             </div>
            
        </div>
    </div>


  
  <script    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
  crossorigin="anonymous">
  </script>
</body>
</html>





















