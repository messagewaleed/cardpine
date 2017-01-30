<?php
	
	include '../allow_me/php/connection.php';
	include '../allow_me/php/smart_resize_image.function.php';


	for ($i=1; $i < 9 ; $i++) { 

	$file = '../allow_me/images/cards/main/christian'.$i.'.jpg';
	$thumb_file = '../allow_me/images/cards/thumbnails/christian'.$i.'.jpg';
	$tile_file = '../allow_me/images/cards/tiles/christian'.$i.'.jpg';


	smart_resize_image($tile_file , null, 900 , 1024 , false , $file , false , false ,100 );

    smart_resize_image($tile_file , null, 150 , 150 , false , $thumb_file , false , false ,100 );

    }

?>
