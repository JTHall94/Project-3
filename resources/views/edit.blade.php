@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif
            <div class="card">
                <div class="card-header">Update This Post</div>

                <div class="card-body">
                  <form method="post" action="/posts/{{ $post->id }}">
                      @method('PUT')
                      @csrf
                      <div class="form-group">
                        <input type="title" class="form-control" id="title" name="title" value="{{ $post->title }}">
                        <textarea id="content" name="content" class=" form-control mt-2 mb-2" value="{{ $post->content }}">{{ $post->content }}</textarea>
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <button type="submit" class="btn btn-primary mt-2 mb-2">Update</button>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
