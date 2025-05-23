<?php
$resultado = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    if ($operacion == "dividir" && $num2 == 0) {
        $resultado = "<p style='color:red;'>No se puede dividir entre cero.</p>";
    } else {
        switch ($operacion) {
            case "sumar":
                $resultado = $num1 + $num2;
                break;
            case "restar":
                $resultado = $num1 - $num2;
                break;
            case "multiplicar":
                $resultado = $num1 * $num2;
                break;
            case "dividir":
                $resultado = $num1 / $num2;
                break;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
    <link rel="stylesheet" href="estilos.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(125, 76, 240);
            color: #333;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #000;
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

        input[type="number"], select {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        h2 {
            margin-top: 20px;
            color: #000;
        }

        p {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Calculadora PHP</h1>
    <form method="POST">
        <input type="number" name="num1" required>
        <input type="number" name="num2" required>
        <select name="operacion">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
        <br><br>
        <button type="submit">Calcular</button>
    </form>
    <h2>Resultado: <?= $resultado ?></h2>

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
</body>
</html>
