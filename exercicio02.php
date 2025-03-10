<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 (CORRIGIDO)</title>
    <link rel="stylesheet" href="css/style-exercicios.css">
    <style>
        .desafio-flex {
            display: flex;
            border: solid 1px black;
            justify-content: space-evenly;
            padding: 4px;
        }
    </style>
</head>

<body>
<div class="container">
    <header class="titulo">
        <h1>Exercício 02 (CORRIGIDO)</h1>
        <p class="link-enunciado">
            <a href="https://github.com/otiagohub/exercicios-php1-iniciais?tab=readme-ov-file#exerc%C3%ADcio-02-estruturas-de-dados-com-arrays-e-objetos" target="_blank">
                Ver enunciado do exercício 02
            </a>
        </p>        
    </header>

<?php
// Array Associativo
$pessoa1 = [
    "usuario" => "jon.oliva",
    "email" => "jon@savatage.com",
    "senha" => "123abcdYYZ",
    "idade" => 65,
    "sexo" => "masculino",
    "cidade" => "Los Angeles"
];

// Objeto Genérico
$pessoa2 = new stdClass();
$pessoa2->usuario = "neil.peart";
$pessoa2->email = "neil@rush.com";
$pessoa2->senha = "2112rush";
$pessoa2->idade = 70;
$pessoa2->sexo = "masculino";
$pessoa2->cidade = "Toronto";
?>

<div class="desafio-flex">
    <section class="dados">
        <h2>Dados da pessoa 1</h2>
        <p>Usuário: <?=$pessoa1["usuario"]?></p>
        <p>E-mail: <a href="mailto:<?=$pessoa1["email"]?>"><?=$pessoa1["email"]?></a></p>
        <p>Idade: <?=$pessoa1["idade"]?> anos.</p>
    </section>

    <section class="dados">
        <h2>Dados da pessoa 2</h2>
        <p>Usuário: <?=$pessoa2->usuario?></p>
        <p>E-mail: <a href="mailto:<?=$pessoa2->email?>"><?=$pessoa2->email?></a></p>
        <p>Idade: <?=$pessoa2->idade?> anos.</p>
    </section>
</div>


    

</div>

</body>

</html>