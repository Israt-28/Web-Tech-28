<?php


require_once('../db/db.php');


function getNotice()
{
	$con = dbConnection();
	$sql = "select * from notices";
	$result = mysqli_query($con, $sql);
	$notices = [];
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($notices, $row);
	};
	return $notices;
}


function getByid($id)
{
	$con = dbConnection();
	$sql = "select * from notices where id='{$id}'";
	$result = mysqli_query($con, $sql);
	$notices = [];
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($notices, $row);
	};
	return $notices;
}



function create($notice)
{
	$con = dbConnection();
	$sql = "insert into notices values('','{$notice['title']}','{$notice['details']}','{$notice['username']}')";

	if (mysqli_query($con, $sql)) {
		echo "registration done";
		return true;
	} else {
		return false;
	}
}


function update($notice)
{
	$con = dbConnection();
	$sql = "update notices set title='{$notice['title']}',detaills='{$notice['details']}' where id={$notice['id']}";

	if (mysqli_query($con, $sql)) {
		return true;
	} else {
		return false;
	}
}

function delete($id)
{
	$con = dbConnection();
	$sql = "delete from notices where id='{$id}'";

	if (mysqli_query($con, $sql)) {
		return true;
	} else {
		return false;
	}
}

	
?>
