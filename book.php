<?php
	session_start();
	if (!isset($_SESSION['username'])) {
		// Redirect to the login page or display an error message
		header("Location: login.html");
		echo "<script>alert('Please log in to access this page.')</script>";
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="boots/css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="boots/css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="boots/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="boots/css/custom.css">
</head>
<style>
    body{
        background-color: black;
        background-image: url(img/release/bg-lib.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
    }
    .top-navbar {
        color: white;
}

</style>
<body>

	<p>session here <?php echo $_SESSION['username'] ?></p>


    <!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.html" style="color:white">Home</a></li>
						<li class="nav-item active"><a class="nav-link" href="#" style="color:white">Library</a></li>						
						<li class="nav-item">
							<form action="logout.php">
								<button class="nav-link" type="submit" style="color:white; background-color: transparent; border:none;">Logout</button>
							</form>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<div style="height: 50px;">

    </div>
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2 style="color:white">Library Shelve</h2>
						<p class="menu-title" style="color:white">Search your favorite book here</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<div class="button-group filter-button-group">
							<button data-filter=".desserts">Desserts</button>
							<button data-filter=".drinks">Drinks</button>
							<button data-filter=".lunch">Lunch</button>
							<button data-filter=".breakfast">Breakfast</button>
							<button data-filter=".kids">Kids Menu</button>

						</div>
					</div>
				</div>
			</div>
				
			<div class="row special-list">
				<div class="col-lg-4 col-md-6 special-grid desserts">
					<div class="gallery-single fix">
						<img src="img/release/category-filter-img-04.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special</h4>
							<p class="food-name" style="font-size: 20px;">Burger</p>
							<button style="margin-bottom: 10px;" type="button" class="btn btn-dark">Read Now</button>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid desserts">
					<div class="gallery-single fix">
						<img src="img/release/category-filter-img-04.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special</h4>
							<p class="food-name" style="font-size: 20px;">Burger</p>
							<button style="margin-bottom: 10px;" type="button" class="btn btn-dark">Read Now</button>
						</div>`
					</div>
				</div>

				<div class="col-lg-4 col-md-6 special-grid desserts">
					<div class="gallery-single fix">
						<img src="img/release/category-filter-img-04.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special</h4>
							<p class="food-name" style="font-size: 20px;">Burger</p>
							<button style="margin-bottom: 10px;" type="button" class="btn btn-dark">Read Now</button>
						</div>
					</div>
				</div>
			
				<!-- DESSERTS ends -->

				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="img/release/category-filter-img-02.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special</h4>
							<p class="food-name" style="font-size: 20px;">Burger</p>
							<button style="margin-bottom: 10px;" type="button" class="btn btn-dark">Read Now</button>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="img/release/category-filter-img-02.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special</h4>
							<p class="food-name" style="font-size: 20px;">Burger</p>
							<button style="margin-bottom: 10px;" type="button" class="btn btn-dark">Read Now</button>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="img/release/category-filter-img-02.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special</h4>
							<p class="food-name" style="font-size: 20px;">Burger</p>
							<button style="margin-bottom: 10px;" type="button" class="btn btn-dark">Read Now</button>
						</div>
					</div>
				</div>


				<!-- DRINKS end -->

				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="img/release/category-filter-img-01.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special</h4>
							<p class="food-name" style="font-size: 20px;">Burger</p>
							<button style="margin-bottom: 10px;" type="button" class="btn btn-dark">Read Now</button>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="img/release/category-filter-img-01.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special</h4>
							<p class="food-name" style="font-size: 20px;">Burger</p>
							<button style="margin-bottom: 10px;" type="button" class="btn btn-dark">Read Now</button>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="img/release/category-filter-img-01.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special</h4>
							<p class="food-name" style="font-size: 20px;">Burger</p>
							<button style="margin-bottom: 10px;" type="button" class="btn btn-dark">Read Now</button>
						</div>
					</div>
				</div>


				<!-- LUNCH end -->

				<div class="col-lg-4 col-md-6 special-grid breakfast">
					<div class="gallery-single fix">
						<img src="img/release/category-filter-img-02.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special</h4>
							<p class="food-name" style="font-size: 20px;">Burger</p>
							<button style="margin-bottom: 10px;" type="button" class="btn btn-dark">Read Now</button>
						</div>
					</div>
				</div>


				<div class="col-lg-4 col-md-6 special-grid breakfast">
					<div class="gallery-single fix">
						<img src="img/release/category-filter-img-02.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special</h4>
							<p class="food-name" style="font-size: 20px;">Burger</p>
							<button style="margin-bottom: 10px;" type="button" class="btn btn-dark">Read Now</button>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 special-grid breakfast">
					<div class="gallery-single fix">
						<img src="img/release/category-filter-img-02.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special</h4>
							<p class="food-name" style="font-size: 20px;">Burger</p>
							<button style="margin-bottom: 10px;" type="button" class="btn btn-dark">Read Now</button>
						</div>
					</div>
				</div>

				

				<!-- Breakfast ends -->


				<div class="col-lg-4 col-md-6 special-grid kids">
					<div class="gallery-single fix">
						<img src="img/release/category-filter-img-03.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special</h4>
							<p class="food-name" style="font-size: 20px;">Burger</p>
							<button style="margin-bottom: 10px;" type="button" class="btn btn-dark">Read Now</button>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 special-grid kids">
					<div class="gallery-single fix">
						<img src="img/release/category-filter-img-03.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special</h4>
							<p class="food-name" style="font-size: 20px;">Burger</p>
							<button style="margin-bottom: 10px;" type="button" class="btn btn-dark">Read Now</button>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 special-grid kids">
					<div class="gallery-single fix">
						<img src="img/release/category-filter-img-03.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special</h4>
							<p class="food-name" style="font-size: 20px;">Burger</p>
							<button style="margin-bottom: 10px;" type="button" class="btn btn-dark">Read Now</button>
						</div>
					</div>
				</div>

				<!-- Kid's menu end -->


			

				
				
				
				
			</div>
		</div>`
	</div>
</body>

	<!-- ALL JS FILES -->
	<script src="boots/js/jquery-3.2.1.min.js"></script>
	<script src="boots/js/popper.min.js"></script>
	<script src="boots/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="boots/js/jquery.superslides.min.js"></script>
	<script src="boots/js/images-loded.min.js"></script>
	<script src="boots/js/isotope.min.js"></script>
	<script src="boots/js/baguetteBox.min.js"></script>
	<script src="boots/js/form-validator.min.js"></script>
    <script src="boots/js/contact-form-script.js"></script>
    <script src="boots/js/custom.js"></script>
</html>