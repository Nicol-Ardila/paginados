<?php
    // Verifica si el formulario ha sido enviado usando el método POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener y sanitizar los datos ingresados por el usuario
        $nombre = htmlspecialchars($_POST['txt_name']); // Sanitize el campo de nombre
        $documento = htmlspecialchars($_POST['document']); // Sanitize el campo de documento
        $fechaNacimiento = htmlspecialchars($_POST['fecha_nacimiento']); // Sanitize el campo de fecha de nacimiento
        $correo = htmlspecialchars($_POST['correo']); // Sanitize el campo de correo

        // Mostrar los datos ingresados con un contenedor sobre una imagen de fondo
        echo '<div style="position: absolute; top: 0; left: 0; width: 100%; height: 100vh; background: url(\'img/cod4.jpeg\') no-repeat center center; background-size: cover; color: white; display: flex; justify-content: center; align-items: center;">';
        // El contenedor de datos con fondo semitransparente y centrado
        echo '<div style="background: rgba(0, 0, 0, 0.7); padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); text-align: center; width: 80%; max-width: 600px;">';
        // Título principal dentro del contenedor
        echo '<h2>Estos son los datos de su inscripción</h2>';
        // Mostrar el nombre ingresado por el usuario
        echo '<p><strong>Nombre:</strong> ' . $nombre . '</p>';
        // Mostrar el documento ingresado por el usuario
        echo '<p><strong>Documento:</strong> ' . $documento . '</p>';
        // Mostrar la fecha de nacimiento ingresada por el usuario
        echo '<p><strong>Fecha de Nacimiento:</strong> ' . $fechaNacimiento . '</p>';
        // Mostrar el correo ingresado por el usuario
        echo '<p><strong>Correo:</strong> ' . $correo . '</p>';
        // Cierre del contenedor de datos
        echo '</div>';
        // Cierre del contenedor de fondo
        echo '</div>';
    }
?>
