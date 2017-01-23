<?php
require_once __DIR__ . '/Product.php';

class Cart {
	/**
		PRIX EN CENTIMES
	*/
	private $products;

	public function __construct(){
		$this->products = [
			["product"=> new Product("Pomme", 100), "qty"=>2],
			["product"=> new Product("Poire", 300), "qty"=>1],
		];
	}

	public function getProducts(){
		return $this->products;
	}

	public function sum(){
		$sum = 0;
		foreach($this->products as $entry) {
			$sum += $entry['product']->getPriceInCents() * $entry['qty'];
		}

		return $sum / 100;
	}
}