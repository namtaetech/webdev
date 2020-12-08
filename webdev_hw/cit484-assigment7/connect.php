<?php
$server="localhost";
$dbusername="root";
$dbpassword="";
$dbname="addemployee";

$conn=mysqli_connect($server, $dbusername, $dbpassword, $dbname);

if (!$conn){
    die("connection failed:" . mysqli_connect_error());
}

