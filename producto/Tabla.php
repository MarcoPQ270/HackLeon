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
    <?php
        include_once("./Utilerias/BaseDatos.php");
        $query = 'SELECT * FROM curso';
        $result =  Consulta($query);
        echo "<table>
        <tr><th>idcurso</th><th>titcurso</th><th>descripcurso</th><th>costo</th></tr>
        <tbody>";
        foreach ($result  as $tupla) {
            $id = $tupla['idcurso'];
            $tit = $tupla['titcurso'];
            $des = $tupla['descripcurso'];
            $cos = $tupla['costo'];
            echo "<tr><td>$id</td><td>$tit</td><td>$des</td><td>$cos</td></tr>";
        }
        echo "</tbody>
        </table>";
        //echo '<pre>';
        //print_r($result);
        //echo '</pre>';
        //die("WWE");
    ?>
    
            
        
    

    <script type="text/javascript" src="./js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" src="./js/materialize.min.js"></script>
    <script type="text/javascript" src="./js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="./js/dataTables.materialize.js"></script>
    <script type="text/javascript" src="./js/jquery.validate.min.js"></script>     
    <script type="text/javascript" src="./resources/js/Cursos.js">
    </script> 

</body>
</html>