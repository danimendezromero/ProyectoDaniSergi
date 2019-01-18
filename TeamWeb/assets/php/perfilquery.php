<?php
$id = $_GET["user"];
$conn = new mysqli('localhost', 'root', '', 'teamweb');
$sql = "SELECT lol_nickname FROM usuario WHERE id_usuario=$id";
var_dump($sql);
$result = $conn->query($sql);
$to_encode = array();
$row = $result->fetch_assoc();
$to_encode[] = $row;
echo json_encode($to_encode);
?>
