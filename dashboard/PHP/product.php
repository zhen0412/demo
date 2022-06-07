<?php
	include('connect/connect.php');
	$loginuser = isset($_SESSION['acc']) ? $_SESSION['acc'] :'';
	$res_title = $pdo->query("SELECT * FROM `product_category` where `type`='0' ");
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>璽燕堂</title>

<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author">

<meta name="mobile-web-app-capable" content="yes">

<link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
<link rel="apple-touch-icon" href="images/icon.png" />
<link rel="apple-touch-icon-precomposed" href="images/icon.png">

<link href="css/style.css" rel="stylesheet">
<link href="css/pc_style.css" rel="stylesheet">
<link href="css/mobile_style.css" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://use.fontawesome.com/releases/v5.0.2/css/all.css" rel="stylesheet">
<script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>

<link href="css/hover.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/swiper.css" rel="stylesheet">

<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap/bootstrap-reboot.css" rel="stylesheet">

</head>
<body>

<?php
			 include("lightbox.php"); 
?>

<div class="wrapper">
	<div class="web-box">
		<?php include("header.php"); ?>
		<div class="page-content">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb justify-content-end p-2 mb-0 bg-light">
					<li class="breadcrumb-item"><a href="index.php">首頁</a></li>
					<li class="breadcrumb-item active" aria-current="page">商品列表</li>
				</ol>
			</nav>
			<div class="w-100">
				<h2 class="text-center text-white binner-bg-color mb-3 p-3 content-shadow">商品列表</h2>
			</div>
			<div class="container-fluid">
				<div class="row slider-box">
				    <div class="product-slider swiper-container">
						<div class="swiper-wrapper">
							<div class="swiper-slide list-active" data-sort="all">全部</div>
							<?php while($row_title = $res_title->fetch()){?>
									<div class="swiper-slide" data-sort="<?=$row_title['id']?>"><?=$row_title['title']?></div>
								<?php }?>
						</div>
					</div>
					<div class="swiper-right-btn swiper-button-next product-next">
						<i class="fa fa-chevron-right" aria-hidden="true"></i>
					</div>
					<div class="swiper-left-btn swiper-button-prev product-prev">
						<i class="fa fa-chevron-left" aria-hidden="true"></i>
					</div>
				</div>
		    	<div class="product-box row mt-4 text-center">
					<?php
							$res = $pdo->query("SELECT * FROM `product` where `product_type`='0' ORDER BY `id`");
						while($row = $res->fetch()){
								$row_once_img = explode(",",$row['product_img']);
					?>		
			    	<div class="col-12 col-sm-6 col-md-4 col-lg-3 pro-list <?=$row['product_classify']?> mb-5">
			    		<div class="pro-image-box">
			    			<a href="proitem.php?pid=<?=$row['id']?>">
				    			<img src="backstage/uploads/product/<?=$row['product_img']?>" class="scale-hover img-fluid mx-auto">
					    	</a>
			    		</div>
				    	<h4><?=$row['product_title']?></h4>
				    	<span class="text-center d-block text-secondary font-weight-bold"><?=$row['introduce_1']?></span>
				    	<del class="pro-price">
							售價<span><?=$row['price']?></span>元/<span>盒</span>
						</del>
						<div class="pro-price">
							特價
							<span><?=$row['on_sale_price']?></span>元/<span>盒</span>
						</div>
			    	</div>
			    
				<?php 
					} 
				?>  
			</div>
		</div>
	    <footer>
			<?php include("footer.php"); ?>
		</footer>
	</div>
</div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
	crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="js/script.js"></script>
<script src="js/member.js"></script>

<script src="js/swiper.min.js"></script>
<script src="js/swiper.animate1.0.2.min.js"></script>
</html>