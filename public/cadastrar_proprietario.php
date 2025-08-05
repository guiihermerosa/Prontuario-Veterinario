<?php

$conn = new mysqli('localhost', 'root', '', 'ProntuarioVet');

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];

$sql = "INSERT INTO Proprietarios (nome, telefone, email, endereco) VALUES ('$nome', '$telefone', '$email', '$endereco')";

if ($conn->query($sql) === TRUE) {
    echo "Proprietário cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar proprietário: " . $conn->error;
}

$conn->close();
?>