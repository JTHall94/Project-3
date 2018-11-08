@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Delete This Post?</div>
                <div class="card-body">
                  <form method="post" action="/posts/{{ $post->id }}">
                      @method('DELETE')
                      @csrf
                      <div class="form-group">
                        <input type="title" class="form-control" id="title" name="title" value="{{ $post->title }}" readonly>
                        <textarea id="content" name="content" class=" form-control mt-2 mb-2" value="{{ $post->content }}" readonly>{{ $post->content }}</textarea>
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <button type="submit" class="btn btn-danger mt-2 mb-2">Delete Post</button>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
