document.addEventListener("DOMContentLoaded", function() {

    // Coloca aquí tu código que agrega eventos
     
// Obtén el formulario por su ID
const form = document.getElementById("userCreate");

form.addEventListener("submit", function (e) {
    e.preventDefault(); // Evita que el formulario se envíe de forma predeterminada

    // Obtiene los valores de los campos del formulario
    const firstName = document.getElementById("firstName").value;
    const lastName = document.getElementById("lastName").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const cellphone = document.getElementById("cellphone").value;
    const rol = document.getElementById("rol").value;

    // Combina firstName y lastName en fullName
    const fullName = `${firstName} ${lastName}`;

    // Crea un objeto con los datos del usuario
    const userData = {
        fullName: fullName,
        email: email,
        password: password,
        cellphone: cellphone,
        rol: rol
    };

    // Realiza la solicitud POST a la API
    fetch("http://localhost:4000/users/register", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(userData)
    })
    .then((response) => response.json())
    .then((data) => {
        // Maneja la respuesta de la API aquí
        console.log(data);

        if (data.message === "Registro exitoso") {
            // Si el usuario se registró con éxito, puedes realizar acciones adicionales aquí
            Swal.fire({
                title: 'Exitoso!',
                text: 'Usuario Creado!',
                icon: 'success',
                didClose: () => {
                  // Esta función se ejecuta cuando el usuario cierra la notificación
                  // Redirecciona a la URL deseada aquí
                  window.location.href = 'http://localhost/dashboard_calculadora/app/views/admin/view_user.php'; // Cambia la URL a la que deseas redirigir
                }
              });

        } else {

            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: data.message, // Muestra el mensaje de la API en la notificación de Swal
            });
        }
    })
    .catch((error) => {
        // Maneja los errores de la solicitud
        console.error("Error:", error);
        alert("Hubo un problema al registrar el usuario.");
    });
});

  });
 