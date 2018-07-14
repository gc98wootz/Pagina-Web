<?php
require_once "conexion.php";

/*Incuiremos las consultas no destructicas, es decir , SELECT
listan contenido no lo eliminan*/
function inicioSesion($user , $pass){
  $mysql = conexionMySql();
  $sql = "SELECT * FROM usuario WHERE correo = '$user' AND password = '$pass'";
  $resExiste = mysqli_query($mysql, $sql);
  $fila= mysqli_fetch_array($resExiste);// para nombre de clave y posicion
  if(mysqli_num_rows($resExiste) > 0){
    session_start();
    $_SESSION["iniciado"] = true;
    $_SESSION["idUser"] = $fila[0];
    $_SESSION["nombreUsuario"] = $fila[1]. " ".$fila[2];
    $respuesta = 1;
  }else{
    $respuesta = "<span class ='msnError'>Datos Incorrectos!!</span>";
  }
  return printf($respuesta);
}

function crearCategorias(){
    $mysql = conexionMySql();
    $sql = "SELECT * FROM categoria";
    $res = mysqli_query($mysql, $sql);
    $respuesta = '<select class="form-control" name="Categoria" required>';
            $respuesta .= '<option value = "">Selecione Categoria</option>';
            while($fila = mysqli_fetch_array($res)){
              $respuesta.='<option value="'.$fila[0].'">'.$fila[1].'</option>';
            }
    $respuesta .= '</select>';
    return printf($respuesta);
}
 ?>
