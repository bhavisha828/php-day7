<?php

$connection = mysqli_connect("localhost","root","","nature_photography");

$id = $_GET['deleteid'];


$q = mysqli_query($connection, 
          "update photography_table set is_delete = 1 where p_id='{$id}'") or die(mysqli_error($connection));

if($q){
echo "<script>alert('Record Deleted');window.location='nature_table.php';</script>";
}

?>