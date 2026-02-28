<?php

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];

echo "<h2>Resultado</h2>";

if ($idade >= 18) {
    echo "Nome: $nome <br>";
    echo "Minha idade é: $idade <br>";
    echo "Sexo: $sexo <br>";
    echo "Endereço: $endereco <br>";
} else {
    echo "Menor de idade";
}

?>