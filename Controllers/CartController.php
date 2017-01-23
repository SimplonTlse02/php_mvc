<?php
require __DIR__ . '/../Models/Cart.php';

class CartController {
	
	public function home(){
		$cart = new Cart();
		$products = $cart->getProducts();
		$total = $cart->sum();
		// // moteur de template (Twig)
		require __DIR__.'/../Views/home.php';
	}
}