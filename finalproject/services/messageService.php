<?php


require_once('../db/db.php');




function getStudent()
{
	$con = dbConnection();
	$sql = "select * from users where type='student'";
	$result = mysqli_query($con, $sql);
	$student = [];
	while ($row = mysqli_fetch_assoc($result) ){
		array_push($student, $row);
	};
	return $student;
}

function getTeacher()
{
	$con = dbConnection();
	$sql = "select * from users where type='teacher'";
	$result = mysqli_query($con, $sql);
	$student = [];
	while ($row = mysqli_fetch_assoc($result) ){
		array_push($student, $row);
	};
	return $student;
}

function getmyMsg($id)
{
	$con = dbConnection();
	$sql = "select * from messages where userid = '{$id}'";
	$result = mysqli_query($con, $sql);
	$msg = [];
	while ($row = mysqli_fetch_assoc($result) ){
		array_push($msg, $row);
	};
	return $msg;
}

function getmyIMsg($username)
{
	$con = dbConnection();
	$sql = "select * from messages where sendto = '{$username}'";
	$result = mysqli_query($con, $sql);
	$msg = [];
	while ($row = mysqli_fetch_assoc($result) ){
		array_push($msg, $row);
	};
	return $msg;
}






function create($m)
{
	$con = dbConnection();
	$sql = "insert into messages values('','{$m['to']}','{$m['subject']}','{$m['message']}','{$m['user_id']}')";

	if (mysqli_query($con, $sql)) {
		
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
	$sql = "delete from messages where id='{$id}'";

	if (mysqli_query($con, $sql)) {
		return true;
	} else {
		return false;
	}
}




	function passwordUpdate($user){
		$con = dbConnection();
		$sql = "update users set password='{$user['newpass']}' where username ='{$user['username']}' and password='{$user['curpass']}'";

		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
		
	}





	
?>
