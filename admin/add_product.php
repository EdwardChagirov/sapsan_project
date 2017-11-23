<?php 

	$mysqli = new mysqli("localhost", "root", "", "sapsan");
	$mysqli->set_charset("utf8");

	if ($mysqli->connect_errno) {
	    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

	echo "Заходим";

	if (isset($_POST['add_product'])){

		$name_prod = $_POST['name_prod'];
		$category_prod = $_POST['category_prod'];
		$collection = $_POST['collection'];
		
		$sleep_area_l = $_POST['sleep_area_l'];
		$sleep_area_h = $_POST['sleep_area_h'];
		
		$size_area_l = $_POST['size_area_l'];
		$size_area_w = $_POST['size_area_w'];
		$size_area_h = $_POST['size_area_h'];

		$charact1 = $_POST['charact1'];
		$charact2 = $_POST['charact2'];
		$charact3 = $_POST['charact3'];
		$charact4 = $_POST['charact4'];
		$charact5 = $_POST['charact5'];
		$charact6 = $_POST['charact6'];
		$charact7 = $_POST['charact7'];
		$charact8 = $_POST['charact8'];
		$charact9 = $_POST['charact9'];
		$charact10 = $_POST['charact10'];

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

		/*$add_sql = ("INSERT INTO products (name, category, sleep_area_l, sleep_area_h, size_area_l, size_area_w, size_area_w, charact1, charact2, charact3, charact4, charact5, charact6, charact7, charact8, charact9) VALUES ('".$name_prod."', '".$category_prod."', '".$sleep_area_l."', '".$sleep_area_h."', '".$sleep_area_h."', '".$size_area_l."' 
			, '".$size_area_w."', '".$size_area_h."', '".$charact1."', '".$charact2."', '".$charact3."', '".$charact4."', '".$charact5."', '".$charact6."', '".$charact7."', '".$charact8."'
			, '".$charact9."')");*/

		$add_sql = ("INSERT INTO products (name, category, sleep_area_l, sleep_area_h, size_area_l, size_area_w, size_area_h, charact1, charact2, charact3, charact4, charact5, charact6, charact7, charact8, charact9, charact10, pictures, gallery_prod, collection) VALUES ('".$name_prod."', '".$category_prod."', '".$sleep_area_l."', '".$sleep_area_h."', '".$size_area_l."' 
			, '".$size_area_w."', '".$size_area_h."', '".$charact1."', '".$charact2."', '".$charact3."', '".$charact4."', '".$charact5."', '".$charact6."', '".$charact7."', '".$charact8."'
			, '".$charact9."', '".$charact10."', '".$all_pictures."', '".$all_gallery."', '".$collection."')");

		if ($mysqli->query($add_sql)) {
			echo "Добавлен";
		} else {
			echo "Ошибка";
		}
	}
?>