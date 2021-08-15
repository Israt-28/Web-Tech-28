<?php
	session_start();
	require_once('../services/messageService.php');
	$error = array("");
	if(isset($_POST['submit'])){

		$to = $_POST['to'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		
		$user_id = $_POST['user_id'];
		
		if(empty($message) == true || empty($subject) == true){
			$_SESSION['err_msg'] = "Sorry, Fill up all the fields accurately";
			header('location: ../view/teacher_msg.php?error=invalid');

		}

		else{

			
			$m = [
			'to'=>$to,
			'subject'=>$subject,
			'message'=>$message,
			
			'user_id'=>$user_id
			];

			$status = create($m);
			if ($status) {

				
				$_SESSION['n_msg'] = "message Sent";
				
				header('location: ../view/teacher_msg.php');
			}else{
				
				
				
				header('location: ../view/teacher_msg.php');
				
			}


			

			

		}
	}


	if(isset($_POST['submit2'])){

		$to = $_POST['to'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		
		$user_id = $_POST['user_id'];
		
		if(empty($message) == true || empty($subject) == true){
			$_SESSION['err_msg'] = "Sorry, Fill up all the fields accurately";
			header('location: ../view/msg.php?error=invalid');

		}

		else{

			
			$m = [
			'to'=>$to,
			'subject'=>$subject,
			'message'=>$message,
			
			'user_id'=>$user_id
			];

			$status = create($m);
			if ($status) {

				
				$_SESSION['n_msg'] = "message Sent";
				
				header('location: ../view/msg.php');
			}else{
				
				
				
				header('location: ../view/msg.php');
				
			}


			

			

		}
	}



$id = $_GET['id'];

if ($id) {
    $status = delete($id);

    if ($status) {
        header('location: ../view/teacher_msg.php');
    } else {
        header('location: ../view/teacher_msg.php?error');
    }
}

$sid = $_GET['sid'];

if ($sid) {
    $status = delete($sid);

    if ($status) {
        header('location: ../view/msg.php');
    } else {
        header('location: ../view/msg.php?error');
    }
}







?>