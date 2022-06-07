<?php
header("Content-Type:text/html; charset=utf-8");
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>首頁</title>
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
	      <a class="navbar-brand" href="index.php">BIKE<small>Blend</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
	          <li class="nav-item"><a href="login.php" class="nav-link">LOGIN</a></li>
	          <li class="nav-item cart"><a href="cart.php" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center"><small>0</small></span></a></li>
	        </ul>
             <?php 
             if(isset($_POST['out']))
		  session_unset();
		if(isset($_SESSION['account'])!=null)
		 {
		  echo "<li style=color:white;>目前登入者：".$_SESSION['account']."</li>";
		  echo "<li style=color:white;>"."<form method=post><input type=submit name='out' value='登出' class='button' style='margin:0px 0px 0px 50px;'></form>"."</li>";
		 }
		?>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url(images/bg_1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Welcome</span>
              <h1 class="mb-4">THE CORNER ROCKET</h1>
              <p class="mb-4 mb-md-5">The KTM 390 DUKE is a pure example of what draws so many to the thrill of street motorcycling.</p>
              <p><a href="login.php" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> 
                  <a href="menu.php" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(images/bg_2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Welcome</span>
              <h1 class="mb-4">RESPECT R WORLD</h1>
              <p class="mb-4 mb-md-5">Now with next generation R-series DNA.</p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="menu.html" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Welcome</span>
              <h1 class="mb-4">NEO SOPRTS CAFE</h1>
              <p class="mb-4 mb-md-5">Every day is a journey. Start yours today with the CB650R.</p>
              <p><a href="login.php" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="menu.html" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    

    <section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(images/about.jpg);"></div>
    	<div class="one-half ftco-animate">
    		<div class="overlap">
	        <div class="heading-section ftco-animate ">
	        	<span class="subheading">Discover</span>
	          <h2 class="mb-4">Our Story</h2>
	        </div>
	        <div>
	  				<p>Everyone has a dream, some goal or activity that gives their life deeper meaning and sparks passion. When we pursue our dreams, we feel empowered. This power, in turn, connects us to others who share the same dreams. It gives us the strength to overcome great challenges. It inspires us to spread the joy of our dreams to other people.</p>
	  			</div>
  			</div>
    	</div>
    </section>


    

    <section class="ftco-section">
    	<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Discover</span>
            <h2 class="mb-4">OFFICAL</h2>
            <p>點擊圖片進入官網！</p>
          </div>
        </div>
    </section>

    <section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="https://husqvarnataiwan.com.tw/products/18" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="https://ktm-taiwan.com.tw/products/11" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="https://moto.honda-taiwan.com.tw/Motor/CB650R" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="https://www.yamaha-motor.com.tw/motor/motor_MT09.aspx" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
                
        </div>
    	</div>
    </section>

		<section class="ftco-menu">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Discover</span>
            <h2 class="mb-4">Our Products</h2>
            <p>Let's Have Fun！</p>
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
		              				<a  class="menu-img img mb-4" style="background-image: url(images/dish-1.jpg);"></a>
		              				<div class="text">
		              					<h3>CBR250RR</h3>
		              					<p>為了鞏固在250c.c.級距運動車款市場的競爭力，推出了新款的CBR250RR SP，這是一款歸類在Racing Replica系列中的運動車款，並採用代表HONDA競技精神的全新三色車身塗裝。</p>
		              					<p class="price"><span>1400/6HR<BR>1700/11HR<BR>2000/24HR</span></p>
		              					<p><a href="menu.php" class="btn btn-primary btn-outline-primary">READ MORE</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a  class="menu-img img mb-4" style="background-image: url(images/dish-2.jpg);"></a>
		              				<div class="text">
		              					<h3>YZF-R6</h3>
		              					<p>到上一代的YZF-R6為止，在設計上的特色都是往上翹的車尾及尖尖的車頭整流罩，但改版後的全新外型，一眼就能看出是繼承了新款YZF-R1的DNA，並採用了全新設計的頭燈及車尾造型。</p>
		              					<p class="price"><span>2700/6HR<BR>3300/11HR<BR>3700/24HR</span></p>
		              					<p><a href="menu.php" class="btn btn-primary btn-outline-primary">READ MORE</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a  class="menu-img img mb-4" style="background-image: url(images/dish-3.jpg);"></a>
		              				<div class="text">
		              					<h3>MT09</h3>
		              					<p>MT-09的兩顆LED雙眼大燈渾然天成，一亮燈，瞬間睥睨群車，騰騰殺氣、他車莫近；較短且上揚的車尾搭配3D的LED尾燈，明白宣示著MT-09不妥協的張揚個性。</p>
		              					<p class="price"><span>1900/6HR<BR>2300/11HR<BR>2700/24HR</span></p>
		              					<p><a href="menu.php" class="btn btn-primary btn-outline-primary">READ MORE</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a  class="menu-img img mb-4" style="background-image: url(images/drink-1.jpg);"></a>
		              				<div class="text">
		              					<h3>CB150R</h3>
		              					<p>以Cafe Racer元素打造，在頭燈外型選擇較具復古氣息的圓形燈具，大燈內則採用HONDA近期相當常用的LED燈具。</p>
		              					<p class="price"><span>700/6HR<BR>900/11HR<BR>1100/24HR</span></p>
		              					<p><a href="menu.php" class="btn btn-primary btn-outline-primary">READ MORE</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a  class="menu-img img mb-4" style="background-image: url(images/drink-2.jpg);"></a>
		              				<div class="text">
		              					<h3>CB650R</h3>
		              					<p>承襲「Neo Sports Cafe」的外型，目標訴求現代街車最極致的美感與騎乘體驗，整體外型以梯型比例打造，緊湊與精緻是給人的第一印象。</p>
		              					<p class="price"><span>1900/6HR<BR>2300/11HR<BR>2700/24HR</span></p>
		              					<p><a href="menu.php" class="btn btn-primary btn-outline-primary">READ MORE</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a  class="menu-img img mb-4" style="background-image: url(images/drink-3.jpg);"></a>
		              				<div class="text">
		              					<h3>Z900RS</h3>
		              					<p>Kawasaki最新打造的Z系列夢幻逸品-Z900RS，承襲經典傳奇車款 ”Z1”，所打造出來的復古車款，除了經典的美感亦融合了現代化的工藝科技。</p>
		              					<p class="price"><span>2100/6HR<BR>2500/11HR<BR>2900/24HR</span></p>
		              					<p><a href="menu.php" class="btn btn-primary btn-outline-primary">READ MORE</a></p>
		              				</div>
		              				
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a  class="menu-img img mb-4" style="background-image: url(images/dessert-1.jpg);"></a>
		              				<div class="text">
		              					<h3>CRF150L</h3>
		              					<p>HONDA旗下由印尼分公司生產製造的「CRF150L」採用SHOWA製的倒立式前叉加上NISSIN的煞車卡鉗等，透過它那完全讓人看不出只是一台小排氣量摩托車的底盤裝置，讓騎士能享受到真正的越野騎乘樂趣。</p>
		              					<p class="price"><span>700/6HR<BR>900/11HR<BR>1100/24HR</span></p>
		              					<p><a href="menu.php" class="btn btn-primary btn-outline-primary">READ MORE</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a  class="menu-img img mb-4" style="background-image: url(images/dessert-2.jpg);"></a>
		              				<div class="text">
		              					<h3>390 Duke</h3>
		              					<p>KTM Duke車系是KTM品牌最壯大的街車家族，390 Duke的輕量畫設計具有優越的操控性以及極高的騎乘樂趣，一律採用最先進的技術， 無論你是在城市中或彎曲的山道，390 Duke保證能提供作夢也想不到的樂趣！</p>
		              					<p class="price"><span>1400/6HR<BR>1700/11HR<BR>2000/24HR</span></p>
		              					<p><a href="menu.php" class="btn btn-primary btn-outline-primary">READ MORE</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a  class="menu-img img mb-4" style="background-image: url(images/dessert-3.jpg);"></a>
		              				<div class="text">
		              					<h3>Svartpilen 401</h3>
		              					<p>🎯滑胎 Get 🎯街道 Get 🎯越野 Get
擁有Scrambler風格的黑箭401來襲
配上倍耐力Scorpion Rally STR越野胎
WP APEX懸吊、Brembo Bybre卡鉗
一鍵切換Supermoto ABS滑胎滑起來！</p>
		              					<p class="price"><span>1400/6HR<BR>1700/11HR<BR>2000/24HR</span></p>
		              					<p><a href="menu.php" class="btn btn-primary btn-outline-primary">READ MORE</a></p>
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


    	
	    <div class="container">
	      <div class="row justify-content-center mb-5">
	        
	      </div>
	    </div>
	    <div class="container-wrap">
	      <div class="row d-flex no-gutters">
	        <div class="col-lg align-self-sm-end ftco-animate">
	          
	        </div>
	        <div class="col-lg align-self-sm-end">
	          
	        </div>
	        <div class="col-lg align-self-sm-end ftco-animate">
	          
	        </div>
	        <div class="col-lg align-self-sm-end">
	          
	        </div>
	        <div class="col-lg align-self-sm-end ftco-animate">
	          
	        </div>
	      </div>
	    </div>
	  </section>

    

		
		

    <footer class="ftco-footer ftco-section img">
    	
      <div class="container">
        
        
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href=""target="_blank" >3A732008 </a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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