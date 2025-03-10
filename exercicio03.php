<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 (CORRIGIDO)</title>
    <link rel="stylesheet" href="css/style-exercicios.css">
</head>
<body>
<div class="container">
    <header class="titulo">
        <h1>Exercício 03 (CORRIGIDO)</h1>
        <p class="link-enunciado">
            <a href="https://github.com/otiagohub/exercicios-php1-iniciais?tab=readme-ov-file#exerc%C3%ADcio-03-estruturas-condicionais" target="_blank">
                Ver enunciado do exercício 03
            </a>
        </p>        
    </header>
  
<?php
// Entrada do salário atual (sem reajuste)
$salario = 10000;

if($salario < 2000){
    $novoSalario = $salario * 1.15; // 15%
} elseif($salario <= 3000){
    $novoSalario = $salario * 1.10; // 10%
} else {
    $novoSalario = $salario * 1.05; // 5%
}
?>
     <div class="dados">
        <p>Salário antigo: <?=$salario?></p>
        <p>Novo salário: <?=$novoSalario?></p>
     </div>

</div>


</body>
</html>