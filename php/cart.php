<?php

	include '../allow_me/php/connection.php';

	if (isset($_POST['action'])) {
	
		if ($_POST['action'] == 'add') {

			$user_email = $_POST['user_email'];
			$card_id = $_POST['card_id'];
			$sql;

			$result = $conn->query("SELECT * FROM user_cart WHERE card_id = $card_id AND user_email = '$user_email'");
			if($result->num_rows == 0) {
			    $sql = "INSERT INTO user_cart (card_id,user_email) VALUES ($card_id,'$user_email')";
			} else {
			    $sql = "UPDATE user_cart SET total_quantity = total_quantity + 1";
			}

			if ($conn->query($sql)) {
				echo 'success';
			}
			else
			{
				echo $conn->error;
			}
		}
		else if ($_POST['action'] == 'getAll') {

			$user_email = $_POST['user_email'];

			$sql = "SELECT card_id FROM user_wishlist WHERE  user_email='$user_email'";

			$result = array();

			$res = $conn->query($sql);
			
			while ($row = $res -> fetch_assoc()) {
				$result[] = $row;
			}


			print(json_encode($result));
		}
	}
	
?>