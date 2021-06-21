<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form class="" action="{{route('search.result')}}" method="post">
    @csrf

    <label for="name">Назва</label>
    <input type="text" name="name">
    <label for="priceFrom">Ціна від</label>
    <input type="text" name="priceFrom">
    <label for="priceTo">Ціна до</label>
    <input type="text" name="priceTo">
    <label for="bedrooms">Кількість спальних кімнат</label>
    <input type="text" name="bedrooms" >
    <label for="bathrooms">Кількість ванних кімнат</label>
    <input type="text" name="bathrooms" >
    <label for="storeys">Кількість поверхів</label>
    <input type="text" name="storeys" >
    <label for="garages">Кількість гаражів</label>
    <input type="text" name="garages" >
    <button type="submit" name="button">Search</button>
  </form>
</body>
</html>
