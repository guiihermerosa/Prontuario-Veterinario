<?php

header('Content-Type: application/json');
$conn = new mysqli('localhost', 'root', '', 'ProntuarioVet');
$res = $conn->query("SELECT * FROM Agendamentos ORDER BY data, hora");
$agendamentos = [];
while($row = $res->fetch_assoc()) $agendamentos[] = $row;
echo json_encode($agendamentos);
?>