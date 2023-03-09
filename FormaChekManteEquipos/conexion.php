<?php

    function ConexionBDM(){
        $dbname='bd_registro_forma';
        $username='root';
        $password='';
        try {
            $conn = new PDO('mysql:host=localhost;dbname=bd_registro_forma', $username, $password);
            echo 'Base de datos conectada satisfactoriamente <i class="fa-sharp fa-solid fa-check-double"></i>';
        }catch(PDOException $e){
            echo $e->getMessage();
        }   
    }
?>