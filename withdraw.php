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
		
.user_options-forms .forms_field {
  position: relative;
}
.user_options-forms .forms_field:not(:last-of-type) {
  margin-bottom: 20px;
}
.user_options-forms .forms_field-input {
  width: 60%;
  background-color: #263238;
  box-sizing: border-box;
  box-shadow: none;
  outline: none;
  border: none;
  border-bottom: 2px solid #999;
  padding: 6px 20px 6px 6px;
  font-size: 1rem;
  font-weight: 300;
  color: gray;
  transition: border-color 0.2s ease-in-out;
}

.user_options-forms .forms_field-input:focus,
.user_options-forms .forms_field-input:valid {
  border-color: #e8716d;
}

.user_options-forms .forms_field-label {
  position: absolute;
  top: 10px;
  left: 200px;
  color: #999;
  transition: 0.5s;
  pointer-events: none;
  font-size: 1rem;
}

.user_options-forms .forms_field-input:focus ~ .forms_field-label,
.user_options-forms .forms_field-input:valid ~ .forms_field-label {
  top: -12px;
  left: 195px;
  color: #e14641;
  font-size: 12px;
  font-weight: bold;
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

								<li class="active" id="withdraw">
									<a href="withdraw.php"><i class="fas fa-money-check-alt"></i> <span >Withdraw</span></a>
								</li>

								<li id="transaction">
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
						<div class="home" style="background-color: #263238;"><br><br>
							<span class="heading"><h1>withdraw amount</h1></span><br><br>
							<p style="color: white;">please enter multiples of 100 and below 2000</p>

							  <div class="user_options-forms" id="user_options-forms">
         
							
							<form action="" method="post">
								
	               				<div class="forms_field">
									
					                  <input type="text" name="name" class="forms_field-input" required />
					                   <label class="forms_field-label">user name</label>
	               				</div>
	               				<div class="forms_field">
	               					
				                 	 <input type="password" name="pwd" class="forms_field-input" required />
				                 	 <label class="forms_field-label">Password</label>
				                </div>
				                <div class="forms_field">
									
					                  <input type="Number" name="withdraw_amt" class="forms_field-input" required />
					                  <label class="forms_field-label">enter amount</label>
	               				</div>
				                
	               				<div class="forms_buttons">
	              				  <input type="submit" value="withdraw" name="withdraw" class="forms_buttons-action"/>
	             				</div>
             				 </form>
						
						</div>
						<!-- /home -->
					</div>




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

<?php
include_once 'db.php';

	if(isset($_POST['withdraw']))
	{
		$name=$_POST['name'];
		$pwd=$_POST['pwd'];
		$withdraw_amt=$_POST['withdraw_amt'];
		$avl_bal=$_SESSION['avl_bal'];

		if($withdraw_amt%100==0 && $withdraw_amt<=2000)
		{
		  $sql="SELECT * FROM `user` WHERE name='".$name."' && password='".$pwd."' && id='".$_SESSION['id']."'";
		  $res=mysqli_query($conn,$sql);
		  $row=mysqli_num_rows($res);

		  $try=0;
		  if($row==0)
		  {	
		  	
		  	$try++;
		  	$chance=3-$try;//track user how many times he/she enter pasword
		  	// echo "you have more ".$chance."chance";
		    echo '<script type="text/javascript">alert("username or password is invalid,**you have more '.$chance.' chances**")</script>';

		    
		  }
		  else if($avl_bal>=$withdraw_amt)
		  		{
		  			$sql3="SELECT * FROM withdraw WHERE user_id='".$_SESSION['id']."' and done_at>=now()-INTERVAL 1 day";
		  			$res3=mysqli_query($conn,$sql3);

		  			$num_of_transation=mysqli_num_rows($res3);
		  			if($num_of_transation<5){

		  				$trans=$avl_bal-$withdraw_amt;

				  		$sql1="UPDATE `user` SET  `avl_bal`='".$trans."' WHERE name='".$name."' AND password='".$pwd."'";
				  		$res1=mysqli_query($conn,$sql1);
				  		$_SESSION['avl_bal']=$trans;


				  		$sql2="INSERT INTO `withdraw`( `withdraw`,`done_at`,`user_id`) VALUES ('".$withdraw_amt."',now(),'".$_SESSION['id']."')";
				  		$res2=mysqli_query($conn,$sql2);
				  		
				  		echo '<script type="text/javascript">alert("transation successful")</script>';
		  			}
		  			else{
		  				
		  				echo '<script type="text/javascript">alert("you cannot withdraw amount more than 5 time a day")</script>';
		  			}

		  		
				}
				else
				{
					echo '<script type="text/javascript">alert("not enough balance")</script>';
				}

		}
		else
		{
				
			echo '<script type="text/javascript">alert("please enter multiples of 100 and below 2000")</script>';
		}
	}

	
	
	

		
?>



</body>
</html>
