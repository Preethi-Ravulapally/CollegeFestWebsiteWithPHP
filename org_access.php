<!DOCTYPE HTML>
<html>
	<head>
		<title>Organizer Access</title>
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
						<h3>
						<?php
						session_start();
						echo  "welcome ".$_SESSION['email'];
						?>
						</h3>
							</header>
							<div class="flex flex-tabs">
								<ul class="tab-list">
								<li><a href="org_access.php" data-tab="tab-1">DASHBOARD</a></li>
									<li><a href="org_upload_abstract.php" data-tab="tab-2">UPLOAD ABSTRACT</a></li>
									<li><a href="org_upload_poster.php" data-tab="tab-3">UPLOAD POSTER</a></li>
									<li><a href="org_upload_video.php" data-tab="tab-4">UPLOAD VIDEO</a></li>
									<li><a href="org_suborganizer.php" data-tab="tab-5" >ADD SUBORGANIZER</a></li>
									<li><a href="org_evaluation.php" data-tab="tab-6">EVALUATION PATTERN</a></li>
									<li><a href="org_scheduling.php" data-tab="tab-7" >EVENT SCHEDULING</a></li>
									<li><a href="org_viewparticipants.php" data-tab="tab-7" >VIEW PARTICIPANTS</a></li>
									</ul>
								<div class="tabs">
									<!-- Tab 1 -->
										<div class="tab tab-1 flex flex-3 active">
											<div class="box alt">
									<div class="row 50% uniform">
										<div class="4u"><span class="image fit">
										<?php
									
									  $email = $_SESSION['email'];
									$db = mysqli_connect("localhost","root","","azura");
									$sql="select * from azura_user where email='$email' and role='organizer'";
									$result=mysqli_query($db,$sql);
									?>
									<h2>
									
									<?php 
								while($row=mysqli_fetch_array($result))
								{
								echo "<img src='uploads/".$row['photo']."'/>";
							
								//echo file_get_contents("uploads/".$row['photo']."");
								}
								?>

									</h2></span></div>
										<div><h3>WELCOME TO AZURA FEST</H3></DIV>
										<div class="4u"><span><a href='org_editprofile.php'><h4>Edit Profile</h4></a></span></div>
										<div class="4u"><span><a href='index.php'><h4>Log Out</h4></a></span></div>
										<div class="4u"><span><a href='org_changepassword.php'><h4>Change Password</h4></a></span></div>
								</div>
				</section>
			
	</body>
</html>

