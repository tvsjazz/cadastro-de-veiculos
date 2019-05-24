<?php include("cabecalho.php"); ?>
<?php

$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$anoFabricacao = $_POST['anoFabricacao'];
$direcao = "N";
$arCondicionado = "N";
$airBag = "N";
$alarme = "N";
$bancoDeCouro = "N";
$som = "N";
$travas = "N";
$pilotoAutomatico = "N";
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
            $direcao = "S";
        }
        if($opcional == "Ar Concicionado") {
            $listaOpcionais = " - $opcional <br>";
            $arCondicionado = "S";
        }
        if($opcional == "Air Bag") {
            $listaOpcionais = " - $opcional <br>";
            $airBag = "S";
        }
        if($opcional == "Alarme") {
            $listaOpcionais = " - $opcional <br>";
            $alarme = "S";
        }
        if($opcional == "Banco de Couro") {
            $listaOpcionais = " - $opcional <br>";
            $bancoDeCouro = "S";
        }
        if($opcional == "Som") {
            $listaOpcionais = " - $opcional <br>";
            $som = "S";
        }
        if($opcional == "Travas") {
            $listaOpcionais = " - $opcional <br>";
            $travas = "S";
        }
        if($opcional == "Piloto Automático") {
            $listaOpcionais = " - $opcional <br>";
            $pilotoAutomatico = "S";
        }
        if($opcional == "Outro" && isset($_POST['outro']) ) {
            $listaOpcionais = " - " . $_POST['outro'] . " <br>";
            $outro = $_POST['outro'];
        } else {
            $erros[] = "O campo Outros precisa ser preenchido";
        }
    }
} else {
    $erros[] = "Campo opcionais precisa ter pelo menos um selecionado";
}

if(empty($erros)) {

$conexao = mysqli_connect('localhost', 'root', '', 'locadoraveiculos');

$query = "insert into veiculo (marca, modelo, ano, direcao, ar_condicionado, air_bag, alarme, banco_couro, som, travas, piloto_automatico, outro) values ( '{$marca}', '{$modelo}', {$anoFabricacao}, '{$direcao}', '{$arCondicionado}', '{$airBag}', '{$alarme}', '{$bancoDeCouro}', '{$som}', '{$travas}', '{$pilotoAutomatico}', '{$outro}');";
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