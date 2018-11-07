@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
    <h1 id="Main Title" class="text-center">Fumblr</h1>
    @if (Route::has('login'))
        <div class="text-center">
            @auth
                <a href="{{ url('/home') }}" id="PostSmthn">Post Something</a>
            @else
                <a href="{{ route('login') }}" id="welcomelog">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div>

<div id="postlist">
    @foreach ($posts as $post)
    <div class="card mt-3 mb-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{ $post->name }}</h5>
          <p class="card-text">{{$post->content}}</p>
        </div>
    </div>
    @endforeach
</div>
@endsection
