<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show</title>
</head>
<body>
	<h1>Product 1</h1>
	<p>Name: <?= $product['name'] ?> </p>
	<p>Description: <?= $product['description'] ?></p>
	<p>Price: <?= $product['price'] ?></p>
	<a href=<?= "/products/edit/".$product['id'] ?>>Edit</a>
	<a href="/">Back</a>
</body>
</html>