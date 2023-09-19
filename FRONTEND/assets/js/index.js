// Espera a que se cargue todo el DOM antes de ejecutar el script
document.addEventListener("DOMContentLoaded", function () {
    // Obtén el párrafo único donde se escribirá el texto
    const paragraph = document.getElementById('animated-paragraph');
    
    // Texto a animar
    const textToAnimate = [
        "SICMA es una organización con un alto compromiso por la conservación ambiental, que promueve,",
        "a través de programas de seguimiento y consultorías, la buena gestión ambiental para el cuidado",
        "del agua y del ecosistema. El objetivo de este instrumento es conocer la huella de carbono que",
        "dejas después de todas tus actividades cotidianas y familiares."
    ];
    
    let charIndex = 0;
    let textIndex = 0;

    // Función para animar el texto letra por letra
    function animateText() {
        if (textIndex < textToAnimate.length) {
            const currentText = textToAnimate[textIndex];

            if (charIndex < currentText.length) {
                paragraph.textContent += currentText.charAt(charIndex);
                charIndex++;
                setTimeout(animateText, 30); // Ajusta la velocidad de escritura aquí (en milisegundos por carácter)
            } else {
                textIndex++;
                charIndex = 0;
                if (textIndex < textToAnimate.length) {
                    paragraph.textContent += ' '; // Agregar espacio entre párrafos
                    setTimeout(animateText, 500); // Ajusta la duración de la pausa entre párrafos aquí (en milisegundos)
                }
            }
        }
    }

    // Inicia la animación después de que se cargue todo el DOM
    setTimeout(animateText, 1000); // Ajusta la duración de la pausa inicial aquí (en milisegundos)
});
