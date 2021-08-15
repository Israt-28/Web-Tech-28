<?php
	session_start();
	require_once('../services/userService.php');
	$error = array("");
	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$dob = $_POST['dob'];
		

		
		if(empty($name) == true || empty($email) == true){
			$_SESSION['err_msg'] = "Sorry, Fill up all the fields accurately";
			header('location: ../view/teacher_editprofile.php?error=invalid');

		}

		else{

			
			$user = [
			'name'=>$name,
			'email'=>$email,
			'username'=>$username,
			'dob'=>$dob
			];

			$status = update($user);
			if ($status) {

				
				$_SESSION['n_msg'] = "Profile Updated";
				
				header('location: ../view/teacher_view.php');
			}else{
				
				
				
				header('location: ../view/teacher_editprofile.php');
				
			}


			

			

		}
	}



if(isset($_POST['submit2'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$dob = $_POST['dob'];
		

		
		if(empty($name) == true || empty($email) == true){
			$_SESSION['err_msg'] = "Sorry, Fill up all the fields accurately";
			header('location: ../view/teacher_editprofile.php?error=invalid');

		}

		else{

			
			$user = [
			'name'=>$name,
			'email'=>$email,
			'username'=>$username,
			'dob'=>$dob
			];

			$status = update($user);
			if ($status) {

				
				$_SESSION['n_msg'] = "Profile Updated";
				
				header('location: ../view/view.php');
			}else{
				
				
				
				header('location: ../view/editprofile.php');
				
			}


			

			

		}
	}





?>