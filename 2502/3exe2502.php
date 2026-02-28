<?php

$mf = $_POST['mf'];

echo "<h2>Resultado</h2>";

if ($mf <= 1.7) {
    echo "Aluno não pode realizar o exame.";
}
elseif ($mf >= 7.0) {
    echo "Aluno APROVADO!";
}
else {
    $ne = (50 - (6 * $mf)) / 4;
    echo "Aluno em exame.<br>";
    echo "Nota necessária no exame: " . number_format($ne, 2, ',', '.');
}

echo "<br><br><a href='index.html'>Voltar</a>";

?>