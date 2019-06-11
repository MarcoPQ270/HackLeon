<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="./css/materialize.min.css" media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="./css/dataTables.materialize.css"/>
        <link type="text/css" rel="stylesheet" href="./css/default.css"/>
        <link rel="icon" type="image/x-icon" href="./fonts/favicon.ico" />
    </head>
    
<body>
<div class="container">
<?php
        include_once("./Utilerias/BaseDatos.php");
        $query = 'SELECT idclasif,nomclasif FROM "Escuela".clasif';
        $result =  Consulta($query);
        echo "<select name='clasif' id='clasif'>";
        foreach ($result  as $tupla) {
            $idc = $tupla['idclasif'];
            $nom = $tupla['nomclasif'];
            echo "<option value='$idc'>$nom</option>";
        }
        echo "</select>";
?>
      
<div class="row" id="tabla">

</div>    


</div>
    <script type="text/javascript" src="./js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" src="./js/materialize.min.js"></script>
    <script type="text/javascript" src="./js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="./js/dataTables.materialize.js"></script>
    <script type="text/javascript" src="./js/jquery.validate.min.js"></script>     
    <script type="text/javascript" src="./resources/js/Cursos.js"></script> 
    <script type="text/javascript">
        $(document).ready(function(){
            $('select').formSelect();
        });
        $("#tabla").load("filtroProducto.php?idcl=1");
        $("#clasif").change(function(){
            var id = $("#clasif").val();
            $("#tabla").load("filtroProducto.php?idcl="+id);
        });
    </script>

</body>
</html>