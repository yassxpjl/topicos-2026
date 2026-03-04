<?php
$alunos = ["Ana","Bruno", "Carlos"];
echo $alunos[1]; // Bruno
print_r($alunos);

$numeros = [10, 20, 30];
$numeros[] = 40;
unset($numeros[1]);
foreach ($numeros as $num) {
 echo $num . "<br>";
}

$aluno = [
 "nome" => "Lucas",
 "idade" => 17,
 "curso" => "Informática"
];
echo $aluno["nome"];
foreach ($aluno as $chave => $valor) {
 echo "$chave: $valor <br>";
}

$alunos = [
    "aluno1" => "yasmin",
    "aluno2" => "vitória",
    "aluno3" => "laura"
];

$notas = [
    "yasmin" => 7.5,
    "vitória" => 7.0,
    "laura" => 6.0
];

$soma = 0;

foreach ($notas as $nome => $nota) {
    $soma += $nota;
}

echo "Soma: " . $soma . "<br>";
   
?>