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
      <div class="asientos"><span class="seat"><i class="fa fa-star"></i>
          <p>A 0</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>A 1</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>A 2</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>A 3</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>A 4</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>A 5</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>A 6</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>A 7</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>A 8</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>A 9</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>B 0</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>B 1</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>B 2</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>B 3</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>B 4</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>B 5</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>B 6</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>B 7</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>B 8</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>B 9</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>C 0</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>C 1</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>C 2</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>C 3</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>C 4</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>C 5</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>C 6</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>C 7</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>C 8</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>C 9</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>D 0</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>D 1</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>D 2</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>D 3</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>D 4</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>D 5</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>D 6</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>D 7</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>D 8</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>D 9</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>E 0</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>E 1</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>E 2</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>E 3</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>E 4</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>E 5</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>E 6</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>E 7</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>E 8</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>E 9</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>F 0</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>F 1</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>F 2</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>F 3</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>F 4</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>F 5</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>F 6</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>F 7</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>F 8</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>F 9</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>G 0</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>G 1</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>G 2</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>G 3</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>G 4</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>G 5</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>G 6</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>G 7</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>G 8</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>G 9</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>H 0</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>H 1</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>H 2</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>H 3</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>H 4</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>H 5</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>H 6</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>H 7</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>H 8</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>H 9</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>I 0</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>I 1</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>I 2</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>I 3</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>I 4</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>I 5</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>I 6</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>I 7</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>I 8</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>I 9</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>J 0</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>J 1</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>J 2</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>J 3</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>J 4</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>J 5</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>J 6</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>J 7</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>J 8</p></span><span class="seat"><i class="fa fa-star"></i>
          <p>J 9</p></span>
      </div>
      <button type="submit">Continuar</button>
    </div>
    <footer><a href="#">Metrocinemas</a><a href="#">Aviso de privacidad</a>
      <script src="{{ mix('/js/manifest.js') }}" type="text/javascript"></script>
      <script src="{{ mix('/js/vendor.js') }}" type="text/javascript"></script>
      <script src="{{ mix('/js/general.js') }}" type="text/javascript"></script>
    </footer>
  </body>
</html>