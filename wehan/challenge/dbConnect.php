<?php
$localhost = "localhost";
$user = "root";
$pass = "";
$dbname = "libapi";

$connect = mysqli_connect($localhost, $user, $pass, $dbname);
if(!$connect){
    echo "errors";
}