<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>
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
          <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/noticias">Noticias</a></li>
          <li class="nav-item"><a class="nav-link active" href="http://127.0.0.1:8000/contactos">Contactos</a></li>
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
  {{-- -------------------------------------FORMULARIO------------------------------------------------ --}}
  <div class="container mt-5 d-flex justify-content-center">
    <form class="border border-dark p-4 rounded shadow" style="width: 100%; max-width: 600px;">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Escribe tu correo</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Verifica que tu correo esté escrito correctamente.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3">
        <label for="exampleInputDuda" class="form-label">Escribe tu duda o sugerencia</label>
        <textarea class="form-control" id="exampleInputDuda" rows="3"></textarea>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Validar</label>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>

</section>

<section>
  <button class="btn btn-primary d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive">Toggle offcanvas</button>

<div class="alert alert-info d-none d-lg-block text-center mt-5">¡Gracias por tus comentarios los tendremos en cuenta! </div>

<div class="offcanvas-lg offcanvas-end" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasResponsiveLabel">Responsive offcanvas</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
  </div>
  {{-- <div class="offcanvas-body">
    <p class="mb-0">This is content within an <code>.offcanvas-lg</code>.</p>
  </div> --}}
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
    <h1>Contacto</h1>
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

    <h1>Contactos</h1><br><br>

    <h2>Contactanos:</h2><br>
    <p>¿Tienes preguntas, comentarios o simplemente quieres compartir tus pensamientos sobre Crepúsculo? ¡Nos encantaría escuchar de ti! Puedes ponerte en contacto con nosotros de las siguientes maneras:<br>
    Correo Electrónico Envíanos un correo a contacto@crepusculo-fans.com. <br>
    Redes Sociales: Síguenos en Twitter, Instagram y Facebook para estar al tanto de las últimas noticias y eventos.<br>
    Formulario de Contacto: Completa el formulario a continuación y te responderemos lo antes posible.</p><br>
    
   </div>

</body>
</html> -->