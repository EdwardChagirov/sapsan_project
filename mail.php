<?php 
	
	$name = "";
	$phone = "";

	if (isset($_POST['name'])){
		$name = $_POST['name'];
	}
	if (isset($_POST['phone'])){
		$phone = $_POST['phone'];
	}

	$to  = "chagirovdeveloper@gmail.com";

	$subject = "Новый заказ с мебельной фирмы Sapsan"; 

	$message = ' 
	<html> 
	    <head> 
	        <title>Новый заказ с мебельной фирмы Sapsan</title> 
	    </head> 
	    <body> 
	        <h1>Новый заказ от клиента с сайта Sapsan73.ru <br></h1>
	        <h3>Имя заказчика: '. $name . '</h3>
	        <h3>Телефон: ' . $phone . '</h3> 
	    </body> 
	</html>'; 

	$headers  = "Content-type: text/html; charset=utf8 \r\n"; 
	$headers .= "From: Sapsan <chagirovdeveloper@gmail.com.com>\r\n";

	mail($to, $subject, $message, $headers); 
?>