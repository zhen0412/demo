<?php
header("Content-Type:text/html; charset=utf-8");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MENU</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">BIKE<small>Blend</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item active"><a href="menu.php" class="nav-link">Menu</a></li>
	          <li class="nav-item"><a href="login.php" class="nav-link">LOGIN</a></li>
	          <li class="nav-item cart"><a href="cart.php" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center"><small>0</small></span></a></li>
	        </ul>
               <?php 
             if(isset($_POST['out']))
		  session_unset();
		if(isset($_SESSION['account'])!=null)
		 {
		  echo "<li style=color:white;>??????????????????".$_SESSION['account']."</li>";
		  echo "<li style=color:white;>"."<form method=post><input type=submit name='out' value='??????' class='button' style='margin:0px 0px 0px 50px;'></form>"."</li>";
		 }
		?>
		
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Our Menu</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Menu</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex align-items-xl-end">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>000 (123) 456 7890</h3>
	    						<p>A small river named Duden flows by their place and supplies.</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>198 West 21th Street</h3>
	    						<p>	203 Fake St. Mountain View, San Francisco, California, USA</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Open Monday-Friday</h3>
	    						<p>8:00am - 9:00pm</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="book p-4">
	    			<h3>Book a Table</h3>
	    			<form action="appointment.php" method="post" class="appointment-form">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" name="na" class="form-control" placeholder="Name">
                            </div>
	    				</div>
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<div class="input-wrap">
		            		<div class="icon"></div>
		            		<input type="date" name="da" class="form-control" placeholder="Date">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-ios-clock"></span></div>
		            		<input type="text" name="ti" class="form-control appointment_time" placeholder="Time">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" name="pho" class="form-control" placeholder="Phone">
		    				</div>                            
                        </div>
                        
                        <div class="d-md-flex">
                            
                            
                            
		    				<div class="form-group">
		    					<select name="car" class="form-control" >
                                <option value="0" style="background-color: black;">?????????</option>
                                <optgroup style="background-color: black;" label="Sport">
                                <option style="background-color: black;">CBR250RR</option>
                                <option style="background-color: black;">R6</option>
                                <option style="background-color: black;">MT09</option>
                              </optgroup>
                              <optgroup style="background-color: black;" label="Coffee racer">
                                <option  style="background-color: black;" >CB150R</option>
                                <option style="background-color: black;">CB650R</option>
                                <option style="background-color: black;">Z900RS</option>
                              </optgroup>
                                <optgroup style="background-color: black;" label="Off-road">
                                <option style="background-color: black;">CRF150L</option>
                                <option style="background-color: black;">390 DUKE</option>
                                <option style="background-color: black;">Svartpilen 401</option>
                              </optgroup>
                            </select>
                            </div>
                            <div class="form-group">
                                <select name="get" class="form-control" >
                                <option value="0" style="background-color: black;">????????????</option>
                                <option style="background-color: black;">?????????</option>
                                <option style="background-color: black;">?????????</option>
                                <option style="background-color: black;">?????????</option>
                                <option  style="background-color: black;" >?????????</option>
                                <option style="background-color: black;">?????????</option>
                            </select>
                            </div>
                            <div class="form-group">
		    					<select name="back" class="form-control" >
                                <option value="0" style="background-color: black;">????????????</option>
                                <option style="background-color: black;">?????????</option>
                                <option style="background-color: black;">?????????</option>
                                <option style="background-color: black;">?????????</option>
                                <option  style="background-color: black;" >?????????</option>
                                <option style="background-color: black;">?????????</option>
                            </select>
                            </div>
                            <div class="form-group">
                                <select name="hr" class="form-control" >
                                <option value="0" style="background-color: black;">????????????</option>
                                <option style="background-color: black;">6hr/200km</option>
                                <option style="background-color: black;">11hr/300km</option>
                                <option style="background-color: black;">24hr/370km</option>
                                
                            </select>
                            </div>
	    				</div>
                        
                        
                        
	    				<div class="d-md-flex">
		            <div class="form-group ml-md-4">
		              <input type="submit" value="Appointment" class="btn btn-white py-3 px-4">
		            </div>
                            
	    				</div>
	    			</form>
	    		</div>
    		</div>
    	</div>
    </section>

    

    <section class="ftco-menu mb-5 pb-5">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Discover</span>
            <h2 class="mb-4">Our Products</h2>
            <p>Let's Have Fun???</p>
          </div>
        </div>
    		<div class="row d-md-flex">
	    		<div class="col-lg-12 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">SPORT</a>

		              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">CAFE RACER</a>

		              <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Off-road</a>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
		              	<div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="250rr.php" class="menu-img img mb-4" style="background-image: url(images/dish-1.jpg);"></a>
		              				<div class="text">
                                        <h3>CBR250RR</h3>
		              					<p>???????????????250c.c.?????????????????????????????????????????????????????????CBR250RR SP????????????????????????Racing Replica??????????????????????????????????????????HONDA??????????????????????????????????????????</p>
		              					<p class="price"><span>1400/6HR(200KM)<BR>1700/11HR(300KM)<BR>2000/24HR(370KM)</span></p>
		              					
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="r6.php" class="menu-img img mb-4" style="background-image: url(images/dish-2.jpg);"></a>
		              				<div class="text">
		              					<h3>YZF-R6</h3>
		              					<p>???????????????YZF-R6??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????YZF-R1???DNA??????????????????????????????????????????????????????</p>
		              					<p class="price"><span>2700/6HR(200KM)<BR>3300/11HR(300KM)<BR>3700/24HR(370KM)</span></p>
		              					
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="mt09.php" class="menu-img img mb-4" style="background-image: url(images/dish-3.jpg);"></a>
		              				<div class="text">
		              					<h3>MT09</h3>
		              					<p>MT-09?????????LED????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????3D???LED????????????????????????MT-09???????????????????????????</p>
		              					<p class="price"><span>1900/6HR(200KM)<BR>2300/11HR(300KM)<BR>2700/24HR(370KM)</span></p>
		              					
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="cb150.php" class="menu-img img mb-4" style="background-image: url(images/drink-1.jpg);"></a>
		              				<div class="text">
		              					<h3>CB150R</h3>
		              					<p>???Cafe Racer??????????????????????????????????????????????????????????????????????????????????????????HONDA?????????????????????LED?????????</p>
		              					<p class="price"><span>700/6HR(200KM)<BR>900/11HR(300KM)<BR>1100/24HR(370KM)</span></p>
		              					
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="cb650.php" class="menu-img img mb-4" style="background-image: url(images/drink-2.jpg);"></a>
		              				<div class="text">
		              					<h3>CB650R</h3>
		              					<p>?????????Neo Sports Cafe?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
		              					<p class="price"><span>1900/6HR(200KM)<BR>2300/11HR(300KM)<BR>2700/24HR(370KM)</span></p>
		              					
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
                               
		              				<div class="menu-wrap">
		              				<a href="z900rs.php" class="menu-img img mb-4" style="background-image: url(images/drink-3.jpg);"></a>
		              				<div class="text">
		              					<h3>Z900RS</h3>
		              					<p>Kawasaki???????????????Z??????????????????-Z900RS??????????????????????????? ???Z1???????????????????????????????????????????????????????????????????????????????????????????????????</p>
		              					<p class="price"><span>2100/6HR(200KM)<BR>2500/11HR(300KM)<BR>2900/24HR(370KM)</span></p>
		              					
		              				</div>
		              				
		              			</div>
		              				
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="crf150.php" class="menu-img img mb-4" style="background-image: url(images/dessert-1.jpg);"></a>
		              				<div class="text">
		              					<h3>CRF150L</h3>
		              					<p>HONDA??????????????????????????????????????????CRF150L?????????SHOWA???????????????????????????NISSIN????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
		              					<p class="price"><span>700/6HR(200KM)<BR>900/11HR(300KM)<BR>1100/24HR(370KM)</span></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="390duke.php" class="menu-img img mb-4" style="background-image: url(images/dessert-2.jpg);"></a>
		              				<div class="text">
		              					<h3>390 Duke</h3>
		              					<p>KTM Duke?????????KTM?????????????????????????????????390 Duke????????????????????????????????????????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????????390 Duke?????????????????????????????????????????????</p>
		              					<p class="price"><span>1400/6HR(200KM)<BR>1700/11HR(300KM)<BR>2000/24HR(370KM)</span></p>
		              					
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="401.php" class="menu-img img mb-4" style="background-image: url(images/dessert-3.jpg);"></a>
		              				<div class="text">
		              					<h3>Svartpilen 401</h3>
		              					<p>?????????? Get ?????????? Get ?????????? Get
??????Scrambler???????????????401??????
???????????????Scorpion Rally STR?????????
WP APEX?????????Brembo Bybre??????
????????????Supermoto ABS??????????????????</p>
		              					<p class="price"><span>1400/6HR(200KM)<BR>1700/11HR(300KM)<BR>2000/24HR(370KM)</span></p>
		              					
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>

    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        
        <div class="row">
          <div class="col-md-12 text-center">

           
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>