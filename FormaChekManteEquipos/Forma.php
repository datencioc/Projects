<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/FormaChekManteEquipos/img/ECOSERMLOGO - copia.jpg">
    <title>Formato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
    <script src="js/print.js"></script>

</head>
<!-- SCRIPT JS PDF IMPRESION -->
<body>

    <?php
        
        include("conexion.php");
        ConexionBDM();
        include("Insertar.php");
        
    ?>
    <div class="titulo">
        <h3>Equipos del parque informático</h3>
        <h8>Formato Mantenimiento</h8>
    </div>
    
    <div class="contieneall">
    
    <form action="" method="post" id="forma">
        <table border="2px" class="tablen1">
        <thead class="theadtab1">
            <tr>
                <th>
                    <h6></h6>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    Id: <input class="inputtab1" type="button" name="id" id="id" required>
                </td>
            </tr>
            <tr>
                <td>
                    Area: <input class="inputtab1" type="text" name="area" id="area" >
                </td>
            </tr>
            <tr>
                <td>
                    Usuario: <input class="inputtab1" type="text" name="usuario" id="usuario" required>
                </td>
            </tr>
            <tr>
                <td>
                    Internamiento: <input class="inputtab1" type="text" name="internamiento"  id="internamiento"required>
                </td>
            </tr>
            <tr>
                <td>
                    Fecha:
                    <input class="inputtab1" type="text" name="fecha" id="fecha" value="         <?php
                        date_default_timezone_set('America/Lima');
                        $mes = array("void","Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
                        $dia = array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
                        $fecha = getdate();
                        $dias = $dia[$fecha["wday"]];
                        $meses = $mes[$fecha["mon"]];
                        $actual = "$dias ".$fecha["mday"]."  ".$meses." de ".$fecha["year"]." // Hr: ".$fecha["hours"]." horas ".$fecha["minutes"]." minutos"." ".$fecha["seconds"]." segundos";
                        echo " $actual"; 
                    ?>">
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    
    <table border="2px" class="tablen2">
        <thead class="theadtab2">
            <tr>
                <th>
                    Características del equipo:
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Marca: <input class="inputtab1" type="text" id="marca" name="marca" required></td>
            </tr>
            <tr>
                <td>Modelo/Placa: <input class="inputtab1" type="text" id="modpla" name="modpla" required></td>
            </tr>
            <tr>
                <td>Serie/Referencia: <input class="inputtab1" type="text" id="serref" name="serref" required></td>
            </tr>
            <tr>
                <td>Procesador: <input class="inputtab1" type="text" id="procesador" name="procesador"></td>
            </tr>
            <tr>
                <td>Memoria RAM: <input class="inputtab1" type="text" id="memram" name="memram" ></td>
            </tr>
            <tr>
                <td>Lectora: <input class="inputtab1" type="text" id="lectora" name="lectora"></td>
            </tr>
            <tr>
                <td>Disco duro: <input class="inputtab1" type="text" id="discoduro" name="discoduro"></td>
            </tr>
            <tr>
                <td>Observaciones: <br>
                    <textarea class="observ_1" name="observ" id="observ" cols="30" rows="10">

                    </textarea>
            </tr>
            <tr>
                <td>Referencia: <input class="inputtab1" type="text" id="referencia" name="referencia"></td>
            </tr>
        </tbody>
    </table>
    <br>
    <table border="2px" class="tablen3">
        <thead class="theadtab3">

                <label class="titulotab3" for="">Acción de mantenimiento</label> 

            <tr>
                <td></td><td>Descripción:</td><td>Código/serie</td><td>Marca/Capacidad</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Cambio</td>
                <td>
                    <input class="inputtab3" type="text" id="cam_descrip" name="cam_descrip">
                </td>
                <td>
                    <input class="inputtab3" type="text" id="cam_codserie" name="cam_codserie">
                </td>
                <td>                
                    <input class="inputtab3" type="text" id="cam_marcacapa" name="cam_marcacapa">
                </td>
            </tr>
            <tr>
                <td>Cambio</td>
                <td>
                    <input class="inputtab3" type="text" id="cam_descrip" name="cam_descrip">
                </td>
                <td>
                    <input class="inputtab3" type="text" id="cam_codserie" name="cam_codserie">
                </td>
                <td>        
                    <input class="inputtab3" type="text" id="cam_marcacapa" name="cam_marcacapa">
                </td>
            </tr>
            <tr>
                <td>Cambio</td>
                <td>
                    <input class="inputtab3" type="text" id="cam_descrip" name="cam_descrip">
                </td>
                <td>
                    <input class="inputtab3" type="text" id="cam_codserie" name="cam_codserie">
                </td>
                <td>     
                    <input class="inputtab3" type="text" id="cam_marcacapa" name="cam_marcacapa">
                </td>
            </tr>
            <tr>
                <td>Acción</td>
                <td>
                    <input class="inputtab3" type="text" id="acc_descrip" name="acc_descrip">
                </td>
                <td>
                    <input class="inputtab3" type="text" id="acc_codserie" name="acc_codserie">
                </td>
                <td>
                    <input class="inputtab3" type="text" id="acc_marcacapa" name="acc_marcacapa">
                </td>
            </tr>
        </tbody>
    </table>

    <div class="observ_textarea">
        <label for="" class="observ">Observaciones:</label>
        <textarea class="observ_acc" name="observ_acc" id="observ_acc" cols="30" rows="10">
        </textarea>
    </div>
    <br>
    <div class="caja_firma">
        <div class="div_firma">
            <div class="signature mb-2" name="sis_firmadig">
                <canvas id="signature-canvas" style="border: 1px dashed; width: 100%; height: 100%;"></canvas>
            </div>
                <label for="" class="lfirma">Firma y Sello</label>
                <br>
                <label class="lfirma" for="">Oficina de Sistemas</label>
        </div>
        <div class="div_recepfirma">
            <div class="box_firmarec" name="recep_firmadig"></div>
                <label for="" class="recepfirma">Firma</label>
                <br>
                <label for="" class="recepfirma">Conformidad de Recepción</label>
                <br>
                <label for="" class="recepfirma">DNI: 
                    <br>
                    <input type="text" id="dni_recep" name="dni_recep" required></label>
        </div>
    </div>
    <input type="submit" class="btn_enviar" value="Registrar">
    </form>
    <?php
        
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- <a href="Insertar.php">Insertar<i class="fa fa-external-link-square" aria-hidden="true"></i></a> -->
</body>
</html>