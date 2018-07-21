<?php
$link = mysqli_connect("localhost" , "root" , "");
$email = $_POST['email'];
$password = $_POST['password'];
$email = stripcslashes($email);
$password = stripcslashes($password);
$email = mysqli_real_escape_string($link, $email);
$password = mysqli_real_escape_string($link, $password);

mysqli_select_db($link,"login");
$result = mysqli_query($link,"select * from donors where email ='$email' and password='$password';") or die("Failed to connect =".mysqli_error($link));
$row = mysqli_fetch_array($result);
if ($row['email'] == $email && $row['password']== $password) 
{
	# code...
	//valid
	$_SESSION['email_id']=$email_id;
	header('location:homepage.html');
}

else {
	echo "Failed";
	# code...
}
?>