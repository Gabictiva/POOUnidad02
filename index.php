<?php

$datos = [
    "Nombre" => "Gabriela",
    "Apellido" => "Pacheco Sosa",
    "Edad" => 35,
    "Hobbie" => "dibujar y correr",
    "Editor_Preferido" => "Visual Studio Code",
    "Sistema_operativo" => "Windows 7"
    ];
    
echo "Datos<br><br>";

foreach($datos as $dato => $respuesta){
    echo "<span>".$dato.": </span>". $respuesta."<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP 01</title>
</head>
<body>
</body>
</html>