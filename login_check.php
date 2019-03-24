<?php

session_start();
error_reporting(0);

$user = $_POST['username'];
$pass = $_POST['password'];

if(isset($_POST['submit'])){
  if($user=="admin" && $pass==admin){
    header('Location:index.html');
  }

  else{
    echo "Wrong Username or/and Password";
  }
}

?>
