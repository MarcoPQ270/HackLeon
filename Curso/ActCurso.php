<?php
     include_once("../Utilerias/BaseDatos.php");
     $post = $_POST; // 
     if ($post['boton']=="Agregar")
     {
          die("Agregar");
     } else if ($post['boton']=="Actualizar")
            {
               die("ACTUALIZAR");
            } else if ($post['boton']=="Eliminar")
            {
                 die("ELIMAR");
            }

?>