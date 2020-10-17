<!DOCTYPE html>
<html>
    <head>
        <style>
            table{
                width:100%;
                border-collapse:collapse;
            }
            table,td,th{
                border: 1px solid red;
                padding: 5px;
            }
            th{text-align:left;}
        </style>
<?php
$q = intval($_GET['q']);
$con = mysqli_connect('localhost',"root","Parola1",'baza_date_restaurant');
if(!$con){
    die("Could not connect to data base " .mysqli_error($con));
}
mysqli_select_db($con,"restaurant");
$sql="SELECT * FROM restaurant WHERE id="'.$q'"";
$result = mysqli_query($con,$sql);

echo"<table>
<tr>
<th>Nume</th>
";

while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$row['nume'];
    echo "<td>".$row['avg_time'];
    echo "<td>".$row['live_count'];
    echo"</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>