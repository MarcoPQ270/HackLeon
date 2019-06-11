<?php include_once('headerLR.php');?>
<body>
    <div class="section container">
            <div class="card right">
                    <div class="card-content">
                        <div class="card image">                            
                            <img src="./Imagenes/avatarregistro.jpg" class="avatar">
                         </div><br> <h1>Crea tu cuenta </h1>
                            <form action="" method="post" id="frmregistro">
                                    <div class="input-field">
                                            <input type="text" name="username" id="username">
                                            <label for="username">Nombre:*</label>    
                                    </div>
                                    <div class="input-field">
                                        <label for="fecha">Fecha de nacimiento:*</label>
                                        <input type="text" name="fecha" id="fecha" class="datepicker">
                                    </div>
                                    <div class="input-field">
                                        <p>
                                             <label>
                                                 <input class="with-gap" name="sex" id="sex" type="radio" checked />
                                                 <span>Femenino</span>

                                             </label>
                                             <label>
                                                 <input class="with-gap" name="sex" id="sex" type="radio"/>
                                                 <span>Masculino</span>
                                             </label>
                                         </p>
                                    </div>
                                    <div class="input-field">
                                          <select name="estado" id="estado">
                                                <option value="" disabled selected>Seleccione su estado:*</option>
                                                <option value="1">Aguascalientes</option>
                                                <option value="2">Baja California</option>
                                                <option value="3">Baja California Sur</option>
                                                <option value="4">Campeche</option>
                                                <option value="5">Chiapas</option>
                                                <option value="6">Chihuahua</option>
                                                <option value="7">Ciudad de México</option>
                                                <option value="8">Coahuila</option>
                                                <option value="9">Durango</option>
                                                <option value="10">Guanajuato</option>
                                                <option value="11">Guerrero</option>
                                                <option value="12">Hidalgo</option>
                                                <option value="13">Jalisco</option>
                                                <option value="14">México</option>
                                                <option value="15">Michoacan</option>
                                                <option value="16">Morelos</option>
                                                <option value="17">Nayarit</option>
                                                <option value="18">Nuevo León</option>
                                                <option value="19">Oaxaca</option>
                                                <option value="20">Puebla</option>
                                                <option value="21">Queretaro</option>
                                                <option value="22">Quintana Roo</option>
                                                <option value="23">San Luis Potosí</option>
                                                <option value="24">Sinaloa</option>
                                                <option value="25">Sonora</option>
                                                <option value="26">Tabasco</option>
                                                <option value="27">Tabasco</option>
                                                <option value="28">Tamaulipas</option>
                                                <option value="29">Tlaxcala</option>
                                                <option value="30">Veracruz</option>
                                                <option value="30">Veracruz</option>
                                                <option value="30">Yucatán</option>
                                                <option value="32">Zacatecas</option>
                                          </select>
                                    </div>
                                    <div class="input-field">
                                        <input type="text" name="municipio" id="municipio">
                                        <label for="municipio">Municipio:*</label>
                                    </div>
                                    <div class="input-field">
                                            <input type="text" name="mail" id="mail">
                                            <label for="mail">Correo:*</label>
                                    </div>
                                    <div class="input-field">
                                        <label for="psw">Contraseña:*</label>
                                        <input type="password" name="psw" id="psw">
                                    </div>
                                    <div class="input-field">
                                            <label for="cpsw">Confirmar contraseña:*</label>
                                            <input type="password" name="cpsw" id="cpsw">
                                    </div>
                                    <p><span><h3 class="while-text">Información de recuperacion</h3></span></p>
                                    <div class="input-field">
                                        <input type="text" name="pregunta1" id="pregunta1">
                                        <label for="pregunta1">¿Nombre de tu super heroe de la infancia?</label>
                                    </div>
                                    <div class="input-field">
                                        <input type="text" name="pregunta2" id="pregunta2">
                                        <label for="pregunta2">¿Nombre de tu primera mascota?</label>
                                    </div>
                                    <div class="input-field">
                                        <p>
                                            <label for="remember">
                                                <input type="checkbox" name="remember" id="remember">
                                                <span>Aceptar terminos y condiciones</span><br>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi laborum architecto, 
                                                    obcaecati nesciunt debitis ducimus dolore optio reprehenderit, 
                                                    rerum magni, labore sed. Pariatur, laudantium blanditiis nam deserunt molestiae neque hic.</p>
                                            </label>
                                        </p>
                                    </div><br>
                                    <div class="input-field">
                                        <input type="submit" name="btnregister" id="btnregister"value="Save">
                                    </div>
                                    <a href="./login.php"class="right">Iniciar de sesión</a>
                            </form>
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
</body>