<!DOCTYPE html>
<html>
  <head>
    <title>Metrocinemas</title>
    <meta charset="utf-8">
    <meta description="Metrocinemas en un cine tapatío donde encontrás películas de diferentes géneros, épocas, etc">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
  </head>
  <body>
    <header><a href="#"><img src="/img/logo_metrocinemas.png"></a>
      <form class="buscar">
        <input type="text" name="p" placeholder="Buscar Película..." required>
        <button type="submit"><i class="fas fa-search"></i></button>
      </form>
      <nav>
        <ul>
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Cartelera</a></li>
        </ul>
      </nav>
    </header>
    <div class="peliculas">
      @foreach($movies as $movie)
      <div class="pelicula"><img src="{{ $movie->poster }}">
        <h2>{{ $movie->name }}</h2><a href="#">Comprar boletos</a>
      </div>
      @endforeach
    </div>
    <div class="ubicanos">
      <div id="map"></div>
    </div>
    <footer><a href="#">Metrocinemas</a><a href="#">Aviso de privacidad</a></footer>
  </body>
</html>