<?php

    include 'connection.php'; 

    if(isset($_POST['action']))
    {


        if ($_POST['action'] == "edit") {
            # code...

            $tile_id = $_POST['tile_id'];
            $tile_main_text = $_POST['tile_main_text'];
            $top_heading = $_POST['top_heading'];
            $tile_image = $_FILES['tile_image'];
            $tile_on_left = $_POST['tile_on_left'];

            $check = false;

            $sql;

            if ($tile_on_left == 'yes') {

            
                    $replace_sql = "UPDATE tiles SET tile_on_left = 'no' WHERE tile_on_left = 'yes' ";

                    $conn->query($replace_sql);

                        
            }else {

                $select = "SELECT tile_id FROM tiles WHERE tile_on_left = 'yes'";

                $res = $conn->query($select);

                $chk = $res -> fetch_assoc();

                if ($chk['tile_id'] == $tile_id) {
                    $tile_on_left = 'yes';
                }
                
            }



            if (empty($tile_image['name'])) {

               $sql = "UPDATE tiles SET tile_main_text = '$tile_main_text', top_heading = '$top_heading',  tile_on_left = '$tile_on_left' WHERE tile_id=".$tile_id;

               if ($conn->query($sql) === TRUE) {

                    echo "success";

                } else {

                    echo 'Failed to updated.';

                }

            }
            else {

                $target_dir = "../images/";
                            
                    // saving and retrieving image path from database
                    $target_path = basename($tile_image['name']); 
                    $target_file = $target_dir . basename($tile_image['name']);

                    $imageFileType = pathinfo($target_path,PATHINFO_EXTENSION);
                    $check = getimagesize($tile_image["tmp_name"]);

                    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
                        
                        echo 'Please upload an image (jpg or png only).';
                    }
                    else if ($check[0] != 500 || $check[1] != 500 ) {
                        
                        echo 'Please upload an image of dimentions 500*500.';
                    }
                    else if (file_exists($target_file)) {


                        $sql = "UPDATE tiles SET tile_main_text = '$tile_main_text', top_heading = '$top_heading', tile_image = '$target_path', tile_on_left = '$tile_on_left' WHERE tile_id=".$tile_id;


                        if ($conn->query($sql) === TRUE) {

                            echo "success";

                        } else {
                            echo 'failed to updated.'.$conn->error;
                        }

                    }
                    else if (move_uploaded_file($tile_image["tmp_name"], $target_file)) 
                    {
                        $sql = "UPDATE tiles SET tile_main_text = '$tile_main_text', top_heading = '$top_heading', tile_image = '$target_path', tile_on_left = '$tile_on_left' WHERE tile_id=".$tile_id;

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

        }

    }
    else
    {

        $query = "SELECT * from tiles";
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