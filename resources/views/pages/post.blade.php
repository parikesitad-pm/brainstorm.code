@extends('layouts.main')

@section('container')
<div class="card mb-5">
  <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
      <h3 class="text-white text-capitalize ps-3">{{ $post['title'] }}</h3>
    </div>
  </div>
  <div class="card-body">
    <h5 class="text-muted">{{ $post['author'] }}</h5>
    <p>{{ $post['body'] }}</p>
  </div>
</div>


<p class="mt-4 text-sm">

  <a href="{{ url('/posts') }}" class="text-primary text-gradient font-weight-bold text-end">Back to posts</a>
</p>
@endsection
