<?php 

	$mysqli = new mysqli("localhost", "root", "", "sapsan");
	$mysqli->set_charset("utf8");

	if ($mysqli->connect_errno) {
	    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	
	if (isset($_POST['search_name'])) {

		$search_name = $_POST['search_name'];
		
		$res = $mysqli->query("SELECT * FROM products WHERE name = '$search_name'");

		$row = $res->fetch_assoc();

		echo $row['name'];

		unset($_POST['edit_product']);

		echo json_encode(array(
			'name' => $row['name'],
			'category' => $row['category'],
			'sleep_area_l' => $row['sleep_area_l'],
			'sleep_area_h' => $row['sleep_area_h'],
			'size_area_l' => $row['size_area_l'],
			'size_area_w' => $row['size_area_w'],
			'size_area_h' => $row['size_area_h'],
			'charact1' => $row['charact1'],
			'charact2' => $row['charact2'],
			'charact3' => $row['charact3'],
			'charact4' => $row['charact4'],
			'charact5' => $row['charact5'],
			'charact6' => $row['charact6'],
			'charact7' => $row['charact7'],
			'charact8' => $row['charact8'],
			'charact9' => $row['charact9'],
			'charact10' => $row['charact10'],
			'pictures' => $row['pictures'],
			'gallery_prod' => $row['gallery_prod'],
			'collection' => $row['collection']
		));
	}

?>