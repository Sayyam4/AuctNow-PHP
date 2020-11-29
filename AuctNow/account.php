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
                            <span><a href="account.php">My Account</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Account Section Begin -->
        <section class="contact spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                         <div class="section-title">
                                <h4>My Account</h4>
                         </div>
                         <?php 
                            $conn = mysqli_connect("localhost", "root", "", "auctnow");
                            $sql = "select * from user where user_email='".$_SESSION['email']."'";
                            $res = mysqli_query( $conn, $sql);
                            while ($row = mysqli_fetch_assoc($res)) {
                        ?>
                        <div class="contact__form">
                            <div class="account__section">
                                <h5>Email ID</h5>
                                <div style="margin-bottom: 2em;">
                                    <?php echo $row['user_email']; ?>
                                </div>
                                <h5>Balance</h5>
                                <div style="margin-bottom: 2em;">
                                    <?php echo $row['user_balance']; ?>
                                </div>
                        <?php
                            }
                        ?>
                                <h5 style="margin-bottom: 0.7em;">Add Balance</h5>
                            </div>
                            <form method="POST" action="account.php" id="add_balance">
                                    <input type="number" min="1" name="bal" placeholder="Amount To Add">
                                    <button type="submit" class="site-btn">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Account Section End -->
        
        <!-- Add Balance PHP Start -->
        <?php 
            if (isset($_POST['bal'])) {
                $form_bal = $_POST['bal'];
                $db_bal=0;
                $conn = mysqli_connect("localhost","root","","auctnow");
                $sql = "select user_balance from user where user_email='".$_SESSION['email']."'";
                $res = mysqli_query( $conn, $sql);
                while($row = mysqli_fetch_assoc($res)) {
                    $db_bal = $row['user_balance'];
                }
                $total_bal = $db_bal + $form_bal;
                $sql1 = "update user set user_balance='".$total_bal."' where user_email='".$_SESSION['email']."'";
                $res1 = mysqli_query( $conn, $sql1);
                ?>
                <script>
                    window.location("account.php");
                </script>
                <?php
            }
        ?>
        <!-- Add Balance PHP End -->

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