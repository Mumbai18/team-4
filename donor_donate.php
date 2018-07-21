<?php include('connect.php');?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
$frozen=mysqli_real_escape_string($conn,$_POST["frozen"]);
$no_hours=mysqli_real_escape_string($conn,$_POST["hours"]);
$no_people=mysqli_real_escape_string($conn,$_POST["people"]);;
$package_type=mysqli_real_escape_string($conn,$_POST["package"]);

 $result = mysqli_query($conn,"INSERT INTO food(frozen,hours,nop,package) VALUES('$frozen','$no_hours',$no_people,'$package_type')");
   if ($result) {
    
    echo '<script language="javascript">';
        echo 'alert("Added successsfully!!")';
        echo '</script>';

  }

?>
