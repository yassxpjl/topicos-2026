<?php

$nome = $_POST['nome'];
$senha = $_POST['senha'];

if ($nome == "yassxpjl" and $senha == "1010") {
    echo "bem-vindo $nome!<br>
    seu cargo é administrador.";
}
elseif ($nome == "lorenzo" and $senha == "abcd") {
    echo "bem-vindo $nome! <br>
    seu cargo é funcionário.";
}
else {
    echo "erro: nome ou senha incorretos!";
}

?>