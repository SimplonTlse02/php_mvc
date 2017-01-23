<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>
	<h1>Mon panier</h1>
	<table class="ui table">
	<tr>
		<th>Désignation</th>
		<th>Prix</th>
		<th>Quantité</th>
	</tr>
	<?php foreach($products as $entry): ?>
		<tr>
			<td><?= $entry['product']->getName() ?></td>
			<td><?= $entry['product']->getPrice() ?>€</td>
			<td><?= $entry['qty'] ?></td>
		</tr>
	<?php endforeach ?>
	</table>

	<div>Total : <?= $total ?> €</div> 
</body>
</html>