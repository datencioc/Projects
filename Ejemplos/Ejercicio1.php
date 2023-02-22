<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo2.css">
</head>
<body class="boodyajedrez">
    <table>
        <tr>
            <table class="tablaajedrez">
                <h1>Tabla de ajedrez</h1>
                <br>
                <?php
                $blanco="____";
                $negro= "███";
                  
                   /* for($i=1;$i<=8;$i++){
                        for($j=1;$j<=8;$j++){
                            if(($j%2)==0){
                                echo "Blanco"; 
                            }else{
                                echo "Negro";
                            }
                        }
                        echo "<br>";  
                    }
                    while ($i<=8):
                        while($j<=8):
                            if(($j%2)==0){
                                echo "Blanco"; 
                            }else{
                                echo "Negro";
                            }
                            $j++;
                        endwhile;
                        $i++;
                        echo "<br>"; 
                    endwhile;*/
                    $i=0;
                    $j=0;
                    echo'<table border="2">';
                    do{
                        $i++;
                        echo "<tr>";
                        do{ 
                            $j++;
                            if($i%2==0){
                                if(($j%2)==0){
                                    echo "<td>",$negro,"</td>"; 
                                }else{
                                    echo "<td>",$blanco,"</td>";
                                }
                            }else{
                                if(($j%2)==0){
                                    echo "<td>",$blanco,"</td>"; 
                                }else{
                                    echo "<td>",$negro,"</td>";
                                }
                            }
                            
                        }while($j<=7);
                        if($i<=8){
                            $j=0;
                        }
                        echo "</tr>";
                        echo "<br>"; 
                    }while($i<=7);
                    echo '</table>';        
                ?>
            </table>
        </tr>
    </table>
    
    
</body>
</html>