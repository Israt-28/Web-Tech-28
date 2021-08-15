
		<?php 
		
		$name = $pass = $user = $pas = $usermatch = $pasmatch = $newpass = $renewpass = $curpas = "";
$nameE = $passE = $newpassE = $renewpassE = $currpassE = "";
$currpass = "saifpas1";
$currpasS = "" ;
	
		include 'header.php'?>
		
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
			
			<h1 style="text-align:center">Change Password</h1>
			
			</div>
			
			
		<?php	
			







?>


<form method="post" action="../php/changepassController.php"style="padding-top: 10px ; text-align: center ; max-width:600px; margin : 0 auto ">




<fieldset style="width: 500px; ">
<legend><b>CHANGE PASSWORD</b></legend>
<?php 

session_start();

?>

<h3 class="error-message">
            <?php if(!empty($_SESSION['err_msg'])){
                echo $_SESSION['err_msg'] ;
                unset($_SESSION['err_msg']);

                }
            ?>
          </h3>



<label>Current Password:</label>
<input type="hidden" name="username" value="<?php echo $_SESSION['username'] ?>" ><span class="error">
<input type="text" name="currpass" value="" ><span class="error">*  </span><br><br>
<label>New Password:</label>
<input type="text" name="newpass" value="" ><span class="error">* </span><br><br>
<label>Retype New Password:</label>
<input type="text" name="renewpass" value="" ><span class="error">*  </span><br>
<hr style="border: 0.1px solid;">
<input type="submit" name="submit" value="Submit" style="width: 100px">
</fieldset>


<br>


</form>

			
			
			
 </div>


<?php include 'footer.php'?>