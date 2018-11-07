@extends('layouts.app')

@section('content')
<div>
    <h1 id="Main Title" class="text-center">Fumblr</h1>
    @if (Route::has('login'))
        <div class="text-center">
            @auth
                <a href="{{ url('/home') }}" id="PostSmthn">Post Something</a>
            @else
                <a href="{{ route('login') }}" id="welcomelog">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" id="registerlink">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div>

<div id="postlist">
    @foreach ($posts as $post)
    <div class="card mt-3 mb-3" style="width: 18rem;" id="posted">
        <div class="card-body">
          <p class="card-subtitle text-muted">{{ $post->name }}</p>
          <h5 class="card-title text-center">{{ $post->title }}</h5>
          <p class="card-text">{{$post->content}}</p>
          <p class="edit-card"><a href="/posts/{{ $post->id }}/edit">Edit</a></p>
        </div>
    </div>
    @endforeach
</div>
@endsection
