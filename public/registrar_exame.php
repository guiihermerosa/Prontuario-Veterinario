<?php

$conn = new mysqli('localhost', 'root', '', 'ProntuarioVet');

$animal_id = $_POST['animal_id'];
$tipo = $_POST['tipo'];
$data = $_POST['data'];
$resultado = $_POST['resultado'];

$sql = "INSERT INTO Exames (animal_id, tipo, data, resultado) VALUES ($animal_id, '$tipo', '$data', '$resultado')";

if ($conn->query($sql) === TRUE) {
    echo "Exame registrado com sucesso!";
} else {
    echo "Erro ao registrar exame: " . $conn->error;
}

$conn->close();
?>