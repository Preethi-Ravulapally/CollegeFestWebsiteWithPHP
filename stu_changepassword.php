<?php
session_start();
if(isset($_POST['submit'])){
    $connector = mysqli_connect("localhost","root","","azura")or die("Unable to connect");
	$email=$_SESSION['email'];
	$password=$_POST['password'];
	$conpassword=$_POST['conpassword'];
	if($password==$conpassword){
	$myquery="UPDATE azura_user SET password='$password' where role='student' and email='$email'";
    $r=mysqli_query($connector,$myquery) or die("failed to query database");
	echo "<script>alert('Password Changed Successfully')</script>";
	}
	else
	{
		echo "<script>alert('Enter password And Confirm Password Correctly')</script>";
	}

}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Student Access</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">
	<header id="header">
				<h1><a href="#">AZURA <span>by CMR COLLEGE OF ENGINEERING AND TECHNOLOGY</span></a></h1>
			</header>
	   <section class="wrapper style2">
					<div class="inner">
						<header>
						<h3><?php
						echo  "welcome ".$_SESSION['email'];
						?>
						</h3>
							</header>
							<div class="flex flex-tabs">
								<ul class="tab-list">
								<li><a href="stu_access.php" data-tab="tab-1" class="active">DASHBOARD</a></li>
									<li><a href="stu_viewevents.php" data-tab="tab-2">VIEW EVENTS</a></li>
									<li><a href="stu_participate_events.php" data-tab="tab-3">REGISTERED EVENTS</a></li>
									<li><a href="stu_feedback.php" data-tab="tab-4">FILL FEEDBACK FORM</a></li>
									<li><a href="org_register.php" data-tab="tab-5">REGISTER AS ORGANIZER</a></li>
									</ul>
								<div class="tabs">
										<center>
								<div class="6u 12u$(medium)">
								<form method="post" action="#">
								<div class="table-wrapper">
								<table>
										<tr>
										<td><label><h3>Password</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="password" name="password"  required="required" pattern=".{6,}" id="password" value="" placeholder="Password" />
										</div>
										</td>
										</tr>
										<tr>
										<td><label><h3>Confirm Password</h3></label></td>
										<td>
										<div class="6u$ 12u$(xsmall)">
											<input type="password" name="conpassword"  required="required" pattern=".{6,}" id="conpassword" value="" placeholder="Confirm Password" />
										</div>
										</td>
										</tr>
										</table>
										<div class="12u$">
												<input type="submit" name="submit" value="submit" />
												<input type="reset" name="reset" value="Reset" class="alt" />
										</div>
								</form>
								</div>
								<hr />
		</center>
								</div>
				</section>
	</body>
</html>

