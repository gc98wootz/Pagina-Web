<?php
include ("config.php");
function conexionMysql(){
  $conectar = mysqli_connect(SERVER, USER, PASS , BD);
  if(!$conectar){
    echo "No se pudo conectar a la  BD".mysqli_connect_error();
  }
  mysqli_set_charset($conectar, "utf8");
  return $conectar;
}

 ?>
