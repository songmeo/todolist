<?php
$upload_dir = "/media/songhuong/data/uni/web/to-do-list/uploads";
$upload_file = $upload_dir . basename($_FILES["fileToUpload"]["name"]);
if (isset($_POST["submit"])) {
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $upload_file);
}

?>