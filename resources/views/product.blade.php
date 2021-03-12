<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="{{asset('css/app.css')}}">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">
      <title>La Molisana</title>
    </head>

    <body>

      @include('header')

      <main>
        <div class="product">
          <div class="left">
            @if (($idProduct) == 1)
              <a href="/product/{{count($array)}}">
            @else
              <a href="/product/{{$idProduct - 1}}">
            @endif
              <i class="fas fa-chevron-left"></i>
            </a>
          </div>
          <div class="container">
            <div class="product-title">{{$array[$idProduct - 1]['titolo']}}</div>
            <img width="300px" src="{{$array[$idProduct - 1]['src-h']}}">
            <img width="300px" src="{{$array[$idProduct - 1]['src-p']}}">
            <div class="product-description">{!!$array[$idProduct - 1]['descrizione']!!}</div>
          </div>
          <div class="right">
            @if (($idProduct) == count($array))
              <a href="/product/1">
            @else
              <a href="/product/{{$idProduct + 1}}">
            @endif
              <i class="fas fa-chevron-right"></i>
            </a>
          </div>
        </div>
      </main>

      @include('footer')

    </body>

</html>
