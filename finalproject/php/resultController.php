<?php
	session_start();
	require_once('../services/resultService.php');
	$error = array("");
	if(isset($_POST['submit'])){

		$class = $_POST['class'];
		$section = $_POST['section'];
		$subject = $_POST['subject'];
		$grade = $_POST['grade'];
		$studentid = $_POST['student'];
		$teacherid = $_POST['user_id'];
		
		if(empty($grade) == true || empty($subject) == true){
			$_SESSION['err_msg'] = "Sorry, Fill up all the fields accurately";
			header('location: ../view/teacher_addresult.php?error=invalid');

		}

		else{

			
			$m = [
				'class' => $class,
			'section'=>$section,
			'subject'=>$subject,
			'grade'=>$grade,
			'studentid'=>$studentid,
			'teacherid'=>$teacherid
			];

			$status = creater($m);
			if ($status) {

				
				$_SESSION['n_msg'] = "Result Added";
				
				header('location: ../view/teacher_addresult.php');
			}else{
				
				
				
				header('location: ../view/teacher_addresult.php');
				
			}


			

			

		}
	}



$id = $_GET['id'];

if ($id) {
    $status = deleter($id);

    if ($status) {
        header('location: ../view/teacher_addresult.php');
    } else {
        header('location: ../view/teacher_addresult.php?error');
    }
}






?>