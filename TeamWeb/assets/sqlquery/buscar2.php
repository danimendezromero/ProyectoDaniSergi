<?php

  $conn = new mysqli('localhost', 'root', '', 'teamweb');
  $game = $_POST["game"];
  $table = $_POST["table"];
if(isset($_GET["buscar"]) && $_GET["buscar"]!="" && $_GET["buscar"]!=" "){
  $buscar = $_GET["buscar"];
  if($table=="usuario"){
    $sql = "SELECT * FROM $table WHERE nickname LIKE '%$buscar%' OR lol_nickname LIKE '%$buscar%' ";
  }else if($table=="equipo"){
    $sql = "SELECT * FROM $table WHERE id_juego='$game' AND nombre LIKE '%$buscar%'  ";
  }
}else{
  if($table=="usuario"){
    $sql = "SELECT * FROM $table WHERE lol_nickname!='' ";
  }else if($table=="equipo"){
    $sql = "SELECT * FROM $table WHERE id_juego='$game'";
  }
}

  $result = $conn->query($sql);
  $resultado = array();
  while($row = $result->fetch_assoc()) {
       $resultado[] = $row;
  }







?>
