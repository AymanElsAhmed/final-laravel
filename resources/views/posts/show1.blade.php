@extends('layouts.app')

@section('content')
<div class="container bg-light" dir="rtl">
    <div class="row">
        <div class="col">
           {{-- title   desc details name hr productPrice delveryPrice from to hr  --}}
           <div class="container">
            <div class="h2 text-center"> 
                {{$post->title}}
            </div>
            <h3>
                وصف:
            </h3>
            <p>
                {{$post->description}}
            </p>
            <h3>
                بينات المنتج:
            </h3>

            <div class="inline">
            <h5>
                الاسم:
            </h5>
            <h5>
                الاسم:
            </h5>
            </div>
           </div>
                        
        </div>
        <div class="col">
            <img src="{{asset('productpic'). '/'. $post->product->product_pic }}" class="img-fluid" alt="" srcset="">
        </div>
    </div>
</div>








@endsection