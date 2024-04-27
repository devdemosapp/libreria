<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST["codigo"];
    $nombre = $_POST["nombre"];
    $autor = $_POST["autor"];
    $fecha = $_POST["fecha"];
    $precio = $_POST["precio"];

    $sql = "INSERT INTO libro (codigo, nombre, autor, fecha_edicion, precio) VALUES ('$codigo','$nombre', '$autor', '$fecha', $precio)";
    if ($conexion->query($sql) === TRUE) {
        echo "Libro agregado correctamente";
    } else {
        echo "Error al agregar el libro: " . $conexion->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
        
<br>
<br> 
<br>
<br>
<div class='container'>
    
    <div class='row'>
        <div class='col-md-6'>
        <h1>Agregar libro</h1>
        </div>
        <div class='col-md-6'>
            <a href='index.php' class='btn btn-primary'>Listado</a>
        </div>
    </div>
    
    <br>
    <form action="agregar_libro.php" method="post">
        <div class="form-group">
            <label for="codigo">Código:</label>
            <input type="text" class="form-control" id="codigo" name="codigo">
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="form-group">
            <label for="autor">Autor:</label>
            <input type="text" class="form-control" id="autor" name="autor">
        </div>
        <div class="form-group">
            <label for="fecha">Fecha de edición:</label>
            <input type="date" class="form-control" id="fecha" name="fecha">
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="text" class="form-control" id="precio" name="precio">
        </div>
        <br>
        <br>
        <button type="submit" class="btn btn-primary">Agregar libro</button>
    </form>
</div>

    
</body>
</html>


