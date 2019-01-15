<?php
$conn = new mysqli('localhost', 'root', '', 'teamweb');
$sql = "SELECT nickname FROM usuario";
$result = $conn->query($sql);
$to_encode = array();

while($row = $result->fetch_assoc()) {
     $to_encode[] = $row;
}
echo json_encode($to_encode);
?>
