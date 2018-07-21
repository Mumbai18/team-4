<<<<<<< HEAD
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
=======
<?php
require'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>donor</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

	<style>
	.form-control{
		width:35%;
	}
	body{
		margin-top: 10px;
	}

</style>
</head>
<body>

<div class='container'>


	<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Donor Details</h1>
    <p class="lead">Please fill in these details to proceed</p>
  </div>
</div>
<form action="donor_register.php" method="post">
<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="CD">Contact Details</label>
    <input type="number" name="Phone_no" class="form-control" id="CD" placeholder="Contact Details">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email Id</label>
    <input type="email" class="form-control" name="email_id" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required/>
  </div>

  <div class="form-group">
   <label for="exampleFormControlTextarea1">Address</label>
    <textarea class="form-control" name="Address" id="exampleFormControlTextarea1" rows="3"></textarea>
  
    

  <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="type the password" required>
        </div>

        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="cpassword" placeholder="type the same password here" required>
        </div>
        <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
        </div>
        <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label class="custom-control-label" for="customCheck1">I agree not to provide Non-veg food, Sweets and Dairy products</label>
</div>

 <?php
        if(isset($_POST['signup']))
    {
           // echo '<script type="text/javascript">alert("sign up button clicked")</script>';
        $name = $_POST['Name'];
        $Phone_no = $_POST['Phone_no'];
        $email_id = $_POST['email_id'];
        $Address=$_POST['Address'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];

        if($password==$cpassword)
        {
           // $query="select * from donors where email_id='$email_id' ";
            //$query_run=mysqli_query($conn,$query);

            //if(@mysqli_num_rows($query_run)>0)
            //{
              //  echo '<script type="text/javascript">alert("already there")</script>';

            //}
    
                $query="insert into donors values('$name',$Phone_no,$email_id,$Address,'$password')";
                $query_run=mysqli_query($conn,$query);

            if($query_run)
                {
                echo '<script type="text/javascript">alert("registered!")</script>';

                }
            else
                { 
                    echo '<script type="text/javascript">alert("error!")</script>';
                }
            }
        
        }
        else
        {
            echo '<script type="text/javascript">alert("password not match!")</script>';
        }
    
>>>>>>> 607faa866219305d9ac9f94bf5e4b8dc41fb240d
    
    echo '<script language="javascript">';
        echo 'alert("Registered successsfully!!")';
        echo '</script>';

  }
}

}


?>
