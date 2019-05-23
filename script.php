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

echo "O carro da marca: $marca, modelo: $modelo e ano: $anoFabricacao. <br>";
echo "Com os seguintes opcionais: <br>";

if(isset($_POST['opcionais'])) {

    foreach($_POST['opcionais'] as $opcional) {

        if($opcional == "Direção Hidráulica") {
            echo " - $opcional <br>";
            $direcao = $opcional;
        }
        if($opcional == "Ar Concicionado") {
            echo " - $opcional <br>";
            $arCondicionado = $opcional;
        }
        if($opcional == "Air Bag") {
            echo " - $opcional <br>";
            $airBag = $opcional;
        }
        if($opcional == "Alarme") {
            echo " - $opcional <br>";
            $alarme = $opcional;
        }
        if($opcional == "Banco de Couro") {
            echo " - $opcional <br>";
            $bancoDeCouro = $opcional;
        }
        if($opcional == "Som") {
            echo " - $opcional <br>";
            $som = $opcional;
        }
        if($opcional == "Travas") {
            echo " - $opcional <br>";
            $travas = $opcional;
        }
        if($opcional == "Piloto Automático") {
            echo " - $opcional <br>";
            $pilotoAutomatico = $opcional;
        }
        if($opcional == "Outro") {
            echo " - $opcional <br>";
            $outro = $opcional;
        }
    }
}

$conexao = mysqli_connect('localhost', 'root', '', 'locadoraveiculos');

$query = "insert into veiculos (marca, modelo, ano, direcao, ar_condicionado, air_bag, alarme, banco_de_couro, som, travas, piloto_automatico, outro) values ( '{$marca}', '{$modelo}', {$anoFabricacao}, '{$direcao}', '{$arCondicionado}', '{$airBag}', '{$alarme}', '{$bancoDeCouro}', '{$som}', '{$travas}', '{$pilotoAutomatico}', '{$outro}')";
if(mysqli_query($conexao, $query)) { ?>
    <p class="alert-success">O carro da marca <?= $marca ?>, modelo <?= $modelo ?>, ano de fabricação <?= $anoFabricacao ?> <br>
                            e com os seguintes opcionais: <?= $listaOpcionais ?> </p>
<?php } else { ?>
    <p class="alert-danger">O carro não foi adicionado </p>
<?php
}

?>
<?php include("rodape.php"); ?>