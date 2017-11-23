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

		//echo $row['name'];

		//unset($_POST['edit_product']);

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

	if (isset($_POST['edit_product'])) {

		$name_id = $_POST['id_prod'];
		$name = $_POST['edit_name_prod'];
		$category_prod = $_POST['edit_category_prod'];
		$collection = $_POST['edit_collection'];
		$sleep_area_l = $_POST['edit_sleep_area_l'];
		$sleep_area_h = $_POST['edit_sleep_area_h'];
		$size_area_l = $_POST['edit_size_area_l'];
		$size_area_w = $_POST['edit_size_area_w'];
		$size_area_h = $_POST['edit_size_area_h'];
		$charact1 = $_POST['edit_charact1'];
		$charact2 = $_POST['edit_charact2'];
		$charact3 = $_POST['edit_charact3'];
		$charact4 = $_POST['edit_charact4'];
		$charact5 = $_POST['edit_charact5'];
		$charact6 = $_POST['edit_charact6'];
		$charact7 = $_POST['edit_charact7'];
		$charact8 = $_POST['edit_charact8'];
		$charact9 = $_POST['edit_charact9'];
		$charact10 = $_POST['edit_charact10'];

		$count_pictures = $_POST['count_pictures'];
		intval($count_pictures);

		$count_gallery = $_POST['count_gallery'];
		intval($count_gallery);

		$all_pictures = "";
		$all_gallery = "";
		$separator = "|";
		$start_path = "../img/";

		// Формирование массива для слайдера

		for ($i = 1; $i <= $count_pictures; $i++) { 
			$picture_item = "picture_" . $i;

			if (!empty($_FILES[$picture_item]['name']))
			{
			    $uploaddir = $_SERVER['DOCUMENT_ROOT'] . "/sapsan/img/";

			    $uploadfile = $uploaddir.basename($_FILES[$picture_item]['name']);

			    if (!is_uploaded_file($_FILES[$picture_item]['tmp_name']))
			    {
			        echo 'Ошибка передачи файла';
			    }
			    else
			    {
			        if (move_uploaded_file($_FILES[$picture_item]['tmp_name'], $uploadfile))
			        {
			        	$all_pictures .= $start_path . $_FILES[$picture_item]['name'] . $separator;
			        }
			        else echo "Файл не загружен, ";
			    }
			} else {
				echo "Ошибка 1 уровень";
			}
		}

		// Формирование массива для галереи

		for ($i = 1; $i <= $count_gallery; $i++) { 
			$gallery_item = "gallery_" . $i;

			if (!empty($_FILES[$gallery_item]['name']))
			{
			    $uploaddir = $_SERVER['DOCUMENT_ROOT'] . "/sapsan/img/";

			    $uploadfile = $uploaddir.basename($_FILES[$gallery_item]['name']);

			    if (!is_uploaded_file($_FILES[$gallery_item]['tmp_name']))
			    {
			        echo 'Ошибка передачи файла';
			    }
			    else
			    {
			        if (move_uploaded_file($_FILES[$gallery_item]['tmp_name'], $uploadfile))
			        {
			        	$all_gallery .= $start_path . $_FILES[$gallery_item]['name'] . $separator;
			        }
			        else echo "Файл не загружен, ";
			    }
			} else {
				echo "Ошибка 1 уровень";
			}
		}

		$all_pictures = substr($all_pictures, 0, -1); // Готовые пути к картинкам
		$all_gallery = substr($all_gallery, 0, -1); // Готовые пути к картинкам

		$sql = "UPDATE products SET name = '$name', 
			category = '$category_prod',
			sleep_area_l = '$sleep_area_l',
			sleep_area_h = '$sleep_area_h',
			size_area_l = '$size_area_l',
			size_area_w = '$size_area_w',
			size_area_h = '$size_area_h',
			charact1 = '$charact1',
			charact2 = '$charact2',
			charact3 = '$charact3',
			charact4 = '$charact4',
			charact5 = '$charact5',
			charact6 = '$charact6',
			charact7 = '$charact7',
			charact8 = '$charact8',
			charact9 = '$charact9',
			charact10 = '$charact10',
			pictures = $all_pictures,
			gallery_prod = $all_gallery
			WHERE name='$name_id'";

		//mysqli_query($mysqli, $sql);
		$mysqli->query($sql);

	}

?>