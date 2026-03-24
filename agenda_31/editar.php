<?php
include('conexao.php');

$id = $_GET['id'];

$sql = "SELECT * FROM contatos WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);

$mensagem = "";

if (mysqli_num_rows($resultado) == 1) {
    $contato = mysqli_fetch_assoc($resultado);
} else {
    $mensagem = "Contato não encontrado.";
}

if (isset($_POST['atualizar'])) {

    $novo_nome = $_POST['nome'];
    $novo_endereco = $_POST['endereco'];
    $novo_fone = $_POST['fone'];

    $sql2 = "UPDATE contatos SET
    nome='$novo_nome',
    endereco='$novo_endereco',
    telefone='$novo_fone'
    WHERE id=$id";

    if (mysqli_query($conexao, $sql2)) {
        $mensagem = "Contato atualizado com sucesso!";
    } else {
        $mensagem = "Erro: " . mysqli_error($conexao);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
<title>Editar Contato</title>
<link rel="stylesheet" href="agenda_31.css">
</head>

<body>

<h1>Edição de Contato</h1>

<div class="container">
<div>

<?php
if ($mensagem != "") {

echo "<h2>$mensagem</h2>";

echo "<div class='centralizar'>
<a href='index.php' class='botao'>VOLTAR</a>
</div>";

} else {
?>

<form method="POST">

Nome:<br>
<input type="text" name="nome" value="<?php echo $contato['nome']; ?>"><br><br>

Endereço:<br>
<input type="text" name="endereco" value="<?php echo $contato['endereco']; ?>"><br><br>

Telefone:<br>
<input type="text" name="fone" value="<?php echo $contato['telefone']; ?>"><br><br>

<input type="submit" name="atualizar" value="Atualizar">

</form>

<?php
}
?>

</div>
</div>

<div class="autor">
Yasmin M Balefo
</div>

</body>
</html>