<?php
$link = mysqli_connect("localhost" , "root" , "");
$username = $_POST['username'];
$password = $_POST['password'];
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($link, $username);
$password = mysqli_real_escape_string($link, $password);

mysqli_select_db($link,"login");
$result = mysqli_query($link,"select * from users where usernae ='$username' and password='$password';") or die("Failed to connect =".mysqli_error($link));
$row = mysqli_fetch_array($result);
if ($row['usernae'] == $username && $row['password']== $password) {
	echo "<script> alert('You have logged in Successfully.!!') </script>";
	echo "<script> window.open('donorlogin.php','_self') </script>";
	# code...
}

else {
	echo "Failed";
	# code...
}
?>