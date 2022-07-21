
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
      <a href="{{route('clients.create')}}" class="btn btn-info">اضافة عميل</a>
            <!-- <button type="button" class="btn btn-primary">Creat Post</button> -->
        </form>
        <form class="d-flex" role="search" type="get" action="">
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
            @foreach ($clients as $client)
                <div class="col">
                    <div class="card shadow-sm">
                       <img src="media/1.webp" alt="">

                       <div class="card-body">
                       <label for="name" class="form-label text-primary">الاسم</label>
                        <h1> {{$client["name"]}} </h1>
                        
                       <label for="name" class="form-label text-primary">العنوان</label>
                        <p class="card-text"> {{$client["adress"]}}  </p>
                        
                       <label for="name" class="form-label text-primary">الموبايل</label>
                        <p class="card-text"> {{$client["phone_number"]}}  </p>
                
                        
              
                        <br><br>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                    </div>
                            <small class="text-muted">{{$client->created_at}}</small>
                        </div>
                        <div>
                        <a class="btn btn-warning" href="{{route('clients.show' , [$client->id])}}">عرض</a>
                            <a class="navbar-brand" href="#">
                                <img src="{{asset('profilepic'). '/'. $client->user->profile_pic }}" alt="Logo" style="width:40px;" class="rounded-pill"> <small class="text-muted">{{$client->user->name}}</small>
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





















