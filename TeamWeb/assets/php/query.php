<?php
$name = $_get["id"];
$conn = new mysqli('localhost', 'root', '', 'teamweb');
$sql = "SELECT lol_nickname FROM usuario WHERE id_usuario=$name";
$result = $conn->query($sql);
$to_encode = array();

while($row = $result->fetch_assoc()) {
     $to_encode[] = $row;
}
echo json_encode($to_encode);
?>
