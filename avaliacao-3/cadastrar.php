<?php
     echo '<body bgcolor="pink">';
    
    require_once("menu.php");

    session_start();
    
    if(!isset($_SESSION["cadastros"])){
        $_SESSION["cadastros"] = array();
    }
    
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
    $produto["produtoNovo"] = $produtoNovo;
    $produto["prazoEntrega"] = $prazoEntrega;
    $produto["detalheProduto"] = $detalheProduto;
    
    
    array_push($_SESSION["cadastros"], $produto);
    
    echo '<p style="font-size:25px">Cadastro efetuado com sucesso!</p>';

?>
