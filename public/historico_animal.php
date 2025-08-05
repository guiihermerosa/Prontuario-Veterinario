<?php

header('Content-Type: application/json');
$conn = new mysqli('localhost', 'root', '', 'ProntuarioVet');
$animal_id = $_GET['animal_id'];

$historico = [];

// Consultas
$res_consultas = $conn->query("SELECT data, hora, descricao FROM Consultas WHERE animal_id = $animal_id");
while($row = $res_consultas->fetch_assoc()) {
    $historico[] = ['tipo' => 'consulta', 'data' => $row['data'], 'hora' => $row['hora'], 'descricao' => $row['descricao']];
}

// Exames
$res_exames = $conn->query("SELECT tipo, data, resultado FROM Exames WHERE animal_id = $animal_id");
while($row = $res_exames->fetch_assoc()) {
    $historico[] = ['tipo' => 'exame', 'data' => $row['data'], 'tipo_exame' => $row['tipo'], 'resultado' => $row['resultado']];
}

// Vacinas
$res_vacinas = $conn->query("SELECT nome, data, proxima_vacina FROM Vacinas WHERE animal_id = $animal_id");
while($row = $res_vacinas->fetch_assoc()) {
    $historico[] = ['tipo' => 'vacina', 'data' => $row['data'], 'nome_vacina' => $row['nome'], 'proxima_vacina' => $row['proxima_vacina']];
}

echo json_encode($historico);
$conn->close();
?>