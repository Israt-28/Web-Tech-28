<?php


require_once('../db/db.php');
//include('../db/db.php');




function getTresult($id)
{
	$con = dbConnection();
	$sql = "select * from results where teacherid = '{$id}'";
	$result = mysqli_query($con, $sql);
	$msg = [];
	while ($row = mysqli_fetch_assoc($result) ){
		array_push($msg, $row);
	};
	return $msg;
}

function getmyResult($id)
{
	$con = dbConnection();
	$sql = "select * from results where studentid = '{$id}'";
	$result = mysqli_query($con, $sql);
	$msg = [];
	while ($row = mysqli_fetch_assoc($result) ){
		array_push($msg, $row);
	};
	return $msg;
}


function creater($r)
{
	$con = dbConnection();
	$sql = "insert into results values('','{$r['studentid']}','','{$r['teacherid']}','{$r['class']}','{$r['subject']}','{$r['section']}','{$r['grade']}')";

	if (mysqli_query($con, $sql)) {
		
		return true;
	} else {
		return false;
	}
}




function deleter($id)
{
	$con = dbConnection();
	$sql = "delete from results where id='{$id}'";

	if (mysqli_query($con, $sql)) {
		return true;
	} else {
		return false;
	}
}




	
	
?>
