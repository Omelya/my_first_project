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

  @if($ser == null)
    <div id="app">
      <badresult></badresult>
    </div>
  @else
    <div id="app">
      <result :data='@json($ser)'></result>
    </div>
  @endif

@endsection

@section('script')

  <script src="/js/app.js">

  </script>
@endsection
