<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 1</title>
   
    <h1>Tarea #1</h1>
   

</head>
<body>

<div class="container">
        <h2>Menú</h2>
        <ul class="menu">
            <li><a href="mi_tarjeta.php">Mi Tarjeta</a></li>
            <li><a href="calculadora.php">Calculadora</a></li>
            <li><a href="adivina.php">Adivina mi número</a></li>
            <li><a href="acerca_de.php">Acerca de</a></li>
        </ul>
    </div>

   
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:rgb(57, 84, 160);
            color: #333;
        }

        h1 {
            color: #000;
            text-align: center;
        }

        h3 {
            color: #000;
            text-align: center;
        }

        h2 {
            color: #000;
            text-align: center;
        }
        .container {
            text-align: center;
            margin: 20px auto;
            padding: 20px;
            background-color:rgb(255, 255, 255) ;
            border: 1px solid #000;
            border-radius: 10px;
            max-width: 600px;
        }

        .menu {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        .menu li {
            display: inline-block;
            margin: 10px;
            padding: 10px;
            
        }

        .menu a {
            display: inline-block;
            padding: 10px 5px;
            background-color: #000;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }

        .menu a:hover {
            background-color: #444;
        }
    </style>

   

</body>

<footer>
        <h3>Este es el menú donde podras ingresar a los diferentes progamas</h3>
    </footer>
</html>