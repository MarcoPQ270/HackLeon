<?php include_once('headerLR.php');?><br>
<body>
 <div class="section container">
     <div class="row">
     <div class="card">
        <div class="card-content">
           <form action="" method="post" id="frmlogin">
           <div class="card image">
            <img src="./Imagenes/avatarlogin.png" class="avatar">
            </div>
                <h1>Inicio de sesión</h1>
                <div class="input-field">
                    <input type="text" name="username" id="username">
                    <label for="username">Usuario o Correo:</label>
                </div>
                <div class="input-field">
                    <label for="psw">Contraseña:</label>
                    <input type="password" name="psw" id="psw">
                </div>
                <div class="input-field">
                    <p>
                        <label for="remember">
                            <input type="checkbox" name="remember" id="remember">
                            <span>Recordar</span>
                        </label>
                    </p>
                </div><br>
                <div class="input-field">
                    <input type="submit" name="btnlogin" id="btnlogin"value="Login" href="./index.php">
                </div>
                    <a href="./recuperarpsw.php"class="right">¿No recuerdo mi contraseña?</a><br>
                    <a href="./Registro.php"class="right">Registrarse</a>    
           </form>           
        </div>
    </div>
     </div>    
</div>
    <!--Materialize CSS-->
     <!--MAterialize-->
    <!--Estilo css-->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/default.css">
    <!--JS Materialize-->
    <!--Validacion JQuery-->
    <script type="text/javascript" src="./js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" src="./js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="./js/validacionlogin.js"></script>
</body>
</html>