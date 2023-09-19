<?php

// Verifica si se ha enviado la clave "json_data" en la solicitud POST
if (isset($_POST['json_data'])) {
    // Recibe los datos JSON enviados desde JavaScript
    $json_data = $_POST['json_data'];

    // Decodifica los datos JSON en un array o un objeto PHP
    $data = json_decode($json_data, true); // true para obtener un array asociativo
?>
<script> alert(data)</script>
<?php
    // Almacena los datos en una variable de sesión o realiza cualquier otro procesamiento necesario
    $_SESSION['mi_variable_de_sesion'] = $data;

    var_dump($json_data);
?>
    <script>
    window.authToken = <?php echo json_encode($_SESSION['mi_variable_de_sesion']['token']); ?>;
    </script>
<?php

    // Redirecciona al usuario a la página deseada
    header("Location: http://localhost/dashboard_calculadora/app/views/admin/index.php");
    exit;
} else {

}
?>
