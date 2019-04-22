<?php
$uploads_dir = "/var/www/html/to-do-list/uploads/";
$target_file = $uploads_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINO_EXTENSION));

if (isset($_POST["submit"])) {
  // check if image file is an actual image
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if ($check == false) {
  echo "File is not an image";	  
  $uploadOk = 0;
  }

  // check file size
  if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "File is too large";
    $uploadOk = 0;
  }  

  // allow certain file format
  if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Only JPG, JPEG, PNG & GIF files are allowed";
    $uploadOk = 0;
  }
  if ($uploadOk == 0) {	  
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "your file is uploaded successfully yayyy";
    }  
  }
}

?>
