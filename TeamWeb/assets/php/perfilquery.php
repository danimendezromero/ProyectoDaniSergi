<?php
$id = $_GET["user"];
$conn = new mysqli('localhost', 'root', '', 'teamweb');
$sql = "SELECT * FROM usuario WHERE id_usuario=$id";
$result = $conn->query($sql);
$to_encode = array();

while($row = $result->fetch_assoc()) {
     $to_encode[] = $row;
}
echo json_encode($to_encode);
?>
