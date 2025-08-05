<?php
$conn = new mysqli('localhost', 'root', '', 'ProntuarioVet');

$animal_id = $_POST['animal_id'];
$tipo = $_POST['tipo'];
$data = $_POST['data'];
$descricao = $_POST['descricao'];

$sql = "INSERT INTO Procedimentos (animal_id, tipo, data, descricao) VALUES ($animal_id, '$tipo', '$data', '$descricao')";

if ($conn->query($sql) === TRUE) {
    echo "Procedimento registrado com sucesso!";
} else {
    echo "Erro ao registrar procedimento: " . $conn->error;
}

$conn->close();
?>