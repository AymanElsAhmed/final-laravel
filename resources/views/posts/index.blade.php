
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
            <img src="media/profil.webp" alt="Logo" style="width:40px;" class="rounded-pill">
          </a>
              </li>
          </ul>
      </form>
     
    </div>
  </div>
</nav>
<div class="container" style="width: 600px;margin-top: 40px;margin-right: 5%; margin-bottom: 20px;">
    <div class="input-group">
      <form class="d-flex" style="margin-right: 30% ;">
      <a href="{{route('posts.create')}}" class="btn btn-info">انشاء منشور </a>
            <!-- <button type="button" class="btn btn-primary">Creat Post</button> -->
        </form>
        <form class="d-flex" role="search" type="get" action="{{url('/search')}}">
              <input class="form-control me-2" name="search" type="search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">بحث</button>
            </form>
<!-- <input class="form-control" id="myInput" type="text" placeholder="Search..">
<button type="button" class="btn btn-outline-primary">search</button>
    -->
   </div>
  
    </div>
    
       

<div class="container-fluid pb-3">
    <div class="d-grid gap-3" style="grid-template-columns: 1fr 2fr;">
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
                <div class="col">
                    <div class="card shadow-sm">
                       <img src="media/1.webp" alt="">

                       <div class="card-body">
                        <h1> {{$post["title"]}} </h1>
                        <p class="card-text"> {{$post["description"]}}  </p>
                        <p class="card-text"> {{$post["from"]}}  </p>
                        <p class="card-text"> {{$post["to"]}}  </p>
                        <p class="card-text">{{$post["deliver_price"]}}</p>
                        <label class="card-text"> <h5>{{$post->product->name}}</h5></label>
                        <a class="btn btn-info" href="{{ route('products.show', $post->product->id) }}">لعرض تفاصيل اكثر عن المنتج</a>
                        <br><br>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <!-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                               
                                <a class="btn btn-warning" href="{{route('posts.show' , [$post->id])}}">عرض المنشور</a>
                            </div>
                            <small class="text-muted">{{$post->created_at}}</small>
                        </div>
                        <div>
                            <a class="navbar-brand" href="#">
                                <img src="media/profil.webp" alt="Logo" style="width:40px;" class="rounded-pill"> <small class="text-muted">{{$post->user->name}}</small>
                              </a>
                            </div>
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
























<!-- Back end -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            {{-- <form class="d-flex" role="search" type="get" action="{{url('/search')}}"> --}}
              <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      {{-- <a href="{{route('posts.create')}}" class="btn btn-info"> Create Post </a> --}}
   <table class="table"> 
        <tr> 
            <th>
                #Num
            </th>
            <th>
                Title
            </th>
            <th>
                Description
            </th>
            <th>
                From
            </th>
            <th>
                To
            </th>
            <th>
            deliver_price
            </th>
        </tr>    
        {{-- @dd($data) --}}
        {{-- @foreach ($data as $post) --}}
            {{-- @dd($item) --}}
            <tr> 
                {{-- <td> {{$loop->iteration}} </td> --}}
                <td>
                    {{-- {{$post["title"]}}  --}}
                </td> 
                <td>
                    {{-- {{$post["description"]}}  --}}
                </td>
                <td>
                    {{-- {{$post["from"]}}  --}}
                </td>
                <td>
                    {{-- {{$post["to"]}}  --}}
                </td>
                <td>
                    {{-- {{$post["deliver_price"]}}  --}}
                </td>
                <td>
                 {{-- <a class="btn btn-warning" href="{{route('posts.show' , [$post->id])}}">Show</a> --}}
                </td>
                
             </tr>
            
        {{-- @endforeach --}}




   </table>



</body>
</html> -->