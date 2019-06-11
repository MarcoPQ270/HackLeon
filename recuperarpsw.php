<?php include_once('headerLR.php');?>
<body>
    <div class="section container">
            <div class="card ">
                    <div class="card-content">
                                    <p><span><h3 class="while-text">Información de recuperacion</h3></span></p>
                                    <div class="input-field">
                                        <input type="text" name="pregunta1" id="pregunta1">
                                        <label for="pregunta1">¿Nombre de tu super heroe de la infancia?</label>
                                    </div>
                                    <div class="input-field">
                                        <input type="text" name="pregunta2" id="pregunta2">
                                        <label for="pregunta2">¿Nombre de tu primera mascota?</label>
                                    </div>
                                    <div class="input-field" align="center">
                                         <a class="waves-effect waves-light btn-large modal-trigger green " href="#modal1">Enviar</a>
                                    </div>
                            </form>
                             <!--Ventana modal  
                            <div id="ventanamodal" class="modal">
                                <div class="modal-content">
                                    <div class="input-field">
                                        <label for="psw">Contraseña:*</label>
                                        <input type="password" name="psw" id="psw">
                                    </div>
                                    <div class="input-field">
                                            <label for="cpsw">Confirmar contraseña:*</label>
                                            <input type="password" name="cpsw" id="cpsw">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                                </div>
                            </div>-->
                            <!-- Modal Structure -->
                            <div id="modal1" class="modal">
                                <div class="modal-content">
                                    <h3 class="black-text">Recuperar contraseña</h3>
                                <div class="input-field">
                                        <label for="psw">Contraseña:*</label>
                                        <input type="password" name="psw" id="psw">
                                    </div>
                                    <div class="input-field">
                                            <label for="cpsw">Confirmar contraseña:*</label>
                                            <input type="password" name="cpsw" id="cpsw">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="./login.php" class="modal-close waves-effect waves-green btn-flat black-text">Guardar</a>
                                </div>
                            </div>
                    </div>
            </div>
    </div>
        <link rel="stylesheet" href="./css/styler.css">        <!--Login transparente-->
        <link rel="stylesheet" href="./css/validacion.css">        <!--Validacion css-->
       <!--Funciones basicas JS-->
        <!--Validaciones con JQuery-->
        <script src="./js/jquery-3.0.0.min.js" type="text/javascript"></script>
        <script src="./js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="./js/validacionregistro.js" type="text/javascript"></script>