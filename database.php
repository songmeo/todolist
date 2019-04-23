<?php
$server = "anysql.itcollege.ee";
$user = "team4";
$password = "rw_353MIl_e";
$database = "WT_4";

$mysqli = new mysqli($server, $user, $password, $database);
if($mysqli->connect_error)
    die("Connection to DB failed: ". $mysqli->connect_error);
else echo "Connected to DB successfully";


$link = mysqli_connect($server, $user, $password, $database);
if(!$link)
    die("Connection to DB failed: " . mysqli_connect_error());
else echo "Connected to DB successfully";

try {
    $pdo = new PDO('mysql:host='.$server.';dbname='.$database, $user, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "PDO: Connected to DB successfully";
}
catch(PDOException $e) {
    echo "PDO: Connection to DB failed: ". $e->getMessage();
}

?>