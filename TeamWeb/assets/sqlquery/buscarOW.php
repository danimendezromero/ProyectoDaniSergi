<?php
  $conn = new mysqli('localhost', 'root', '', 'teamweb');
  $game = $_POST["game"];
  $table = $_POST["table"];
if(isset($_POST["buscar"]) && $_POST["buscar"]!="" && $_POST["buscar"]!=" "){
  $buscar = $_POST["buscar"];
  if($table=="usuario"){
    $sql = "SELECT * FROM $table WHERE nickname LIKE '%$buscar%' OR ow_nickname LIKE '%$buscar%' ";
  }else if($table=="equipo"){
    $sql = "SELECT * FROM $table WHERE id_juego='$game' AND nombre LIKE '%$buscar%'  ";
  }
}else{
  if($table=="usuario"){
    $sql = "SELECT * FROM $table WHERE ow_nickname!='' ";
  }else if($table=="equipo"){
    $sql = "SELECT * FROM $table WHERE id_juego='$game'";
  }
}

  if(isset($_POST["server"]) && $_POST["server"]!=""){
    $server = $_POST["server"];
    $sql.="AND ow_region='$server'";
  }
  $count2 = 0;
  if(isset($_POST["dps"]) || isset($_POST["support"]) || isset($_POST["tank"])){
    $sql.="AND ( ";
  }
  if(isset($_POST["dps"])){
    $posicion = $_POST["dps"];
    $sql.=" ow_posicion='$posicion' ";
    $count2++;
  }
  if(isset($_POST["support"])){
    if($count2>0){
      $sql.="OR";
    }
    $posicion = $_POST["support"];
    $sql.=" ow_posicion='$posicion' ";
    $count2++;
  }
  if(isset($_POST["tank"])){
    if($count2>0){
      $sql.="OR";
    }
    $posicion = $_POST["tank"];
    $sql.=" ow_posicion='$posicion' ";
    $count2++;
  }
  if(isset($_POST["dps"]) || isset($_POST["support"]) || isset($_POST["tank"])){
    $sql.=") ";
  }
  $count = 0;

$result = $conn->query($sql);
$resultado = array();
if($table=="usuario"){
  while($row = $result->fetch_assoc()) {
    $resultado[] = $row;
  }
}else if($table=="equipo"){
  while($row = $result->fetch_assoc()) {
    $resultado[$count] = $row;

    $sql2 = "SELECT nickname,id_usuario FROM usuario WHERE id_equipo1='$row[id_equipo]' OR id_equipo2='$row[id_equipo]'";
    $result2 = $conn->query($sql2);
    while($row2 = $result2->fetch_assoc()) {
      $resultado[$count]["miembros"][] = $row2;
    }
    $count += 1;
  }
}







?>
