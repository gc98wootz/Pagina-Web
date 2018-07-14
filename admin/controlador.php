<?php
//este archivo es para administrar el flujo de las acciones :D
require "vistas.php";
require "modelo.php";

sleep(1);
$tipoOp = $_POST["tipoOperacion"];

function ejecutarOperacion ($tipoOp){
  if ($tipoOp == "registrarUsuario"){
    registrarUsuario($_POST["txtNombre"],$_POST["txtApellido"],$_POST["txtFono"],
        $_POST["emailCorreo"],$_POST["passPassword"]);
  }elseif ($tipoOp == "inicioSesion") {
    inicioSesion($_POST["usuario"],$_POST["password"]);
  }elseif($tipoOp == "insertarAviso"){
    insertarAviso($_POST["titulo"],$_POST["Categoria"],$_FILES["imagen"],$_POST["precio"],$_POST["stock"], $_POST["idUsuario"]);
  }elseif($tipoOp == "listar_avisos"){
    listar_avisos();
  }
}
ejecutarOperacion($tipoOp);
?>
