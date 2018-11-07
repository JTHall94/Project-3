@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Post</div>

                <div class="card-body">
                  <form class="" method="post" action="/post/{{ $post->id }}">
                      @method('PUT')
                      @csrf
                      <div class="form-group">
                          <label for="listname">List Name</label>
                          <textarea >{{ $post->content }}</textarea>
                      </div>
                      <input type="hidden" name="post_id" value="{{ $post->id }}">
                      <button type="submit" class="btn btn-success">Update List</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
