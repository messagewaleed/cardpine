<?php

    include 'connection.php';
    include 'smart_resize_image.function.php';


    if (isset($_POST['action'])) {


        # code...
        if ($_POST['action'] == "edit") {
            # code...

            $card_id = $_POST['card_id'];
            $card_name = $_POST['card_name'];
            $card_description = $_POST['card_description'];
            $card_price = $_POST['card_price'];
            $card_category = $_POST['card_category'];
            $card_image = $_FILES['card_image'];
            $on_home = $_POST['on_home'];
            $is_latest = $_POST['is_latest'];   
           

            {
                
                $old_category;

                $getCategory = $conn->query("SELECT card_category from cards WHERE card_id=$card_id");

                while ($row = $getCategory -> fetch_assoc()) {

                    $old_category = $row['card_category'];

                }

                if ($old_category == $card_category) {
                    
                    $sql = "UPDATE "

                }

            }

            if (empty($card_image['name'])) {

            }

            $sql = "UPDATE cards SET $column='".mysqli_real_escape_string($conn,$changedData)."' WHERE card_id=$id";

            {
                $old_category;

                $getCategory = $conn->query("SELECT card_category from cards WHERE card_id=$card_id");

                while ($row = $getCategory -> fetch_assoc()) {

                    $old_category = $row['card_category'];

                }


                if ($conn->query($sql) === TRUE) {

                    if (change_stock($old_category,$changedData)) {
                    //     # code...
                            $query = "SELECT * from cards WHERE card_id=$id";

                            $res = $conn -> query($query);


                            $result = array();


                            while ($row = $res -> fetch_assoc()) {
                                # code...
                                $result[] = $row;

                            }

                            print('{"data":'.json_encode($result).'}');
                    }


                } else {
                    echo '{"fieldErrors":[{"name":"'.$column.'","status":"failed to updated."}],"data":[]}';
                }
            }

            ($column == 'on_home' && $changedData == 'yes')
            {
                $category;
                $count=0;

                $getCategory = $conn->query("SELECT card_category from cards WHERE card_id=$id");

                while ($row = $getCategory -> fetch_assoc()) {
                     # code...

                    $category = $row['card_category'];

                }


                $check = $conn->query("SELECT on_home from cards WHERE card_category='$category'");

                while ($row = $check -> fetch_assoc()) {
                     # code...
                    if ($row['on_home'] == 'yes')
                        $count++;

                }

                if($count < 8)
                {   
                    if ($conn->query($sql) === TRUE) {

                    $query = "SELECT * from cards WHERE card_id=$id";

                    $res = $conn -> query($query);


                    $result = array();


                    while ($row = $res -> fetch_assoc()) {
                        # code...
                        $result[] = $row;

                    }

                    print('{"data":'.json_encode($result).'}');


                    } else {
                        echo '{"fieldErrors":[{"name":"'.$column.'","status":"failed to updated."}],"data":[]}';
                    }
                }
                else
                {
                    echo '{"fieldErrors":[{"name":"'.$column.'","status":"already 8 selected for home."}],"data":[]}';
                }       
            }
            elseif ($column == 'is_latest') {

                $old_value;

                $update_old = "UPDATE cards SET is_latest='yes' WHERE card_id = ".$id; 

                $sql = "SELECT is_latest FROM cards WHERE card_id = ".$id;

                $res = $conn->query($sql);

                while ($row = $res -> fetch_assoc()) {
                   
                    $old_value = $row['is_latest'];

                }
                $update_new = "UPDATE cards SET is_latest='".$old_value."' WHERE card_id = ".$changedData;

                if (($conn->query($update_old) === TRUE) && ($conn->query($update_new) === TRUE)) {

                   $query = "SELECT * from cards WHERE card_id=$id OR card_id=$changedData";


                    $res = $conn -> query($query);


                    $result = array();


                    while ($row = $res -> fetch_assoc()) {
                        # code...
                        $result[] = $row;

                    }

                    print('{"data":'.json_encode($result).'}');

                } else {
                    echo '{"fieldErrors":[{"name":"'.$column.'","status":"failed to updated."}],"data":[]}';
                }
            }
            else
            {
                if ($conn->query($sql) === TRUE) {

                    $query = "SELECT * from cards WHERE card_id=$id";

                    $res = $conn -> query($query);


                    $result = array();


                    while ($row = $res -> fetch_assoc()) {
                        # code...
                        $result[] = $row;

                    }

                    print('{"data":'.json_encode($result).'}');


                } else {
                    echo '{"fieldErrors":[{"name":"'.$column.'","status":"failed to updated."}],"data":[]}';
                }
            }         
        }
        elseif ($_POST['action'] == "delete") 
        {

            $sql = "DELETE from cards WHERE card_id=".$_POST['card_id'];

            if ($conn->query($sql) === TRUE) {

                echo "success";

            }
            else {
                echo "Failed to upload.".$conn->error;
            }

        }
        elseif ($_POST['action'] == "upload") 
        {
            # code...

            $target_dir = "../images/cards/";
        

            $column = $_POST['uploadField'];

            // saving and retrieving image path from database
            $target_path = basename($_FILES['upload']['name']); 
            $target_file = $target_dir . 'main/' . basename($_FILES['upload']['name']);
            $tile_file = $target_dir . 'tiles/' . basename($_FILES['upload']['name']);
            $thumb_file = $target_dir . 'thumbnails/' . basename($_FILES['upload']['name']);

            $imageFileType = pathinfo($target_path,PATHINFO_EXTENSION);
            $check = getimagesize($_FILES["upload"]["tmp_name"]);

            
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
                
                echo 'Please upload an image (jpg or png only).';
            }
            else if ($check[0] != 900 || $check[0] != 1024 ) {
                
                echo 'Please upload an image of dimentions 900*1024.';
            }
            else if (file_exists($target_file)) {
                

            }
            else if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) 
            {

                smart_resize_image($target_file , null, 250 , 300 , false , $thumb_file , false , false ,100 );

                smart_resize_image($target_file , null, 150 , 150 , false , $tile_file , false , false ,100 );

            }
            else
            {
                echo 'Sorry, there was an error uploading your file.';
            }
        }           
    }
    else{

            $query = "SELECT * from cards";

            $res = $conn -> query($query);


            $result = array();
            $options = array();
            $arr['label'] = "Chose your option";
            $arr['value'] = "-1";
            array_push($options, $arr);


            while ($row = $res -> fetch_assoc()) {

                $result[] = $row;
                if ($row['is_latest'] == 'yes') {

                    $arr['label'] = "swap with ".$row['card_name'];
                    $arr['value'] = $row['card_id'];
                    array_push($options, $arr);

                }
                
            }
            
            if (isset($_POST['getLatest'])) {
                
                print(json_encode($options));
            }
            else {
                
                print('{"data":'.json_encode($result).'}');
            }

        }

    function stock($card_category)
    {
        $res =  $GLOBALS['conn']  -> query("SELECT stock from category WHERE category_name = '$card_category'");
        $count = 0;
        while ($row = $res -> fetch_assoc()) {
                # code...
                $count = $row['stock'] + 1;
        }

        $chk = $GLOBALS['conn'] -> query("UPDATE category SET stock='$count' WHERE  category_name = '$card_category'");

        return $chk;
    }

    function change_stock($old_category,$new_category)
    {
        $old_stock =  $GLOBALS['conn']->query("SELECT stock from category WHERE category_name = '$old_category'");
        $new_stock =  $GLOBALS['conn']->query("SELECT stock from category WHERE category_name = '$new_category'");
        $count = 0; 
        $new_count = 0;

        while ($row = $old_stock -> fetch_assoc()) {
                # code...
                $old_count = $row['stock'] - 1;
        }

        while ($row = $new_stock -> fetch_assoc()) {
                # code...
                $new_count = $row['stock'] + 1;
        }

        $old = $GLOBALS['conn'] -> query("UPDATE category SET stock='$old_count' WHERE  category_name = '$old_category'");
        $new = $GLOBALS['conn'] -> query("UPDATE category SET stock='$new_count' WHERE  category_name = '$new_category'");

        return ($old && $new);
    }


            $conn->close();

?>