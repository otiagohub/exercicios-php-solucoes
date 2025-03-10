<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 (CORRIGIDO)</title>
    <link rel="stylesheet" href="css/style-exercicios.css">
    <style>
        .texto {
            font-style: italic;
            color: red;
        }
    </style>
</head>
<body>
<div class="container">
    <header class="titulo">
        <h1>Exercício 01 (CORRIGIDO)</h1>
        <p class="link-enunciado">
            <a href="https://github.com/otiagohub/exercicios-php1-iniciais?tab=readme-ov-file#exerc%C3%ADcio-01-uso-de-vari%C3%A1veis-eou-constantes-php-e-integra%C3%A7%C3%A3o-com-html" target="_blank">
                Ver enunciado do exercício 01
            </a>
        </p>        
    </header>
    
<?php
$data = "03/03/2025";
CONST NOME = "Tiago";
$curso = "Modelagem de Dados";
$cargaHoraria = 100;
$limiteDeFaltas = $cargaHoraria * 0.25;
?>
<div class="dados">
    <p>O aluno <span style="color: purple"><?=NOME?></span> está matriculado 
    no curso de <?=$curso?> com <span class="texto"><?=$cargaHoraria?></span>
    horas de duração, cujo limite de faltas é de 
    <?=$limiteDeFaltas?> horas.
</p>
</div>



</div>



</body>
</html>