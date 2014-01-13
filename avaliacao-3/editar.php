<?php
     echo '<body bgcolor="green">';
   
    require_once("menu.php");

    session_start();
    
    if(!isset($_SESSION["cadastros"])){
       echo '<p style="font-size:20px">Não existem produto para editar</p>';
    }
    else{
        $id = $_REQUEST["id"];
        $nomeProduto = $_REQUEST["nomeProduto"];
        $cor = $_REQUEST["cor"];
        $prazoEntrega = $_REQUEST["prazoEntrega"];
        $detalheProduto = $_REQUEST["detalheProduto"];
        
        
        $produtoNovo = false;
        if(isset($_REQUEST["produtoNovo"])){
            $produtoNovo = true;
        }
        
        $produto = array();
        $produto["nomeProduto"] = $nomeProduto;
        $produto["cor"] = $cor;
        $produto["prazoEntrega"] = $prazoEntrega;
        $produto["detalheProduto"] = $detalheProduto;
        $produto["produtoNovo"] = $produtoNovo;
        
        $cadastros =& $_SESSION["cadastros"];
        $cadastros[$id] = $produto;   
       
        echo '<p style="font-size:20px">Edição efetuado com sucesso!</p>';
    }


?>
