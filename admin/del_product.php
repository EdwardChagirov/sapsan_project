<?php 
	
	$mysqli = new mysqli("localhost", "root", "", "sapsan");
	$mysqli->set_charset("utf8");

	if ($mysqli->connect_errno) {
	    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

	if (isset($_POST['del_product'])) {
		$del_product = $_POST['del_name_prod'];

		$sql = "DELETE FROM products WHERE name = '$del_product'";
		$mysqli->query($sql);
	}
	
?>