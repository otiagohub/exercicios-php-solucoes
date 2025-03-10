<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06 Processamento</title>
    <link rel="stylesheet" href="css/style-exercicios.css">
</head>
<body>
<div class="container">
    <header class="titulo">
        <h1>Exercício 06 Processamento</h1>
        <p class="link-enunciado">
            <a href="https://github.com/otiagohub/exercicios-php1-iniciais/blob/main/README.md#exerc%C3%ADcio-06-manipula%C3%A7%C3%A3o-de-dados-a-partir-de-formul%C3%A1rio" target="_blank">
                Ver enunciado do exercício 06
            </a>
        </p>        
    </header>

<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if(empty($_POST['produto']) || empty($_POST['fabricante']) || empty($_POST['preco']) || empty($_POST['quantidade']) ){
?>

        <div class="erro">
            <p>Você deve preencher todos os campos!</p>
            <p><a href="exercicio06-formulario.php">Voltar</a></p>
        </div>

<?php
        } else {
            $produto = filter_input(INPUT_POST, 'produto', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $fabricante = filter_input(INPUT_POST, 'fabricante', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $preco = filter_input(
                INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);
            $total = $preco * $quantidade;
?>
            <section class="dados">
                <h2>Dados</h2>
                <p><b>Produto:</b> <?=$produto?></p>
                <p><b>Fabricante:</b> <?=$fabricante?></p>
                <p><b>Preço:</b> R$ <?=number_format($preco, 2, ",", ".")?></p>
                <p><b>Quantidade:</b> <?=$quantidade?></p>
                <p><b>Total:</b> R$ <?=number_format($total, 2, ",", ".")?></p>
            </section>
<?php
        }
    } else {        
?>

    <div class="erro">
        <p>Acesso inválido! Você deve usar o formulário.</p>
        <p><a href="exercicio06-formulario.php">Ir para o formulário</a></p>
    </div>
<?php
    }
?>

</div>
</body>
</html>