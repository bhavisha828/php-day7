
<?php
$connection = mysqli_connect("localhost","root","","nature_photography");

if ($_POST) {
  
  $Name = $_POST['txt1'];
  $Gender = $_POST['txt2'];
  $Date_of_Birth = $_POST['txt3'];
  $Email = $_POST['txt4'];
  $Mobileno = $_POST['txt5'];
  $Address = $_POST['txt6'];
  $Area = $_POST['txt7'];
  $Pincode = $_POST['txt8'];
  $Bloodgroup = $_POST['txt9'];
  $Feedback = $_POST['txt10'];
  $Password = $_POST['txt11'];
  

  $q = mysqli_query($connection, "insert into photography_table(Name, Gender, Date_of_Birth, Email, Mobileno, Address, Area, Pincode, Bloodgroup, Feedback, Password) values('{$Name}','{$Gender}','{$Date_of_Birth}','{$Email}','{$Mobileno}','{$Address}','{$Area}','{$Pincode}','{$Bloodgroup}','{$Feedback}','{$Password}')") or die(mysqli_error($connection));
  if ($q) {
    echo "<script>alert('record added')</script>";
  }
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>nature </title>
<link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery.gallerax-0.2.js"></script>
<style type="text/css">
@import "gallery.css";
</style>
</head>
<body>

<div id="wrapper">
	<div id="header-wrapper">
        <?php include './include/menu.php'; ?>
		<!-- end #header -->
	</div>
       

	
	<form method="post" style="background-color: lightcoral; border: 2px solid black; box-sizing: inherit; color: darkblue;">
		
       <table>
       	
       <tr> <td>Name : <input type="text" name="txt1"><br/></td></tr>
        <tr><td>Gender: <select name="txt2">
        <option>Male</option>
        <option>Female</option>
            </select></td></tr>
        <tr><td>Date_of_Birth : <input type="date" name="txt3"><br/></td></tr>
        <tr><td>Email : <input type="email" name="txt4"><br/></td></tr>
        <tr><td>Mobileno : <input type="number" name="txt5"><br/></td></tr>
        <tr><td>Address : <input type="textarea" name="txt6"><br/></td></tr>
        <tr><td>Area : <input list="lang" name="txt7">
          <datalist id="lang">
          <option value="Demai">demai</option>     
          <option value="Ahemdabad">ahemdabad</option>
          <option value="Vadodara">vadodara</option>
          <option value="Surat">surat</option>
          </datalist> <br/></td></tr>
        <tr><td>Pincode : <input type="pincode" name="txt8"></td></tr>
        <tr><td>Bloodgroup : <input type="text" name="txt9"></td></tr>
        <tr><td>Feedback : <input type="textarea" name="txt10"></td></tr>
        <tr><td>Password : <input type="password" name="txt11"><br/></td></tr>
        <tr><td> <input type="submit" style="background-color: inherit;" value="submit"></td></tr>
         <tr> <td> <a href="nature_table.php" style="color: black; display: inline-block; background-color: inherit;">Display record</a>;</td></tr> 
       </table>



	</form>



	
</div>

<div id="footer">
	<p>Manage by <a href="https://github.com/bhavisha828">@Bhavisha Nayi</a></p>
</div>

<!-- end #footer -->

</body>
</html>

 