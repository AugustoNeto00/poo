<?php
#Crie duas classes: Pedido e Produto. Um Pedido pode conter vários Produtos, e o valor total do pedido deve ser calculado com base nos produtos adicionados.
#Requisitos:
#A classe Produto deve ter as propriedades $nome e $preco, além de um método getPreco().
#A classe Pedido deve conter uma lista de produtos e um método adicionarProduto() para adicionar um produto ao pedido.
#A classe Pedido deve ter um método calcularTotal() para calcular o valor total dos produtos no pedido.
class Products{
    private $name;
    private $price;
    function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
}
    function getPreco($price){
        return $this->price;
}
}
class Order{
    private $products = [];//Here, i try to do a array to put the products, but i don't even know how to do that but i'm tryin'.
    function __construct(Products $products){
        $this->products = $products;
    }
    function addProducts($productadd){ //Put the damn arg here!! 
        $productadd = $this->products->$name;
        echo $productadd;
    }
}
$products1 = new products("Maça", 12);
$order1 = new order("maça", 30);
echo $order1->addProducts( $products1);
