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
  <body id="seats">
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
      <h1>Elige tus asientos</h1>
      <div class="asientos">
        @php
          $y = 0;
          $arr = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J');
          $asientos = json_decode($seats[0]->seats);
        @endphp
        @for($x = 0; $x < 100; $x++)
          @if($asientos[$x] != 'true')<span class="seat"><i class="fa fa-star"></i>
            <p>{{$y}}</p></span>
          @else<span class="seat ocupado"><i class="fa fa-star"></i>
            <p>{{$y}}</p></span>
          @endif
          @php
            if($y == 9){
              $y = 0;
            }
            else{
              $y++;
            }
          @endphp
        @endfor
      </div>
      <button type="submit">Continuar</button>
      <p hidden>{{ json_decode($seats[0])->seats }}</p>
    </div>
    <footer><a href="#">Metrocinemas</a><a href="#">Aviso de privacidad</a>
      <script src="{{ mix('/js/manifest.js') }}" type="text/javascript"></script>
      <script src="{{ mix('/js/vendor.js') }}" type="text/javascript"></script>
      <script src="{{ mix('/js/general.js') }}" type="text/javascript"></script>
    </footer>
  </body>
</html>
