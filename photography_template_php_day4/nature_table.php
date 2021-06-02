<?php  
//Db connection
$connection = mysqli_connect("localhost","root","","nature_photography");
//query 
$q = mysqli_query($connection,"select * from photography_table where is_delete = 0") or die(mysqli_error($connection));


echo "<table border='1'>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Date_of_Birth</th>";
echo "<th>Email</th>";
echo "<th>Mobileno</th>";
echo "<th>Address</th>";
echo "<th>Area</th>";
echo "<th>Pincode</th>";
echo "<th>Bloodgroup</th>";
echo "<th>Feedback</th>";
echo "<th>Password</th>";
echo "<th>Action</th>";
echo "</tr>";
$i = 0;
while ($row = mysqli_fetch_array($q)) {
	$i++;
	echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>{$row['Name']}</td>";
    echo "<td>{$row['Gender']}</td>";
    echo "<td>{$row['Date_of_Birth']}</td>";
    echo "<td>{$row['Email']}</td>";
    echo "<td>{$row['Mobileno']}</td>";
    echo "<td>{$row['Address']}</td>";
    echo "<td>{$row['Area']}</td>";
    echo "<td>{$row['Pincode']}</td>";
    echo "<td>{$row['Bloodgroup']}</td>";
    echo "<td>{$row['Feedback']}</td>";
    echo "<td>{$row['Password']}</td>";
    echo "<td><a href='nature_delete.php?deleteid={$row['p_id']}'>Delete</a></td>";
    echo "</tr>";
}
echo "</table>";

echo "<a href='cont.php'>Add Record</a>";
?>