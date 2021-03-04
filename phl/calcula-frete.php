<?php


    const VALOR_PEDAGIO = 9.4;
    const VALOR_KM = 6;


    $origem = $_GET["origem"]; // o "origem" em laranja foi pego do arquivo index, em name 
    $destino = $_GET["destino"]; 
    $distancia = $_GET["distancia"];  
    $pedagios = $_GET["pedagios"];  

    $custoPedagio = $pedagios * VALOR_PEDAGIO;
    $custoKm = $distancia * VALOR_KM;

    $custoViagem = $custoKm + $custoPedagio;

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css" />
    <title>Document</title>
</head>
<body>
    <!-- Se o valor do pedágio for maior que 100,00 imprimir em vermelho-->
    <?php 
        if($custoPedagio > 100){
    ?>
        <h1 style="color: red"> O valor total dos pedagios é:  <?= $custoPedagio ?> </h1>
    <?php
        }else{
    ?>
        <h1> O valor total dos pedagios é: <?= number_format($custoPedagio, 2, ",", ".") ?>  </h1>
    <?php
        }
    ?>
    
    <h1> A viagem de <?= $origem ?> à <?= $destino ?> irá custar o valor total de R$ <em> <?= number_format($custoViagem,2, ",", ".") ?></em> </h1>

</body>
</html>