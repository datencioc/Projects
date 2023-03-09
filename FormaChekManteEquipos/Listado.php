<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once("conexion.php");
        ConexionBDM();
        listar();
        function listar(){
            $username='root';
            $password='';
            $conn = new PDO('mysql:host=localhost;dbname=bd_registro_forma', $username, $password);
            $pdo_statement= $conn->prepare("SELECT * FROM mantenimientoee");
            $pdo_statement->execute();
            $result = $pdo_statement->fetchAll();
        }
    ?>
    <table border="2px" style="text-align:center;margin:20px 0px;">
        <thead>
            <tr>
                <th>
                    Id
                </th>
                <th>
                    Area
                </th>
                <th>
                    Usuario
                </th>
                <th>
                    Internamiento
                </th>
                <th>
                    Fecha
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    1er registro
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>