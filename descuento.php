<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descuento</title>
</head>
<body>

    <h1>Nombre Producto: <?php 
        $nombre=$_GET['nombre'];
        echo $nombre;
    
    
    
    
    ?></h1>

    <h1>Clave: <?php
        $clave=$_GET['estado'];
        echo $clave;
    ?></h1>

    <h1>Precio Original: 
        <?php

            echo $_GET['precio'];

        ?>

    </h1>

    <h1>Precio con Descuento: 
        <?php
            if($clave==1){
                $des=$_GET['precio']*0.1;
                $total=$_GET['precio']-$des;
            }else{
                $des=$_GET['precio']*0.2;
                $total=$_GET['precio']-$des;
            }

            echo $total;
        ?>
    </h1>
    
</body>
</html>