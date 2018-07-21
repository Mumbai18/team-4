<php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> HomePage </title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style type="text/css">
	.timeline {
    position: relative;
    padding:4px 0 0 0;
    margin-top:22px;
    list-style: none;
}

.timeline>li:nth-child(even) {
    position: relative;
    margin-bottom: 50px;
    height: 180px;
    right:-100px;
}

.timeline>li:nth-child(odd) {
    position: relative;
    margin-bottom: 50px;
    height: 180px;
    left:-100px;
}

.timeline>li:before,
.timeline>li:after {
    content: " ";
    display: table;
}

.timeline>li:after {
    clear: both;
    min-height: 170px;
}

.timeline > li .timeline-panel {
  position: relative;
  float: left;
  width: 41%;
  padding: 0 20px 20px 30px;
  text-align: right;
}

.timeline>li .timeline-panel:before {
    right: auto;
    left: -15px;
    border-right-width: 15px;
    border-left-width: 0;
}

.timeline>li .timeline-panel:after {
    right: auto;
    left: -14px;
    border-right-width: 14px;
    border-left-width: 0;
}

.timeline>li .timeline-image {
    z-index: 100;
    position: absolute;
    left: 50%;
    border: 7px solid #3b5998;
    border-radius: 100%;
    background-color: #3b5998;
    box-shadow: 0 0 5px #4582ec;
    width: 200px;
    height: 200px;
    margin-left: -100px;
}

.timeline>li .timeline-image h4 {
    margin-top: 12px;
    font-size: 10px;
    line-height: 14px;
}

.timeline>li.timeline-inverted>.timeline-panel {
    float: right;
    padding: 0 30px 20px 20px;
    text-align: left;
}

.timeline>li.timeline-inverted>.timeline-panel:before {
    right: auto;
    left: -15px;
    border-right-width: 15px;
    border-left-width: 0;
}

.timeline>li.timeline-inverted>.timeline-panel:after {
    right: auto;
    left: -14px;
    border-right-width: 14px;
    border-left-width: 0;
}

.timeline>li:last-child {
    margin-bottom: 0;
}

.timeline .timeline-heading h4 {
  margin-top:22px;
    margin-bottom: 4px;
    padding:0;
    color: #b3b3b3;
}

.timeline .timeline-heading h4.subheading {
  margin:0;
  padding:0;
    text-transform: none;
    font-size:18px;
    color:#333333;
}

.timeline .timeline-body>p,
.timeline .timeline-body>ul {
    margin-bottom: 0;
    color:#808080;
}
/*Style for even div.line*/
.timeline>li:nth-child(odd) .line:before {
    content: "";
    position: absolute;
    top: 60px;
    bottom: 0;
    left: 690px;
    width: 4px;
    height:340px;
    background-color: #3b5998;
    -ms-transform: rotate(-44deg); /* IE 9 */
    -webkit-transform: rotate(-44deg); /* Safari */
    transform: rotate(-44deg);
    box-shadow: 0 0 5px #4582ec;
}
/*Style for odd div.line*/
.timeline>li:nth-child(even) .line:before  {
    content: "";
    position: absolute;
    top: 60px;
    bottom: 0;
    left: 450px;
    width: 4px;
    height:340px;
    background-color: #3b5998;
    -ms-transform: rotate(44deg); /* IE 9 */
    -webkit-transform: rotate(44deg); /* Safari */
    transform: rotate(44deg);
    box-shadow: 0 0 5px #4582ec;
}
/* Medium Devices, .visible-md-* */
@media (min-width: 992px) and (max-width: 1199px) {
  .timeline > li:nth-child(even) {
    margin-bottom: 0px;
    min-height: 0px;
    right: 0px;
  }
  .timeline > li:nth-child(odd) {
    margin-bottom: 0px;
    min-height: 0px;
    left: 0px;
  }
  .timeline>li:nth-child(even) .timeline-image {
    left: 0;
    margin-left: 0px;
  }
  .timeline>li:nth-child(odd) .timeline-image {
    left: 690px;
    margin-left: 0px;
  }
  .timeline > li:nth-child(even) .timeline-panel {
    width: 76%;
    padding: 0 0 20px 0px;
    text-align: left;
  }
  .timeline > li:nth-child(odd) .timeline-panel {
    width: 70%;
    padding: 0 0 20px 0px;
    text-align: right;
  }
  .timeline > li .line {
    display: none;
  }
}
/* Small Devices, Tablets */
@media (min-width: 768px) and (max-width: 991px) {
  .timeline > li:nth-child(even) {
    margin-bottom: 0px;
    min-height: 0px;
    right: 0px;
  }
  .timeline > li:nth-child(odd) {
    margin-bottom: 0px;
    min-height: 0px;
    left: 0px;
  }
  .timeline>li:nth-child(even) .timeline-image {
    left: 0;
    margin-left: 0px;
  }
  .timeline>li:nth-child(odd) .timeline-image {
    left: 520px;
    margin-left: 0px;
  }
  .timeline > li:nth-child(even) .timeline-panel {
    width: 70%;
    padding: 0 0 20px 0px;
    text-align: left;
  }
  .timeline > li:nth-child(odd) .timeline-panel {
    width: 70%;
    padding: 0 0 20px 0px;
    text-align: right;
  }
  .timeline > li .line {
    display: none;
  }
}
/* Custom, iPhone Retina */
@media only screen and (max-width: 767px) {
  .timeline > li:nth-child(even) {
    margin-bottom: 0px;
    min-height: 0px;
    right: 0px;
  }
  .timeline > li:nth-child(odd) {
    margin-bottom: 0px;
    min-height: 0px;
    left: 0px;
  }
  .timeline>li .timeline-image {
    position: static;
    width: 150px;
    height: 150px;
    margin-bottom:0px;
  }
  .timeline>li:nth-child(even) .timeline-image {
    left: 0;
    margin-left: 0;
  }
  .timeline>li:nth-child(odd) .timeline-image {
    float:right;
    left: 0px;
    margin-left:0;
  }
  .timeline > li:nth-child(even) .timeline-panel {
    width: 100%;
    padding: 0 0 20px 14px;
  }
  .timeline > li:nth-child(odd) .timeline-panel {
    width: 100%;
    padding: 0 14px 20px 0px;
  }
  .timeline > li .line {
    display: none;
  }
}
</style>


</head>

<body>
	<div class="container"> 
		<div class="row">
			<div class="col-lg-12">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
  	
   <div class="carousel-item active h-50">
      <img class="d-block w-100 h-50" src="7f22bd1107b49b5eac20ce21b80d6489.jpg" alt="First slide"><div class="carousel-caption d-none d-md-block">
    <h2 style="margin-bottom: 170px; font-size: 80px" >Welcome</h2> </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="7f22bd1107b49b5eac20ce21b80d6489.jpg" alt="Second slide"> <div class="carousel-caption d-none d-md-block">
      	
    <h2 style="margin-bottom: 170px ; font-size: 80px">Annadhan</h2>
    </div>
</div>
    <div class="carousel-item">
      <img class="d-block w-100" src="7f22bd1107b49b5eac20ce21b80d6489.jpg" alt="Third slide"> <div class="carousel-caption d-none d-md-block">
    <h2 style="margin-bottom: 170px;font-size: 80px"> What is Left is not OVER</h2> </div>
    </div>
<div class="jumbotron">
  <h1 class="display-4" align="center">Users</h1>

  
</div>
<div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
            <a href="donorlogin.html"><img src="user-512.png" class="img-circle" alt="Cinque Terre" width="50px" height="50px"></a>
            <h4 class="service-heading">Donor</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
           <a href="volunteerlogin.html"> <img src="3-512.png" class="img-circle" alt="Cinque Terre" width="50px" height="50px" ></a>
            <h4 class="service-heading">Volunteer</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
            </span>
           <a href="adminlogin.html"> <img src="key-512.png" class="img-circle" alt="Cinque Terre" width="50px" height="50px"></a>
            <h4 class="service-heading">Admin</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
        
        </div>

  </div>
<div class="jumbotron">
  <h1 class="display-4" align="center">Gallery</h1>

  
</div>
  <div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/w3images/lights.jpg">
        <img src="30264599_1933395656734959_4429970612173144064_n.jpg" alt="Lights" width="300px" height="275px" style="padding: 20px">
        <div class="caption">
         
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/w3images/nature.jpg">
        <img src="31706537_1965126000228591_1608133500488122368_n.jpg" alt="Nature" width="300px" height="275px" style="padding: 20px">
        <div class="caption">
          
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/w3images/fjords.jpg">
        <img src="32266557_1979501892124335_5884682915865952256_n.jpg" alt="Fjords" width="300px" height="275px" style="padding: 20px">
        <div class="caption">
          
        </div>
      </a>
    </div>
  </div>


<div class="container">
<div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/w3images/lights.jpg">
        <img src="37646422_2095535433854313_7606438921471262720_n.jpg" alt="Lights" width="300px" height="275px">
        <div class="caption">
          
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/w3images/nature.jpg">
        <img src="31118040_1951892828218575_1204802162626920448_n.jpg" alt="Nature" width="300px" height="275px">
        <div class="caption">
          
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/w3images/fjords.jpg">
        <img src="35329960_2028280400579817_7182354473434480640_n.jpg" alt="Fjords" width="300px" height="275px">
        <div class="caption">
         
        </div>
      </a>
    </div>
  </div>
</div>


   
<div class="jumbotron" style="margin-top: 20px">
  <h1 class="display-4" align="center">Timeline</h1>

  
</div>


<div class="container">
  <div class="row">
    <div class="col-lg-12">
      
      <ul class="timeline">
        <li>
          <div class="timeline-image">
            <img class="img-circle img-responsive" src="" alt="">
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4>Step One</h4>
              <h4 class="subheading">Subtitle</h4>
            </div>
            <div class="timeline-body">
              <p class="text-muted">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>
          <div class="line"></div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-image">
            <img class="img-circle img-responsive" src="" alt="">
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4>Step Two</h4>
              <h4 class="subheading">Subtitle</h4>
            </div>
            <div class="timeline-body">
              <p class="text-muted">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>
          <div class="line"></div>
        </li>
        <li>
          <div class="timeline-image">
            <img class="img-circle img-responsive" src="" alt="">
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4>Step Three</h4>
              <h4 class="subheading">Subtitle</h4>
            </div>
            <div class="timeline-body">
              <p class="text-muted">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>
          <!--<div class="line"></div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-image">
            <img class="img-circle img-responsive" src="" alt="">
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4>Step Three</h4>
              <h4 class="subheading">Subtitle</h4>
            </div>
            <div class="timeline-body">
              <p class="text-muted">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>
          <div class="line"></div>
        </li>
        <li>
          <div class="timeline-image">
            
          </div>-->
             </div>
        </li>
      </ul>
    </div>
  </div>
</div>



<!-- Section: Team v.2 -->
<section class="team-section text-center my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold my-5">Our amazing team</h2>
  <!-- Section description -->
  <p class="grey-text w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur veniam.</p>

  <!-- Grid row -->
  <div class="row text-center">

    <!-- Grid column -->
    <div class="col-md-4 mb-md-0 mb-5">
      <div class="avatar mx-auto">
        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded z-depth-1-half" alt="Sample avatar" width="200px" height="150px">
      </div>
      <h4 class="font-weight-bold dark-grey-text my-4">Maria Kate</h4>
      <h6 class="text-uppercase grey-text mb-3"><strong>Photographer</strong></h6>
      <!-- Facebook-->
      <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-fb">
        <i class="fa fa-facebook"></i>
      </a>
      <!--Dribbble -->
      <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-dribbble">
        <i class="fa fa-dribbble"></i>
      </a>
      <!-- Twitter -->
      <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-tw">
        <i class="fa fa-twitter"></i>
      </a>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4 mb-md-0 mb-5">
      <div class="avatar mx-auto">
        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" class="rounded z-depth-1-half" alt="Sample avatar" width="200px" height="150px">
      </div>
      <h4 class="font-weight-bold dark-grey-text my-4">John Doe</h4>
      <h6 class="text-uppercase grey-text mb-3"><strong>Front-end Developer</strong></h6>
      <!--Email-->
      <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-email">
        <i class="fa fa-envelope"></i>
      </a>
      <!-- Facebook-->
      <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-fb">
        <i class="fa fa-facebook"></i>
      </a>
      <!-- GitHub-->
      <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-git">
        <i class="fa fa-github"></i>
      </a>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4">
      <div class="avatar mx-auto">
        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg" class="rounded z-depth-1-half" alt="Sample avatar" width="200px" height="150px">
      </div>
      <h4 class="font-weight-bold dark-grey-text my-4">Sarah Melyah</h4>
      <h6 class="text-uppercase grey-text mb-3"><strong>Web Developer</strong></h6>
      <!--Linkedin -->
      <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-li">
        <i class="fa fa-linkedin "></i>
      </a>
      <!-- Twitter -->
      <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-tw">
        <i class="fa fa-twitter "></i>
      </a>
      <!--Pinterest -->
      <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-pin">
        <i class="fa fa-pinterest "></i>
      </a>
    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Team v.2 -->




</div>
</div>
</div>
</div>
</div>
<h3>welcome
            <?php echo $_SESSION['email_id'] ?>
            </h3>
            <center>
            <form method="post"  action="homepage1.php">
            <input type="submit" id=logout value="log out"/><br>
            </from>
            </div>
</body>
</html>