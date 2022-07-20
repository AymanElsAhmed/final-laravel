@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($posts->count() == 0)
            <h3>{{ __('No Posts Yet') }}</h3>
        @else
            <table border="2" cellpadding="5">
                <thead align="center">
                    <tr>
                        <th>{{ __('Post') }}</th>
                        <th>{{ __('Description') }}</th>
                        <th>{{ __('From') }}</th>
                        <th>{{ __('To') }}</th>
                        <th>{{ __('Deliver Price') }}</th>
                        <th>{{ __('Product') }}</th>
                        <th>{{ __('User') }}</th>
                        <th colspan="2">{{ __('Action') }}</th>
                    </tr>
                </thead>
                <tbody align="center">
                    @foreach ($posts as $post)
                        <tr>
                            <td>
                                <a href="{{ route('posts.show', $post->id) }}">
                                    {{ $post->title }}
                                </a>
                            </td>
                            <td>{{ $post->description }}</td>
                            <td>{{ $post->from }}</td>
                            <td>{{ $post->to }}</td>
                            <td>{{ $post->deliver_price }}</td>
                            <td>{{ $post->product->name }}</td>
                            <td>{{ $post->user->name }}</td>
                            <td>
                                <a href="{{ route('posts.edit', $post) }}">
                                    {{ __('Edit') }}
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
