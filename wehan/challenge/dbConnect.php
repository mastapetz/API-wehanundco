<?php
$localhost = "localhost";
$user = "root";
$pass = "";
$dbname = "be16_cr10_wehan_biglibrary";

$connect = mysqli_connect($localhost, $user, $pass, $dbname);
if(!$connect){
    echo "errors";
}