<div id="informacoes-produto">
<?php 
    include ("dados/listaMarmitas.php"); 
        if (isset($_GET["ide"]) && !empty($_GET["ide"])) {
            $ide = $_GET["ide"];
        }
?>
    <div id="imagem-produto">
    <div  class="item"> <img id="foto-detalhe" src="images/<?php echo $ide ?>.jpg"></div>
    </div>    
    
    <div id="info-produto">
        <?php
        foreach ($listaMarmitas as $value){
            if ($value["id"] == $ide){
        ?>
                <div id="nome-produto"><?=$value["nome"];?></div>
                <div id="descricao-produto"><?=$value["descricao"];?></div>
                <div id="ingredientes-produto"><?=$value["ingredientes"];?></div>
                <div id="preco-produto"><?=$value["preco"];?></div>  
        <?php
            }

        }
        ?>
        
    </div>

</div>

