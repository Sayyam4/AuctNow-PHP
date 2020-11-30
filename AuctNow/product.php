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
    <body onload="timerChange()">
            <!-- Timer Js -->
            <script>
            function timerChange() {
               
            var countDownDate = new Date(document.getElementById('end_date').value).getTime();
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
            }
        </script>
        <!-- Timer Js End-->
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
                            <span>Product</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->
    
        <!-- Product Details Section Begin -->

        <?php 
            $conn = mysqli_connect("localhost","root","","auctnow");
            $sql = "select * from product where prod_id='".$_GET['prod_id']."'";
            $res = mysqli_query( $conn, $sql);
            while ($row = mysqli_fetch_assoc($res)) {
        ?>

        <section class="product-details spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product__details__pic">
                            <div class="product__details__pic__left product__thumb nice-scroll">
                                <a class="pt active" href="#product-1">
                                    <img src="uploads/<?php echo $row['img1'] ; ?>" alt="">
                                </a>
                                <?php 
                                if($row['img2']) { ?>
                                <a class="pt" href="#product-2">
                                    <img src="uploads/<?php echo $row['img2'] ; ?>" alt="">
                                </a>
                                <?php
                                }
                                ?>
                                <?php 
                                if($row['img3']) { ?>
                                <a class="pt" href="#product-3">
                                    <img src="uploads/<?php echo $row['img3'] ; ?>" alt="">
                                </a>
                                <?php
                                }
                                ?>
                                <?php 
                                if($row['img4']) { ?>
                                <a class="pt" href="#product-4">
                                    <img src="uploads/<?php echo $row['img4'] ; ?>" alt="">
                                </a>
                                <?php
                                }
                                ?>                                
                            </div>
                            <div class="product__details__slider__content">
                                <div class="product__details__pic__slider owl-carousel">
                                    <img data-hash="product-1" class="product__big__img" src="uploads/<?php echo $row['img1'] ; ?>" alt="">
                                    <?php 
                                        if($row['img2']) {
                                            ?>
                                            <img data-hash="product-2" class="product__big__img" src="uploads/<?php echo $row['img2'] ; ?>" alt="">
                                            <?php
                                        }
                                    ?>
                                     <?php 
                                        if($row['img3']) {
                                            ?>
                                            <img data-hash="product-3" class="product__big__img" src="uploads/<?php echo $row['img3'] ; ?>" alt="">
                                            <?php
                                        }
                                    ?>
                                     <?php 
                                        if($row['img4']) {
                                            ?>
                                            <img data-hash="product-4" class="product__big__img" src="uploads/<?php echo $row['img4'] ; ?>" alt="">
                                            <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product__details__text">
                            <h3><?php echo $row['prod_name'] ; ?></h3>
                        <?php 
                            if ($row['prod_highest_bid'] == 0) {
                        ?>
                            <div class="product__details__price">$ <?php echo $row['prod_base_price'] ; ?></div>

                        <?php 
                            }
                            else {
                        ?>
                            <div class="product__details__price">$ <?php echo $row['prod_highest_bid'] ; ?><span>$ <?php echo $row['prod_previous_bid'] ; ?></span></div>
                        <?php 
                            }
                        ?>
                            <h4>Ends in:</h4> 
                            <div class="product__details__button">
                            <a id="demo" class="cart-btn" style="border-radius: 0px;"></a>
                            </div>  

                            <input type="hidden" value="<?php echo $row['prod_end_date']; ?>" id="end_date" />
                           
                            <h4>Description:</h4><br/>
                            <p><?php echo $row['prod_desc'] ; ?></p>                        


                        <?php 
                            if(isset($_SESSION['email'])) {
                        ?>
                            <div class="product__details__button">
                                <button href="#" class="cart-btn" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><span class="icon_bag_alt"></span>&nbsp;Bid now</button>
                            </div>
                        <?php 
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
            }
        ?>

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

                    <script>
                        function checkBid(form) {
                            console.log("1");
                            if (form.prev_bid.value >= form.new_bid.value) {
                                console.log("2");
                                document.getElementsByClassName('modal-text')[0].innerHTML = "Bid amount should be greater than the current bid";
                                jQuery('#myModal').modal('show'); 
                                return false;
                            }
                            else {
                                return true;
                            }
                        }
                    </script>
                    <form method="POST" action="product.php" onsubmit="return checkBid(this);">
                    <div class="modal-body">                   
                    <?php
                        $price=0;
                        $conn = mysqli_connect("localhost","root","","auctnow");
                        $sql = "select * from product where prod_id='".$_GET['prod_id']."'";
                        $res = mysqli_query( $conn, $sql);
                        while($row = mysqli_fetch_assoc($res)) {
                            if ($row['prod_highest_bid'] == 0) {
                                $price = $row['prod_base_price'];
                            }
                            else {
                                $price = $row['prod_highest_bid'];
                            }
                    ?>
                        
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Current Bid:</label>
                                <input type="text" class="form-control" name="prev_bid" id="recipient-name" value='<?php echo $price; ?>' disabled>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">New Bid:</label>
                                <input type="number" min="<?php echo $price+1 ; ?>" name="new_bid" class="form-control" id="message-text"/>
                            </div>
                            <?php 
                        }
                    ?>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Bid Modal End -->

        <!-- Error Modal -->
        <div id="myModal" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Error</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p class="modal-text"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Error Modal End --> 

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

    
