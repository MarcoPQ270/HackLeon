<?php
include_once('headerLR.php');
?>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<body>
    <div class="section">
        <!--Maping-->
    </div>        
    <div class="section container">
            <div class="card">
                    <div class="card-content">
                    <div class="card image">                            
                        <img src="./Imagenes/avatarregistro.jpg" class="avatar">
                    </div><br> <h1>Maping</h1>
                         <form action=""method="Post" id="frmmaping">
                         <div class="input-field">
                            <input type="text" name="zona" id="zona">
                            <label for="zona">Zona:</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="colonia" id="colonia">
                            <label for="colonia">Colonia:</label>
                        </div>                        
                        <div class="input-field">
                            <input type="text area" name="comentario" id="comentario" placeholder="Agrega la descripcion de lo ocurrido:">
                        </div><br>
                        <div class="input-field">
                                <p>
                                     <label>
                                         <input class="with-gap" name="impacto" id="impacto" type="radio" checked />
                                         <span>Alto impacto</span>
                                    </label>
                                    <label>
                                         <input class="with-gap" name="impacto" id="impacto" type="radio"/>
                                         <span>Medio impacto</span>
                                     </label>
                                     <label>
                                         <input class="with-gap" name="impacto" id="impacto" type="radio"/>
                                         <span>Bajo impacto</span>
                                     </label>
                                 </p>
                         </div>
                         <div class="input-field">
                            <input type="submit" name="btncrear" id="btncrear"value="Crear">
                         </div>
                </form>
                    </div>
            </div>
    </div>
    <link rel="stylesheet" href="./css/styler.css">
    <link rel="stylesheet" href="./css/default.css">
    <!--JS Materialize-->
    <!--Validacion JQuery-->
    <script type="text/javascript" src="./js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" src="./js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="./js/validacionlogin.js"></script>
</body>