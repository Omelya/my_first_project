<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My first project</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body class="container">
<div class="d-flex align-items-center justify-content-center mt-5 flex-column">
  <div class="">
    @foreach($counts as $count)
      <p>{{$count->count}}</p>
    @endforeach
  </div>
  <div class="">
    <form action="{{ route('counts.update', $count) }}" method="post">
      @method('patch')
      @csrf

      <button class="btn btn-primary" type="submit" name="count" value="{{$count->count + 1}}">+</button>
      <button class="btn btn-danger" type="submit" name="count" value="{{$count->count - 1}}">-</button>
    </div>
    </form>
  </div>
</body>
</html>
