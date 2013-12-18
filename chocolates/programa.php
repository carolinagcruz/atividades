<?php
$chocE = 0;
$chocB = 0;
$promoE = 0;
$promoB = 0;
$contagem = 0;


$chocE = $_POST["chocE"];
$chocB = $_POST["chocB"];


$contagem = 3;
while ( $contagem <= $chocE){
	$promoB = $promoB + 1;
	$contagem = $contagem + 3;
}
$contagem = 2;
while ( $contagem <= $chocB){
	$promoE = $promoE + 1;
	$contagem = $contagem + 2;
}

$contagem = 5;
while ( $contagem <= $chocE + $chocB){
	$promoB = $promoB + 1;
	$contagem = $contagem + 5;
}


echo $chocE + $promoE;

echo $chocB + $promoB;

?>
