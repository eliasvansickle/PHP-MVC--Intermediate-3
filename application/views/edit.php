<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/assets/style_edit.css">
	<title>Edit</title>
</head>
<body>
	<h1>Edit Product</h1>
	<form action="/products/update/<?=$product['id'] ?>" method="post">
		<input type="text" name="name" value="<?= $product['name'] ?>">
		<input type="text" name="description" value="<?= $product['description'] ?>">
		<input type="text" name="price" value="<?= $product['price'] ?>">
		<input type="submit" value="Update">
	</form>
	<a href=<?= "/products/show/".$product['id'] ?>>Show</a>
	<a href="/">Back</a>
</body>
</html>