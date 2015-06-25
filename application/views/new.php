<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/assets/style_new.css">
	<title>New</title>
</head>
<body>
	<h1>Add a new product</h1>
	<form action="/products/add_new_product" method="post">
		<input type="text" name="name" placeholder="Name Here">
		<input type="text" name="description" placeholder="Description Here">
		<input type="text" name="price" placeholder="Price Here">
		<input type="submit" value="Create">
	</form>
	<a href="/">Go Back</a>
</body>
</html>