<?php

$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$anoFabricacao = $_POST['anoFabricacao'];

if(isset($_POST["opcionais"])) {

    echo "Os bancos de dados que você conhece são: ";

    // Faz loop pelo array do banco

    foreach($_POST["opcionais"] as $opcionais) {

        echo "* $opcionais";
    }
} else {

    echo "Você não escolheu número preferido!";

}



?>