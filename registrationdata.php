
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'config.php';

$sql="INSERT INTO users (email, name, hpnumber, gender)
values ('$_POST[email]','$_POST[name]','$_POST[hpnumber]', '$_POST[gender]')";
	if (!mysqli_query($conn,$sql)){
		
		die ('Error: ' .mysqli_error($conn));
	}


echo "<script
type='text/jscript'>alert('You're has been successfully registered!')</script>";
header('refresh:1 url=index.php');

?>
