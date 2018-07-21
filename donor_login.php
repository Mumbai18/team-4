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
    <h1 class="display-4">DONOR LOGIN</h1>
    <p class="lead">Enter your credentials</p>
  </div>
</div>
<form>
<div class="form-group">
    <label for="exampleInputEmail1">E-mail id:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your registered e-mail address" required>
  </div>

  <div class="form-group">
    <label for="CD">Password</label>
    <input type="number" class="form-control" id="CD" placeholder="Contact Details">
  </div>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
  <label class="form-check-label" for="exampleRadios1">
    Frozen Food
  </label>
</div>

<div class="form-group" style="margin:4px">
    <label for="HC">Number of hours since cooked</label>
    <input type="number" class="form-control" id="HC" placeholder=" Hours">
  </div>
<div class="form-group" style="margin:4px">
    <label for="ND">Number of Dishes</label>
    <input type="number" class="form-control" id="ND" placeholder="Dishes">
  </div>

  <div class="form-group">
   <label for="peopleserve">Package Type</label>
    <textarea class="form-control" id="peopleserve" rows="3"></textarea>
</div>

<div style="margin: 7px">
<a class="btn btn-primary btn-sm" style="width:15%" name="request_v">Request volunteer</a>
<a type="button" class="btn btn-secondary btn-sm" style="width:15%" name="volunteer"> Volunteer</a>
</div>

</form>	

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
  </html>