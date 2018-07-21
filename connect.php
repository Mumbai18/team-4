<?php
ini_set('display_errors','1');

// Create connection
$conn = mysqli_connect('localhost','root','','annadhan');

// Check connection
if (!$conn) {
    die("Not Connected!....Try Again...." . mysqli_connect_error);
}
echo "<font color ='green'>Connected.....</font>";
?>
