<?php
if(isset($_GET['buscar'])){
  $name = $_GET["buscar"];
  $conn = new mysqli('localhost', 'root', '', 'teamweb');
  if($name!="" || $name!=" "){
      $sql = "SELECT * FROM usuario WHERE nickname LIKE '%$name%' OR lol_nickname LIKE '%$name%' OR ow_nickname LIKE '%$name%'";
  }else{
      $sql = "SELECT * FROM usuario";
  }
  $result = $conn->query($sql);
  $to_encode = array();
  while($row = $result->fetch_assoc()) {
       $to_encode[] = $row;
  }
  echo json_encode($to_encode);
}else{
  $conn = new mysqli('localhost', 'root', '', 'teamweb');

  $result = $conn->query($sql);
  $to_encode = array();
  while($row = $result->fetch_assoc()) {
       $to_encode[] = $row;
  }
  echo json_encode($to_encode);
}

?>
