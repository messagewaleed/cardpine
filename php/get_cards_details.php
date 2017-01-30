<?php

	include '../allow_me/php/connection.php';


	if ($_POST['from'] == 'quick_view') {
		
		$card_id = $_POST['card_id'];

		$sql = "SELECT * FROM cards WHERE card_id = $card_id";

		$result = $conn->query($sql);

		$data = array();

		while ($row = $result -> fetch_assoc()) {
			$data[] = $row;
		}


		print(json_encode($data));

	}


	$conn->close();


?>