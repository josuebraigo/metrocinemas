<!DOCTYPE html>
<html>
  <head>
    <title>Metrocinemas</title>
    <meta charset="utf-8">
    <meta description="Metrocinemas en un cine tapatío donde encontrás películas de diferentes géneros, épocas, etc">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
  </head>
  <body id="cartelera">
    <header><a href="/"><img src="/img/logo_metrocinemas.png"></a>
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
    <div class="container">
      <div class="submenu">
        <h4>Géneros</h4>
        <ul>
          @foreach($genres as $genre)
          <li><a href="/cartelera/{{$genre->slug}}">{{$genre->name}}</a></li>
          @endforeach
        </ul>
      </div>
      <div class="catalogo">
        @if($movies->isEmpty())
        <p>No hay películas que mostrar =(</p>
        @else
        @foreach($movies as $movie)
        <div class="col14"><a href="/pelicula/{{$movie->slug}}"><img src="{{$movie->poster}}"></a>
          <h2>{{$movie->name}}</h2><a class="boton" href="/funciones/{{$movie->slug}}">¡Compra tus boletos!</a>
        </div>
        @endforeach
        @endif
      </div>
      <div class="navegar-paginas">
        {{$movies->links()}}
      </div>
    </div>
    <footer><a href="#">Metrocinemas</a><a href="#">Aviso de privacidad</a>
      <script src="{{ mix('/js/manifest.js') }}" type="text/javascript"></script>
      <script src="{{ mix('/js/vendor.js') }}" type="text/javascript"></script>
      <script src="{{ mix('/js/general.js') }}" type="text/javascript"></script>
    </footer>
  </body>
</html>