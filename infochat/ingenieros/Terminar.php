<?php 
include '../../Db/conexion.php';
//actualizamos la informacion del PDF encaso de haber registrado mal algun dato
$id=$_POST['id'];

$est=$_POST['estatus'];
$Hfinal =$_POST['Hfinal'];


  

if (!$id =="" && !$est=="" && !$Hfinal=="") {
  # code...
    $sentencia = $bd->prepare("UPDATE servicio SET Hfinal=?,Estatus=?  WHERE ID_Servicio=$id;");
    $resultado = $sentencia->execute([$Hfinal,$est]);
    echo $resultado;
}

?>