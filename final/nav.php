<!--CSS Materialize-->
<link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
<!--Iconos--> 
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="../fonts/barcelona.ico" />
<!--Navbar-->
<nav class="black">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">MiClub</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Tendencias</a></li>
        <li>  <a class='dropdown-trigger' href='#' data-target='dropdown1'>Los Mejores</a>
        </li>
        <li><a href="./login.html">Iniciar sesión</a></li>
        <li><a href="./Registro.html">Registrarse</a></li>
        <li>
          <form>
              <div class="input-field">
                 <input id="search" type="search">
                 <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                 <i class="material-icons">close</i>
              </div>
           </form>
        </li>
      </ul>
    </div>
  </nav>
<!--Inicia menu movil-->
  <ul class="sidenav" id="mobile-demo">
        <li><a href="#">Novedades</a></li>
        <li> <a class='dropdown-trigger' href='#' data-target='dropdown2'>Los Mejores</a>
        <i class="material-icons right">arrow_drop_down</i></li>
        <li><a href="./login.html">Iniciar sesión</a></li>
        <li><a href="./Registro.html">Registrarse</a></li>
  </ul>
  <!--Menu dezplegable-->
<!-- Dropdown Structure -->
<ul id='dropdown1' class='dropdown-content'>
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
<ul id='dropdown2' class='dropdown-content'>
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
<!--Sidenav-->
     <!--JS Materialize-->
     <script type="text/javascript" src="../js/materialize.min.js"></script>
    <!--Incluimos JS sidnav-->
    <script type="text/javascript" src="../js/funcionesbasicas.js"></script>
