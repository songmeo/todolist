<?php
  error_reporting(0);

  $user = $_POST['username'];
  $pass = $_POST['password'];

  //login
  if(isset($_POST['submit'])){
    if($user=="admin" && $pass=="admin"){
      header('Location:index.php');
      session_name($user);
      session_start();
    }
    else{
      echo "Wrong Username or/and Password";
    }
  }

  //logout
  if(isset($_POST['logout'])) {
    session_name($user);
    session_start();
    session_unset();
    session_destroy();
    session_write_close();
    setcookie(session_name(), '', 0,'/');
    session_regenerate_id(true);
    header('Location: login_page.php');
    exit();
  }

  //write to list
  if(isset($_POST['add-button'])){
    $addTask = $_POST['add-task'];
    $file = fopen("taskList.txt","a+") or die("Unable to open file");
    $s = $addTask."\r\n";
    fputs($file,$s) or die("Unable to open save");
    fclose($file);
    header('Location: index.php');
  }
?>