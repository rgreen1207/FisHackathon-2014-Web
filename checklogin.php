<?php
 session_start();
//ADMIN LOGIN 
if (isset($_POST['Login'])) {  //login form has been submitted
    include 'dbConn.php';
		$sql = "SELECT * FROM CampAdmins " .
        " WHERE Username  = :username "  .
        " AND Password  = :password";
        $stmt = $dbConn->prepare($sql);
        $stmt->execute(array(":username"=>$_POST['username'],":password"=>sha1($_POST['password'])));
        $result = $stmt->fetch();
		print_r($result);
		if(empty($result)){
			header("Location: home.php?error=Wrong Info");
		}
		else{
			$_SESSION['username'] = $record["username"];
			$_SESSION['password'] = $record["password"];
			header("Location:admin.php");
		}
	
}

?>