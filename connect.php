<?php
ini_set('display_errors','1');

// Create connection
$conn = mysqli_connect('http://54.169.108.10','root','team4+TEAM4','annadhan');

// Check connection
if (!$conn) {
    die("Not Connected!....Try Again...." . mysqli_connect_error);
}
echo "<font color ='green'>Connected.....</font>";
?>
