<?php

$conn = new mysqli('localhost', 'root', '', 'ProntuarioVet');

$nome = $_POST['nome'];
$especie = $_POST['especie'];
$raca = $_POST['raca'];
$idade = $_POST['idade'];
$peso = $_POST['peso'];
$data_nascimento = $_POST['data_nascimento'];
$proprietario_id = $_POST['proprietario_id'];

$sql = "INSERT INTO Animais (nome, especie, raca, idade, peso, data_nascimento, proprietario_id) VALUES ('$nome', '$especie', '$raca', $idade, $peso, '$data_nascimento', $proprietario_id)";

if ($conn->query($sql) === TRUE) {
    echo "Animal cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar animal: " . $conn->error;
}

$conn->close();
?>