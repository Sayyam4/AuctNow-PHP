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
							<a href="index.html"><i class="fa fa-home"></i> Home</a>
							<span><a href="create_auction.html">Create Auction</a></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Breadcrumb End -->

		<!--Create Auction Section Begin-->
		<section class="product spad">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4">
						<div class="section-title">
							<h4>Create Auction</h4>
						</div>
					</div>
				</div>
				<div class="contact__form">
					<form action="create_auction.php" method="POST" id="create_auction" enctype="multipart/form-data">
						<label for="name">Product Name</label>
						<input onfocus="loading()" type="text" id="prod_name" name="prod_name" placeholder="Enter product name" required/>
						<label for="desc">Description</label>
						<textarea type="text" id="desc" name="prod_desc" placeholder=" Enter description" cols="3" required></textarea>
						<label for="tag">Tag</label>
						<input type="text" name="tag" id="tag" placeholder="Tags" required/>
						<label for="start_bid">Base Price</label>
						<input type="number" min="1" id="prod_base_price" name="prod_base_price" placeholder="Enter your base price" required/>
						<label for="auction_end_date">Auction End Date</label>
						<input type="datetime-local" name="prod_end_date" id="auction_end_date" name="today" required/>
						<br /><br />
						<label for="filesss">Add Product Images (Maximum 4 images)</label>
						<input type="file" name="files[]" multiple required> 
						<button type="submit" class="site-btn" style="margin-top: 3%">Create</button>
					</form>
				</div>
			</div>
		</section>

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
			function loading() {
				let str = new Date().toISOString().slice(0, 10).toString();
				document.getElementById('auction_end_date').min = str + 'T00:00';
			}			
		</script>

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

		<!-- Create_auction PHP Code Start -->
		<?php 
			if (isset($_POST['prod_name'])) {
				$prod_name = $_POST['prod_name'];
				$prod_desc = $_POST['prod_desc'];
				$prod_owner = $_SESSION['email'];
				$tag = $_POST['tag'];
				$prod_base_price = $_POST['prod_base_price'];
				$prod_end_date = $_POST['prod_end_date'];


				$count=1;
				$img1="";
				$img2="";
				$img3="";
				$img4="";
				$upload_dir = 'uploads'.DIRECTORY_SEPARATOR; 
				$allowed_types = array('jpg', 'png', 'jpeg'); 
				if(!empty(array_filter($_FILES['files']['name']))) { 
					foreach ($_FILES['files']['tmp_name'] as $key => $value) { 	
						$file_tmpname = $_FILES['files']['tmp_name'][$key]; 
						$file_name = $_FILES['files']['name'][$key]; 
						$file_size = $_FILES['files']['size'][$key]; 
						$file_ext = pathinfo($file_name, PATHINFO_EXTENSION); 
						$filepath = $upload_dir.$file_name; 
						if(in_array(strtolower($file_ext), $allowed_types)) { 
							if(file_exists($filepath)) { 
								$filepath = $upload_dir.time().$file_name; 
								if( move_uploaded_file($file_tmpname, $filepath)) { 
									${"img".$count} = time().$file_name;
									$count++;
								}  
							} 
							else { 
								if( move_uploaded_file($file_tmpname, $filepath)) { 
									${"img".$count} = $file_name;
									$count++;
								}  
							} 
						} 
						else { 
							echo "Error uploading {$file_name} "; 
							echo "({$file_ext} file type is not allowed)<br / >"; 
						} 
					} 
				} 
				else { 
					// If no files selected 
					echo "No files selected."; 
				} 
				
		
				echo $img1;
				$conn = mysqli_connect("localhost","root","","auctnow");
				$sql = "insert into product (prod_name,prod_desc,prod_owner,tag,img1,img2,img3,img4,prod_base_price,prod_end_date,prod_previous_bid	) 
				values('".$prod_name."','".$prod_desc."','".$prod_owner."','".$tag."','".$img1."','".$img2."','".$img3."','".$img4."','".$prod_base_price."','".$prod_end_date."','".$prod_base_price."')";
				$res = mysqli_query( $conn, $sql);
				?>
					<script>
						alert("Auction created successfully.")
						//window.location = "index.php";
					</script>
				<?php
			}
		?>
		<!-- Create_auction PHP Code End -->
    </body>
</html>
