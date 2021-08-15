		<?php 
		
		include 'header.php'?>
		
		
		<?php session_start(); ?>
		
		<div class = "menu"><ul><li><a href="logout.php" >Logout</ul></li></ul></div>
		</div>
		
		

		<div class = "account">
			<div class= "sidebar">
				<ul>
					<li><a href="account.php">Dashboard</a></li>
					<li><a href="view.php">View Profile</a></li>
					<li><a href="cp.php">Change Password</a></li>
					<li><a href="classroutine.php">Class Routine</a></li>
					<li><a href="notice.php">Notice</a></li>
					<li><a href="msg.php">Message</a></li>
					<li><a href="result.php">Result</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
			<div class = "userhome">
			
			<h1 style="text-align:center">Welcome To Student Account</h1>

			<br><br><br>


				<h1 style="text-align:center">Welcome <b><?php echo $_SESSION['username']?></b></h1>
			
			</div>
			
		</div>
		
		<?php include 'footer.php'; ?>
		
		
	