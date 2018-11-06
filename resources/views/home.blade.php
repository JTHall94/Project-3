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
                      <div class="form">
                        <textarea id="postcontent" name="postcontent"></textarea>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
