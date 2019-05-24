<?php include("cabecalho.php"); ?>

<?php 

$conexao = mysqli_connect('localhost', 'root', '', 'locadoraveiculos');

function listaProdutos($conexao) {
    $carros = [];
    $resultado = mysqli_query($conexao, "select * from veiculo");
    while($carro = mysqli_fetch_assoc($resultado)) {
        array_push($carros, $carro);
    }
    return $produtos;
}



?>

                <div class="header">
                    <h1>VEÍCULOS CADASTRADOS</h1>
                </div>
                <table style="width:100%">
                    <tr>
                        <th>Código</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Ano</th>
                        <th>Dir.Hid</th>
                        <th>Ar Cond.</th>
                        <th>Air Bag</th>
                        <th>Alarme</th>
                        <th>Banco Couro</th>
                        <th>Som</th>
                        <th>Travas</th>
                        <th>Piloto</th>
                        <th>Outro</th>
                    </tr>
                <?php

                $produtos = listaProdutos($conexao);
                foreach($produtos as $produto) {
                    if($produto == 'S') {
                        $produto = 'X';
                    }
                    ?>
                    <tr>
                        <td><?= $produto['codigo'] ?></td>
                        <td><?= $produto['marca'] ?></td>
                        <td><?= $produto['modelo'] ?></td>
                        <td><?= $produto['ano'] ?></td>
                        <td><?= $produto['direcao'] ?></td>
                        <td><?= $produto['ar_condicionado'] ?></td>
                        <td><?= $produto['air_bag'] ?></td>
                        <td><?= $produto['alarme'] ?></td>
                        <td><?= $produto['banco_couro'] ?></td>
                        <td><?= $produto['som'] ?></td>
                        <td><?= $produto['travas'] ?></td>
                        <td><?= $produto['piloto_automatico'] ?></td>
                        <td><?= $produto['outro'] ?></td>
                    </tr>
                <?php
                }
                ?>
                </table>
<?php include("rodape.php"); ?>