		<?php
//session_start();
require_once('../php/sessionController.php');
 require_once('../services/userService.php');
require_once('../php/cookieController.php');

$username = $_SESSION['username'];


$user = getByUsername($username);

?>


		<?php 
	
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
			
			<h1 style="text-align:center">Edit Profile</h1>
			
			
			
			</div>


			<center>
				
				 <form method="post" action="../php/profileController.php" style="padding-top: 10px ; text-align: center ; max-width:600px; margin : 0 auto ">  
				
				<fieldset style="width: 500px; ">
				<legend><b>Profile</b></legend>  
                    
                     <br />  
                     <label>Name</label>  
                     <input type="text" name="name" value="<?= $user['name'] ?>" /><br />  <br />
                     <label>E-mail</label>
                     <input type="text" name = "email" value="<?= $user['email'] ?>"  /><br /><br />
                    
                     <input type="hidden" name = "username" value="<?= $user['username'] ?>" /><br /><br />
                      <label>Date of Birth</label>
                     <input type="text" name = "dob" value="<?= $user['dob'] ?>" /><br /><br />

                  
                    
                    
                     
                     <input type="submit" name="submit2" value="Submit" /><br />                      
                   
					</fieldset>
                </form>  
				
			</center>










<?php include 'footer.php'?>