<?php

include('header.php');

include('connect.php');

include('banco-produto.php'); 

if(array_key_exists("removido",$_GET) && $_GET['removido']=='true') { ?>
    <p class="alert alert-success">Produto apagado com sucesso.</p>
<?php } ?>    

<?php
$produtos = listaProdutos($conexao);
?>

<table class="table table-striped table-bordered">
   
   <thead class="thead-inverse">
      
      <tr>
          <th>Nome do Produto</th>
          <th>Preço do Produto</th>
          <th>Descrição do Produto</th>
          <th>Remover?</th>
      </tr>
       
   </thead>
    <tbody>
    <?php
        foreach($produtos as $produto):
    ?>
    
    <tr>
        <td class="align-middle"><?= $produto["nome"] ?></td>
        <td class="align-middle"><?= $produto["preco"] ?></td>
        <td class="align-middle"><?= substr($produto["descricao"], 0, 40) ?></td>
        <td class="align-middle text-center">
            <form action="remove-produto.php" method="post">
                
                <input type="hidden" name="id" value="<?=$produto['id']?>">    
                <button class="btn btn-danger">remover</button>
                
            </form>
        </td>
    </tr>
    
    <?php
        endforeach;
    ?>
    </tbody>
</table>

<?php
include('footer.php');