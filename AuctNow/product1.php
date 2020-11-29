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
								<li><a href="index.php">Home</a></li>
								<li class="in" id="header_1"><a href="create_auction.php">Create Auction</a></li>
								<li class="in" id="header_2"><a href="account.php"> My Account</a></li>
								<li class="active"><a href="about.php">About</a></li>
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
                            <span>Product</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->
    
        <!-- Product Details Section Begin -->
        <section class="product-details spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product__details__pic">
                            <div class="product__details__pic__left product__thumb nice-scroll">
                                <a class="pt active" href="#product-1">
                                    <img src="img/product/details/thumb-1.jpg" alt="">
                                </a>
                                <a class="pt" href="#product-2">
                                    <img src="img/product/details/thumb-2.jpg" alt="">
                                </a>
                                <a class="pt" href="#product-3">
                                    <img src="img/product/details/thumb-3.jpg" alt="">
                                </a>
                                <a class="pt" href="#product-4">
                                    <img src="img/product/details/thumb-4.jpg" alt="">
                                </a>
                            </div>
                            <div class="product__details__slider__content">
                                <div class="product__details__pic__slider owl-carousel">
                                    <img data-hash="product-1" class="product__big__img" src="img/product/details/product-1.jpg" alt="">
                                    <img data-hash="product-2" class="product__big__img" src="img/product/details/product-3.jpg" alt="">
                                    <img data-hash="product-3" class="product__big__img" src="img/product/details/product-2.jpg" alt="">
                                    <img data-hash="product-4" class="product__big__img" src="img/product/details/product-4.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product__details__text">
                            <h3>Essential structured blazer <span>Brand: SKMEIMore Men Watches from SKMEI</span></h3>
                            <div class="product__details__price">$ 75.0 <span>$ 83.0</span></div>
                            <h4>Ends in:</h4> 
                            <div class="product__details__button">
                            <a id="demo" class="cart-btn" style="border-radius: 0px;"></a>
                            </div>  
                           
                            <h4>Description:</h4><br/>
                            <p>Nemo enim ipsam voluptatem quia aspernatur aut odit aut loret fugit, sed quia consequuntur
                            magni lores eos qui ratione voluptatem sequi nesciunt.</p>                        
    
                            <div class="product__details__button">
                                <button href="#" class="cart-btn" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><span class="icon_bag_alt"></span>&nbsp;Bid now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Details Section End -->
    
        <!-- Bid Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Current Bid:</label>
                                <input type="text" class="form-control" id="recipient-name" value='$75' disabled>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">New Bid:</label>
                                <input type="text" class="form-control" id="message-text"/>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bid Modal End -->

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

        <!-- Timer Js -->
        <script>
            var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();
            var x = setInterval(function() {
                var now = new Date().getTime();
                var distance = countDownDate - now;
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                + minutes + "m " + seconds + "s ";
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("demo").innerHTML = "EXPIRED";
                    
                }
            }, 1000);
        </script>
        <!-- Timer Js End-->

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

    
