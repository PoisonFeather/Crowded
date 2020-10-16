<?php

$servername="192.168.0.109";
$username="pi";
$password="pi";
$dbname="baza_date_restaurant";


$conn= new mysqli($servername, $username, $password, $dbname);

if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$

?>