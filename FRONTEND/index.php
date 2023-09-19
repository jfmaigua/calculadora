<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Bienvenida</title>
    <!-- Agrega la biblioteca de Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Agrega tus estilos personalizados -->
    <link rel="stylesheet" href="./assets/css/index.css">
    <!--Libreria Notificaciones -->
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
</head>
<body>
    <div class="container-fluid">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Imágenes del carrusel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./assets/img/imagen1.jpg" alt="Imagen 1" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="./assets/img/imagen2.jpg" alt="Imagen 2" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="https://media.istockphoto.com/id/1344923073/es/foto/un-lago-en-forma-de-huellas-humanas-en-medio-de-un-frondoso-bosque-como-met%C3%A1fora-del-impacto.webp?b=1&s=612x612&w=0&k=20&c=I8UnJZeJKGTlBlx10p-qOXLUbgl6DmhVrnB8dKSXjoM=" alt="Imagen 3" class="d-block w-100">
                </div>
            </div>
        </div>
        <div class="content">
            <a href="http://localhost/dashboard_calculadora/app/views/"><i class="fas fa-user icono-esquina"></i></a>
            <img src="./assets/img/huella.png" alt="Logo de la empresa" class="logo">
            <hr>
            <h1 class="text-center">Bienvenido</h1>
            <hr>
            <div class="text-container">
                <p class="animated-text" id="animated-paragraph"></p>
            </div>
            
            <div class="text-center">
                <a href="#" class="start-button btn btn-primary">Empezar</a>
            </div>
        </div>
    </div>

    <!-- Agrega la biblioteca de Bootstrap JavaScript (CDN) al final del cuerpo -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="./assets/js/index.js"></script>
    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
</body>
</html>
