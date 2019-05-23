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

$erros = [];

if(empty(trim($marca))) {
    $erros[] = "Campo marca precisa ser selecionado";
}
if(empty(trim($modelo))) {
    $erros[] = "Campo modelo precisa ter um modelo";
}
if($anoFabricacao < 1970 || $anoFabricacao > 2014) {
    $erros[] = "Campo ano precisa ser de 1970 à 2014";
}

$listaOpcionais = "";

if(isset($_POST['opcionais'])) {

    foreach($_POST['opcionais'] as $opcional) {

        if($opcional == "Direção Hidráulica") {
            $listaOpcionais = " - $opcional <br>";
            $direcao = $opcional;
        }
        if($opcional == "Ar Concicionado") {
            $listaOpcionais = " - $opcional <br>";
            $arCondicionado = $opcional;
        }
        if($opcional == "Air Bag") {
            $listaOpcionais = " - $opcional <br>";
            $airBag = $opcional;
        }
        if($opcional == "Alarme") {
            $listaOpcionais = " - $opcional <br>";
            $alarme = $opcional;
        }
        if($opcional == "Banco de Couro") {
            $listaOpcionais = " - $opcional <br>";
            $bancoDeCouro = $opcional;
        }
        if($opcional == "Som") {
            $listaOpcionais = " - $opcional <br>";
            $som = $opcional;
        }
        if($opcional == "Travas") {
            $listaOpcionais = " - $opcional <br>";
            $travas = $opcional;
        }
        if($opcional == "Piloto Automático") {
            $listaOpcionais = " - $opcional <br>";
            $pilotoAutomatico = $opcional;
        }
        if($opcional == "Outro") {
            $listaOpcionais = " - $opcional <br>";
            $outro = $opcional;
        }
    }
} else {
    $erros[] = "Campo opcionais precisa ter pelo menos um selecionado";
}

if(empty($erros)) {

$conexao = mysqli_connect('localhost', 'root', '', 'locadoraveiculos');

$query = "insert into veiculos (marca, modelo, ano, direcao, ar_condicionado, air_bag, alarme, banco_de_couro, som, travas, piloto_automatico, outro) values ( '{$marca}', '{$modelo}', {$anoFabricacao}, '{$direcao}', '{$arCondicionado}', '{$airBag}', '{$alarme}', '{$bancoDeCouro}', '{$som}', '{$travas}', '{$pilotoAutomatico}', '{$outro}')";
if(mysqli_query($conexao, $query)) { ?>
    <p class="alert-success">O carro da marca <?= $marca ?>, modelo <?= $modelo ?>, ano de fabricação <?= $anoFabricacao ?> <br>
                            e com os seguintes opcionais: <?= $listaOpcionais ?> </p>
<?php } else { ?>
    <p class="alert-danger">O carro não foi adicionado </p>
<?php
}
} else {
    foreach($erros as $erro) {
        echo " - $erro <br>";
    }
}

?>
<?php include("rodape.php"); ?>