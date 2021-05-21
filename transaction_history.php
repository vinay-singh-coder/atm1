<?php 

session_start();
if(!isset($_SESSION['name'])){
	header("location:index.php");
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
	<!-- Latest compiled and minified CSS -->

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
	<style type="text/css">
		table{
			width: 100%;
		}
		table tr th{
			text-align: center;
			border:1px solid white;
		}
		table tr td{
			border:1px solid white;
		}
		.navigation > li.active > a,
.navigation > li.active > a:hover,
.navigation > li.active > a:focus {
  background-color: #26A69A;
  color: #fff;
}
	</style>

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
								<li  id="home">
									<a href="dashboard.php"><i class="fas fa-home"></i> <span>Dashboard</span></a>
								</li>

								<li id="withdraw">
									<a href="withdraw.php"><i class="fas fa-money-check-alt"></i> <span >Withdraw</span></a>
								</li>

								<li class="active" id="transation">
									<a href="transaction_history.php"><i class="fas fa-exchange-alt"></i> <span>Debited history</span></a>
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
							<span class="heading"><h1>Debited History</h1></span><br><br>
							<?php
								include_once 'db.php';
								$sql="SELECT * FROM `withdraw` WHERE user_id='".$_SESSION['id']."'";
								$res=mysqli_query($conn,$sql);
							 if(mysqli_num_rows($res) > 0){
						        echo "<table style='color:white; border-color: white;'>";
						            echo "<tr>";
						                echo "<th>id</th>";
						                echo "<th>user name</th>";
						                echo "<th>withdraw amount</th>";
						                echo "<th>DateTime</th>";
						                
						            echo "</tr>";
						        while($row = mysqli_fetch_array($res)){
						            echo "<tr>";
						                echo "<td>" . $_SESSION['id'] . "</td>";
						                echo "<td>" . $_SESSION['name'] . "</td>";
						                echo "<td>" . $row['withdraw'] . "</td>";
						                echo "<td>" . $row['done_at'] . "</td>";
						            echo "</tr>";
						        }
						        
						        echo "</table><br>";
						        echo "<p style='color:white;font-size:20px;'>Avaliable Balance : ".$_SESSION['avl_bal']."</p>";
						        // Free result set
						        mysqli_free_result($res);
						    } 
						    else{
						        echo "<p style='color:white;'>No Transaction History</p>";
						    } 
							 ?>
							
					<button id="btnPrint" onclick="" style="margin: auto;">print</button>
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


<script type="text/javascript">
	const $btnPrint = document.querySelector("#btnPrint");
$btnPrint.addEventListener("click", () => {
    window.print();
});
</script>
</body>
</html>
