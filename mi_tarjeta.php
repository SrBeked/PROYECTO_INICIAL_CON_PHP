<?php
$nombre = "Ismer Amaury";
$apellido = "Amacifuen Montero";
$edad = 20;
$carrera = "Desarrollo de Software";
$universidad = "Instituto tecnologico de las Americas (ITLA)";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Tarjeta</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    
<div class="card">
    <h1>Mi Tarjeta</h1>
    <p><strong>Nombre:</strong> <?= $nombre ?></p>
    <p><strong>Apellido:</strong> <?= $apellido ?></p>
    <p><strong>Edad:</strong> <?= $edad ?></p>
    <p><strong>Carrera:</strong> <?= $carrera ?></p>
    <p><strong>Universidad:</strong> <?= $universidad ?></p>
   
</div>

<p><a href="index.php" style="
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #007BFF;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-size: 16px;
    font-weight: bold;
    ">Volver al inicio</a></p>

   
<style>
    body {
        font-family: Arial, sans-serif;
        background-color:rgb(104, 165, 235);
        color: #333;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        flex-direction: column;
    }

    .card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        padding: 20px;
        max-width: 400px;
        text-align: center;
    }

    .card h1 {
        color: #2c3e50;
        margin-bottom: 20px;
    }

    .card p {
        font-size: 16px;
        margin: 10px 0;
        color: #555;
    }

    .card p strong {
        color:rgb(0, 0, 0);
    }

    .card-footer {
        margin-top: 20px;
        font-size: 14px;
        color: #888;
    }
</style>


</body>

</html>
