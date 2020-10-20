@extends('_layouts/index')

@section('content')

<section class="max-w-4xl mx-auto py-8">
  <h1 class="font-serif text-3xl mmb-8">{{ $post->title }}</h1>
  <div class="wysiwyg">
    {{ $post->body }}
  </div>
</section>

@endsection