<?php  
//Db connection
$connection = mysqli_connect("localhost","root","","db_internship");
//query 
$q = mysqli_query($connection,"select * from table_student where is_delete = 0") or die(mysqli_error($connection));


echo "<table border='1'>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Mobile</th>";
echo "<th>Action</th>";
echo "</tr>";
$i = 0;
while ($row = mysqli_fetch_array($q)) {
	$i++;
	echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>{$row['tbl_name']}</td>";
    echo "<td>{$row['tbl_gender']}</td>";
    echo "<td>{$row['tbl_mobile']}</td>";
    echo "<td><a href='delete.php?deleteid={$row['tbl_id']}'>Delete</a></td>";
    echo "</tr>";
}
echo "</table>";

echo "<a href='insert_record.php'>Add Record</a>";
?>