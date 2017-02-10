<?php

   include 'connection.php';


    if (isset($_POST['action'])) {

        if ($_POST['action'] == 'edit') {
        

            $slider_id = $_POST['slider_id'];
            $main_text = $_POST['main_text'];
            $sub_heading_top = $_POST['sub_heading_top'];
            $sub_heading_bottom = $_POST['sub_heading_bottom'];
            $background_img = $_FILES['background_img'];
            $status = $_POST['status'];


            $count=0;

            if ($status == 'unpublished') {
                # code...

                $chk = "SELECT status,slider_id from slider";

                $chkres = $conn->query($chk);

                while ($row = $chkres -> fetch_assoc()) {
                    # code...
                    if (($row['status'] == 'unpublished') && ($row['slider_id'] != $slider_id))
                    {
                        $count++;
                 
                    }
                    
                }

            }

            if ($count < 2) {

                if (empty($background_img['name'])) {

                    $sql = "UPDATE slider SET main_text = '$main_text', sub_heading_top = '$sub_heading_top', sub_heading_bottom = '$sub_heading_bottom', status = '$status' WHERE slider_id=".$slider_id;

                    if ($conn->query($sql) === TRUE) {

                        echo "success";

                    } else {
                        echo 'failed to updated.'.$conn->error;
                    }
                }
                else {

                    $target_dir = "../images/";
                                
                        // saving and retrieving image path from database
                        $target_path = basename($background_img['name']); 
                        $target_file = $target_dir . basename($background_img['name']);

                        $imageFileType = pathinfo($target_path,PATHINFO_EXTENSION);
                        $check = getimagesize($background_img["tmp_name"]);

                        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
                            
                            echo 'Please upload an image (jpg or png only).';
                        }
                        else if ($check[0] != 1920 || $check[1] != 700 ) {

                            echo 'Please upload an image of dimentions 1920*700.';
                        }
                        else if (file_exists($target_file)) {

                            $sql = "UPDATE slider SET main_text = '$main_text', sub_heading_top = '$sub_heading_top', background_img = '$target_path', sub_heading_bottom = '$sub_heading_bottom', status = '$status' WHERE slider_id=".$slider_id;


                            if ($conn->query($sql) === TRUE) {

                                echo "success";

                            } else {
                                echo 'failed to updated.'.$conn->error;
                            }

                        }
                        else if (move_uploaded_file($background_img["tmp_name"], $target_file)) 
                        {
                            $sql = "UPDATE slider SET main_text = '$main_text', sub_heading_top = '$sub_heading_top', background_img = '$target_path', sub_heading_bottom = '$sub_heading_bottom', status = '$status' WHERE slider_id=".$slider_id;

                            if ($conn->query($sql) === TRUE) {

                                echo "success";

                            } else {
                                echo 'failed to updated.'.$conn->error;
                            }
                        }
                        else
                        {
                        echo 'Sorry, there was an error uploading your file.';
                        }
                }
                
            } else{
                 echo 'Atleat 3 should be published!';
            }

        }
        
    }
    else{
        
      $query = "SELECT * from slider";

      $res = $conn -> query($query);


      		$result = array();


    		while ($row = $res -> fetch_assoc()) {
    			# code...
    			$result[] = $row;

    		}
        
    		print('{"data":'.json_encode($result).'}');
    		
    	}

        $conn->close();

?>
