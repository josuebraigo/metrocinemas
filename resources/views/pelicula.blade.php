<!DOCTYPE html>
<html>
  <head>
    <title>Metrocinemas</title>
    <meta charset="utf-8">
    <meta description="Metrocinemas en un cine tapatío donde encontrás películas de diferentes géneros, épocas, etc">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
  </head>
  <body id="pelicula">
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
      <div class="poster"><img src="{{$movie->poster}}" alt="{{$movie->name}}"><a class="boton" href="/funciones/{{$movie->slug}}">¡Comprar boletos!</a></div>
      <div class="info">
        <h1>{{$movie->name}}</h1>
        <p><b>Director: </b>{{$movie->director->name}}</p>
        <p> <b>Duración: </b>{{$movie->duration}} min</p>
        <p><b>Año: </b>{{$movie->year}}</p>
        <p><b>Género:</b> 
          @foreach($genres as $genre)
          {{$genre->name}} 
          @endforeach
        </p>
        <p><b>Reparto: </b>
          @foreach($actors as $actor)
          {{$actor->name}} 
          @endforeach
        </p>
        <p><b>País: </b>{{$movie->country->name}}</p>
        <h2>Sinopsis</h2>
        <p>{{$movie->synopsis}}</p>
        <h2>Trailer</h2>
        @if(json_decode($movie->trailer)->provider == 'youtube')
        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{json_decode($movie->trailer)->id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        @elseif(json_decode($movie->trailer)->provider == 'vimeo')
        <iframe src="https://player.vimeo.com/video/{{json_decode($movie->trailer)->id}}" width="640" height="266" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
        @endif
      </div>
    </div>
    <footer><a href="#">Metrocinemas</a><a href="#">Aviso de privacidad</a>
      <script src="{{ mix('/js/manifest.js') }}" type="text/javascript"></script>
      <script src="{{ mix('/js/vendor.js') }}" type="text/javascript"></script>
      <script src="{{ mix('/js/general.js') }}" type="text/javascript"></script>
    </footer>
  </body>
</html>