<?php 
include_once 'db.php';
session_start();
if(!isset($_SESSION['name'])){
	header("location:index.php");
}
$sql="SELECT * FROM `withdraw` where user_id='".$_SESSION['id']."'";
$res=mysqli_query($conn,$sql);
$total_withdraw=0;
if(mysqli_num_rows($res)>0){

	while ($row = mysqli_fetch_array($res)) {
		$total_withdraw+=$row['withdraw'];
	}
}
				

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>resume</title>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Latestcompiled and minified CSS -->

	<!-- google font stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

	<!-- /google font stylesheets -->

	<!--font awesome-->
	<script src="https://kit.fontawesome.com/1a594a0608.js" crossorigin="anonymous"></script>
	<!--/font awesome-->
	
	<!-- /global stylesheets -->


	<!-- /theme JS files -->

	<!-- Global stylesheets -->
	<link href="css/dashboard.css" rel="stylesheet" type="text/css">

</head>

<body>

	<div class="header" style="background-color: #37474F;">
		<span class="heading"><h1>Isha Tech Bank ATM System</h1></span>
		<div class="handburger">
			<ul class="nav navbar-nav visible-xs-block" >
				<li>
					<a class="sidebar-mobile-main-toggle"><i class="fas fa-bars" style="font-size: large;"></i></a>
				</li>
			</ul>
		</div>
		
		
	</div>
	<!-- /main navbar -->

			

	<!-- Page container -->
	<div class="page-container" >


		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								
								<div>
								<a href="#" class="media-left"><img src="images/placeholder.jpg" class="img-circle" alt=""></a>
								</div>
								<div class="media-body">
									<span class="media-heading text-semibold"><?php echo $_SESSION['name']?> </span>
								
								</div>

								
							</div>
						</div>
					</div>
					<!-- /user menu -->

					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="active" id="home">
									<a href="dashboard.php"><i class="fas fa-home"></i> <span>Dashboard</span></a>
								</li>

								<li id="withdraw">
									<a href="withdraw.php"><i class="fas fa-money-check-alt"></i> <span >Withdraw</span></a>
								</li>

								<li id="transation">
									<a href="transaction_history.php"><i class="fas fa-exchange-alt"></i> <span>Debited History</span></a>
								</li>

								<li id="logout">
									<a href="logout.php"><i class="fas fa-sign-out-alt white"></i> <span>Logout<span></a>
								</li>

								<div class="side_image">
									<img src="images/undraw1.png"  class="img-fluid" width="200" height="135" >
								</div>
								<!-- /main -->
							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->




			<!-- Main content -->
			<div class="content-wrapper">
				
				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4 style="padding-left:10px;"><i class="fas fa-arrow-circle-left"></i> <span class="text-semibold " id="page-title">Home</span></h4>
						</div>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">
						<!-- home -->
						<div class="home" style="background-color: #263238;">

							<div class="user_details">
								<p>id:<?php echo $_SESSION['id']?> </p>
								<p>Name: <?php echo $_SESSION['name']?> </p>
								<p>phone number:<?php echo $_SESSION['phone_number']?> </p>
								<p>email:<?php echo $_SESSION['email']?> </p>
							</div>	
							<div class="row">
								<div class="col-lg-4 col-md-4 col-12">
									<div class="card card-stats">
										<div class="card-header card-header-warning card-header-icon">
										  <div class="card-icon">
										  <i class="fas fa-rupee-sign "></i>
										  </div>
										  <p class="card-category">Initial Balance </p>
										  <h3 class="card-title">30,000</h3>
										</div>
									</div>
								</div>
				
								<div class="col-lg-4 col-md-4 col-12">
									<div class="card card-stats">
										<div class="card-header card-header-warning card-header-icon">
										  <div class="card-icon">
										  <i class="fas fa-rupee-sign "></i>
										  </div>
										  <p class="card-category">Available Balance </p>
										  <h3 class="card-title"><?php echo $_SESSION['avl_bal'] ;?></h3>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-4 col-12">
									<div class="card card-stats">
										<div class="card-header card-header-warning card-header-icon">
										  <div class="card-icon">
										  <i class="fas fa-rupee-sign "></i>
										  </div>
										  <p class="card-category">Total Withdraw amount </p>
										  <h3 class="card-title"><?php echo $total_withdraw;?></h3>
										</div>
									</div>
								</div>

						
							</div>			
							
       	
						</div>
						<!-- /home -->

					


					<!-- Footer -->
					<div class="footer text-muted text-center">
						&copy; 2021. <a href="#">created</a> by <a href="index.html" >vinay singh</a>
					</div>
					
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->


	</div>
	<!-- /page container -->



</body>
</html>
