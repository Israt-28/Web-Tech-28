<?php


require_once('../db/db.php');
//include('../db/db.php');



function getSchedule()
{
	$con = dbConnection();
	$sql = "select * from schedules";
	$result = mysqli_query($con, $sql);
	$schedules = [];
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($schedules, $row);
	};
	return $schedules;
}



function create($schedule)
{
	$con = dbConnection();
	$sql = "insert into schedules values('','{$schedule['class']}','{$schedule['section']}','{$schedule['subject']}','{$schedule['stime']}','{$schedule['etime']}','{$schedule['user_id']}')";

	if (mysqli_query($con, $sql)) {
		echo "registration done";
		return true;
	} else {
		return false;
	}
}


function update($user)
{
	$con = dbConnection();
	$sql = "update users set fullname='{$user['fullname']}',email='{$user['email']}',address='{$user['address']}',contact='{$user['phoneno']}', password='{$user['password']}' where user_id={$user['id']}";

	if (mysqli_query($con, $sql)) {
		return true;
	} else {
		return false;
	}
}

function delete($id)
{
	$con = dbConnection();
	$sql = "delete from schedules where id='{$id}'";

	if (mysqli_query($con, $sql)) {
		return true;
	} else {
		return false;
	}
}




	
	
?>
