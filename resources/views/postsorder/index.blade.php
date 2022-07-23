@extends('layouts.app')

@section('content')
    
<div class="container">

</div>


  <div >
    <div class="row">
        <div class="col-md-8 offset-md-2" dir="rtl">
            <div class="accordion" id="accordionExample">
                @foreach ($posts as $post)
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#acc{{$loop->iteration}}" aria-expanded="true" aria-controls="acc{{$loop->iteration}}">
                            {{$post->title}}
                        </button>
                    </h2>
                    <div id="acc{{$loop->iteration}}" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample " >
                        <div class="accordion-body">
                            <div class="table-responsive">
                                <table class="table table-hover  table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-muted ">م</th>
                                            <th scope="col"class="text-primary" >الاسم</th>
                                            <th scope="col" class="text-primary">السعر</th>
                                            <th scope="col"class="text-primary">التفاصيل</th>
                                            <th scope="col"class="text-primary">تاريخ التوصيل </th>
                                            <th scope="col"class="text-primary">الاجراء</th>

                                        </tr>
                                    </thead>
                                    <tbody > 
                                        @foreach ($post->comment as $comment)
                                        <tr>
                                            <th scope="row" class="text-muted">{{$loop->iteration }}</th>
                                            <td> {{$comment->user->name}} </td>
                                            <td class="text-danger">{{$comment->deliver_price}}</td>
                                            <td class="text-break">{{$comment->description}}</td>
                                            <td>{{$comment->delivery_date}}</td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-success" onclick="event.preventDefault();
                                                document.getElementById('accept-form').submit();  " value="{{$comment->id}}" name="test" >قبول </button>
                                                <button type="button" class="btn btn-danger" onclick="event.preventDefault();
                                                document.getElementById('refuse-form').submit();">رفض</button>
                                            </td>
                                            <form id="accept-form" action="{{ route('orders.store') }}" method="POST" class="d-none">
                                                @csrf
                                                <input class="d-none" type="text" value="{{$comment->id}}" name="teststst">
                                            </form>
                                            <form id="refuse-form" action="" method="POST" class="d-none">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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