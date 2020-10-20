@extends('_layouts/index')

@section('content')

<section class="max-w-4xl mx-auto py-8">
  <h1 class="font-serif text-3xl mb-6">Welcome back User</h1>
  <div class="p-8 bg-teal-200 rounded shadow-lg">
    {{-- List User's Post Entries --}}
    <ul>
      @foreach ($posts as $post)
        <li class="py-4 {{ $loop->first ? '' : 'border-t border-gray-500' }}">
          <a class="hover:underline" href="/posts/{{ $post->id }}">{{ $post->title }}</a>
        </li>
      @endforeach
    </ul>
  </div>
</section>

@endsection