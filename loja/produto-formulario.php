<?php

include('header.php'); 

?>


<div class="container d-flex justify-content-center">
    
    <div class="col-8">
       
       <h1>Formulário de Cadastro</h1>
        
        <form method="post" action="adiciona-produto.php">
        
            <div class="form-group">
                <input type="text" class="form-control" name="nomeproduto" placeholder="Insira o Nome do Produto" />
            </div>
            
            <div class="form-group">
                <input type="number" class="form-control" name="precoproduto" placeholder="Insira o Preço do Produto" />
            </div>
               
            <div class="form-group">
               <textarea name="descricaoproduto" class="form-control" placeholder="Insira a Descrição do Produto"></textarea>
            </div>

            <button type="submit" class="btn btn-lg btn-primary">Cadastrar Produto</button>

        </form>
        
    </div>
    
</div>

<?php include('footer.php'); ?>


