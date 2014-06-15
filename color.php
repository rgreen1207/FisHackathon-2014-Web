<?php

	include_once 'dbConn.php';
	
	if(isset($_POST['approve']))
	{
		$sql = "UPDATE ExistingRegistration SET Approved_Denied=:approval WHERE Approved_Denied='3'";
		$stmt = $dbConn->prepare($sql);
		$stmt->execute(array (":approval"=>'1'));
		header("Location: admin.php");
	}	
	
	if(isset($_POST['deny']))
	{
		$sql = "UPDATE ExistingRegistration SET Approved_Denied=:denial WHERE Approved_Denied='3'";
		$stmt = $dbConn->prepare($sql);
		$stmt->execute(array (":denial"=>'0'));
		header("Location: admin.php");
	}		  
?>