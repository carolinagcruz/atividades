<?php
     echo '<body bgcolor="orange">';

    require_once("menu.php");
    session_start();
    
    if(isset($_SESSION["cadastros"])){
        $cadastros = $_SESSION["cadastros"];
        
        echo "<dl>";
        foreach($cadastros as $produto){
            $nomeProduto = $produto["nomeProduto"];
            $produtoNovo = $produto["produtoNovo"];
            $detalheProduto = $produto["detalheProduto"];
            $prazoEntrega = $produto["prazoEntrega"];
           
           
            if($produto != null){
                echo '<br/>';
                echo "<dt> " . $produto["nomeProduto"] . "</dt>";
                echo "<dd> Nome do produto: " . $nomeProduto . "</dd>";
                echo "<dd>Cor: " . $produto["cor"] . "</dd>";
                echo "<dd> Detalhe do Produto: " . $detalheProduto . "</dd>";
                echo "<dd> Prazo de Entrega: " . $prazoEntrega . "</dd>";
                echo"<dd> Produto Novo:";
                
                
                if($produtoNovo){
                    echo "Sim";
                }
                else{
                    echo "Não";
                }
                echo "</dd>";
                
            }
        }
         echo "</dl>";
    }
    else{
        echo '<p style="font-size:25px">Não existem produtos cadastrados!</p>';
    }
    
?>
