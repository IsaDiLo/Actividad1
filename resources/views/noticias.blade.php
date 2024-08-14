<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js']);
</head>
<style>
    
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
          <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/nosotros">Nosotros</a></li>
          <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/servicios">Servicios</a></li>
          <li class="nav-item"><a class="nav-link active" href="http://127.0.0.1:8000/noticias">Noticias</a></li>
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
  <!-- ----------------------------------------SECCION NOTICIAS------------------------------------- -->
<div class="text-container-align-center ms-5 mt-5">
    <h1>Lo más relevante</h1><br><br>


    <h3>Serie de animación</h3><br>
    <p>Lionsgate Television está desarrollando una serie de animación basada en la saga Crepúsculo. Aunque aún no se han revelado muchos detalles, esta nueva adaptación promete sumergirnos nuevamente en el mundo de vampiros, licántropos y romances sobrenaturales.</p><br>

    <h3>Nuevo libro</h3><br>
    <p>La autora Stephenie Meyer lanzará un nuevo libro titulado “Sol de medianoche”, que ampliará la historia de Crepúsculo. Este libro se centra en la perspectiva de Edward Cullen y se espera que revele más detalles sobre su relación con Bella Swan.</p><br>

    <h3>Posibles películas</h3><br>
    <p>Stephanie Meyer tiene planes de escribir dos libros adicionales sobre los vampiros y lobos de Forks. Aunque aún no se ha confirmado, existe la posibilidad de que estos nuevos libros también se adapten al cine3.</p><br><br>

</section>

<section class="carrusel">
  <!-- ----------------------------------------SECCION CARRUSEL----------------------------------------- -->
  <div align='center'>
        <div id="carouselExampleIndicators" class="carousel slide" style="width: 600px; height: 400px;">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="width: 100%; height: 100%;">
              <div class="carousel-item active">
                <img src="img/portada.jfif" class="d-block w-100" style="height: 100%;" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/OIP.jfif" class="d-block w-100" style="height: 100%;" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/libro.jpg" class="d-block w-100" style="height: 100%;" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>

        </div> 
</section>


<footer class="container-fluid mt-5 d-flex align-items-center justify-content-center bg-dark text-white p-3">
    <!-- ---------------------------------PIE DE PÁGINA---------------------------------- -->
    <p>&copy; 2024 Mi Blog de Crepúsculo</p>
</footer>

</main>

</body>
</html>
<!-- <body>
    <header>
    <h1>Noticias</h1>
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
    <h1>Lo más relevante</h1><br><br>


    <h3>Serie de animación</h3><br>
    <p>Lionsgate Television está desarrollando una serie de animación basada en la saga Crepúsculo. Aunque aún no se han revelado muchos detalles, esta nueva adaptación promete sumergirnos nuevamente en el mundo de vampiros, licántropos y romances sobrenaturales.</p><br>

    <h3>Nuevo libro</h3><br>
    <p>La autora Stephenie Meyer lanzará un nuevo libro titulado “Sol de medianoche”, que ampliará la historia de Crepúsculo. Este libro se centra en la perspectiva de Edward Cullen y se espera que revele más detalles sobre su relación con Bella Swan.</p><br>

    <h3>Posibles películas</h3><br>
    <p>Stephanie Meyer tiene planes de escribir dos libros adicionales sobre los vampiros y lobos de Forks. Aunque aún no se ha confirmado, existe la posibilidad de que estos nuevos libros también se adapten al cine3.</p><br><br>

    <div align='center'>
        <div id="carouselExampleIndicators" class="carousel slide" style="width: 600px; height: 400px;">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="width: 100%; height: 100%;">
              <div class="carousel-item active">
                <img src="img/portada.jfif" class="d-block w-100" style="height: 100%;" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/OIP.jfif" class="d-block w-100" style="height: 100%;" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/libro.jpg" class="d-block w-100" style="height: 100%;" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>

        </div> -->

</body>
</html>