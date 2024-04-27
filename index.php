<?php
include 'conexion.php';


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
    <div class='container'>
        <br>
        <br>
        <br>
        
        <div class='row'>
            <div class='col-md-6'>
                <h1>Libreria</h1>
            </div>
            <div class='col-md-6'>
                <a href='agregar_libro.php' class='btn btn-primary'>Agregar libro</a>
            </div>
        </div>

        <br>
        <br>
        <br>

        <table class='table'>
        <tr>
            <td>Codigo</td>
            <td>Nombre</td>
            <td>Autor</td>
            <td>Fecha de edición</td>
            <td>Precio</td>
        </tr>
        <?php
            $sql = "SELECT * FROM libro";
            $result = $conexion->query($sql);
            
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["codigo"]. "</td>";
                    echo "<td>" . $row["nombre"]. "</td>";
                    echo "<td>" . $row["autor"]. "</td>";
                    echo "<td>" . $row["fecha_edicion"]. "</td>";
                    echo "<td>" . $row["precio"]. "</td>";
                    echo "</tr>";
                }
            } else {
                echo "0 results";
            }
        ?>
    </table>
    </div>
    
    

    
</body>
</html>
