<html>
    <head>
        <title>Cadastro de Produtos</title>
    </head>
    <body>
        <?php
            require_once("menu.php");
        ?>
        <br><br><br>
        <form action="remover.php" method="post">
            <label>Digite o código do produto para remover:</label>
            <br><br>
            <input type="text" name="id" />
            <input type= "submit" value="Remover" />
        </form>
        
    </body>
    
</html>

<br><br>
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
