<?php
        $idcla = $_GET['idcl'];
        include_once("./Utilerias/BaseDatos.php");
        $query = 'SELECT idproducto,nomproducto,existencia,precio,costo,imagen FROM "Escuela".producto where idclasif=' . $idcla;
        $result =  Consulta($query);
        echo "<table class='responsive-table striped highlight'>
        <tr><th>idproducto</th><th>nomproducto</th><th>existencia</th><th>precio</th><th>costo</th><th>imagen</th></tr>
        <tbody>";
        foreach ($result  as $tupla) {
            $id = $tupla['idproducto'];
            $nom = $tupla['nomproducto'];
            $exi = $tupla['existencia'];
            $pre = $tupla['precio'];
            $cos = $tupla['costo'];
            $img = $tupla['imagen'];
            echo "<tr><td>$id</td><td>$nom</td><td>$exi</td><td>$pre</td><td>$cos</td><td><img src='$img' width='80'/></td></tr>";
        }
        echo "</tbody>
        </table>";
        //echo '<pre>';
        //print_r($result);
        //echo '</pre>';
        //die("WWE");
    ?>