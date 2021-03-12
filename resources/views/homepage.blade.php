<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
        <title>La Molisana</title>
    </head>

    <body>

      @include('header')

      <main>
        <div class="container">
          <section class="section-first">
            <div class="title">le lunghe</div>
            @foreach ($array as $id => $product)
              @if ($product['tipo'] === 'lunga')
                <a href="/product/{{$id + 1}}"><img src="{{$product['src']}}"></a>
              @endif
            @endforeach
          </section>

          <section>
            <div class="title">le corte</div>
            @foreach ($array as $id => $product)
              @if ($product['tipo'] === 'corta')
                <a href="/product/{{$id + 1}}"><img src="{{$product['src']}}"></a>
              @endif
            @endforeach
          </section>

          <section class="section-last">
            <div class="title">le cortissime</div>
            @foreach ($array as $id => $product)
              @if ($product['tipo'] === 'cortissima')
                <a href="/product/{{$id + 1}}"><img src="{{$product['src']}}"></a>
              @endif
            @endforeach
          </section>
        </div>
      </main>

      @include('footer')

    </body>

</html>
