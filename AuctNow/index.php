<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>AuctNow</title>
    
        <!--Favicon-->
        <link rel="icon" href="img/favicon.png" type="image/png">
    
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
        <!-- Google Font End -->
    
        <!-- Css Styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
        <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
        <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
		<!-- Css Styles End -->        
		
		<!-- Timer Js -->
		
		<!-- Timer Js End-->
    </head>
    <body>
		<!-- Page Preloder -->
		<div id="preloder">
			<div class="loader"></div>
		</div>
		<!-- Page Preloader End -->

		<!-- Offcanvas Menu Begin -->
		<div class="offcanvas-menu-overlay"></div>
		<div class="offcanvas-menu-wrapper">
			<div class="offcanvas__close">+</div>
			<ul class="offcanvas__widget">
				<li><span class="icon_search search-switch"></span></li>
			</ul>
			<div class="offcanvas__logo">
				<a href="index.php"><img src="img/logo.png" alt=""></a>
			</div>
			<div id="mobile-menu-wrap"></div>
		</div>
		<!-- Offcanvas Menu End -->

		<!-- Header Section Begin -->
		<header class="header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-3 col-lg-2">
						<div class="header__logo">
							<a href="index.php"><img src="img/logo.png" alt="AuctNow Logo" style="max-width: 200px; max-height: 50px;"></a>
						</div>
					</div>
					<div class="col-xl-6 col-lg-7">
						<nav class="header__menu">
							<ul>
								<li class="active"><a href="index.php">Home</a></li>
								<li class="in" id="header_1"><a href="create_auction.php">Create Auction</a></li>
								<li class="in" id="header_2"><a href="account.php"> My Account</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="faq.php">FAQ</a></li>
								<li id="header_4"><a href="signin.php">Signin/Signup</a></li>
								<li class="in" id="header_3"><a href="signout.php">Signout</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<div class="canvas__open">
					<i class="fa fa-bars"></i>
				</div>
			</div>
		</header>
		<!-- Header Section End -->

		<!-- Breadcrumb Begin -->
		<div class="breadcrumb-option">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumb__links">
							<a href="index.php"><i class="fa fa-home"></i> Home</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Breadcrumb End -->

		<!-- Product Section Begin -->
		<section class="product spad">
			<div class="container">
				<div class="row">
					<!-- start php loop -->
					

					<?php 
						$conn = mysqli_connect("localhost","root","","auctnow");
						$sql = "select * from product where prod_status=1";
						$res = mysqli_query( $conn, $sql);
						$newtime = time() + (4.5 * 60 * 60);
						$curr_date = date('Y-m-d H:i:s', $newtime); 
						while ($row = mysqli_fetch_assoc($res)) {
							if ($row['prod_end_date'] <= $curr_date) {
								$sql = "update product set prod_status=0 where prod_id='".$row['prod_id']."'";
								$res1 = mysqli_query( $conn, $sql);
								if ($row['prod_highest_bid'] != 0) {
									$sql = "select * from user where user_email ='".$row['prod_highest_bidder']."'";
									$res1 = mysqli_query( $conn, $sql);
									while ($row1 = mysqli_fetch_assoc( $res1)) {
										$temp_bal = $row1['user_temp_balance'] - $row['prod_highest_bid'];
										$sql = "update user set user_temp_balance='".$temp_bal."' where user_email='".$row['prod_highest_bidder']."'";
										$res2 = mysqli_query( $conn, $sql);
									}
								}
							}
							else {
					?>
						<div class="col-lg-3 col-md-4 col-sm-6 mix women">
							<div class="product__item">
								<div class="product__item__pic set-bg" data-setbg="uploads/<?php echo $row['img1'] ;?>">
									<ul class="product__hover">
										<li><a href="uploads/<?php echo $row['img1'] ;?>" class="image-popup"><span class="arrow_expand"></span></a></li>
									</ul>
								</div>
								<div class="product__item__text">
									<h6><a href="product.php?prod_id=<?php echo $row['prod_id'] ;?>"><?php echo $row['prod_name'] ;?></a></h6>
								<?php 
									if ($row['prod_highest_bid'] == 0) {
								?>
									<div class="product__price">$ <?php echo $row['prod_base_price'] ;?></div>
								<?php
									}
									else {
									?>
									<div class="product__price">$ <?php echo $row['prod_highest_bid'] ;?></div>	
									<?php	
									}
								?>					
									<h6>Ends in:</h6> 
									<p id="time_counter<?php echo $row['prod_id']; ?>" on="timerChange('<?php echo $row['prod_end_date'] ?>', '<?php echo $count; ?>')"></p> 						
		
									<div class="product__details__button">
										<a href="product.php?prod_id=<?php echo $row['prod_id'] ;?>" class="cart-btn"><span class="icon_bag_alt"></span> Bid</a>
									</div>
								
								</div>
							</div>
						</div>

					<?php
						}
					}
					?>
					
					<!-- end php loop -->
				</div>
			</div>
		</section>
		<!-- Product Section End -->	
		
	    <!-- Footer Section Begin -->
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-7">
						<div class="footer__about">
							<div class="footer__logo">
								<a href="index.php"><img src="img/logo.png" alt="AuctNow Logo" height="30"></a>
							</div>
							<p>The bidder is destined for the bid, where are you?</p>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-5">
						<div class="footer__widget">
							<h6>Quick links</h6>
							<ul>
								<li><a href="index,php">Home</a></li>
								<li class="in" id="footer_1"><a href="create_auction.php">Create Auction</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="faq.php">FAQ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-4">
						<div class="footer__widget">
							<h6>Account</h6>
							<ul>
								<li class="in" id="footer_2"><a href="account.php">My Account</a></li>
								<li><p></p></li>
								<li class="out" id="footer_4"><a href="signin.php">Signin/Signup</a></li>
								<li class="in" id="footer_3"><a href="signout.php">Signout</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- Footer Section End -->	

        <!-- Signin check module -->
        <?php 
            if (!isset($_SESSION['email'])) {
        ?>
                <script>
                    document.getElementById('header_1').style.display="none";                
                    document.getElementById('header_2').style.display="none";                
                    document.getElementById('header_3').style.display="none";             
                    document.getElementById('footer_1').style.display="none";                
                    document.getElementById('footer_2').style.display="none";                
                    document.getElementById('footer_3').style.display="none";                
                    document.getElementById('header_4').style.display="inline-block";
                    document.getElementById('footer_4').style.display="inline-block";
                </script>
        <?php                
            }
            else { 
        ?>
                <script>
                    document.getElementById('header_1').style.display="inline-block";                
                    document.getElementById('header_2').style.display="inline-block";                
                    document.getElementById('header_3').style.display="inline-block";             
                    document.getElementById('footer_1').style.display="inline-block";                
                    document.getElementById('footer_2').style.display="inline-block";                
                    document.getElementById('footer_3').style.display="inline-block";                
                    document.getElementById('header_4').style.display="none";
                    document.getElementById('footer_4').style.display="none";
                </script> 
        <?php       
            }
        ?>
        <!-- Signin check module End -->

<script>
function timerCheck(date,id) {
					var countDownDate = new Date(date).getTime();
					var x = setInterval(function() {
						var now = new Date().getTime();
						var distance = countDownDate - now;
						var days = Math.floor(distance / (1000 * 60 * 60 * 24));
						var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
						var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
						var seconds = Math.floor((distance % (1000 * 60)) / 1000);
						document.getElementById(`time_counter${id}`).innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
						if (distance < 0) {
							clearInterval(x);
							document.getElementById(`time_counter${id}`).innerHTML = "EXPIRED";				
						}
					}, 1000);
				}
</script>

		<?php

			$conn = mysqli_connect("localhost","root","","auctnow");
			$sql = "select * from product where prod_status=1";
			$res = mysqli_query( $conn, $sql);
			while ($row = mysqli_fetch_assoc($res)) {
				?>
				
					<script type="text/javascript">timerCheck('<?php echo $row['prod_end_date']; ?>', '<?php echo $row['prod_id']; ?>');</script>
				} <?php
			}

		?>



        <!-- Js Plugins -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/mixitup.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/jquery.slicknav.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/search.js"></script>
		<script src="js/main.js"></script>
		<!-- Js Plugins End -->
    </body>
</html>