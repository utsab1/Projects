
<?php
session_start();
$msg='';
 include 'app/call.php';
$userInfo= getAllUserById($conn,$_SESSION['user']['id']);
$productInfo= getAllProduct($conn);
// $guru= getAllGuru($conn);
?>
<!-- End of login function -->


<!-- Signup function -->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Pooja samagri</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Grocery Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="offcanvas.css" rel="stylesheet">
		<style>
		.popover
		{
		    width: 100%;
		    max-width: 1000px;
		}
		</style>

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!--pop-up-box-->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!--//pop-up-box-->
	<!-- price range -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<style type="text/css">


.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
	</style>
</head>

<body>
	<!-- top-header -->
	<div class="header-most-top">
		<p>We Offer Zone Top Deals & Discounts</p>
	</div>
	<!-- //top-header -->
	<!-- header-bot-->
	<div class="header-bot">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4 logo_agile">
				<h1>
					<a href="loggedindex.php">
						<img src="images/logo3.png" alt="poojasamagri">
					</a>
				</h1>
			</div>
			<!-- header-bot -->
			<div class="col-md-8 header">
				<!-- header lists -->
				<ul>
					
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal1">
							<span class="fa fa-truck" aria-hidden="true"></span>Track Order</a>
					</li>
					<li>
						<span class="fa fa-phone" aria-hidden="true"></span> 9860077995
					</li>
					<li>
						<div class="dropdown">
							<div>
							<a class="dropbtn"><?php echo $userInfo['user_fname']. " ".$userInfo['user_lname'];?>
							<span class="fa fa-arrow-down" aria-hidden="true"></span>
						</a>
					</div>
						<div class="dropdown-content">
							<a href="profile.php"><span class="fa fa-smile-o" aria-hidden="true"></span>Manage My Account</a>
							<a href="logout.php"><span class="fa fa-sign-out" aria-hidden="true">Logout</a>
							<a href="#"><span class="fa fa-shopping-basket" ></span>My Orders</a>
						</div>
				</div> 
			</li>
			<li><a href="#"><span class="fa fa-window-close" aria-hidden="true"></span>My Returns</a></li>
			<li>
				
				
                <a id="cart-popover" class="btn" data-placement="bottom" title="Shopping Cart">
                  <span class="glyphicon glyphicon-shopping-cart"></span>
                  <span class="badge"></span>
                  <span class="total_price">0.00</span>
                </a>
              </li>
           
      	</ul>
				<!-- //header lists -->
				<!-- search -->
				<div class="agileits_search">
					<form action="#" method="post">
						<input name="Search" type="search" placeholder="How can we help you today?" required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<span class="fa fa-search" aria-hidden="true"> </span>
						</button>
					</form>
				</div>
				<!-- //search -->
				<!-- cart details -->
				
		
				<!-- //cart details -->
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- Button trigger modal(shop-locator) -->
<div id="small-dialog1" class="mfp-hide">
		<div class="dropdown-menu">
  <a class="dropdown-item" href="#">Regular link</a>
  <a class="dropdown-item active" href="#">Active link</a>
  <a class="dropdown-item" href="#">Another link</a>
</div>
	</div>
	<!-- //shop locator (popup) -->

			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- //header-bot -->
	<!-- navigation -->

			
	<div class="ban-top">
		<div class="container">
			<div class="agileits-navi_search">
				<form action="#" method="post">
						<select  name="product_category" id="agileinfo-nav_search"  value="">
                                                    <option >Choose Product Category</option>
                                                   <?php $Category= getAllProduct($conn);
                              
                                              ?>
                                              <option value=""></option>
                                        <option value="agarbatti">Agarbatti&Dhoop</option>
                                        <option value="batti">Diyo&Batti</option>
                                        <option value="clothes">Clothes And Shoes</option>
                                        <option value="untensils">Untensils</option>
                                        <option value="pujasamagri">Pujasamagri</option>
                                        <option value="jwelery">Jwelery</option>
                                        <option value="statue">God Statue</option>
                                        <option value="oils">Oils</option>
                                        <option value="others">Others</option>
                                                </select>
				</form>
			</div>
			<div class="agileits-navi_search">
				<form action="#" method="post">
						<select  name="product_for" id="agileinfo-nav_search"  value="">
                                                    <option > Product For</option>
                                                   <?php $Category= getAllProduct($conn);

                              
                                              ?>

                                             <option value=""></option>
                                        <option value="lakhbatti">Lakhbatti</option>
                                        <option value="hawan">Hawan</option>
                                        <option value="satyanarayanpuja">SatyaNarayanPuja</option>
                                        <option value="birthdaypuja">BirthdayPuja</option>
                                        <option value="pitrikarya">Pitrikarya</option>
                                        <option value="rudri">Rudri</option>
                                        <option value="laxmipuja">LaxmiPuja</option>
                                        <option value="durgapuja">DurgaPuja</option>
                                        <option value="aarati">Aarati</option>
                                        <option value="saptaha">Saptaha</option>
                                        <option value="swayambunathpuja">SwayambunathPuja</option>
                                        <option value="chhath">Chhath</option>
                                        <option value="santipuja">SantiPuja</option>
                                                </select>
				</form>
			</div>
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
					<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
							
							<ul class="nav navbar-nav menu__list">
								<li class="active">
									<a class="nav-stylehead" href="loggedindex.php">Home
										<span class="sr-only">(current)</span>
									</a>
								</li>

								<li class="">
									<a class="nav-stylehead" href="about.php">About Us</a>
								</li>

								<li class="dropdown">
									<a class="nav-stylehead dropdown-toggle" href="#" data-toggle="dropdown">Pages
										<b class="caret"></b>
									</a>
									<ul class="dropdown-menu agile_short_dropdown">
										<li>
											<a href="#">Web Icons</a>
										</li>
										<li>
											<a href="#">Typography</a>
										</li>
									</ul>
								</li>
								<li class="">
									<a class="nav-stylehead" href="contact.php">Contact</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
