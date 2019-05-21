<?php

$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$anoFabricacao = $_POST['anoFabricacao'];

echo "Marca: $marca<br>";
echo "Modelo: $modelo<br>";
echo "Ano de Fabricação: $anoFabricacao<br>";

if(isset($_POST['opcionais'])) {

    echo "Os opcionais são: <br>";

    // Faz loop pelo array do banco

    foreach($_POST['opcionais'] as $opcional) {

        echo "- " . $opcional . "<br>";
    }
}

?>