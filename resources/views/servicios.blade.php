<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
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
          <li class="nav-item"><a class="nav-link active" href="http://127.0.0.1:8000/servicios">Servicios</a></li>
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
<!-- ---------------------------------------SECCION SERVICIOS--------------------------------------------------- -->
<div class="text-container">
    <h1>Servicios</h1><br><br>

    <h2>Asesoramiento vampírico</h2>
    <p>¿Necesitas consejos sobre cómo sobrevivir como un vampiro? Nuestro equipo de expertos está aquí para ayudarte. Desde elegir la mejor dieta hasta evitar la luz del sol, te proporcionaremos las mejores estrategias para vivir una vida inmortal.</p><br>

    <h2>Clases de Transformación Licantrópica</h2>
    <p>¿Sueñas con convertirte en un lobo? Ofrecemos clases prácticas para aquellos que deseen abrazar su lado licántropo. Aprende a controlar tus transformaciones y a aullar bajo la luna llena como un verdadero miembro de la manada.</p><br>

    <h2>Consultoria romántica</h2>
    <p>¿Tienes problemas en tu relación con un vampiro o un licántropo? Nuestros consejeros especializados en romances sobrenaturales te guiarán a través de los altibajos del amor eterno. Desde triángulos amorosos hasta conflictos familiares, estamos aquí para escucharte.</p><br>

    <h2>Eventos nocturnos</h2>
    <p>¿Quieres organizar una fiesta temática de Crepúsculo? Ofrecemos servicios de planificación para eventos nocturnos. Desde bailes en el bosque hasta cenas elegantes en la mansión Cullen, haremos que tu velada sea inolvidable.</p><br><br>

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
    <h1>Servicios</h1>
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
    <h1>Servicios</h1><br><br>

    <h2>Asesoramiento vampírico</h2>
    <p>¿Necesitas consejos sobre cómo sobrevivir como un vampiro? Nuestro equipo de expertos está aquí para ayudarte. Desde elegir la mejor dieta hasta evitar la luz del sol, te proporcionaremos las mejores estrategias para vivir una vida inmortal.</p><br>

    <h2>Clases de Transformación Licantrópica</h2>
    <p>¿Sueñas con convertirte en un lobo? Ofrecemos clases prácticas para aquellos que deseen abrazar su lado licántropo. Aprende a controlar tus transformaciones y a aullar bajo la luna llena como un verdadero miembro de la manada.</p><br>

    <h2>Consultoria romántica</h2>
    <p>¿Tienes problemas en tu relación con un vampiro o un licántropo? Nuestros consejeros especializados en romances sobrenaturales te guiarán a través de los altibajos del amor eterno. Desde triángulos amorosos hasta conflictos familiares, estamos aquí para escucharte.</p><br>

    <h2>Eventos nocturnos</h2>
    <p>¿Quieres organizar una fiesta temática de Crepúsculo? Ofrecemos servicios de planificación para eventos nocturnos. Desde bailes en el bosque hasta cenas elegantes en la mansión Cullen, haremos que tu velada sea inolvidable.</p><br><br>

    </div>

</body>
</html> -->