@extends('layouts.app')

@section('content')
<div style="margin: auto;
width: 50%;
box-shadow: 1px 2px 3px 4px rgba(104, 145, 184, 0.4);
padding: 10px;">

<p class="h1 text-center text-primary">إضافة بوست
</p>
    <div class="container">
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                >
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description</label>
            <textarea type="text" name="description" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" ></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">From</label>
            <input type="text" name="from" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                >
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">To</label>
            <input type="text" name="to" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                >
        </div>
	@@ -40,23 +47,24 @@
                       >{{ $product->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">client name</label>
            <select name="client_id" id="client_id">
                {{-- <option value="0">{{ __('Choose Product') }}</option> --}}
                @foreach ($clients as $client)
                    <option value="{{$client->id}}"
                       >{{ $client->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <a href="{{route("clients.create")}}" class="btn btn-primary">أضف عميل جديد </a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
</div>