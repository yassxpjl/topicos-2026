<!DOCTYPE html>
<html>
<head>
    <title>Contatos - Turma 31</title>
    <link rel="stylesheet" href="agenda_31.css">
</head>

<body>

<h1>Agenda - Turma 31</h1>

<div class="container">

<div>
<h2>Cadastro de contatos</h2>
<form action="salvar.php" method="POST">
    Nome: <input type="text" name="nome"><br><br>
    Telefone: <input type="text" name="fone"><br><br>
    Endereço: <input type="text" name="endereco"><br><br>
    <input type="submit" value="Cadastrar">
</form>
</div>

<div>
<h2>Lista de contatos</h2>

<?php
include('conexao.php');

$sql = "SELECT * FROM contatos";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {

echo "<table>
<tr>
<th>Nome</th>
<th>Endereço</th>
<th>Telefone</th>
<th colspan='2'>Ações</th>
</tr>";

while ($linha = mysqli_fetch_assoc($resultado)) {
    echo "<tr>
    <td>{$linha['nome']}</td>
    <td>{$linha['endereco']}</td>
    <td>{$linha['telefone']}</td>
    <td><a href='editar.php?id={$linha['id']}'>Editar</a></td>
    <td><a href='excluir.php?id={$linha['id']}'>Excluir</a></td>
    </tr>";
}

echo "</table>";

} else {
    echo "<h3>Nenhum contato encontrado!</h3>";
}
?>

</div>
</div>

<div class="autor">
    Yasmin M Balefo
</div>

</body>
</html>
