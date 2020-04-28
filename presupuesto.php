<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presupuesto</title>
</head>
<body>
    
    <h1>Ginecología:
        <?php

            $presupuesto=$_GET['pre'];
            echo $presupuesto*0.4;

        ?>
 </h1>

 <h1>Traumatología:
        <?php

            $presupuesto=$_GET['pre'];
            echo $presupuesto*0.3;

        ?>
 </h1>

 <h1>Pediatría:
        <?php

            $presupuesto=$_GET['pre'];
            echo $presupuesto*0.3;

        ?>
 </h1>
   
 
    
</body>
</html>