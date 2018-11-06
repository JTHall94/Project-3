@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right welcome-links">
            @auth
                <a href="{{ url('/home') }}">Post Something</a>
            @else
                <a href="{{ route('login') }}">login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

        <h1 id="Main Title">Fumblr</h1>

</div>

<a name="posts">
<div>
    @foreach ($posts as $post)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{ $post->name }}</h5>
          <p class="card-text">{{$post->content}}</p>
        </div>
    </div>
    @endforeach
</div>
@endsection
