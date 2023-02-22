<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        date_default_timezone_set('America/Lima');
        $mes = array("void","Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        $dia = array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
        $fecha = getdate();

        $dias = $dia[$fecha["wday"]];
        $meses = $mes[$fecha["mon"]];

        $actual = "$dias ".$fecha["mday"]."  ".$meses." de ".$fecha["year"]."<br> Hora: ".$fecha["hours"]." con ".$fecha["minutes"]." minutos"." ".$fecha["seconds"]." segundos";
        print "<div> $actual </div>";
    ?>
</body>
</html>