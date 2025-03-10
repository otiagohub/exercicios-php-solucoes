<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 (CORRIGIDO)</title>
    <link rel="stylesheet" href="css/style-exercicios.css">
</head>

<body>
    <div class="container">
        <header class="titulo">
            <h1>Exercício 04 (CORRIGIDO)</h1>
            <p class="link-enunciado">
                <a href="https://github.com/otiagohub/exercicios-php1-iniciais?tab=readme-ov-file#exerc%C3%ADcio-04-estruturas-de-repeti%C3%A7%C3%A3o-loops-e-estruturas-de-dados" target="_blank">
                    Ver enunciado do exercício 04
                </a>
            </p>        
        </header>
<?php
$linguagens = [
    [
        "id" => 1,
        "nome" => "HTML",
        "descricao" => "Estruturação"
    ],
    [
        "id" => 2,
        "nome" => "CSS",
        "descricao" => "Estilos"
    ],
    [
        "id" => 3,
        "nome" => "JS",
        "descricao" => "Comportamentos"
    ],
    [
        "id" => 4,
        "nome" => "PHP",
        "descricao" => "Back-End"
    ],
    [
        "id" => 5,
        "nome" => "SQL",
        "descricao" => "Manipulação de dados"
    ],
];
?>

        <table>
            <caption>Lista de Linguagens</caption>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Linguagem</th>
                    <th>Descrição</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach($linguagens as $linguagem) { ?>
                    <tr>
                        <td><?=$linguagem['id']?></td>
                        <td><?=$linguagem['nome']?></td>
                        <td><?=$linguagem['descricao']?></td>
                    </tr>
                <?php } ?>
                
            </tbody>

        </table>
       
    </div>


</body>

</html>