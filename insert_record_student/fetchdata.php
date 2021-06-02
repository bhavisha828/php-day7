<?php  
//Db connection
$connection = mysqli_connect("localhost","root","","db_internship");
//query 
$q = mysqli_query($connection,"select * from table_student") or die(mysql_error($connection));
//below function will fetch the data as Numerical Array
$row = mysqli_fetch_row($q);
//Debug
echo "<pre>";
print_r($row);
echo $row[0].$row[1].$row[2].$row[3];
//Numerical and Associative
$row = mysqli_fetch_array($q);
echo "<pre>";
print_r($row);

echo $row[0].$row[1].$row[2].$row[3];
echo $row['tbl_id'].$row['tbl_name'].$row['tbl_gender'].$row['tbl_mobile'];
echo "</pre>";


?>