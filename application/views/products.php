<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/assets/style_products.css">
	<title>Products</title>
</head>
<body>
	<h1>Products</h1>
	<a class="product" href="products/new_product">Add a new product</a>
	<table>
		<thead>
			<th>Name</th>
			<th>Description</th>
			<th>Price</th>
			<th>Actions</th>
		</thead>
		<tbody>
<?php 
			foreach ($products as $product) 
			{
?>
			<tr>
<?php
				echo 
				"<td>". $product['name']. "</td>
				<td>".$product['description']."</td>
				<td>".$product['price']."</td>
				<td>
					<a href='products/show/".$product['id']."'>Show</a>
					 | 
					<a href='products/edit/".$product['id']."'>Edit</a>
					 | 
					<form action='/products/remove/".$product['id']."' method='post'>
						<input type='submit' value='Remove'>
					</form>
				</td>";
?>
			</tr>
<?php
			}
?>
		</tbody>
	</table>
</body>
</html>