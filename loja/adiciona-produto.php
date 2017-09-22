<?php

include('header.php');

include('connect.php');

include('banco-produto.php'); 

$nomeproduto = $_POST["nomeproduto"];
$precoproduto = $_POST["precoproduto"];
$descricaoproduto = $_POST["descricaoproduto"];



if(insereProduto($conexao, $nomeproduto, $precoproduto, $descricaoproduto)) { ?>
   
    <p class="alert alert-success">Produto <b><?= $nomeproduto; ?></b> de <b><?= $precoproduto; ?> reais</b> adicionado com sucesso!</p>
    
    <?php
    } else {
        $msg = mysqli_error($conexao);
    ?>
        <p class="alert alert-danger">O produto <b><?= $nomeproduto; ?></b> de <b><?= $precoproduto; ?> reais</b> não foi adicionado:
            <br> <b><?= $msg ?></b> </p>
        <?php
    }

include('footer.php'); ?>


