<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    <div>

        <h1>Nota Final:
            <?php
                $nota1=$_POST['nota1'];
                $nota2=$_POST['nota2'];
                $nota3=$_POST['nota3'];
                $exFinal=$_POST['exFinal'];
                $tr_Final=$_POST['tr_Final'];
                $promedioNotas=($nota1+$nota2+$nota3)/3;
                $resultado=($promedioNotas*0.35)+($exFinal*0.35)+($tr_Final*0.3);
                echo $resultado;
            ?>
        </h1>
        <h1>Estado:
            <?php
                if($resultado<3){
                    echo "REPROBO";
                }else{
                    echo "APROBO";
                }
            ?>
        </h1>

    </div>

   
   
   
   
   
   
   
   
   




    
</body>
</html>

