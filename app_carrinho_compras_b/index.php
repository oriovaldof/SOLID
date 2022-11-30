<?php
require "./vendor/autoload.php";

use App\{
    Item,
    Pedido,
    EmailService
};

echo '<h3>COM SRP</h3>';

$pedido = new Pedido();
//----------------------------------------------
$item1 = new Item();
$item2 = new Item();

$item1->setDescricao('Porta Copo');
$item1->setValor(4.55);

$item2->setDescricao('Lampada');
$item2->setValor(8.32);

//----------------------------------------------

echo '<h4>Pedido iniciado</h4>';
echo '<pre>';
print_r($pedido);
echo '</pre>';

//----------------------------------------------
$pedido->getCarrinhoCompra()->adicionarItem($item1);
$pedido->getCarrinhoCompra()->adicionarItem($item2);
//----------------------------------------------

echo '<h4>Pedido com itens</h4>';
echo '<pre>';
print_r($pedido);
echo '</pre>';

//----------------------------------------------

echo '<h4>itens do carrinho</h4>';
echo '<pre>';
print_r($pedido->getCarrinhoCompra()->getItens());
echo '</pre>';

//----------------------------------------------

echo '<h4>Valor do Pedido</h4>';
$total = 0;
foreach($pedido->getCarrinhoCompra()->getItens() as $key => $item){
    $total += $item->getValor();
}
echo $total;

//----------------------------------------------

echo '<h4>Carrinho esta valido?</h4>';
echo $pedido->getCarrinhoCompra()->validarCarrinho();

//----------------------------------------------

echo '<h4>Status do Pedido</h4>';
echo $pedido->getStatus();

//----------------------------------------------


echo '<h4>Confirmar Pedido</h4>';
echo $pedido->confirmarPedido();

//----------------------------------------------

echo '<h4>Status do Pedido</h4>';
echo $pedido->getStatus();

//----------------------------------------------


echo '<h4>E-mail</h4>';
if($pedido->getStatus() == 'confirmado'){
   echo  EmailService::dispararEmail();
}

//----------------------------------------------


/*
print_r($carrinho1->exibirItens());
echo '<br>';
echo 'valor total:' . $carrinho1->exibirValorTotal();

$carrinho1->adicionarItem('Bicicleta', 750.10);
$carrinho1->adicionarItem('Geladeira', 1950.15);
$carrinho1->adicionarItem('Tapete', 350.20);

echo '<pre>';
print_r($carrinho1->exibirItens());
echo 'valor total recalculado:' . $carrinho1->exibirValorTotal();
echo '<br>';

echo 'status:' . $carrinho1->exibirStatus();
echo '<br>';
if ($carrinho1->confirmarPedido()) {
    echo 'Pedido realizado com sucesso';
} else {
    echo 'Erro na confirmação do pedido. Carrinho não possui itens';
}
echo '<br>';
echo 'status:' . $carrinho1->exibirStatus();
*/