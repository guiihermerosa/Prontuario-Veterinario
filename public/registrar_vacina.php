<?php

$conn = new mysqli('localhost', 'root', '', 'ProntuarioVet');

$animal_id = $_POST['animal_id'];
$nome = $_POST['nome'];
$data = $_POST['data'];
$proxima_vacina = $_POST['proxima_vacina'];

$sql = "INSERT INTO Vacinas (animal_id, nome, data, proxima_vacina) VALUES ($animal_id, '$nome', '$data', '$proxima_vacina')";

if ($conn->query($sql) === TRUE) {
    echo "Vacina registrada com sucesso!";
} else {
    echo "Erro ao registrar vacina: " . $conn->error;
}

$conn->close();
?>