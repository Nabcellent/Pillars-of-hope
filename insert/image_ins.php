<?php
include_once "../config/db_config.php";

if(isset($_FILES['attachments'])) {
    $target_file = time() .basename($_FILES["attachments"]["name"][0]);

    $message = "";

    if(file_exists($target_file)) {
        $message = array("status" => 0, "message" => "File already exists");
    } else if(move_uploaded_file($_FILES["attachments"]["tmp_name"][0], "../img/uploads/" . $target_file)) {
        $message = array("status" => 1, "message" => "File has been Uploaded Successfully!", "Path" => "../img/uploads/" . $target_file);

        $sql = "INSERT INTO gallery_tbl (path, upload_date) VALUES ('$target_file', NOW())";
        mysqli_query($link, $sql);
    }

    exit(json_encode($message));
}

if(isset($_POST["get_images"])) {
    $start = $link->real_escape_string($_POST['start']);

    $sql = "SELECT * FROM gallery_tbl ORDER BY gallery_id DESC LIMIT " . $start . ", 8";
    $res = mysqli_query($link, $sql);

    $response = array();

    while($data = mysqli_fetch_array($res)) {
        $response[] = array("path" => $data["path"], "image_id" => $data["gallery_id"]);
    }

    exit(json_encode(array("images" => $response)));
}

if(isset($_POST['del_image'])) {
    $image_id = $link -> real_escape_string($_POST["image_id"]);

    $sql = "DELETE FROM gallery_tbl WHERE gallery_id = '$image_id'";
    mysqli_query($link, $sql);

    exit('Success!');
}
