<?php
  $conn = new mysqli('localhost', 'root', '', 'teamweb');
  $game = $_POST["game"];
  $table = $_POST["table"];
if(isset($_POST["buscar"]) && $_POST["buscar"]!="" && $_POST["buscar"]!=" "){
  $buscar = $_POST["buscar"];
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

  if(isset($_POST["server"]) && $_POST["server"]!=""){
    $server = $_POST["server"];
    $sql.="AND lol_region='$server'";
  }
  $count2 = 0;
  if(isset($_POST["top"]) || isset($_POST["jungle"]) || isset($_POST["mid"]) || isset($_POST["bot"]) || isset($_POST["support"])){
    $sql.="AND ( ";
  }
  if(isset($_POST["top"])){
    $posicion = $_POST["top"];
    $sql.=" lol_posicion='$posicion' ";
    $count2++;
  }
  if(isset($_POST["jungle"])){
    if($count2>0){
      $sql.="OR";
    }
    $posicion = $_POST["jungle"];
    $sql.=" lol_posicion='$posicion' ";
    $count2++;
  }
  if(isset($_POST["mid"])){
    if($count2>0){
      $sql.="OR";
    }
    $posicion = $_POST["mid"];
    $sql.=" lol_posicion='$posicion' ";
    $count2++;
  }
  if(isset($_POST["bot"])){
    if($count2>0){
      $sql.="OR";
    }
    $posicion = $_POST["bot"];
    $sql.=" lol_posicion='$posicion' ";
    $count2++;
  }
  if(isset($_POST["support"])){
    if($count2>0){
      $sql.="OR";
    }
    $posicion = $_POST["support"];
    $sql.=" lol_posicion='$posicion' ";
  }
  if(isset($_POST["top"]) || isset($_POST["jungle"]) || isset($_POST["mid"]) || isset($_POST["bot"]) || isset($_POST["support"])){
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
