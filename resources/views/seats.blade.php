<!DOCTYPE html>
<html>
  <head>
    <title>Metrocinemas</title>
    <meta charset="utf-8">
    <meta description="Metrocinemas en un cine tapatío donde encontrás películas de diferentes géneros, épocas, etc">
    <meta name="keywords" content="metrocinemas, cinema, cine, peliculas, estrenos, clasicos de cine, peliculas taquilleras, cine tapatio, cinefilos, cine de arte, cultura">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
  </head>
  <body id="seats">
    <header class="desktopMaster"><a href="/"><img src="/img/logo_metrocinemas.png"></a>
      <form class="buscar" method="get" action="/buscar">
        <input type="text" name="q" placeholder="Buscar Película..." required>
        <button type="submit"><i class="fas fa-search"></i></button>
      </form>
      <nav>
        <ul>
          <li><a href="/">Inicio</a></li>
          <li><a href="/funciones">Funciones</a></li>
        </ul>
      </nav>
    </header>
    <header class="mobileMaster"><a href="/"><img src="/img/logo_metrocinemas.png"></a>
      <div class="menuMovil">
        <button class="boton-menu" type="button">
          <div class="animated-icon"><span></span><span></span><span></span><span></span></div>
        </button>
        <div class="collapse">
          <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="/funciones">Funciones</a></li>
          </ul>
        </div>
      </div>
    </header>
    <div class="container">
      <h1>Elige tus asientos</h1>
      <div class="asientos">
        @php
          {{$y = 0; $cont = 0;}}
          {{$arr = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J');}}
          {{$asientos=json_decode($seats[0]->seats);}}
        @endphp
        @for($x = 0; $x < 100; $x++)
          @if($asientos[$x] != 'true')<span class="seat"><i class="fa fa-star"></i>
            <p>{{$arr[$cont]}} {{$y + 1}}</p></span>
          @else<span class="seat ocupado"><i class="fa fa-star"></i>
            <p>{{$arr[$cont]}} {{$y + 1}}</p></span>
          @endif
          @if($y == 9)
            <p hidden>{{$y = 0}}</p>
            <p hidden>{{$cont++}}</p>
          @else
            <p hidden>{{$y++}}</p>
          @endif
        @endfor
      </div>
      <p class="arreglo" hidden>{{ $seats[0]->seats }}</p>
      <p class="funcion" hidden>{{ $seats[0]->function_id }}</p>
    </div>
    <div class="detalles">
      <h2>Detalles de compra:</h2>
      <h4>Película: {{$movie->name}}</h4>
      <h4>Función: {{$seats[0]->function->schedule}}</h4><span></span>
      <h2>Total de compra</h2>
      <p> </p>
      <button id="btnContinuar" type="submit" formmethod="post">Continuar</button>
    </div>
    <footer><a href="#">Metrocinemas</a><a href="#">Aviso de privacidad</a>
      <script src="{{ mix('/js/manifest.js') }}" type="text/javascript"></script>
      <script src="{{ mix('/js/vendor.js') }}" type="text/javascript"></script>
      <script src="{{ mix('/js/general.js') }}" type="text/javascript"></script>
    </footer>
  </body>
</html>