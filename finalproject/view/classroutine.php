						<?php
//session_start();
require_once('../php/sessionController.php');
 require_once('../services/scheduleService.php');
require_once('../php/cookieController.php');



$schedule = getSchedule();

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



	<div class="table-responsive"> 
<center>
<h4>Class Schedule </h4>	
<br>

<br>
<br>
</center>

                     <table class="table table-bordered">  
                          <tr>  
                               <th>Subject</th> 
                               <th>Class</th>  
                               <th>Section</th>  
                               <th>Start Time</th>   
                                <th>End Time</th>   
                                
                          </tr>  

                         <?php foreach ($schedule as $s) {  ?>
                          	<tr>
                          		<td><?= $s['subject'] ?></td>
                          		<td><?= $s['class'] ?></td>
                          		<td><?= $s['section'] ?></td>
                          		<td><?= $s['stime'] ?></td>
                          		<td><?= $s['etime'] ?></td>
                          		
                          	</tr>


                          <?php } ?>
                         


                     </table>  

                       <center>
                     <h3 class="error-message">
            <?php if(!empty($_SESSION['n_msg'])){
                echo $_SESSION['n_msg'] ;
                unset($_SESSION['n_msg']);

                }
            ?>
          </h3>
          </center>
                   </div>
				   </div>


<?php include 'footer.php'?>