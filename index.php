<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//for-mobile-apps -->

<!--Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!--//Custom Theme files -->
<!--js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--//js-->
<!--cart-->
<script src="js/simpleCart.min.js"></script>
<!--cart-->
<!--web-fonts-->
<link href='http://fonts.useso.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'><link href='http://fonts.useso.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Fascinate' rel='stylesheet' type='text/css'>
<!--web-fonts-->
<!--animation-effect-->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
	<script>
	 new WOW().init();
	</script>
<!--//animation-effect-->
<!--start-smooth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<script type="text/javascript">
			var car = [];
			function setCookie(c_name,value,expiredays)
			{
				car.push(value);
				alert("加入成功！");
				var exdate=new Date();
				exdate.setDate(exdate.getDate()+expiredays);
				//alert(escape(car));
				document.cookie=c_name+ "=" +escape(car)+((expiredays==null) ? "" : ";expires="+exdate.toGMTString());
			}

			function getCookie(c_name)
			{
			if (document.cookie.length>0)
			  {
			  c_start=document.cookie.indexOf(c_name + "="); //indexOf() 方法返回某个指定的字符串值在字符串中首次出现的位置。
			  if (c_start!=-1)
			    { 
			    c_start=c_start + c_name.length+1 ;
			    c_end=document.cookie.indexOf(";",c_start);
			    if (c_end==-1) c_end=document.cookie.length
			    return unescape(document.cookie.substring(c_start,c_end));
			    } 
			  }
			return "";
			}
		</script>
<!--//end-smooth-scrolling-->
</head>
<body>
	<!--header-->
	<div class="header">
		<div class="top-header navbar navbar-default"><!--header-one-->
			<div class="container">
				<div class="nav navbar-nav wow fadeInLeft animated" data-wow-delay=".5s">
					<?php 
						if(!isset($_SESSION['useremail'])){
							echo "<p>Welcome to Modern Shoppe <a href='register.php'>Register </a> Or <a href='signin.php'>Sign In </a></p>";
						}else{
							echo "<p>Welcome to Modern Shoppe ".$_SESSION['useremail']." <a href='logout.php'>LogOut </a></p>";
						}
					 ?>
					
				</div>
				<div class="nav navbar-nav navbar-right social-icons wow fadeInRight animated" data-wow-delay=".5s">
					<ul>
						<li><a href="#"> </a></li>
						<li><a href="#" class="pin"> </a></li>
						<li><a href="#" class="in"> </a></li>
						<li><a href="#" class="be"> </a></li>
						<li><a href="#" class="you"> </a></li>
						<li><a href="#" class="vimeo"> </a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="header-two navbar navbar-default"><!--header-two-->
			<div class="container">
				<div class="nav navbar-nav header-two-left">
					<ul>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 892</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">mail@example.com</a></li>			
					</ul>
				</div>
				<div class="nav navbar-nav logo wow zoomIn animated" data-wow-delay=".7s">
					<h1><a href="index.php">Modern <b>Shoppe</b><span class="tag">Everything for Kids world </span> </a></h1>
				</div>
				<div class="nav navbar-nav navbar-right header-two-right">
					<div class="header-right my-account">
						<a href="contact.html"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> CONTACT US</a>						
					</div>
					<div class="header-right cart">
						<a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
						<h4><a href="checkout.php">
								<span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>) 
						</a></h4>
						<div class="cart-box">
							<p><a href="addCart.php?emptycart=1" class="simpleCart_empty" onClick="javascript:;">Empty cart</a></p>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="top-nav navbar navbar-default"><!--header-three-->
			<div class="container">
				<nav class="navbar" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!--navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav top-nav-info">
							<li><a href="index.php" class="active">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Baby<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column multi-column1">
									<div class="row">
										<div class="col-sm-4 menu-grids menulist1">
											<h4>Bath & Care</h4>
											<ul class="multi-column-dropdown ">
												<li><a class="list" href="products.php">Diapering</a></li>
												<li><a class="list" href="products.php">Baby Wipes</a></li>
												<li><a class="list" href="products.php">Baby Soaps</a></li>
												<li><a class="list" href="products.php">Lotions & Oils </a></li>
												<li><a class="list" href="products.php">Powders</a></li>
												<li><a class="list" href="products.php">Shampoos</a></li>
											</ul>
											<ul class="multi-column-dropdown">
												<li><a class="list" href="products.php">Body Wash</a></li>
												<li><a class="list" href="products.php">Cloth Diapers</a></li>
												<li><a class="list" href="products.php">Baby Nappies</a></li>
												<li><a class="list" href="products.php">Medical Care</a></li>
												<li><a class="list" href="products.php">Grooming</a></li>
												<li><h6><a class="list" href="products.php">Combo Packs</a></h6></li>
											</ul>
										</div>																		
										<div class="col-sm-2 menu-grids">
											<h4>Baby Clothes</h4>
											<ul class="multi-column-dropdown">
												<li><a class="list" href="products.php">Onesies & Rompers</a></li>
												<li><a class="list" href="products.php">Frocks</a></li>
												<li><a class="list" href="products.php">Socks & Tights</a></li>
												<li><a class="list" href="products.php">Sweaters & Caps</a></li>
												<li><a class="list" href="products.php">Night Wear</a></li>
												<li><a class="list" href="products.php">Quilts & Wraps</a></li>
											</ul>
										</div>
										<div class="col-sm-3 menu-grids">
											<ul class="multi-column-dropdown">
												<li><a class="list" href="products.php">Blankets</a></li>
												<li><a class="list" href="products.php">Gloves & Mittens</a></li>
												<h4>Shop by Age</h4>
												<li><a class="list" href="products.php">New Born (0 - 5 M)</a></li>
												<li><a class="list" href="products.php">5 - 10 Months</a></li>
												<li><a class="list" href="products.php">10 - 15 Months</a></li>
												<li><a class="list" href="products.php">15 Months Above</a></li>
											</ul>
										</div>
										<div class="col-sm-3 menu-grids">
											<ul class="multi-column-dropdown">
												<li><h6><a class="list" href="products.php">Feeding & Nursing</a></h6></li>
												<h4>Baby Gear</h4>
												<li><a class="list" href="products.php">Baby Walkers</a></li>
												<li><a class="list" href="products.php">Strollers</a></li>
												<li><a class="list" href="products.php">Prams & Toys</a></li>
												<li><a class="list" href="products.php">Cribs & Cradles</a></li>
												<li><a class="list" href="products.php">Booster Seats</a></li>
											</ul>
										</div>
										<div class="clearfix"> </div>
									</div>
								</ul>
							</li>
							<li class="dropdown grid">
								<a href="#" class="dropdown-toggle list1" data-toggle="dropdown">Kids<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column multi-column2">
									<div class="row">
										<div class="col-sm-3 menu-grids">
											<h4>New Arrivals</h4>
											<ul class="multi-column-dropdown">
												<li><a class="list" href="products.php">Topwear</a></li>
												<li><a class="list" href="products.php">Bottomwear</a></li>
												<li><a class="list" href="products.php">Innerwear</a></li>
												<li><a class="list" href="products.php">Nightwear</a></li>
												<li><a class="list" href="products.php">Swimwear</a></li>
												<li><a class="list" href="products.php">Jumpers</a></li>
											</ul>
										</div>																		
										<div class="col-sm-3 menu-grids">
											<h4>Boys</h4>
											<ul class="multi-column-dropdown">
												<li><a class="list" href="products.php">Jeans</a></li>
												<li><a class="list" href="products.php">Shirts</a></li>
												<li><a class="list" href="products.php">T-shirts</a></li>
												<li><a class="list" href="products.php">Dhoti Kurta Sets</a></li>
												<li><a class="list" href="products.php">Winter wear</a></li>
												<li><a class="list" href="products.php">Party Wear</a></li>
											</ul>
										</div>
										<div class="col-sm-3 menu-grids">
											<h4>Girls</h4>
											<ul class="multi-column-dropdown">
												<li><a class="list" href="products.php">Tops</a></li>
												<li><a class="list" href="products.php">Leggings</a></li>
												<li><a class="list" href="products.php">Dresses </a></li>
												<li><a class="list" href="products.php">Skirts</a></li>
												<li><a class="list" href="products.php">Casual Dresses</a></li>
												<li><a class="list" href="products.php">Capris & 3/4ths</a></li>
											</ul>
										</div>
										<div class="col-sm-3 menu-grids new-add2">
											<a href="products.php">
												<h6>Kids Special</h6>
												<img src="images/img1.jpg" alt="">
											</a>
										</div>
										<div class="clearfix"> </div>
									</div>
								</ul>
							</li>
							<li class="dropdown grid">
								<a href="#" class="dropdown-toggle list1" data-toggle="dropdown">Accessories<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column menu-two multi-column3">
									<div class="row">
										<div class="col-sm-4 menu-grids">
											<ul class="multi-column-dropdown">
												<li><a class="list" href="products.php">Jewellery</a></li>
												<li><a class="list" href="products.php">Hair bands & Clips</a></li>
												<li><a class="list" href="products.php">Bangles </a></li>
												<li><a class="list" href="products.php">Caps & Belts</a></li>
												<li><a class="list" href="products.php">Rain wear</a></li>
												<li><a class="list" href="products.php">Bags</a></li>
											</ul>
										</div>
										<div class="col-sm-8 menu-grids">
											<a href="products.php">
												<div class="new-add">
													<h5>30% OFF <br> Today Only</h5>
												</div>	
											</a>
										</div>	
										<div class="clearfix"> </div>
									</div>	
								</ul>
							</li>				
							<li class="dropdown grid">
								<a href="#" class="dropdown-toggle list1" data-toggle="dropdown">Toys <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column multi-column4">
									<div class="row">
										<div class="col-sm-4 menu-grids menulist1">
											<h4>BABY</h4>
											<ul class="multi-column-dropdown ">
												<li><a class="list" href="products.php">Rockers</a></li>
												<li><a class="list" href="products.php">Rattles</a></li>
												<li><a class="list" href="products.php">Stroller Toys</a></li>
												<li><a class="list" href="products.php">Musical Toys </a></li>
												<li><a class="list" href="products.php">Doll Houses</a></li>
												<li><a class="list" href="products.php">Play Sets</a></li>
											</ul>
											<ul class="multi-column-dropdown">
												<li><a class="list" href="products.php">Toys Dolls</a></li>
												<li><a class="list" href="products.php">Pacifiers</a></li>
												<li><a class="list" href="products.php">Building Sets</a></li>
												<li><a class="list" href="products.php">Bath Toys</a></li>
												<li><a class="list" href="products.php">Soft Toys</a></li>
												<li><h6><a class="list" href="products.php">Special Off</a></h6></li>
											</ul>
										</div>																		
										<div class="col-sm-2 menu-grids">
											<h4>Pretend Play</h4>
											<ul class="multi-column-dropdown">
												<li><h6><a class="list" href="products.php">Video Games</a></h6></li>
												<li><a class="list" href="products.php">Kitchen Sets</a></li>
												<li><a class="list" href="products.php">Sand Toys</a></li>
												<li><a class="list" href="products.php">Tool Sets</a></li>
												<li><a class="list" href="products.php">Bath Toys</a></li>
												<li><a class="list" href="products.php">Medical Set</a></li>
											</ul>
										</div>
										<div class="col-sm-2 menu-grids">
											<h4>Outdoor</h4>
											<ul class="multi-column-dropdown">
												<li><a class="list" href="products.php">Swimming</a></li>
												<li><a class="list" href="products.php">Rideons </a></li>
												<li><a class="list" href="products.php">Scooters</a></li>
												<li><a class="list" href="products.php">Remote Control</a></li>
												<li><a class="list" href="products.php">Animals</a></li>
												<li><a class="list" href="products.php">Make up</a></li>
											</ul>
										</div>
										<div class="col-sm-4 menu-grids">
											<a href="products.php">
												<div class="new-add">
													<h5>30% OFF <br> Today Only</h5>
												</div>
											</a>	
										</div>
										<div class="clearfix"> </div>
									</div>
								</ul>
							</li>
							<li><a href="codes.html">Special Offers</a></li>
						</ul> 
						<div class="clearfix"> </div>
						<!--//navbar-collapse-->
						<header class="cd-main-header">
							<ul class="cd-header-buttons">
								<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
							</ul> <!-- cd-header-buttons -->
						</header>
					</div>
					<!--//navbar-header-->
				</nav>
				<div id="cd-search" class="cd-search">
					<form>
						<input type="search" placeholder="Search...">
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--//header-->
	<!--banner-->
	<div class="banner">
		<div class="container">
			<div class="banner-text">			
				<div class="col-sm-5 banner-left wow fadeInLeft animated" data-wow-delay=".5s">			
					<h2>On Entire Fashion range</h2>
					<h3>Coming Soon </h3>
					<h4>Our New Designs</h4>
					<div class="count main-row">
						<ul id="example">
							<li><span class="hours">00</span><p class="hours_text">Hours</p></li>
							<li><span class="minutes">00</span><p class="minutes_text">Minutes</p></li>
							<li><span class="seconds">00</span><p class="seconds_text">Seconds</p></li>
						</ul>
							<div class="clearfix"> </div>
							<script type="text/javascript" src="js/jquery.countdown.min.js"></script>
							<script type="text/javascript">
								$('#example').countdown({
									date: '12/24/2020 15:59:59',
									offset: -8,
									day: 'Day',
									days: 'Days'
								}, function () {
									alert('Done!');
								});
							</script>
					</div>

				</div>
				<div class="col-sm-7 banner-right wow fadeInRight animated" data-wow-delay=".5s">			
					<section class="slider grid">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<h4>-30%</h4>
									<img src="images/b1.png" alt="">
								</li>
								<li>
									<h4>-25%</h4>
									<img src="images/b2.png" alt="">
								</li>
								<li>
									<h4>-32%</h4>
									<img src="images/b3.png" alt="">
								</li>
							</ul>
						</div>
					</section>
					<!--FlexSlider-->
					<script defer src="js/jquery.flexslider.js"></script>
					<script type="text/javascript">
						$(window).load(function(){
						  $('.flexslider').flexslider({
							animation: "pagination",
							start: function(slider){
							  $('body').removeClass('loading');
							}
						  });
						});
					</script>
					<!--End-slider-script-->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>			
	<!--//banner-->
	<!--new-->
	<?php 
		include 'config.php';
  
	    $conn = mysqli_connect($HOST,$USER,$PASSWORD,$DB);
	    if (!$conn)
	    {
	      die('Could not connect: ' . mysqli_connect_error());
	    }
	   
	    $sql = "select * from 31301105_product ORDER BY `Id`";
	    $result = mysqli_query($conn,$sql);
	    $products = array();
	    while ($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {
	    	$products[] = $row;
	    }

    	mysqli_close($conn);
	?>

	<div class="new">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
				<h3 class="title">New <span>Arrivals</span></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur </p>
			</div>
			<div class="new-info">
				<div class="col-md-3 new-grid simpleCart_shelfItem wow flipInY animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="single.html"><img src="images/<?php echo $products[0]['img']; ?>" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a class="item_add" href="addCart.php?id=<?php echo $products[0]['Id']; ?>" > Add to cart</a></li>
								<li><a href="single.html">Quick View </a></li>
								<li><a href="products.php">Show Details </a></li>
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a class="name" href="single.html"><?php echo $products[0]['name']; ?></a></h5>
						<div class="rating">
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span>☆</span>
						</div>	
						<div class="ofr">
							<p class="pric1"><del><?php echo $products[0]['oldprice']; ?></del></p>
							<p><span class="item_price"><?php echo $products[0]['newprice']; ?></span></p>
						</div>
					</div>
				</div>
				<div class="col-md-3 new-grid new-mdl simpleCart_shelfItem wow flipInY animated" data-wow-delay=".7s">
					<div class="new-top">
						<a href="single.html"><img src="images/<?php echo $products[1]['img']; ?>" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a class="item_add" href="addCart.php?id=<?php echo $products[1]['Id'];?>" > Add to cart</a></li>
								<li><a href="single.html">Quick View </a></li>
								<li><a href="products.php">Show Details </a></li>
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a class="name" href="single.html"><?php echo $products[1]['name'] ?></a></h5>
						<div class="rating">
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span>☆</span>
						</div>	
						<div class="ofr">
							<p><span class="item_price"><?php echo $products[1]['newprice'] ?></span></p>
						</div>
					</div>
				</div>
				<div class="col-md-3 new-grid new-mdl1 simpleCart_shelfItem wow flipInY animated" data-wow-delay=".9s">
					<div class="new-top">
						<a href="single.html"><img src="images/<?php echo $products[2]['img']; ?>" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a class="item_add" href="addCart.php?id=<?php echo $products[2]['Id'];?>" > Add to cart</a></li>
								<li><a href="single.html">Quick View </a></li>
								<li><a href="products.php">Show Details </a></li>
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a class="name" href="single.html"><?php echo $products[2]['name'] ?> </a></h5>
						<div class="rating">
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span>☆</span>
						</div>	
						<div class="ofr">
							<p><span class="item_price"><?php echo $products[2]['newprice'] ?></span></p>
						</div>
					</div>
				</div>
				<div class="col-md-3 new-grid simpleCart_shelfItem wow flipInY animated" data-wow-delay="1.1s">
					<div class="new-top">
						<a href="single.html"><img src="images/<?php echo $products[3]['img']; ?>" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a class="item_add" href="addCart.php?id=<?php echo $products[3]['Id'];?>" > Add to cart</a></li>
								<li><a href="single.html">Quick View </a></li>
								<li><a href="products.php">Show Details </a></li>
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a class="name" href="single.html"><?php echo $products[3]['name'] ?> </a></h5>
						<div class="rating">
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span>☆</span>
						</div>	
						<div class="ofr">
							<p class="pric1"><del><?php echo $products[3]['oldprice'] ?></del></p>
							<p><span class="item_price"><?php echo $products[3]['newprice'] ?></span></p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>		
	<!--//new-->
	<!--gallery-->
	<div class="gallery">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
				<h3 class="title">Popular<span> Products</span></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur </p>
			</div>
			<div class="gallery-info">
				<div class="col-md-3 gallery-grid wow flipInY animated" data-wow-delay=".5s">
					<a href="products.php"><img src="images/<?php echo $products[4]['img']; ?>" class="img-responsive" alt=""/></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.html"><?php echo $products[4]['name'] ?> </a></h5>
						<p><span class="item_price"><?php echo $products[4]['newprice'] ?></span></p>
						<h4 class="sizes">Sizes: <a href="#"> s</a> - <a href="#">m</a> - <a href="#">l</a> - <a href="#">xl</a> </h4>
						<ul>
							<li><a href="#"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
							<li><a class="item_add" href="addCart.php?id=<?php echo $products[4]['Id'];?>" ><span class="glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>
							<li><a href="#"><span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 gallery-grid gallery-grid1 wow flipInY animated" data-wow-delay=".7s">
					<a href="products.php"><img src="images/<?php echo $products[5]['img']; ?>" class="img-responsive" alt=""/></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.html"><?php echo $products[5]['name'] ?></a></h5>
						<p><span class="item_price"><?php echo $products[5]['newprice'] ?></span></p>
						<h4 class="sizes">Sizes: <a href="#"> s</a> - <a href="#">m</a> - <a href="#">l</a> - <a href="#">xl</a> </h4>
						<ul>
							<li><a href="#"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
							<li><a class="item_add" href="addCart.php?id=<?php echo $products[5]['Id'];?>" ><span class="glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>
							<li><a href="#"><span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 gallery-grid gallery-grid2 wow flipInY animated" data-wow-delay=".9s">
					<a href="products.php"><img src="images/<?php echo $products[6]['img']; ?>" class="img-responsive" alt=""/></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.html"><?php echo $products[6]['name'] ?></a></h5>
						<p><span class="item_price"><?php echo $products[6]['newprice'] ?></span></p>
						<h4 class="sizes">Sizes: <a href="#"> s</a> - <a href="#">m</a> - <a href="#">l</a> - <a href="#">xl</a> </h4>
						<ul>
							<li><a href="#"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
							<li><a class="item_add" href="addCart.php?id=<?php echo $products[6]['Id'];?>" ><span class="glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>
							<li><a href="#"><span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 gallery-grid wow flipInY animated" data-wow-delay="1.1s">
					<a href="products.php"><img src="images/<?php echo $products[7]['img']; ?>" class="img-responsive" alt=""/></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.html"><?php echo $products[7]['name'] ?></a></h5>
						<p><span class="item_price"><?php echo $products[7]['newprice'] ?></span></p>
						<h4 class="sizes">Sizes: <a href="#"> s</a> - <a href="#">m</a> - <a href="#">l</a> - <a href="#">xl</a> </h4>
						<ul>
							<li><a href="#"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
							<li><a class="item_add" href="addCart.php?id=<?php echo $products[7]['Id'];?>" ><span class="glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>
							<li><a href="#"><span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a></li>
						</ul>
					</div>
				</div>
				
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//gallery-->
	<!--trend-->
	<div class="trend wow zoomIn animated" data-wow-delay=".5s">
		<div class="container">
			<div class="trend-info">
				<section class="slider grid">
					<div class="flexslider trend-slider">
						<ul class="slides">
							<li>
								<div class="col-md-5 trend-left">
									<img src="images/t1.png" alt=""/>
								</div>
								<div class="col-md-7 trend-right">
									<h4>TOP 10 TRENDS <span>FOR YOU</span></h4>
									<h5>Flat 20% OFF</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus, justo ac volutpat vestibulum, dolor massa pharetra nunc, nec facilisis lectus nulla a tortor. Duis ultrices nunc a nisi malesuada suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam eu bibendum felis. Sed viverra dapibus tincidunt.</p>
								</div>
								<div class="clearfix"></div>
							</li>
							<li>
								<div class="col-md-5 trend-left">
									<img src="images/t2.png" alt=""/>
								</div>
								<div class="col-md-7 trend-right">
									<h4>TOP 10 TRENDS <span>FOR YOU</span></h4>
									<h5>Flat 20% OFF</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus, justo ac volutpat vestibulum, dolor massa pharetra nunc, nec facilisis lectus nulla a tortor. Duis ultrices nunc a nisi malesuada suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam eu bibendum felis. Sed viverra dapibus tincidunt.</p>
								</div>
								<div class="clearfix"></div>
							</li>
							<li>
								<div class="col-md-5 trend-left">
									<img src="images/t3.png" alt=""/>
								</div>
								<div class="col-md-7 trend-right">
									<h4>TOP 10 TRENDS <span>FOR YOU</span></h4>
									<h5>Flat 20% OFF</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus, justo ac volutpat vestibulum, dolor massa pharetra nunc, nec facilisis lectus nulla a tortor. Duis ultrices nunc a nisi malesuada suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam eu bibendum felis. Sed viverra dapibus tincidunt.</p>
								</div>
								<div class="clearfix"></div>
							</li>
							<li>
								<div class="col-md-5 trend-left">
									<img src="images/t4.png" alt=""/>
								</div>
								<div class="col-md-7 trend-right">
									<h4>TOP 10 TRENDS <span>FOR YOU</span></h4>
									<h5>Flat 20% OFF</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus, justo ac volutpat vestibulum, dolor massa pharetra nunc, nec facilisis lectus nulla a tortor. Duis ultrices nunc a nisi malesuada suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam eu bibendum felis. Sed viverra dapibus tincidunt.</p>
								</div>
								<div class="clearfix"></div>
							</li>
						</ul>
					</div>
				</section>
			</div>
		</div>
	</div>
	<!--//trend-->
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-info">
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".5s">
					<h4 class="footer-logo"><a href="index.php">Modern <b>Shoppe</b> <span class="tag">Everything for Kids world </span> </a></h4>
					<p>Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
				</div>
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".7s">
					<h3>Popular</h3>
					<ul>
						<li><a href="about.html">About Us</a></li>
						<li><a href="products.php">new</a></li>
						<li><a href="contact.html">Contact Us</a></li>
						<li><a href="faq.html">FAQ</a></li>
						<li><a href="checkout.php">Wishlist</a></li>
					</ul>
				</div>
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".9s">
					<h3>Subscribe</h3>
					<p>Sign Up Now For More Information <br> About Our Company </p>
					<form>
						<input type="text" placeholder="Enter Your Email" required="">
						<input type="submit" value="Go">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//footer-->		
	<!--search jQuery-->
	<script src="js/main.js"></script>
	<!--//search jQuery-->
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!--//smooth-scrolling-of-move-up-->
	<!--Bootstrap core JavaScript
    ================================================== -->
    <!--Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>