@extends('layouts.app')

@section('content')
<div class="container bg-light" dir="rtl">
    <div class="row">
        <div class="col">
            test
        </div>
        <div class="col">
            <img src="{{asset('productpic'). '/'. $post->product->product_pic }}" class="img-fluid" alt="" srcset="">
        </div>
    </div>
</div>




@endsection