<?php

// Define el token de autenticación
$token = $_SESSION['mi_variable_de_sesion']['token'];

// URL de tu API
$apiUrl = "http://localhost:4000/users/";

// Configura la solicitud cURL
$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . $token, // Agrega el token de autenticación en el encabezado
]);

// Realiza la solicitud cURL
$response = curl_exec($ch);

// Verifica si hubo errores en la solicitud
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}

// Cierra la sesión cURL
curl_close($ch);

// Decodifica la respuesta JSON en un array
$users = json_decode($response, true);
?>
 <!-- Content wrapper -->
 <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">Usuarios /</span> Gestionar Todo</h4>




            <!-- Bootstrap Table with Header - Light -->
            <div class="card">
                
                <h5 class="card-header"></h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>Nombre</th>
                                <th>E-Mail</th>
                                <th>Rol</th>
                                <th>Telefono</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?php echo $user['fullName']; ?></td>
                                <td><?php echo $user['email']; ?></td>
                                <td><?php echo $user['rol']; ?></td>
                                <td><?php echo $user['cellphone']; ?></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                        <a class="dropdown-item edit-user" href="javascript:void(0);" data-id="<?php echo $user['id']; ?>">
    <i class="bx bx-edit-alt me-1"></i> Editar
</a>

                                            <a class="dropdown-item delete-user" href="javascript:void(0);" data-id="<?php echo $user['id']; ?>">
        <i class="bx bx-trash me-1"></i> Eliminar
    </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Bootstrap Table with Header - Light -->

            <hr class="my-5" />

        
        <!-- / Content -->