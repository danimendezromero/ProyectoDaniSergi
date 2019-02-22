<?php

  $conn = new mysqli('localhost', 'root', '', 'teamweb');
  $table = $_POST["table"];
if(isset($_GET["buscar"]) && $_GET["buscar"]!="" && $_GET["buscar"]!=" "){
  $buscar = $_GET["buscar"];
  if($table=="usuario"){
    $sql = "SELECT * FROM $table WHERE nickname LIKE '%$buscar%' OR ow_nickname LIKE '%$buscar%' ";
  }else if($table=="equipo"){
    $sql = "SELECT * FROM $table WHERE id_juego='2' AND nombre LIKE '%$buscar%'  ";
  }
}else{
  if($table=="usuario"){
    $sql = "SELECT * FROM $table WHERE ow_nickname!='' ";
  }else if($table=="equipo"){
    $sql = "SELECT * FROM $table WHERE id_juego='2'";
  }
}

  $result = $conn->query($sql);
  $resultado = array();
  while($row = $result->fetch_assoc()) {
       $resultado[] = $row;
  }







?>
