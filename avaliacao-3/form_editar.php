<html>
    <head>
        <title>Cadastro de Produto</title>
    </head>
    <body>
        <?php
            require_once("menu.php");
        ?>
        <br><br><br>
        
       
        <form action="editar.php" method="post">
            <label>Digite o código do produto para editar:</label>
            <br/>
            <label>Código:</label>
            <input type="text" name="id" />
            <br><br>
            <label>Digite novo nome do produto:</label>
            <br/>
            <?php require_once("campos_produto.php"); ?>
            <br><br>
            <input type= "submit" value="Editar" />
        </form>
        
    </body>
    
</html>

<?php
    
    require_once("menu.php");

    session_start();
    
    if(isset($_SESSION["cadastros"])){
         $cadastros = $_SESSION["cadastros"];
        
        foreach($cadastros as $id => $produto){
            if($produto != null){
                echo "[$id] => " . $produto["nomeProduto"] . "<br/>";
                
            }
        }
    }
    else{
        echo '<br>';
        echo '<p style="font-size:25px">Não existem produtos cadastrados!</p>';
        
    }
    

?>
