<?php include("cabecalho.php"); ?>
<?php

$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$anoFabricacao = $_POST['anoFabricacao'];

if(isset($_POST['opcionais'])) {

    $listaOpcionais = "";
    foreach($_POST['opcionais'] as $opcional) {

        $listaOpcionais =  "- $opcional <br>";
    }
}
$conexao = mysqli_connect('localhost', 'root', '', 'locadora');

$query = "insert into veiculos (marca, modelo, anoFabricacao, opcionais) values ( '{$marca}', '{$modelo}', '{$anoFabricacao}', '{$listaOpcionais}'";
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