<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js']);
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>
<style>

    /* body{
        background-color: #fff;
        font-family: Arial, sans-serif;
    }

    .list-group-item {
        background-color: #dde0e1; 
    }

    @font-face {
    font-family: 'Blue Fonte';
    src: url('BlueFonte-Regular.ttf') format('truetype');
}

.navbar-brand fs-2 {
    font-family: 'Blue Fonte', sans-serif;
}

nav{
  background-color:;
} */
        /* body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    background-color: #A79C9A;
    margin: 0;
    padding: 0;
} */

/* Encabezado */
/* header {
    background-color: #333;
    color: #fff;
    padding: 20px;
} */

/* Enlaces de navegación */
/* nav ul {
    list-style: none;
    padding: 0;
} */

/* nav ul li {
    display: inline;
    margin-right: 20px;
} */

/* nav ul li a {
    text-decoration: none;
    color: #fff;
} */
/* BOSTRAP */

/* main {

    display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; */
            /* background-image: url("img/R.jpg"); */
            /* background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            font-family: "Courier New", monospace;

    } */




/* Pie de página */
/* footer {
    text-align: center;
    padding: 10px;
    background-color: #333;
    color: #fff;
}   */
</style>

<body class="">
<!-- container border border-primary bg-secundary -->
<main>
<!-- border-primary -->
<!-- bg-secundary -->

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
          <li class="nav-item"><a class="nav-link active" href="http://127.0.0.1:8000">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/nosotros">Nosotros</a></li>
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
    <!-- ---------------------------SECCION CARRUSEL------------------------------------- -->
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/R.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/crepu1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/crepu3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>

<section>
    <!-- -----------------------------SECCION PARTES DE LA SAGA------------------------------------ -->
   <div class="container mt-5">
  <div class="row justify-content-center row-cols-1 row-cols-md-3 g-4">
    <div class="col-md-4">
      <div class="card">
        <img src="img/R.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Crepúsculo</h5>
          <p class="card-text">Esta es la primera entrega, y es sin duda alguna la mas reconocida de la saga, porque es donde comienza toda la historia</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="img/crepu1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Luna nueva</h5>
          <p class="card-text">Después de que Edward abandona a Bella para protegerla, ella se sumerge en una profunda tristeza y se acerca a Jacob Black, quien revela su propia identidad sobrenatural.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="img/crepu3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Eclipse</h5>
          <p class="card-text">Bella se enfrenta a la amenaza de un ejército de vampiros y toma una decisión crucial entre Edward y Jacob mientras sus sentimientos y la lealtad se ponen a prueba.</p>
        </div>
      </div>
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
<Header>
    <h1>Inicio</h1>
    <nav>
    <div class="col-12 text-center">
        <button type="button" href="" class="btn btn-info">Info</button>

    </div>
    <ul>
        <li><a href="http://127.0.0.1:8000/nosotros">Nosotros</a></li>
        <li><a href="http://127.0.0.1:8000/servicios">Servicios</a></li>
        <li><a href="http://127.0.0.1:8000/noticias">Noticias</a></li>
        <li><a href="http://127.0.0.1:8000/contactos">Contactos</a></li>
    </ul>
    </nav>
</header>
<main>
    <h1>Bienvenido a nuestro blog donde podras encontrra mucha mas informacion acerca de crepusculo</h1><br>

    
</main>

<div class="card" style="width: 18rem;">
  <img src="img/libro.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

</body>



<footer>
        <p>&copy; 2024 Mi Blog de Crepúsculo</p>
    </footer>

</html> -->
