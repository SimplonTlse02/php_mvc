<?php

class Product {
	private $name;
	private $price;

	/**
		$price integer Prix en centimes
	*/
	public function __construct($name, $price){
		$this->name = $name;
		$this->price = $price;
	}

	public function getName() {
		return $this->name;
	}

	public function getPrice() {
		return $this->price / 100;
	}

	public function getPriceInCents(){
		return $this->price;
	}

}