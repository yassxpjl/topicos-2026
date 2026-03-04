<?php
echo "<h2>Atividade Vetor Simples - 0303<h2>";
echo "<h2>Atividade 1 <h2>";
$frutas = ["morango", "uva", "maça", "banana","abacaxi"];
echo "$frutas[0] <br>";  
echo "$frutas[1] <br>"; 
echo "$frutas[2]<br>"; 
echo "$frutas[3] <br>"; 
echo "$frutas[4] <br>"; 

$novafruta = ["pêra"];
echo "$novafruta[0]"; 

echo "<h2>Atividade 2<h2>";
$numeros = [5, 15, 25, 35, 45];
unset($numeros[2]);
foreach ($numeros as $num) {
 echo $num . "<br>";
}

echo "<h2>Atividade Vetor Associativo<h2>";
echo "<h2>Atividade 1<h2>";
$produto = [
    "nome" => "livro",
    "preço" => "R$30",
    "estoque" => "100"
   ];
   foreach ($produto as $chave => $valor) {
    echo "$chave: $valor <br>";
   }
   echo "<h2>Atividade 2<h2>";
   $notas = [
     "yasmin" => 7.5,
     "vitória" => 7.0,
     "laura" => 6.0
   ];
  $soma = 0;
   foreach ($notas as $nome => $nota) {
        $soma += $nota;
   }
  $media = $soma / count($notas);
    echo "média:$media <br>";

    $maiornota = 0;
    $alunomaior = "";
     foreach ($notas as $nome=> $nota){
        if ($nota > $maiornota){
            $maiornota = $nota;
            $alunomaior = $nome;
        }
     }
     echo "maior nota: $maiornota <br>";
     echo "aluno: $alunomaior";
    
     echo "<h2> Atividade 3 - Desafio<h2>";

     $vendedor = [
        ["nome" => "paulo",
         "oqvende" => "pneu"
    ], 
        [ "nome" => "gustavo",
        "oqvende" => "computador"
    ],
        ["nome" => "marcio",
        "oqvende" => "livro"
    ]
];
       foreach ($vendedor as $v ) {
        echo $v["nome"] . "<br>";
        echo "vende:" . $v["oqvende"] . "<br><br>";
       }



?>
