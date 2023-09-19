document.getElementById("formAuthentication").addEventListener("submit", function (e) {
    e.preventDefault(); // Evita que el formulario se envíe de forma predeterminada
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    const apiUrl = "http://localhost:4000/users/authenticate";

    fetch(apiUrl, {
        method: "POST",
        headers: {
            "Content-Type": "application/json", // Especifica que estás enviando datos JSON
        },
        body: JSON.stringify({ email, password }), // Convierte los datos en JSON y los envía en el cuerpo de la solicitud
    })
    .then((response) => response.json()) // Parsea la respuesta JSON
    .then((data) => {
        // Maneja la respuesta de la API aquí
        console.log(data);


        // Verifica si la respuesta contiene un campo "message"
        if (data.message) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: data.message, // Muestra el mensaje de la API en la notificación de Swal
            });
        } else {
            // Crea un formulario dinámico para enviar los datos a PHP
            const form = document.createElement("form");
            form.method = "post"; // Método POST
            form.action = "http://localhost/dashboard_calculadora/app/controllers/login.php"; // Ruta completa al archivo PHP
            console.log(data);
            // Crea un campo de entrada oculto para almacenar la respuesta JSON
            const jsonInput = document.createElement("input");
            jsonInput.type = "hidden";
            jsonInput.name = "json_data";
            jsonInput.value = JSON.stringify(data); // Convierte la respuesta JSON en una cadena y asigna al campo

            // Agrega el campo de entrada al formulario
            form.appendChild(jsonInput);

            // Agrega el formulario al cuerpo del documento y envíalo
            document.body.appendChild(form);
            form.submit();
        }
    })
    .catch((error) => {
        // Maneja los errores de la solicitud
        console.error("Error:", error);

        // Muestra una notificación de error genérica si la solicitud falla
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Hubo un problema al enviar la notificación.',
        });
    });
});
