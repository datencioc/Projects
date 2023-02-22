<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo1.CSS">
</head>
<body>
    <h1>Tabla de division</h1>
    <div class="main">
        <?php
            $div=0;
            echo '<table border="2">';
            
                echo "<tr>";
                for($i=0;$i<=10;$i++){
                    echo "<td>",$i,"</td>";
                };
                echo"</tr>";
            
            for($i=1;$i<=10;$i++){
                echo "<tr><td>",$i,"</td>";
                for($j=1;$j<=10;$j++){
                    $div=$i/$j;
                    $divn=number_format($div,3);
                    echo "<td>";
                        echo "|",$divn,"|";
                    echo "</td>";
                }
                echo "</tr>";
                echo "<br>";    
            }
            echo '</table>';
        ?> 
    </div>
    
</body>
</html>