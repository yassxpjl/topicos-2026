<?php
include('conexao.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Salvar Contato</title>
    <link rel="stylesheet" href="agenda_31.css">
</head>

<body>

<h1>Salvamento de Contato</h1>

<div class="container">
<div>

<?php

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$fone = $_POST['fone'];

$sql = "INSERT INTO contatos (nome, endereco, telefone)
VALUES ('$nome', '$endereco', '$fone')";

if (mysqli_query($conexao, $sql)) {
    echo "<h2>Cadastro realizado com sucesso!</h2>";
} else {
    echo "<h2>Erro: " . mysqli_error($conexao) . "</h2>";
}
?>

<div class="centralizar">
    <a href="index.php" class="botao">VOLTAR</a>
</div>

</div>
</div>

<div class="autor">
    Yasmin M Balefo
</div>

</body>
</html>