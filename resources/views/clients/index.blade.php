@extends('layouts.app')

@section('content')
    <div class="container" style="width: 600px;margin-top: 40px;margin-right: 5%; margin-bottom: 20px;">

        <div class="row">
            <div class="col">
                <form class="d-flex" role="search" type="GET" action="">
                    <div class="input-group">
                        <input class="form-control me-2" name="search" type="search" aria-label="Search">
                    </div>
                    <button class="btn btn-outline-primary" type="submit">بحث</button>
                </form>
            </div>
            <div class="col">
                <a href="{{ route('clients.create') }}" class="btn btn-outline-dark">اضافة عميل</a>
            </div>
        </div>

    </div>


    <div class="container">
        <div class="row">
                @foreach ($clients as $client)
                    {{-- <div class="col-"> --}}
                    {{-- <div class="card border-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body text-secondary">
                        <h5 class="card-title">secondary card title</h5>
                        <p class="card-text text-dark">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div> --}}


                    <div class="col-sm-12 col-md-4 col-lg-2 offset-sm-3 offset-md-0 offset-lg-0 mb-4" style="width: 20rem;">

                        <div class="card  border-secondary shadow-sm text-center">
                            {{-- <img src="media/1.webp" alt=""> --}}

                            <div class="card-header text-white" style="background-color:#3C66AE">
                                {{ $client->name }}
                            </div>

                            <div class="card-body text-secondary">
                                <p class="card-text text-dark">
                                    {{ __('Adress: ') }}
                                    {{ $client->adress }}
                                </p>

                                <p class="card-text text-dark">
                                    {{ __('Phone: ') }}
                                    {{ $client->phone_number }}
                                </p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">{{ $client->created_at }}</small>
                                </div>
                                <div>
                                    <small class="text-muted">
                                        <img src="{{ asset('profilepic') . '/' . $client->user->profile_pic }}"
                                            alt="{{ $client->user->name }}" style="height:40px; width:40px;"
                                            class="rounded-circle">
                                        {{ $client->user->name }}
                                    </small>
                                    <div class="mt-3">
                                        <a class="btn text-white" style="background-color:#3C66AE;"
                                            href="{{ route('clients.show', $client->id) }}">
                                            {{-- <a class="btn btn-warning" href="{{ route('clients.show', $client->id) }}"> --}}
                                            {{ __('Show') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
            


        </div>
    </div>
@endsection
