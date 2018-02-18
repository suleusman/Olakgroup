<!DOCTYPE html>
<html lang="en">
<head>
  <title>Projects Executed by Olak</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    #navbar {
      margin-bottom: 4px;
      border-radius: 0;
	 min-height:70px;
	 text-transform:uppercase;
	 font-weight:bold;
	 background-color:#27AA38;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 2px;
}

#navbar li a, #navbar navbar-brand {
    color: #fff !important;
	padding-top:25px;
}

#navbar-nav li a:hover, #navbar-nav li.active a {
    color: #f30 !important;
    background-color:#fff !important;
	 min-height:70px;

}

.navbar-default .navbar-toggle {
    border-color: transparent;
    color: #f30 !important;
}
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
     	 margin-bottom: 0;
	  	 background-color:#603;
		 min-height:20px !important;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
	  background-color: #090;
      padding: 25px;
    }
	.container{padding:0px; margin-bottom:5px; margin-top:5px;}
	
	
.carousel-inner img {
    -webkit-filter: grayscale(90%);
  /*  filter: grayscale(90%);  make all photos black and white */
    width: 100%; /* Set width to 100% */
    margin: auto;
	max-height:500px;
}

.carousel-caption h3 {
    color: #fff !important;
}

@media (max-width: 600px) {
    .carousel-caption {
        display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
}  
  </style>
  

</head>
<body>
<div  style="max-width:100%;   margin:auto;  padding-top:80px; background-color:#fff; min-height:150px;">
<div  id="nav"  style=" max-width:1000px; text-align:center; margin:auto;"  >
		<div class="col-mid-4">
        <img src="images/logo1.jpg" height="70" width="200"  style="padding:5px; background-color:#eee;" class="img-rounded"/>
        </div>

        <div class="col-mid-8">
                    <h5 style="color:#090; font-family:Tahoma, Geneva, sans-serif; font-size:41px; text-transform:uppercase; letter-spacing:4px;">Olak Roofing Nig. Ltd.</h5>
        <h5 style="color:#666; font-family:Tahoma, Geneva, sans-serif; font-size:12px; text-transform:uppercase; font-weight: bold;">Manufacturer of Roofing Sheet, Importer & Exporter of Building Materials</h5>

		</div>
  </div>
</div>




<nav class="navbar navbar-inverse navbar-fixed-top" id="navbar">
  <div class="container-fluid" >
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="width:200px; height:40px; background-color:#fff; color:#f4511e; border:0px;">
        <p style=" padding-top:5px;">MENU</p>                       
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" style="max-width:1100px; margin:auto;">
      <ul class="nav navbar-nav" id="navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
         <li><a href="management.php">Management</a></li>
        <li><a href="index.php#products">Products</a></li>
        <li><a href="project.php">Projects</a></li>
        <li><a href="contact.php">Contact</a></li>

      </ul>
      <!-- <ul class="nav navbar-nav navbar-right" >
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
      </ul> -->
    </div>
  </div>
</nav>


<div class="container-fluid text-center " style="max-width:1100px; width:auto;">
    <div class="row text-center">
    <div class="col-sm-12">
        <img src="images/projects.jpg" alt="Paris" width="100%" height="300"><br>
        
      </div>
    </div>
    
</div>
</div>

<div class="container" style="max-width:1100px; width:auto;">    
  <div class="row">
    <div class="col-sm-12">
      <h3 style="color:#888; text-align:center; ">Projects Executed by Olak Roofing Nig. Ltd.</h3>
<p style="padding:5px; color:#666; letter-spacing:1px; font-size:34px; text-align:center; line-height:2.2;">

Coming Soon!
</p>
    </div>
    
  </div>
</div>
</div></div></div>


      <div class="container" style="max-width:100%; width:auto; background:#27AA38; min-height:70px;">    
  <div class="row">
    <div class="col-sm-12">
    <?php
	include("includes/footer.php");
	 ?>
    </div></div></div>
</body>
</html>