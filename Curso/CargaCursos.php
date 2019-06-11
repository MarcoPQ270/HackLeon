<?php
    include_once('../Utilerias/BaseDatos.php');
    $query = 'SELECT "idcurso", "titcurso", "descripcurso","costo" FROM "Escuela"."curso" ORDER BY titcurso';
    $cursos = Consulta($query);
    foreach ($cursos as $tupla )
    {
        echo "<tr id='". $tupla['idcurso'] . "'>
            <td>" . $tupla['titcurso'] . "</td>
            <td>" . $tupla['descripcurso'] . "</td>
            <td>" . $tupla['costo'] . "</td>
            <td>
                <i class='material-icons edit' id-record='" . $tupla['idcurso'] . "'>create</i>
                <i class='material-icons delete' id-record='". $tupla['idcurso'] . "'>delete_forever</i>
            </td>
        </tr>";
    } 
?>