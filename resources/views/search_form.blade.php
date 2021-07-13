@extends('layouts.app')

@section('title', 'Пошук')

@section('content')
    <form class="" action="/api/search" method="post">
      @csrf

      <div id="app">
        <search></search>
      </div>

    </form>
@endsection

@section('script')

  <script src="/js/app.js">

  </script>

@endsection
