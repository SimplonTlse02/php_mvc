<?php
// bootstrap
require 'Controllers/CartController.php';

if(!isset($_GET['page'])) {
	(new CartController())->home();
}