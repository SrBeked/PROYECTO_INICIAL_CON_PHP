<?php
$mensaje = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["numero"];
    $aleatorio = rand(1, 5);

    if ($usuario == $aleatorio) {
        $mensaje = "¡Wow, adivinaste!";
    } else {
        $mensaje = "¡Sigue intentando! El número era $aleatorio.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Adivina el número</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Adivina un número del 1 al 5</h1>
    <form method="POST">
        <input type="number" name="numero" min="1" max="5" required>
        <button type="submit">Adivinar</button>
    </form>

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

    <h2><?= $mensaje ?></h2>

        <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(83, 96, 211);
            color: #333;
            text-align: center;
            margin: 0;
            padding: 0;
        }
    
        h1 {
            color:rgb(0, 0, 0);
            margin-top: 20px;
        }
    
        form {
            background-color: #fff;
            padding: 20px;
            margin: 20px auto;
            border: 1px solid #ddd;
            border-radius: 10px;
            max-width: 400px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    
        input[type="number"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
    
        button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
    
        button:hover {
            background-color: #2980b9;
        }
    
        h2 {
            margin-top: 20px;
            color:rgb(0, 0, 0);
        }
    
        p {
            color: red;
            font-weight: bold;
        }
    </style>
</body>
</html>
