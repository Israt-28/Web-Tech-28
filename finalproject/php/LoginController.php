<?php
	session_start();
	require_once('../services/userService.php');
	$error = array("");
	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['pass'];
		if(empty($username) == true || empty($password) == true){
			$_SESSION['login_error_msg'] = "Sorry, Fill up all the fields accurately";
			header('location: ../view/login.php?error=invalid');
		}else{
			$user = [
			'username'=>$username,
			'password'=>$password
			];

			$status = validate($user);

			if($status){

				$_SESSION['username'] = $username;
				$u = getByUsername($username);
				$_SESSION['user'] = $u;
				$type = $u['type'];
				$id = $u['id'];

				$_SESSION['type']=$type;
				$_SESSION['id']=$id;


				if(!empty($_POST["rm"])) {

					if($type=="teacher"){

				//setcookie ("type",$_POST["OK"],time()+ (10 * 365 * 24 * 60 * 60));
				setcookie('type', "OK", time()+36000, '/');
				header('location: ../view/teacher_account.php');
				}elseif($type=="student"){
					setcookie('type', "OK", time()+36000, '/');
					header('location: ../view/account.php');
				}
				
			} else {
				
					if($type=="teacher"){

				//setcookie ("type",$_POST["OK"],time()+ (10 * 365 * 24 * 60 * 60));
				setcookie('type', "OK", time()+3600, '/');
				header('location: ../view/teacher_account.php');
				}elseif($type=="student"){
					setcookie('type', "OK", time()+3600, '/');
					header('location: ../view/account.php');
				}
				
			}
				




				//$_SESSION['user_id']=$id;
				//$type=$_SESSION['type'];
				//$id=$_SESSION['user_id'];

				
			}else{
				$_SESSION['login_error_msg'] = "Sorry, that user name or password is incorrect. Please try again.";
				header('location: ../view/login.php?error=invalid');
			}

		}
	}
?>