<?php
$connection = mysqli_connect("localhost","root","","db_internship");

if ($_POST) {
	
	$name = $_POST['txt1'];
	$gender = $_POST['txt2'];
	$mobile = $_POST['txt3'];

	$q = mysqli_query($connection, "insert into table_student (tbl_name, tbl_gender, tbl_mobile) values('{$name}','{$gender}','{$mobile}')") or die(mysqli_error($connection));
	if ($q) {
		echo "<script>alert('record added')</script>";
	}
}

?>


<html>
   <body>
   	
<form method=post>
	Name: <input type="text" name="txt1"/>
	Gender: <select name="txt2">
        <option>Male</option>
        <option>Female</option>
            </select>
    Mobile No: <input type="number" name="txt3"/> 
        <input type="submit"/>       
</form>

   </body>
</html>



echo "<a href='table.php'>Display Record</a>";