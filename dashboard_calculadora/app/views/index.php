
<?php
// Inicia o reanuda la sesión
session_start();
?>
<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-wide customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../public/assets/"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Calculadora HC|SICMA</title>

    <meta name="description" content="" />

    <!-- Favicon -->

    <link rel="icon" type="image/x-icon" href="../../public/assets/img/favicon/favicon.ico" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />
    <!-- libreria Notificaciones -->

    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">

    <link rel="stylesheet" href="../../public/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../public/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../public/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../public/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="../../public/assets/vendor/css/pages/page-auth.css" />

    <!-- Helpers -->
    <script src="../../public/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../public/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->
    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.html" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                    <img  heigh="90px" width="90px" src="data:image/png;base64,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" alt="logo">
                  </span>
                  <span class="app-brand-text demo text-body fw-bold"></span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2   text-center ">Bienvenido ! 👋</h4>
              <br>
              <p class="mb-4">Inicie sesión en su cuenta y comience la aventura.</p>

              <form id="formAuthentication" class="mb-3" method="POST" >
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Escriba su email"
                    autofocus />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Contraseña</label>
                    <a href="auth-forgot-password-basic.html">
                      <small>Olvidaste tu Contraseña?</small>
                    </a>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password" />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>

                <div class="mb-3">
                  <input class="btn btn-primary d-grid w-100" type="submit"/>
                </div>
              </form>
            </div>
          </div>

          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="../../public/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../public/assets/vendor/libs/popper/popper.js"></script>
    <script src="../../public/assets/vendor/js/bootstrap.js"></script>
    <script src="../../public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../public/assets/vendor/js/menu.js"></script>
    <script src="../../public/js/login.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <!-- Agregar jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Main JS -->
    <script src="../../public/assets/js/main.js"></script>

    <!-- Page JS -->
    <!--Libreria Notificaciones-->

    <!-- Incluir SweetAlert desde un CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
