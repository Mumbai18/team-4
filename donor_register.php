<?php include('connect.php');?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

$name = mysqli_real_escape_string($conn,$_POST["name"]);
$email = mysqli_real_escape_string($conn,$_POST["exampleInputEmail1"]);
$phno = mysqli_real_escape_string($conn,$_POST["phone"]);
$address = mysqli_real_escape_string($conn,$_POST["address"]);
$password = mysqli_real_escape_string($conn,$_POST["exampleInputPassword1"]);
$cpass = mysqli_real_escape_string($conn,$_POST["exampleInputPassword2"]);

if (!empty($password) && !empty($cpass)) {
if($password != $cpass){
  echo '<script language="javascript">';
    echo 'alert("Re-enter password")';
    echo '</script>';
}
}

$sql = "SELECT email FROM volunteers WHERE email='$email'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

if (mysqli_num_rows($result) == 1) {
  echo '<script language="javascript">';
    echo 'alert("Email address already exists")';
    echo '</script>';
}
else{
     $result = mysqli_query($conn,"INSERT INTO donors(name,email,phno,address,password) VALUES('$name','$email',$phno,'$address','$password')");
  if ($result) {
    
    echo '<script language="javascript">';
        echo 'alert("Registered successsfully!!")';
        echo '</script>';

  }
}

}


?>
