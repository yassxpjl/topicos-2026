<?php
include('conexao.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Excluir Contato</title>
    <link rel="stylesheet" href="agenda_31.css">
</head>

<body>

<h1>Exclusão de Contato</h1>

<div class="container">
<div>

<?php
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $sql = "DELETE FROM contatos WHERE id = $id";

    if (mysqli_query($conexao, $sql)) {
        echo "<h2>Contato excluído com sucesso!</h2>";
    } else {
        echo "<h2>Erro: " . mysqli_error($conexao) . "</h2>";
    }
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