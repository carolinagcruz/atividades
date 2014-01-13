<?php
     echo '<body bgcolor="yellow">';
    
    require_once("menu.php");

    session_start();
    
    if(!isset($_SESSION["cadastros"])){
       echo '<p style="font-size:20px">Não existem produtos para remover!</p>';
    }
    else{
        $id = $_REQUEST["id"];
        
        $cadastros =& $_SESSION["cadastros"];
        $cadastros[$id] = null;   
       
        echo '<p style="font-size:20px">Remoção efetuado com sucesso!</p>';
    }


?>
