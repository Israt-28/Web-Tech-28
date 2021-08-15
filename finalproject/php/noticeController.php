<?php
	session_start();
	require_once('../services/noticeService.php');
	$error = array("");
	if(isset($_POST['submit'])){

		$title = $_POST['title'];
		$details = $_POST['details'];
		$username = $_POST['username'];
		
		if(empty($title) == true || empty($details) == true){
			$_SESSION['err_msg'] = "Sorry, Fill up all the fields accurately";
			header('location: ../view/teacher_addnotice.php?error=invalid');

		}

		else{

			
			$notice = [
			'title'=>$title,
			'details'=>$details,
			'username'=>$username
			];

			$status = create($notice);
			if ($status) {

				
				$_SESSION['n_msg'] = "Notice Added";
				
				header('location: ../view/teacher_notice.php');
			}else{
				
				
				
				header('location: ../view/teacher_notice.php');
				
			}


			

			

		}
	}



	if(isset($_POST['submit2'])){
		$id = $_POST['id'];
		$title = $_POST['title'];
		$details = $_POST['details'];
		$username = $_POST['username'];
		
		if(empty($title) == true || empty($details) == true){
			$_SESSION['err_msg'] = "Sorry, Fill up all the fields accurately";
			header('location: ../view/teacher_editnotice.php?error=invalid');

		}

		else{

			
			$notice = [
				'id'=>$id,
			'title'=>$title,
			'details'=>$details,
			'username'=>$username
			];

			$status = update($notice);
			if ($status) {

				
				$_SESSION['n_msg'] = "Notice Updated";
				
				header('location: ../view/teacher_notice.php');
			}else{
				
				
				
				header('location: ../view/teacher_notice.php');
				
			}


			

			

		}
	}



$id = $_GET['id'];

if ($id) {
    $status = delete($id);

    if ($status) {
        header('location: ../view/teacher_notice.php');
    } else {
        header('location: ../view/teacher_notice.php?error');
    }
}






?>