<?php
  if(isset($_POST['logout'])) {
    session_name($user);
    session_destroy();
    header('Location: login_page.php');
    exit;
  }

  if(isset($_POST['add-button'])){
    $addTask = $_POST['add-task'];
    $file = fopen("taskList.txt","a+") or die("Unable to open file");
    $s = $addTask."\r\n";
    fputs($file,$s) or die("Unable to open save");
    fclose($file);
    header('Location: index.php');
  }

?>