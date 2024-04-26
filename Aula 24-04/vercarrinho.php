<?php 

$listagemProdutos = "";
$total = 0;

if(!isset($_COOKIE["qtd"])){
    $qtd = 0;
}else{
    $qtd = $_COOKIE['qtd'];

    $carrinhoAtual = isset($_COOKIE['carrinho']) ?$_COOKIE['carrinho']: " ";

    $carrinho = unserialize($carrinhoAtual);

    foreach($carrinho as $produto){
        $listagemProdutos .= $produto["codigo"]."-";
        $listagemProdutos .= $produto["descricao"]."-";
        $listagemProdutos .= $produto["valor"]."<br>";

        $total += $produto["valor"];
    }

    $total = number_format($total,2,",",".");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ver carrinho</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />


    <style>
        #menu{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        #qtd{
            background-color: brown;
            color: white;
            font-weight: bold;
            font-size: 12px;
            border-radius: 20px;
            padding: 3px;
            vertical-align: top;
        }
    </style>
</head>
<body>
    <div id="menu">
        <div>
            <a href="compra2.php">
                <span class="material-symbols-outlined">cottage</span>
            </a>
        </div>

        <div align="right">
            <a href=""><span class="material"></span></a>
            <span id="qtd"><?=$qtd ?></span><span class="material-symbols-outlined"> shopping_cart_checkout</span>
        </div>
    </div>

    <hr>

    <p>Seus itens são: </p>

    <?=$listagemProdutos ?>

    <br>

    <b>Total: </b> <?=$total ?>
</body>
</html>