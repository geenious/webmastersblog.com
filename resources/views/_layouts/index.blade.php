@extends('_layouts/base')

@section('body')
  <div id="app" class="flex flex-col min-h-screen">

    @include('_components/header')

    <main id="main" class="bg-indigo-100 flex-1">
      @yield('content')
    </main>

    @include('_components/footer')

  </div>
@endsection
