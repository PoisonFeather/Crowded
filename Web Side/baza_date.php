<?php

$servername="192.168.0.109";
$username="root";
$password="Parola1";
$dbname="baza_date_restaurant";


$conn= new mysqli($servername, $username, $password, $dbname);

if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$nume=$_POST['nume_restaurant'];
$live_count=$_POST['live_count'];
$rating=$_POST['rating'];


$sql="INSERT INTO restaurant (nume,live_count,rating)
Values($nume,$live_count,$rating)";

if(mysqli_querry($conn,$sql)){
    echo "New record created succesfuly!";
}else{
    echo "Error: " .$sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>