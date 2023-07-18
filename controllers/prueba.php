<?php 
        include '../Db/conexion.php';

        $P = $bd ->query("SELECT ID_ingeniero FROM ingenieros");
        $p = $P ->fetchAll(PDO::FETCH_ASSOC);
    
        var_dump (array_filter($p));
?>