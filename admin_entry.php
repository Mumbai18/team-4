<?php include('connect.php');?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $no_of_people = mysqli_real_escape_string($conn,$_POST["name"]);
$location = mysqli_real_escape_string($conn,$_POST["location"]);
$result = mysqli_query($conn,"INSERT INTO admin(no,location) VALUES('$people','$location')");
if ($result) {
    
    echo '<script language="javascript">';
    echo 'alert("Registered successsfully!!")';
    echo '</script>';
}
}
?>
