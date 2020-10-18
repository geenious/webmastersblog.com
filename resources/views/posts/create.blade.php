@extends('_layouts/index')

@section('content')

<section class="max-w-4xl mx-auto py-8">
  <h2 class="font-serif text-2xl mb-6">Create A New Post</h2>
  <div class="p-8 bg-teal-200 rounded shadow-lg">
    <form method="POST" action="/post/create">
      @csrf
      <label class="block" for="title">
        <span class="uppercase text-sm font-bold">Blog Title</span>
        <input id="title" class="form-input block w-full mt-2" type="text" name="blogTitle" required />
      </label>
      <label class="block mt-4" for="blogBody">
        <span class="uppercase text-sm font-bold">Blog Body</span>
        <textarea id="blogBody" class="form-textarea block w-full mt-2" name="blogBody" rows="10"></textarea>
      </label>
      <label class="block mt-4" for="blogTags">
        <span class="uppercase text-sm font-bold block">Blog Tags</span>
        <span class="text-xs text-gray-700 block">Seperate each tag with a comma.</span>
        <input id="blogTags" class="form-input block w-full mt-1" type="text" name="blogTags" />
      </label>
      <div class="text-right w-full mt-6">
        <button class="bg-indigo-800 py-4 px-6 font-bold text-white uppercase leading-none rounded hover:bg-pink-600 transition-colors duration-150 shadow-xl" type="submit">Post</button>
      </div>
    </form>
  </div>
</section>

@endsection