<?php
    $nombre=$_GET['nombre'];
    $salarioBase=450000;
    $cantidad=$_GET['cantidad'];
    $comision=50000*$cantidad;
    $valorVenta=$_GET['precioTotal'];
    $salario=$salarioBase+$comision+($valorVenta*0.05);
    echo "<h1>Señor $nombre, su salario es: $salario</h1>";
?>