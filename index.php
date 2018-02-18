<!DOCTYPE html>
<html lang="en">
<head>
  <title>Olak Group Nigeria Limited</title>
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
	color:#fff;
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
        <li><a href="#products">Products</a></li>
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


<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  
      <div class="item active">
      <img src="images/s1.jpg" alt="Classic Room" height="100">
      <div class="carousel-caption">
        <h3>Header 1</h3>
      </div>
    </div>

    <div class="item">
      <img src="images/s1.jpg" alt="Classic Room" height="100">
      <div class="carousel-caption">
        <h3>Header 2</h3>
        <p>Description 2</p>
      </div>
    </div>

    <div class="item">
      <img src="images/s1.jpg" alt="Superior Room" height="100">
      <div class="carousel-caption">
        <h3>Header 3</h3>
        <p>Description 3</p>
      </div>
    </div>

    <div class="item">
      <img src="images/s1.jpg" alt="Executive Room" height="100">
      <div class="carousel-caption">
        <h3>Header 4</h3>
        <p>Description 4 </p>
      </div>
    </div>

    <div class="item">
      <img src="images/s1.jpg" alt="Flower" height="100">
      <div class="carousel-caption">
        <h3>Header 5</h3>
        <p>Description 5</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

       <div class="container" style="max-width:1100px; width:auto;">    
  <div class="row">
    <div class="col-sm-8">
      <h3 style="color:#888;">Welcome to Olak Roofing Nig. Ltd.</h3>
<p style="padding:5px; color:#666; letter-spacing:1px; font-size:14px; text-align:justify; line-height:2.1;"><strong>OLAK ROOFING NIGERIA LIMITED</strong> is an incorporated limited liability company registered with the corporate Affairs commission .The incorporation number is  RC 894218 under the Companies and allied matter acts of 1990.The company has been incorporated since twenty-second day of June, 2010 with objects covering different areas of manufacturing value chain development including roofing sheets, international trade , general contract, imports and exports as detailed in memorandum of association of the company.<br>
It is a private liability company with 4 strategic business units (SBUs) that aligned with the revenue streams of the company. The 4 SBUs are the Flat steel galvanizing unit for the production of galvanized roofing sheets, Colour coating unit for the production of galvanized coloured roofing sheets, Corrugation and embossing unit for corrugated and embossed roofing sheets while the 4th unit is the enterprise unit of the company that handles the distribution, sales, marketing and logistics services.</p>
      <a href="#"><button class="btn btn-default btn-sm" style="color:#27AA38">Read More...</button></a>
    </div>
    <div class="col-sm-4" style="font-size:200px; color:#27AA38; padding-top:20px;">
      <span class="glyphicon glyphicon-signal"></span>
    </div>
  </div>
</div>
</div></div></div>

       <div class="container" style="max-width:100%; width:auto; background:#eee;">    
       <div class="container" style="max-width:1100px; width:auto; background:#eee; text-align:justify; ">    
  <div class="row">
    <div class="col-sm-4" style="font-size:200px; color:#27AA38; padding-top:20px;">
      <span class="glyphicon glyphicon-globe"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2>
      <h4>MISSION</h4>
<p style="padding:10px; letter-spacing:1px; font-size:14px; line-height:2.1;">The mission of this project is for the company to become an hub steel for roofing sheets manufacturing with modern mills and processing equipment required for quality products (flat cold rolled sheets) of about 36,000 -54,000MT per annum.</p>
<h4> VISION</h4>
<p style="padding:10px; letter-spacing:1px; font-size:14px; line-height:2.1;">To become a household name in the steel based roofing sheet sub sector of Nigeria economy through quality and value added products with potentials of playing a global role in the steel sector.</p>
<h4>BUSINESS OBJECTIVE</h4>
<p style="padding:10px; letter-spacing:1px; font-size:14px; line-height:2.1;">The broad objective of this manufacturing enterprise project is to enhance the productivity and value addition of the steel for the production of market driven roofing sheet products in a bid to support the national sufficiency drive of roofing materials. </p>
<h4> GOAL</h4>
<p id="products" style="padding:10px; letter-spacing:1px; font-size:14px; line-height:2.1;">The foresight and goal of the company is to become strategic pillar in the steel sector of Nigeria economy through the delivery of value added products and services that sustainably meet the demand of the end users at very competitive prices. Compliance with industry specifications as released from time to time by the industry regulators shall be the hallmark of the business. Identified values shall be created along the production and distribution value chains for market positioning and leadership.</p>
    </div>
  </div>
</div></div>



<div class="container-fluid text-center " style="max-width:1100px; width:auto;">
  <h2>Our Products</h2>
    <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/11.jpg" alt="Paris" width="400" height="300"><br>
        <p><strong>DOUBLE SWAN</strong></p>
        <p>Roofing</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/12.jpg" alt="New York" width="400" height="300"><br>
        <p><strong>DOUBLE POWER HAND</strong></p>
        <p>Roofing</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/13.jpg" alt="San Francisco" width="400" height="300"><br>
        <p><strong>ELEPHANT</strong></p>
        <p>Roofing </p>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid text-center " style="max-width:1100px; width:auto;">
    <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/03.jpg" alt="Paris" width="400" height="300"><br>
        <p><strong>STAR COMB SINGLE</strong></p>
        <p>Roffing</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/21.jpg" alt="New York" width="400" height="300"><br>
        <p><strong>STAR</strong></p>
        <p>Roffing</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/22.jpg" alt="San Francisco" width="400" height="300"><br>
        <p><strong>BIG HOUSE</strong></p>
        <p>Roffing</p>
      </div>
    </div>
  </div>
</div>


       <div class="container" style="max-width:100%; width:auto; background:#27AA38; min-height:70px;">    
  <div class="row">
    <div class="col-sm-12">
    <?php
	include("includes/footer.php");
	 ?>
    </div></div></div>
</body>
</html>
