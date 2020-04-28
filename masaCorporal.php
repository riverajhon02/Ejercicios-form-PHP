<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indice Masa Corporal</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    
    <h1 >Nombre: <?php 
        $nombre=$_GET['nombre'];
        echo $nombre;
     ?>
    </h1>

    <h1>IMC: 
        <?php
            $peso=$_GET['peso'];
            $estatura=$_GET['estatura']*$_GET['estatura'];
            $imc=$peso/$estatura;
            echo $imc;
        ?>
    </h1>    

    <h1>
        <?php
            if($imc<=18.5){
                echo "Por debajo de peso";
            }else if($imc>=18.5 and $imc<=24.9){
                echo "Saludable";
            }else if($imc>=25 and $imc<=29.9){
                echo "Con Sobrepeso";
            }else if($imc>=30 and $imc<=39.9){
                echo "Obeso";
            }else{
                echo "Obesidad Mórbida";
            }
        ?>
    </h1>

    
    
</body>
</html>