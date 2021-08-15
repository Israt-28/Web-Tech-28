<?php
	session_start();
	require_once('../services/scheduleService.php');
	$error = array("");
	if(isset($_POST['submit'])){

		$class = $_POST['class'];
		$section = $_POST['section'];
		$subject = $_POST['subject'];
		$stime = $_POST['stime'];
		$etime = $_POST['etime'];
		$user_id = $_POST['user_id'];
		
		if(empty($subject) == true || empty($stime) == true){
			$_SESSION['err_msg'] = "Sorry, Fill up all the fields accurately";
			header('location: ../view/teacher_addschedule.php?error=invalid');

		}

		else{

			
			$schedule = [
				'class' => $class,
			'section'=>$section,
			'subject'=>$subject,
			'stime'=>$stime,
			'etime'=>$etime,
			'user_id'=>$user_id
			];

			$status = create($schedule);
			if ($status) {

				
				$_SESSION['n_msg'] = "Schedule Added";
				
				header('location: ../view/teacher_classsc.php');
			}else{
				
				
				
				header('location: ../view/teacher_addschedule.php');
				
			}


			

			

		}
	}



$id = $_GET['id'];

if ($id) {
    $status = delete($id);

    if ($status) {
        header('location: ../view/teacher_classsc.php');
    } else {
        header('location: ../view/teacher_classsc.php?error');
    }
}






?>