<?php
class AuthController {
    public function login() {
        // Verificar si se enviaron credenciales desde la vista
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'], $_POST['password'])) {
            // Construir los datos de la solicitud
            $requestData = array(
                'email' => $_POST['email'],
                'password' => $_POST['password']
            );

            // Convertir los datos a formato JSON
            $jsonRequestData = json_encode($requestData);

            // Configurar las opciones de la solicitud
            $options = array(
                'http' => array(
                    'method' => 'POST',
                    'header' => 'Content-Type: application/json',
                    'content' => $jsonRequestData
                )
            );

            // Crear el contexto de la solicitud
            $context = stream_context_create($options);

            // Realizar la solicitud HTTP a la API de autenticación
            $apiResponse = @file_get_contents('http://localhost:4000/users/authenticate', false, $context);

            // Verificar si la solicitud fue exitosa (sin errores)
            if ($apiResponse !== false) {
                // Procesar la respuesta de la API (suponiendo que la respuesta es JSON)
                $apiResponseArray = json_decode($apiResponse, true);

                // Verificar si la autenticación fue exitosa
                if (isset($apiResponseArray['token'])) {
                    // Autenticación exitosa, guardar el token en una variable de sesión
                    session_start();
                    $_SESSION['id'] = $apiResponseArray['id'];
                    $_SESSION['fullName'] = $apiResponseArray['fullName'];
                    $_SESSION['email'] = $apiResponseArray['email'];
                    $_SESSION['rol'] = $apiResponseArray['rol'];
                    $_SESSION['cellphone'] = $apiResponseArray['cellphone'];
                    $_SESSION['token'] = $apiResponseArray['token'];

                    // Redireccionar al usuario a la página de inicio o a otra vista
                    header('Location:  http://localhost/dashboard_calculadora/app/views/admin/index.php');
                    exit;
                } else {
                    // Autenticación fallida, mostrar un mensaje de error en la vista
                    echo"No autorizado";

                }
            } else {
                // Hubo un error en la solicitud, mostrar una notificación de error con SweetAlert
                // Autenticación fallida, mostrar un mensaje de error en la vista
                
                echo "credenciales incorectas";

            }
        } else {
            // Mostrar la vista de inicio de sesión (formulario de inicio de sesión)
           // Autenticación fallida, mostrar un mensaje de error en la vista
           echo "datos no ingresados";

        }
    }
}
