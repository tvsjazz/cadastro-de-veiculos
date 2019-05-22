<?php include("cabecalho.php"); ?>
<?php

$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$anoFabricacao = $_POST['anoFabricacao'];
$direcao = "";
$arCondicionado = "";
$airBag = "";
$alarme = "";
$bancoDeCouro = "";
$som = "";
$travas = "";
$pilotoAutomatico = "";
$outro = "";


if(isset($_POST['opcionais'])) {

    $listaOpcionais = "";
    foreach($_POST['opcionais'] as $opcional) {

        $listaOpcionais =  "- $opcional <br>";
        if($opcional == "Direção Hidráulica") {
            echo $opcional;
            $direcao = $opcional;
        }
        if($opcional == "Ar Concicionado") {
            echo $opcional;
            $arCondicionado = $opcional;
        }
    }
}

$conexao = mysqli_connect('localhost', 'root', '', 'locadoraveiculos');

$query = "insert into veiculos (marca, modelo, ano, direcao,ar_condicionado, air_bag, alarme, banco_de_couro, som, travas, piloto_automatico, outro) values ( '{$marca}', '{$modelo}', '{$anoFabricacao}', '{$direcao}', '{$arCondicionado}', '{$airBag}', '{$alarme}', '{$bancoDeCouro}', '{$som}', '{$travas}', '{$pilotoAutomatico}', '{$outro}'";
if(mysqli_query($conexão, $query)) { ?>
    <p class="alert-success">O carro da marca <?= $marca ?>, modelo <?= $modelo ?>, ano de fabricação <?= $anoFabricacao ?> <br>
                            e com os seguintes opcionais: <?= $listaOpcionais ?> </p>
<?php } else { ?>
    <p class="alert-danger">O carro não foi adicionado </p>
<?php
}

mysqli_close($conexao);

?>
<?php include("rodape.php"); ?>