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
<form>
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

 <?php
        if(isset($_POST['signup']))
    {
           // echo '<script type="text/javascript">alert("sign up button clicked")</script>';
        $name = $_POST['name'];
        $Phone_no = $_POST['Phone_no'];
        $email_id = $_POST['email_id'];
        $Address=$_POST['Address'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];

        if($password==$cpassword)
        {
            $query="select * from email_id where email_id='$email_id' ";
            $query_run=mysqli_query($con,$query);

            if(mysqli_num_rows($query_run)>0)
            {
                echo '<script type="text/javascript">alert("already there")</script>';

            }
            else
            {
                $query="insert into user values('$name',$Phone_no,$email_id,$Address,'$password')";
                $query_run=mysqli_query($con,$query);

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
    }
    
        
        ?>


</form>	

</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>