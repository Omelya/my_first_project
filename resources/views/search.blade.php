@extends('layouts.app')

@section('title', 'Результати пошуку')

@section('style')
  <style type="text/css">
    td {
      text-align: center;
    }
  </style>
@endsection

@section('content')
  <div id="app">
    <result :data='@json($ser)'></result>
  </div>
@endsection

@section('script')

  <script src="/js/app.js">

  </script>
@endsection
