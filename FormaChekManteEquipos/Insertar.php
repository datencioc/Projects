<?php
    if(isset($_POST['id']) && isset($_POST['area']) && isset($_POST['usuario']) && isset($_POST['internamiento']) && isset($_POST['fecha'])){
    include_once("conexion.php");
    ConexionBDM();
    //obtener datos generales de identificacion
    $id=$_POST['id'];
    $area=$_POST['area'];
    $usuario=$_POST['usuario'];
    $internamiento=$_POST['internamiento'];
    $fecha=$_POST['fecha'];


    //datos de equipo
/*    $marca=$_POST['marca'];
    $modeloplaca=$_POST['modpla'];
    $seriereferencia=$_POST['serref'];
    $procesador=$_POST['procesador'];
    $memoriaram=$_POST['memram'];
    $lectora=$_POST['lectora'];
    $discoduro=$_POST['discoduro'];
    $observaciones=$_POST['observ'];
    $referencia=$_POST['referencia'];


    //detalles de mantenimiento cambio
    $cam_descripcion=$_POST['cam_descrip'];
    $cam_codigoserie=$_POST['cam_codserie'];
    $cam_marcacapacidad=$_POST['cam_marcacapa'];
    $acc_descripcion=$_POST['acc_descrip'];
    $acc_codigoserie=$_POST['acc_codserie'];
    $acc_marcacapacidad=$_POST['acc_marcacapa'];
    $observacion=$_POST['observ_acc'];


    //caja firma
    $sis_firmadig=$_POST['sis_firmadig'];
    $recep_firmadig=$_POST['recep_firmadig'];
    $recep_dni=$_POST['dni_recep'];
*/
////////////////////////Base de datos ingreso
    $username='root';
    $password='';
        $conn = new PDO('mysql:host=localhost;dbname=bd_registro_forma', $username, $password);

    $bd="INSERT INTO mantenimientoee (id, area, usuario, internamiento, dafecha) VALUES (:id, :area, :usuario, :internamiento, :fecha )";
    $pdo_statement=$conn->prepare($bd);

    $result=$pdo_statement->execute(array(':id'=>$_POST['id'], ':area'=>$_POST['area'], ':usuario'=>$_POST['usuario'], ':internamiento'=>$_POST['internamiento'], ':fecha'=>$_POST['fecha']));
    if(!empty($result)){
        header('location:Listado.php');
    }
}
?>