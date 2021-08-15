<?php

require_once('../db/db.php');
//include('../db/db.php');


function getByUsername($username)
{
	$con = dbConnection();
	$sql = "select * from users where username='{$username}'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row;
}

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

function getAllUser()
{
	$con = dbConnection();
	$sql = "select * from users";
	$result = mysqli_query($con, $sql);
	$users = [];
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($users, $row);
	};
	return $users;
}

function validate($user)
{
	$con = dbConnection();
	$sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";

	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);

	if (count($row) > 0) {
		return true;
	} else {
		return false;
	}
}

function create($user)
{
	$con = dbConnection();
	$sql = "insert into users values('','{$user['name']}','{$user['email']}','{$user['password']}','{$user['type']}','{$user['username']}','{$user['dob']}','{$user['gender']}' )";

	if (mysqli_query($con, $sql)) {
		
		return true;
	} else {
		return false;
	}
}
function update($user)
{
	$con = dbConnection();
	$sql = "update users set name='{$user['name']}',email='{$user['email']}', username='{$user['username']}', dob='{$user['dob']}' where username='{$user['username']}'";

	if (mysqli_query($con, $sql)) {
		return true;
	} else {
		return false;
	}
}

function delete($email)
{
	$con = dbConnection();
	$sql = "delete from users where email='{$email}'";

	if (mysqli_query($con, $sql)) {
		return true;
	} else {
		return false;
	}
}

	function raiserUpdate($user){
		$con = dbConnection();
		$sql = "update users set fullname='{$user['fullname']}',email='{$user['email']}',address='{$user['address']}',contact='{$user['phoneno']}' where user_id={$user['id']}";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
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





	function raiserPasswordUpdate($user){
		$con = dbConnection();
		$sql = "update users set password='{$user['newpass']}' where user_id={$user['id']}";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function raiserPicUpdate($user){
		$con = dbConnection();
		$sql = "update users set photo='{$user['photo']}' where user_id={$user['id']}";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
	
?>
