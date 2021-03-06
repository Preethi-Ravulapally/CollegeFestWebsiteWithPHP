<!DOCTYPE HTML>
<html>
	<head>
		<title>Admin view organizers</title>
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
						<h3>WELCOME ADMIN</h3>
							</header>
							<div class="flex flex-tabs">
								<ul class="tab-list">
								<li><a href="admin_access.php" data-tab="tab-1" class="active">DASHBOARD</a></li>
									<li><a href="admin_add_con.php" data-tab="tab-2">ADD CONVENER</a></li>
									<li><a href="admin_delete_con.php" data-tab="tab-3">DELETE CONVENER</a></li>
									<li><a href="admin_viewconvener.php" data-tab="tab-4">VIEW CONVENER</a></li>
									<li><a href="admin_viewevents.php" data-tab="tab-7">VIEW EVENTS</a></li>
									<li><a href="admin_vieworganizers.php" data-tab="tab-8">VIEW ORGANIZERS</a></li>
									<li><a href="admin_editgallery.php" data-tab="tab-6">EDIT GALLERY</a></li>
									</ul>
									<div class="tabs">
								<?php
								  $connector = mysqli_connect("localhost","root","","azura") or die("Unable to connect");
								  $result = mysqli_query($connector,"SELECT name,eventname,phoneno FROM azura_user where role='organizer'");
								  ?>
								  <div class="table-wrapper">
								  <table>
								  <thead>
									<tr>
									<th><h4>Organizer Name</h4></th>
									<th><h4>Event Name</h4></th>
									<th><h4>Phone Number</h4></th>
									<th><h4>View Event</h4></th>
									</tr>
								  </thead>
								  <tbody>
									<?php
									while ($array = mysqli_fetch_row($result))
									{
										echo "<tr><td>$array[0]</td><td>$array[1]</td><td>$array[2]</td>";
										echo "<td><form method='post' action='generic.php?id=".$array[1]."'>
													<input type='submit' name='submit' value='view'>
													</form></td></tr>";
									}
									?>
								  </tbody>
								</table>
								 <?php mysqli_close($connector); ?>
								 </div>
								</div>
								</div>
								</div>
				</section>
	</body>
</html>