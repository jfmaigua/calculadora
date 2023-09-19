// Agrega un evento de clic a los enlaces de eliminación
document.addEventListener("DOMContentLoaded", function () {
    const deleteButtons = document.querySelectorAll(".delete-user");

    deleteButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            // Obtén el ID del usuario del atributo data-id
            const userId = button.getAttribute("data-id");
            
            const authToken = window.authToken;

            // Realiza una solicitud DELETE a la API para eliminar el usuario
            fetch(`http://localhost:4000/users/${userId}`, {
                method: "DELETE",
                headers: {
                    "Content-Type": "application/json",
                    "Authorization": "Bearer " + authToken, // Agrega el token de autenticación
                },
            })
            .then((response) => {
                if (response.status === 200) {
                    // Actualiza la página después de eliminar el usuario
                    Swal.fire({
                        title: 'Exitoso!',
                        text: 'Usuario Eliminado!',
                        icon: 'success',
                        didClose: () => {
                          // Esta función se ejecuta cuando el usuario cierra la notificación
                          // Redirecciona a la URL deseada aquí
                          window.location.href = 'http://localhost/dashboard_calculadora/app/views/admin/view_user.php'; // Cambia la URL a la que deseas redirigir
                        }
                      });
                } else {
                    console.log(authToken);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Intentalo nuevamente', // Muestra el mensaje de la API en la notificación de Swal
                    });
                }
            })
            .catch((error) => {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: error, // Muestra el mensaje de la API en la notificación de Swal
                });
            });
        });
    });
});
