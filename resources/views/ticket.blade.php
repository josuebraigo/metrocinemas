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
  <body id="ticket">
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
      <div class="pelicula"><img src="{{$function->movie->poster}}">
        <h1>{{$function->movie->name}}</h1>
      </div>
      <div class="info">
        <h2>Horario: {{$function->schedule}}</h2>
        <h3>Asientos:
          @for($i = 0; $i < sizeOf($seleccionados); $i++)<span>
            {{$seleccionados[$i]}},</span>
          @endfor
        </h3>
        <h3>Sala: {{$function->room->name}}</h3>
        <p>Código: {{$ticket->code}}</p>
      </div>
    </div>
    <footer><a href="#">Metrocinemas</a><a href="#">Aviso de privacidad</a>
      <script src="{{ mix('/js/manifest.js') }}" type="text/javascript"></script>
      <script src="{{ mix('/js/vendor.js') }}" type="text/javascript"></script>
      <script src="{{ mix('/js/general.js') }}" type="text/javascript"></script>
    </footer>
  </body>
</html>