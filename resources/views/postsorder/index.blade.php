@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- @dd($orders->count()) --}}

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="accordion" id="accordionExample">

                    @if ($posts->count() == 0)
                        <div class="row">
                            <div class="col">
                                <h3>{{ __('You have no Orders yet') }}</h3>
                                <a class="btn btn-primary" href="{{ route('orders.store') }}">{{ __('Add Order') }}</a>
                            </div>
                        </div>
                    @else
                        <div class="accordion" id="accordionExample">

                            @foreach ($posts as $post)
                                {{-- @foreach ($comments->post_id as $comment)
                            @dd($comment->post_id) --}}

                                {{-- @foreach ($post->comment as $comment) --}}

                                {{-- @dd($comment->post_id) --}}

                                <div class="accordion-item">

                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#acc{{ $loop->iteration }}" aria-expanded="true"
                                            aria-controls="acc{{ $loop->iteration }}">
                                            {{ $post->title }}
                                        </button>
                                    </h2>


                                    <div id="acc{{ $loop->iteration }}" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample ">


                                        <div class="accordion-body">
                                            <div class="table-responsive table-condensed">
                                                <table class="table table-hover table-sm">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" class="text-muted ">#</th>
                                                            <th scope="col"class="text-primary">??????????</th>
                                                            <th scope="col" class="text-primary">??????????</th>
                                                            <th scope="col"class="text-primary">????????????????</th>
                                                            <th scope="col"class="text-primary">?????????? ?????????????? </th>
                                                            <th scope="col"class="text-primary">??????????????</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($post->comment as $comment)
                                                            <tr>
                                                                <th scope="row" class="text-muted">
                                                                    {{ $loop->iteration }}
                                                                </th>
                                                                <td> {{ $comment->user->name }} </td>
                                                                <td class="text-danger">
                                                                    {{ $comment->deliver_price }}</td>
                                                                <td class="text-break">
                                                                    {{ $comment->description }}</td>
                                                                <td>{{ $comment->delivery_date }}</td>
                                                                <td class="text-nowrap">
                                                                    <button type="button" class="btn btn-success"
                                                                        onclick="event.preventDefault();
                                                                    document.getElementById('accept-form').submit();  "
                                                                        value="{{ $comment->id }}"
                                                                        name="test">{{ __('Accept') }}
                                                                    </button>
                                                                    <button type="button" class="btn btn-danger"
                                                                        onclick="event.preventDefault();
                                                                    document.getElementById('refuse-form').submit();">{{ __('Reject') }}</button>
                                                                </td>
                                                                <form id="accept-form" action="{{ route('orders.store') }}"
                                                                    method="POST" class="d-none">
                                                                    @csrf
                                                                    <input class="d-none" type="text"
                                                                        value="{{ $comment->id }}" name="teststst">
                                                                </form>
                                                                <form id="refuse-form" action="{{ route('orders.index') }}"
                                                                    method="POST" class="d-none">
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
                                {{-- @endforeach --}}

                                {{-- @endforeach --}}
                            @endforeach
                        </div>
                </div>
            </div>
            @endif
        </div>
    @endsection
