<?php
	$mysqli = new mysqli("localhost", "root", "", "sapsan");
	$mysqli->set_charset("utf8");

	if ($mysqli->connect_errno) {
		echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

	$productsRes;

	if (isset($_POST['category'])){

		$category_name = $_POST['category'];

		if ($category_name == "Вся продукция") {
			$productsRes = $mysqli->query("SELECT id, name, category, pictures, collection FROM products");
		} else {
			$category = $_POST['category'];
			$productsRes = $mysqli->query("SELECT id, name, category, pictures, collection FROM products WHERE category = '$category'");
		}
	}

	while ($productRow = $productsRes->fetch_assoc()) {
		$paths = explode('|', $productRow['pictures']);

		echo '<div class="prod_item">
			<div>
				<img src=" ' . $paths[0] . '">
				<div class="desk_prod_bottom">
					<p>Коллекция</p>
					<h3>' . $productRow['collection'] . '</h3>
				</div>
			</div>
			<div class="hover_prod_item">
				<h2>
					' . $productRow['name'] . '
				</h2>
				<div class="read_more">
					<a href="product.php?id=' . $productRow['id'] . '">Подробнее</a>
				</div>
			</div>
		</div>';
	}
?>