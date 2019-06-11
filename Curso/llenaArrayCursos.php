<?php
    include_once("../Utilerias/BaseDatos.php");
    $query='SELECT idcurso,titcurso,descripcurso,costo FROM "Escuela".curso ORDER BY titcurso';
    $cur = Consulta($query);
    $data=array();
    $response=array();
    $response['status']=1;
    $response['data']=array();
    foreach ($cur as $tupla)
    {
        $data[$tupla['idcurso']]=$tupla;
    }
    $response['data']=$data;
    //$R = json_encode($response);
    //echo "<pre>";
    //print_r($R);
    //echo "</pre>";
    //die("Muere");
    echo json_encode($response);
?>