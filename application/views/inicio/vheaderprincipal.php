<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Principal</title>
	<link rel="stylesheet" href="../css/materialize.min.css">
	<link rel="stylesheet" href="../css/icono.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<script src="../js/jquery.js" defer></script>
	<script src="../js/materialize.min.js" defer></script>
	<script src="../js/icono.js" defer></script>
<style>
body {
  display: flex;
  min-height: 100vh;
  flex-direction: column;
}

main {
  flex: 1 0 auto;
}
#logo{

  width: 8%;
  height: 120%;
  margin-top: 0px;

}

.nav-wrapper.color{
  background-color: #032338;
}
#slide-out{
  margin-top: 64px;
  width: 260px;
}
 .dropdown-content {
   min-width: 200px
 }

  </style>
</head>
<body>
  <ul id="dropdown1" class="dropdown-content" style="width: 300px !important">
    <li><a href="#!"><i class="material-icons">accessibility</i>Editar Perfil</a></li>
    <li><a href="#!"><i class="material-icons">perm_identity</i>Ver Cuenta</a></li>
    <li class="divider"></li>
    <li><a href="#!"><i class="material-icons">exit_to_app</i>Cerrar Sesión</a></li>
  </ul>
<nav>
  <div class="nav-wrapper navbar-fixed color">
    <a href="#"><img id="logo" src="../imagen/EveCaplogo.png"></a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a class="dropdown-button" href="#" data-activates="dropdown1"><i class="material-icons">account_circle</i></a></li>
    </ul>
  </div>
</nav>

  <ul id="slide-out" class="side-nav fixed">
    <li><div class="user-view">
      <div class="background">
        <img src="../imagen/prueba.jpg">
      </div>
      <a href="#!user"><img class="circle" src="../imagen/bad.jpeg"></a>
      <a href="#!name"><span class="white-text name">John Doe</span></a>
      <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">dehaze</i>Eventos</a></li>
    <li><a href="#!"><i class="material-icons">import_contacts</i>Sub Eventos</a></li>
    <li><a href="#!"><i class="material-icons">computer</i>Asistencia</a></li>
    <li><a href="#!"><i class="material-icons">assignment</i>Reportes</a></li>
    <li><a href="#!"><i class="material-icons">create</i>Encuesta</a></li>
  <!--
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>-->
  </ul>
