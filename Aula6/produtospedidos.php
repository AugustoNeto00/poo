<?php
#Crie duas classes: Pedido e Produto. Um Pedido pode conter vários Produtos, e o valor total do pedido deve ser calculado com base nos produtos adicionados.
#Requisitos:
#A classe Produto deve ter as propriedades $nome e $preco, além de um método getPreco().
#A classe Pedido deve conter uma lista de produtos e um método adicionarProduto() para adicionar um produto ao pedido.
#A classe Pedido deve ter um método calcularTotal() para calcular o valor total dos produtos no pedido.
class Products {
	private $name;
	private $price;
	function __construct($name, $price) {
		$this->name = $name;
		$this->price = $price;
	}
	function getPrice() {
		return $this->price;
	}
	function getName() {
		return $this->name;
	}
}
class Order {
	private $product = [];
	function getName() {
		if (!empty($this->product)) {
			return $this->product[0]->getName();
		} else {
			echo "Don't have products in there...";
		}
	}
    function getPrice(){
        return $this->price;
    }
    
	//Here, i do a array to put the products, but i don't even know how to do that but i'm trying.
	function addProducts(products $product) {
		//Put the damn arg here!!
		$this->product[] = $product;
		print_r("You have put a product: ".$this->getName(). " in your cart.");
	}
    function calcPrice($pricet){
        $pricet = $this->getPrice() + $this->getPrice();
        return $pricet / $pricet;
    }
}

$teste = new Products("maça", 12);
$cliente = new Order();
$cliente->addProducts($teste). $cliente->calcPrice();