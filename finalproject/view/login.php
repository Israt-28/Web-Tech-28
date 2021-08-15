<?php include 'header.php'?>
		<img src="login.jpeg" />
		<?php include 'menu.php'?>
		<div class = "home">
			



<form method="post" action="../php/LoginController.php" style="padding-top: 10px ; text-align: center ; max-width:600px; margin : 0 auto ; margin-top:100px">

<fieldset style="width: 500px; ">
<legend><b>Login</b></legend>
<h3 class="error-message">
	<?php session_start(); ?>
            <?php 
            if(!empty($_SESSION['login_error_msg'])){
                echo $_SESSION['login_error_msg'] ;
                unset($_SESSION['login_error_msg']);
                }
                
            ?>
          </h3>
<label>User Name:</label>
<input type="text" name="username" value="" ><span class="error">*  </span><br><br>
<label>Password:</label>
<input type="text" name="pass" value="" ><span class="error">* </span><br>
<hr style="border: 0.1px solid;">
<input type="checkbox" name = "rm">
<label>Remember me?</label><br><br>
<input type="submit" name="submit" value="Submit" style="width: 100px"> 
</fieldset>




<br>

</form>
</div>
<?php include 'footer.php'?>