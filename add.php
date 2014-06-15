<?php
require_once 'dbConn.php';
if (isset($_POST['insertForm'])){			   
	$sql = "INSERT INTO ExistingRegistration
	            (OwnerName, Email, Phone, Address, Municipality, Gear, VT, Length, Intention)
	            VALUES  
	        (:name, :email, :phone, :address, :mun, :gear, :type, :length, :intention)";
	$stmt = $dbConn->prepare($sql);
	$stmt->execute(array (":name"=>$_POST['name'], ":email"=>$_POST['email'], ":phone"=>$_POST['phone'] ,":address"=>$_POST['address'], ":mun"=>$_POST['mun'], ":gear"=>$_POST['gear'], ":type"=>$_POST['type'], ":length"=>$_POST['length'], ":intention"=>$_POST['intention']));
	header("Location: index.php");
}
?>