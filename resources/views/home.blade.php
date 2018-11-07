@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post Something!</div>

                <div class="card-body">
                  <form method="post" action="{{ route('posts.store') }}">
                      @csrf
                      <div class="form-group">
                        <input type="title" class="form-control" id="posttitle" name="posttitle" placeholder="Enter Title">
                        <textarea id="postcontent" name="postcontent" class=" form-control mt-2 mb-2"></textarea>
                        <button type="submit" class="btn btn-primary mt-2 mb-2">Submit</button>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
