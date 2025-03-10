<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05 com desafios - (CORRIGIDO)</title>
    <link rel="stylesheet" href="css/style-exercicios.css">
    <style>
        .reprovado { color: red; }
        .aprovado { color: darkgreen; }
    </style>
</head>
<body>
    <div class="container">
        <header class="titulo">
            <h1>Exercício 05 com desafios - (CORRIGIDO)</h1>
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

$listaDeAlunos = [
    [
        "nome" => "Neil Peart",
        "nota1" => 9,
        "nota2" => 5.7,
        "nota3" => 0.94,
    ],
    [
        "nome" => "Geddy Lee",
        "nota1" => 8.5,
        "nota2" => 10,
        "nota3" => 5,
    ],
    [
        "nome" => "Alex Lifeson",
        "nota1" => 5.32,
        "nota2" => 0.87,
        "nota3" => 9,
    ],
    [
        "nome" => "Jon Oliva",
        "nota1" => 5.32,
        "nota2" => 1.2,
        "nota3" => 5,
    ],
    [
        "nome" => "David Gilmour",
        "nota1" => 10,
        "nota2" => 9,
        "nota3" => 4.5,
    ],
];

foreach($listaDeAlunos as $aluno){
    $media = calcularMedia($aluno['nota1'], $aluno['nota2'], $aluno['nota3']);
    $situacao = verificarSituacao($media);
?>
        <div class="dados">
            <h2>Aluno(a): <?=$aluno['nome']?></h2>
            <p>Média: <?=number_format($media, 2, ",", ".")?></h2>
            <p class="<?=$media >= 7 ? 'aprovado' : 'reprovado'?>">
            Situação: <?=$situacao?></h2>
        </div>
<?php } ?>        
      
        
    </div>    

 
</body>
</html>