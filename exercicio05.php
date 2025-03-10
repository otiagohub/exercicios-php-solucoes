<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05 (CORRIGIDO)</title>
    <link rel="stylesheet" href="css/style-exercicios.css">
</head>
<body>
    <div class="container">
        <header class="titulo">
            <h1>Exercício 05 (CORRIGIDO)</h1>
            <p class="link-enunciado">
                <a href="https://github.com/otiagohub/exercicios-php1-iniciais?tab=readme-ov-file#exerc%C3%ADcio-05-fun%C3%A7%C3%B5es" target="_blank">
                    Ver enunciado do exercício 05
                </a>
            </p>        
        </header>

<?php
function calcularMedia(float $valorNota1, float $valorNota2, float $valorNota3):float {
    $resultadoDaMedia = ($valorNota1 + $valorNota2 + $valorNota3) / 3;
    return $resultadoDaMedia;
}

function verificarSituacao(float $valorMedia):string {
    return $valorMedia >= 7 ? "aprovado" : "reprovado";
}

$aluno = "Neil Peart";
$nota1 = 9;
$nota2 = 5.7;
$nota3 = 9.94;

$media = calcularMedia($nota1, $nota2, $nota3);
$situacao = verificarSituacao($media);
?>

        <div class="dados">
            <h2>Aluno(a): <?=$aluno?></h2>
            <p>Média: <?=number_format($media, 2, ",", ".")?></h2>
            <p>Situação: <?=$situacao?></h2>
        </div>
      
        
    </div>    

 
</body>
</html>