<?php

$connection = mysqli_connect("localhost","root","","db_internship");

$id = $_GET['deleteid'];


$q = mysqli_query($connection, 
          "update table_student set is_delete = 1 where tbl_id='{$id}'") or die(mysqli_error($connection));

if($q){
echo "<script>alert('Record Deleted');window.location='table.php';</script>";
}

?>