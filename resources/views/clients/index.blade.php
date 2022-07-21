@extends('layouts.app')

@section('content')


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


  @endsection














