<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Imágenes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Galería de Imágenes pixeles</h1>
        <nav>
            <ul>
            </ul>
        </nav>
    </header>

    <div class="gallery">
        <?php
        // Directorio que contiene las imágenes
        $directory = 'images/';

        // Obtener todas las imágenes en el directorio
        $images = glob($directory . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

        // Mostrar cada imagen en la galería
        foreach ($images as $image) {
            echo '<div class="image">';
            echo '<img src="' . $image . '" alt="Animal">';
            echo '<a href="' . $image . '" download>Descargar</a>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
