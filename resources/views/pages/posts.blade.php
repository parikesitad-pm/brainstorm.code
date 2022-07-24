@extends('layouts.main')

@section('container')
@foreach ($posts as $post)
<div class="card mb-5">
  <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
      <h3 class="text-white text-capitalize ps-3">
        {{ $post['title'] }}
      </h3>
    </div>
  </div>
  <a href="/posts/{{ $post['slug'] }}">
    <div class="card-body">
      <h5 class="text-muted">{{ $post['author'] }}</h5>
      <p>{{ $post['body'] }}</p>
    </div>
  </a>
</div>
@endforeach
@endsection
