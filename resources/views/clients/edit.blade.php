@extends('layouts.app')

@section('content')
<div style="margin: auto;
width: 50%;
box-shadow: 1px 2px 3px 4px rgba(104, 145, 184, 0.4);
padding: 10px;">
<h1 class="h1 text-center text-primary"> تعديل</h1>

<div class="container">
<form class="row g-3"  method="POST" action="{{ route('clients.update', [$clients->id]) }}" enctype="multipart/form-data" >
  @csrf  
  @method('PUT')

  <div class="col-12">
      <label for="name" class="form-label text-primary">الاسم</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ $clients->name}}">
      @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="col-12">
      <label for="adress" class="form-label text-primary">العنوان</label>
      <input type="text" class="form-control" id="adress" name="adress" value="{{$clients->adress}}">
      @error('adress')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
  </div>

   
    <div class="col-12">
      <label for="phone_number" class="form-label text-primary">الموبايل</label>
      <input type="number" class="form-control" id="phone_number" name="phone_number" value="{{ $clients->phone_number}}">
      @error('phone_number')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
  </div>

           
            <button type="submit" class="btn btn-info">حفظ</button>
        </form>

    </div> 
@endsection
