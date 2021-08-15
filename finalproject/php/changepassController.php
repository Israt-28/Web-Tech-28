<?php
	session_start();
	require_once('../services/userService.php');
	$error = array("");
	if(isset($_POST['submit'])){

		$curpass = $_POST['currpass'];
		$newpass = $_POST['newpass'];
		$username = $_POST['username'];
		$renewpass = $_POST['renewpass'];
		if(empty($curpass) == true || empty($newpass) == true || empty($renewpass) == true){
			$_SESSION['err_msg'] = "Sorry, Fill up all the fields accurately";
			header('location: ../view/teacher_cp.php?error=invalid');

		}

		elseif($newpass!=$renewpass){

			$_SESSION['err_msg'] = "Password does not match";
			header('location: ../view/teacher_cp.php?error=invalid');

		}

		else{

			
			$user = [
			'username'=>$username,
			'curpass'=>$curpass,
			'newpass'=>$newpass
			];

			$status = passwordUpdate($user);
			if ($status) {

				
				$_SESSION['err_msg'] = "Password Changed";
				
				header('location: ../view/teacher_cp.php');
			}else{
				$_SESSION['err_msg'] = "Current Password wrong";
				header('location: ../view/teacher_cp.php');
				
			}


			

			

		}
	}
?>