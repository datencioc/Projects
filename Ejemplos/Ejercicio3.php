<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo3.css">
</head>
<body>
<form method="GET" action="Ejercicio3.php">
        <h1>Suma de N numeros</h1>
        <br>
        <h2>Ingrese el valor de N: </h2><input type="text" name="num" class="valor">
        <br>
        <input type="submit" value="Enviar" class="Enviar">  
    </form>
    <?php
        $num=$_GET['num'];
        $suma=0;
        /*for($i=1;$i<=$num;$i++){
            $suma=$suma+$i;
        }*/
        $i=1;
        do{
            $suma=$suma+$i;
            $i++;
        }while($i<=$num);
        //echo '<input type="text" name="suma" class="$suma" textholder="$suma">';
        echo '<table border="2"><tr><td>',$suma,'</td></tr></table>';
    ?>
</body>
</html>