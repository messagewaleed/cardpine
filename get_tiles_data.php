<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cardpine";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    if(isset($_POST['action']))
    {


        if ($_POST['action'] == "upload") {
            # code...

            $target_dir = "../cardpine/images/";
        

            $column = $_POST['uploadField'];
                    
            // saving and retrieving image path from database
            $target_path = basename($_FILES['upload']['name']); 
            $target_file = $target_dir . basename($_FILES['upload']['name']);

            $imageFileType = pathinfo($target_path,PATHINFO_EXTENSION);
            $check = getimagesize($_FILES["upload"]["tmp_name"]);

            if (file_exists($target_file)) {
                echo '{"data":[],"files":{"files":{"'.$target_path.'":{"id":"'.$target_path.'","filename":"'.$target_path.'","filesize":"'.$_FILES['upload']['size'].'","web_path":"images\/'.$target_path.'","system_path":"'.$target_file.'"}}},"upload":{"id":"'.$target_path.'"}}';
            }
            else if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
                
                echo '{"fieldErrors":[{"name":"'.$column.'","status":"Please upload an image (jpg or png only)."}],"data":[]}';
            }
            else if ($check[0] != 500 || $check[0] != 500 ) {
                
                echo '{"fieldErrors":[{"name":"'.$column.'","status":"Please upload an image of dimentions 500*500."}],"data":[]}';
            }
            else if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) 
            {
                echo '{"data":[],"files":{"files":{"'.$target_path.'":{"id":"'.$target_path.'","filename":"'.$target_path.'","filesize":"'.$_FILES['upload']['size'].'","web_path":"images\/'.$target_path.'","system_path":"'.$target_file.'"}}},"upload":{"id":"'.$target_path.'"}}';
            }
            else
            {
            echo '{"fieldErrors":[{"name":"image","status":"Sorry, there was an error uploading your file."}],"data":[]}';
            }
        }
        else if ($_POST['action'] == "edit") {
            # code...

            $data = $_POST['data'];

            $id = array_keys($data)[0];

            $column = array_keys($data[$id])[0];

            $changedData = $data[$id][$column];


            $sql = "UPDATE tiles SET ".$column."='".mysqli_real_escape_string($conn,$changedData)."' WHERE tile_id=".$id;


            if ($conn->query($sql) === TRUE) {

                $query = "SELECT * from tiles WHERE tile_id=".$id;

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