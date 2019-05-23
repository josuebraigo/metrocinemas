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
  <body id="funciones">
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
      <h1>Funciones</h1>
      @if($functions->isEmpty())
      <p>No hay funciones que mostrar</p>
      @else
      @foreach($movies as $movie)
      <div class="funciones">
        <h2>{{ $movie->name }}</h2>
        <div class="poster"><img src="{{$movie->poster}}"></div>
        <div class="horarios">
          @foreach($functions as $function)
          @if($function->movie->id == $movie->id)<a href="/funciones/{{$movie->slug}}/{{$function->id}}">{{$function->schedule}}</a>
          @endif
          @endforeach
        </div>
      </div>
      @endforeach
      @endif
    </div>
    <footer><a href="#">Metrocinemas</a><a href="#">Aviso de privacidad</a>
      <script src="{{ mix('/js/manifest.js') }}" type="text/javascript"></script>
      <script src="{{ mix('/js/vendor.js') }}" type="text/javascript"></script>
      <script src="{{ mix('/js/general.js') }}" type="text/javascript"></script>
    </footer>
  </body>
</html>