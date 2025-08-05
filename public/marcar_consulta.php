<?php

$conn = new mysqli('localhost', 'root', '', 'ProntuarioVet');

$animal_id = $_POST['animal_id'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$descricao = $_POST['descricao'];

$sql = "INSERT INTO Agendamentos (animal_id, data, hora, motivo) VALUES ($animal_id, '$data', '$hora', '$descricao')";

if ($conn->query($sql) === TRUE) {
    echo "Consulta agendada com sucesso!";
} else {
    echo "Erro ao agendar consulta: " . $conn->error;
}

$conn->close();
?>