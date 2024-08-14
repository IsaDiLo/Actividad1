<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
     @vite(['resources/sass/app.scss', 'resources/js/app.js']);
</head>
<style>

   /* body {
            font-family: Arial, sans-serif;
            background-color: #cecccc;
            margin: 0;
            padding: 0;
        }

        
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
        }

        main {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1, h2, h3 {
            color: #8B0000;
        }

        p {
            font-size: 16px;
            line-height: 1.5;
            color: #666;
        }

        a {
            text-decoration: none;
            color: #ff5733;
        }

        .text-container{
            margin: 20px;
        } */
         /* Pie de página */
        
</style>
<body class="">
<header>
    <!-- --------------------BUSCADOR, TITULO, NAVEGADOR--------------------------- -->
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <div class="navbar-left d-flex align-items-center">
      <!-- Aquí podrías poner otros elementos como logotipo, enlaces de navegación, etc. -->
      <i class="bi bi-arrow-through-heart-fill me-2" style="font-size: 50px;"></i>
      <a class="navbar-brand fs-2" href="#">La Saga Crepúsculo</a>
      <!-- iconos -->
      <a class="navbar-brand" href="#">
        <i class="bi bi-instagram"></i>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav me-auto">
          <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000">Inicio</a></li>
          <li class="nav-item"><a class="nav-link active" href="http://127.0.0.1:8000/nosotros">Nosotros</a></li>
          <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/servicios">Servicios</a></li>
          <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/noticias">Noticias</a></li>
          <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/contactos">Contactos</a></li>
        </ul>
      </div>

      <div class="inicio session">
        <button><a href="http://127.0.0.1:8000/dashboard" class="btn btn-info">Registro</a></button>
      </div>
    </div>
    <form class="d-flex ms-auto" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>

</header>

<section>
    <!-- ---------------------------------------INFO--------------------------------------------- -->
<div class="text-container-align-center ms-5 mt-5">
    <h1>Nosotros</h1><br><br>

    <p >Bienvenidos al mundo de vampiros, licántropos y brillitos! Somos apasionados seguidores de la saga Crepúsculo, y este blog es nuestro rincón para explorar todos los rincones de este universo sobrenatural.</p><br>

    <h2>¿Quiénes somos?</h2><br>
    <p>Somos un grupo de fans que creció con los libros de Stephenie Meyer en la década de los noventa. Nos enamoramos de Bella, Edward y Jacob mientras exploraban el oscuro y misterioso mundo de Forks, Washington. Ahora, queremos compartir esa pasión con todos ustedes.</p><br>

    <h2>Nuestro objetivo</h2><br>
    <p>Aquí encontrarás análisis, teorías, reseñas de libros y películas, y todo lo relacionado con la saga. Desde los momentos más románticos hasta las épicas batallas entre vampiros y licántropos, estamos listos para sumergirnos en cada página y fotograma.</p><br>

    <h2>Unete a nosotros</h2><br>
    <p>¿Eres #TeamEdward o #TeamJacob? ¿Prefieres los vampiros o los licántropos? ¡Cuéntanos tus opiniones! Este blog es un espacio abierto para todos los fans. Comparte tus pensamientos, teorías y emociones mientras exploramos juntos el mundo de Crepúsculo.</p><br>

    <h3>¡Gracias por visitarnos y que la luz de la luna te guíe en esta aventura!</h3><br><br>

    </div>
</section>

<section class="container mt-5">
  {{-- ---------------------------------------CARRUSEL----------------------------------------------- --}}
  <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/crepu3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>¡Te invitamos!</h5>
        <p>Conoce mas sbre la saga de crepusculo</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/crepu4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>A conocer</h5>
        <p>Una gran historia</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/crepu6.webp" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>La saga</h5>
        <p>Los libros de Stephenie Meyer en la década de los noventa</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>


<footer class="container-fluid mt-5 d-flex align-items-center justify-content-center bg-dark text-white p-3">
    <!-- ---------------------------------PIE DE PÁGINA---------------------------------- -->
    <p>&copy; 2024 Mi Blog de Crepúsculo</p>
</footer>

</main>

</body>
</html>
<!-- <header>
        <h1>Nosotros</h1>
        <nav>
            <ul>
                <li><a href="http://127.0.0.1:8000">Inicio</a></li>
                <li><a href="http://127.0.0.1:8000/nosotros">Nosotros</a></li>
                <li><a href="http://127.0.0.1:8000/servicios">Servicios</a></li>
                <li><a href="http://127.0.0.1:8000/noticias">Noticias</a></li>
                <li><a href="http://127.0.0.1:8000/contactos">Contactos</a></li>
            </ul>
        </nav>
    </header>

    <div class="text-container">
    <h1>Nosotros</h1><br><br>

    <p>Bienvenidos al mundo de vampiros, licántropos y brillitos! Somos apasionados seguidores de la saga Crepúsculo, y este blog es nuestro rincón para explorar todos los rincones de este universo sobrenatural.</p><br>

    <h2>¿Quiénes somos?</h2><br>
    <p>Somos un grupo de fans que creció con los libros de Stephenie Meyer en la década de los noventa. Nos enamoramos de Bella, Edward y Jacob mientras exploraban el oscuro y misterioso mundo de Forks, Washington. Ahora, queremos compartir esa pasión con todos ustedes.</p><br>

    <h2>Nuestro objetivo</h2><br>
    <p>Aquí encontrarás análisis, teorías, reseñas de libros y películas, y todo lo relacionado con la saga. Desde los momentos más románticos hasta las épicas batallas entre vampiros y licántropos, estamos listos para sumergirnos en cada página y fotograma.</p><br>

    <h2>Unete a nosotros</h2><br>
    <p>¿Eres #TeamEdward o #TeamJacob? ¿Prefieres los vampiros o los licántropos? ¡Cuéntanos tus opiniones! Este blog es un espacio abierto para todos los fans. Comparte tus pensamientos, teorías y emociones mientras exploramos juntos el mundo de Crepúsculo.</p><br>

    <h3>¡Gracias por visitarnos y que la luz de la luna te guíe en esta aventura!</h3><br><br>

    </div> -->

</body>
</html>