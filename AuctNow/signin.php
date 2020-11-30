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
        <!-- Google API -->
        <meta
            name="google-signin-client_id"
            content="1042528800112-lijhjeoco5coocclpum9s7rb1t5th3tn.apps.googleusercontent.com"
        />
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <!-- Google API End-->
    
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
        <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="css/signin.css">
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
								<li class="active" id="header_4"><a href="signin.php">Signin/Signup</a></li>
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
                            <span><a href="signin.php">Signin/Signup</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <div class="main" >
            <section class="sign-in" id="signin" style="max-width: 900px; margin-left: 17%;">
                <div class="container">
                    <div class="signin-content">
                        <div class="signin-image">
                            <figure><img src="./img/signin-image.jpg" alt="sing up image"></figure>
                            <a href="#signup" class="signup-image-link">Create an account</a>
                        </div>
                        <div class="signin-form">
                            <h2 class="form-title">Sign in</h2>
                            <form method="POST" class="register-form" id="login_form" action="signin.php">
                                <div class="form-group">
                                    <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" required name="user_email" id="your_name" placeholder="Your Email"/>
                                </div>
                                <div class="form-group">
                                    <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" required name="user_password" id="your_pass" placeholder="Password"/>
                                </div>
                                <div class="form-group form-button">
                                    <input type="submit" required name="signin" id="signin" class="form-submit" value="Log in"/>
                                </div>
                            </form>
                            <div class="social-login">
                                <span class="social-label">Or login with</span>
                                <ul class="socials">                
                                    <form method="POST" action="signin.php" id="google_signin"> 
                                    <input type="hidden" name="google_email" id="google_email" value="">               
                                    <li>
                                    <div class="g-signin2" data-onsuccess="onSignIn"><i class="display-flex-center zmdi zmdi-google"></i></div>									
                                    </li>
                                    </form>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <br/><br/>

            <!-- Check Password Function Start -->
            <script>
                function checkPass(form) {
                    if (form.pass.value != form.re_pass.value) {
                        document.getElementsByClassName('modal-text')[0].innerHTML = "Password did not match: Please try again...";
                        jQuery('#myModal').modal('show'); 
                        return false;
                    }
                    else {
                        return true;
                    }
                }
            </script>
            <!-- Check Password Function End -->
    
            <section class="signup" id="signup" style="max-width: 900px; margin-left: 17%;">
                <div class="container">
                    <div class="signup-content">
                        <div class="signup-form">
                            <h2 class="form-title">Sign up</h2>
                            <form class="register-form" action="signin.php" method="POST" id="register_form" onsubmit="return checkPass(this);">                           
                                <div class="form-group">
                                    <label for="email"><i class="zmdi zmdi-email"></i></label>
                                    <input type="email" required name="email" id="emailID" placeholder="Your Email"/>
                                </div>
                                <div class="form-group">
                                    <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" required name="pass" id="pass" placeholder="Password"/>
                                </div>
                                <div class="form-group">
                                    <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                    <input type="password" required name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                                </div>
                                <div class="form-group form-button">
                                    <input type="submit" required name="signup" id="signup" class="form-submit" value="Register"/>
                                </div>
                            </form>
                        </div>
                        <div class="signup-image">
                            <figure><img src="./img/signup-image.jpg" alt="sign up image"></figure>
                            <a href="#signin" class="signup-image-link">I am already member</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    
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

        <!-- Signin PHP Code Start -->
        <?php 
            if (isset($_POST['signin'])) {
                $user_email = $_POST['user_email'];
                $user_password = $_POST['user_password'];
                $conn = mysqli_connect("localhost","root","","auctnow");
                $sql = "select * from user where user_email='".$user_email."' and user_password='".$user_password."'";
                $res = mysqli_query($conn, $sql);                       
                if (mysqli_num_rows($res) == 0) {
                    ?>
                        <script>
                            document.getElementsByClassName('modal-text')[0].innerHTML = "Invalid login credentials, please try again!";
                            jQuery('#myModal').modal('show'); 
                        </script>
                    <?php
                }
                else {
                    $_SESSION['email'] = $user_email; 
                    ?>
                        <script>
                            window.location = "index.php";
                        </script>
                    <?php              
                } 
            }
        ?>
        <!-- Signin PHP Code End -->

        <!-- Signup PHP Code Start -->
        <?php 
            if (isset($_POST['signup'])) {
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $conn = mysqli_connect("localhost","root","","auctnow");
                $sql = "select * from user where user_email='".$email."'";
                $res = mysqli_query($conn, $sql);
                if (mysqli_num_rows($res) == 0) {
                    $sql1 = "insert into user (user_email,user_password) values ('".$email."','".$pass."')";
                    $res1 = mysqli_query($conn, $sql1);
                    $_SESSION['email'] = $email;
                    ?>
                        <script>
                            window.location = "index.php";
                        </script>
                    <?php
                }
                else {
                    ?>
                    <script>
                        document.getElementsByClassName('modal-text')[0].innerHTML = "User already exists, please try again with another email!";
                        jQuery('#myModal').modal('show'); 
                    </script>
                    <?php
                }
            }
        ?>
        <!-- Signup PHP Code End -->

        <!-- Google Signin PHP Code Start -->
        <?php 
            if (isset($_POST['google_email'])) {
                $email = $_POST['google_email'];
                $conn = mysqli_connect("localhost","root","","auctnow");
                $sql = "select * from user where user_email='".$email."'";
                $res = mysqli_query($conn, $sql);
                if (mysqli_num_rows($res) == 0) {
                    $sql1 = "insert into user (user_email) values ('".$email."')";
                    $res1 = mysqli_query($conn, $sql1);
                    $_SESSION['email'] = $email;
                    ?>
                        <script>
                            window.location = "index.php";
                        </script>
                    <?php 
                }
                else {
                    $_SESSION['email'] = $email;
                    ?>
                        <script>
                            window.location = "index.php";
                        </script>
                    <?php                    
                }
            }
        ?>
        <!-- Google Signin PHP Code End -->

        <!-- Google Signin fetch -->
        <script>
            async function onSignIn(googleUser) {
                var profile = googleUser.getBasicProfile();
                console.log('ID: ' + profile.getId()); 		
                console.log('Email: ' + profile.getEmail());
                email=profile.getEmail();
                document.getElementById('google_email').value = email;        
                document.getElementById('google_signin').submit();               
            }
        </script>
     </body>
</html>