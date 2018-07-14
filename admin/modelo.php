<?php

require_once "conexion.php";
/*Incuiremos las consultas  destructicas, es decir , INSERT , UPDATE, DELETE
*/
function listar_avisos(){
  $mysql = conexionMySql();

    $sql = "SELECT * FROM avisos;";
    $resultado = mysqli_query($mysql,$sql);

    if($resultado){
      $respuesta = "<span class ='msnExito' >Usuario registrado correctamente</span>";
    }else{
      $respuesta = "<span class ='msnError' >No se pudo registrar al Usuario </span>";
    }

$resultado_ok = mysqli_fetch_assoc($resultado);
return $resultado_ok;
}



function registrarUsuario($nombre ,$apellido , $fono, $correo, $pass){
  $mysql = conexionMySql();
  $sqlExiste = "SELECT * FROM usuario WHERE correo = '$correo'";
  $resExiste = mysqli_query($mysql, $sqlExiste);

  if(mysqli_num_rows($resExiste) > 0){
    $respuesta = "<span class = 'msnError'>Usuario ya existe </span>";
  }else {
    $sql = "INSERT INTO usuario() VALUES(null, '$nombre', '$apellido', '$fono' , '$correo', '$pass')";
    $resultado = mysqli_query($mysql,$sql);
    if($resultado){
      $respuesta = "<span class ='msnExito' >Usuario registrado correctamente</span>";
    }else{
      $respuesta = "<span class ='msnError' >No se pudo registrar al Usuario </span>";
    }
  }
  return printf($respuesta);
}
function insertarAviso($titulo, $categoria, $imagen, $precio, $stock, $id){
  $mysql = conexionMySql();
  if ($imagen["type"] != "image/jpeg"){
    $respuesta = "<span class='msnError'>Debe seleccionar una imagen</span>";
  } else {
    $rutaOrigen = $imagen["tmp_name"];
    //la ruta de texto se va a trasformar en una cadena de texto de 32 caracteres
    $rutaDestino = "img/".md5($imagen["tmp_name"]).".jpeg";
    //echo $titulo.'<br>'.$categoria.'<br>'.$precio.'<br>'.$id.'<br>'; die;
    $resultado = move_uploaded_file($rutaOrigen, $rutaDestino);
    if ($resultado) {
      $sql = "INSERT INTO avisos() VALUES (null,'$titulo','$precio', '$rutaDestino', '$stock' , $id, $categoria);";
      $res = mysqli_query($mysql, $sql);
    //  print_r($res); die;
      if ($res){
        $respuesta = "<span class ='msnExito' >Mochila subida con exito</span>";
      }else {
        $respuesta = "<span class='msnError'>Ocurrio un error al subir la mochila</span>";
      }
    }else {
      $respuesta = "<span class='msnError'>No se pudo subir la mochila</span>";
    }
  }
  return printf($respuesta);

}
 ?>
