<?php 
	session_start();
	include_once 'dbConn.php';
	
	if (isset($_POST['logOut'])) {
		session_destroy();
		header("Location: index.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet"  />
		<title>MBWAS | Home</title>
		<style>
			body, html{
				height: 100%;
				width: 100%;
			}
			h1, h3{
				color: #f8f8f8;
				font-family: 'Open Sans', sans-serif;
				font-weight: 700;
				line-height: 20%;
				padding: 0px;
				text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.6);
			}
			h1{
				font-size: 50px;
			}
			label{
				display: block;
				text-align: right;
			}
			.btn{
				background-color: #428BCA;
				border-radius: 6px;
				border-color: #357EBD;
				color: white;
				font-size: 18px;
				padding: 5px;
			}
			.formData{
				width: 200px;
			}
			.formSelect, .form2{
				width: 100px;
			}
			#containerHeader{
				display: block;
				float: middle;
				background: url(Images/rereg.jpg) no-repeat center center;
				background-size: cover;
				left: 50%;
				top: 25%;
				margin-left: -400px;
				margin-top: -100px;
				min-height: 200px;
				padding-bottom: 20px;
				padding-top: 20px;
				position: relative;
				text-align: center;
				width: 800px;
			}
			#containerFooter{
				border: 2px dashed black;
				display: block;
				float: middle;
				background-color: #f8f8f8;
				left: 50%;
				top: 65%;
				margin-left: -300px;
				margin-top: -200px;
				min-height: 400px;
				padding-bottom: 20px;
				padding-top: 20px;
				position: relative;
				text-align: center;
				width: 600px;
			}
			#NewR{
				display: block;
				float: middle;
				background-color: #ffffff;
				top: 65%;
				margin-top: -200px;
				min-height: 400px;
				padding-bottom: 20px;
				padding-top: 20px;
				position: relative;
				text-align: center;
			}
		</style>
		<script>
			function showDiv() {
				var footerFishermen = document.getElementById("footerFishermen");
				var footerDefault = document.getElementById("footerDefault");
				if (footerFishermen.style.display == "none"){
					footerDefault.style.display = "none";
					footerStaffLogin.style.display = "none";
					footerFishermen.style.display = "block";
				}
			}
			function showLoginDiv(){
				var footerStaffLogin = document.getElementById("footerStaffLogin");
				var footerDefault = document.getElementById("footerDefault");
				if (footerStaffLogin.style.display == "none"){
					footerDefault.style.display = "none";
					footerFishermen.style.display = "none";
					footerStaffLogin.style.display = "block";
				}
			}
			function hideFooterDiv(){
				var footerDiv = document.getElementById("containerFooter");
				footerDiv.style.display = "none";
			}
		</script>
	</head>
	<body>
		<div id="containerHeader">
			<h1>MBWAS</h1>
			<h3>Monterey Bay West African Solution</h3>
			<input type="submit" id="fishermenBtn" value="Fishermen" class="btn" 
				onclick="showDiv();" />
			<img id="kelp" alt="" src="Images/kelp.png" style="vertical-align: middle">
			<input type="submit" id="staffBtn" value="Technical Staff" class="btn" 
				onclick="showLoginDiv();" />
		</div>
		<div id="containerFooter">
			<div id="footerDefault">
				Select an option above, your
				information will display here.
			</div>
			<div id="footerFishermen" style="display: none">
				<h2>Register an Existing Vessel</h2>
		
				<p style="color: red">All fields are required below.</p>
				<form name="formData" id="formData" method="post" action="index.php">
					<table>
						<tr>
							<td><label for="ownerName">Owner Name: </label></td>
							<td><input type="text" name="name" id="name" class="formData" required /></td>
						</tr>
						<tr>
							<td><label for="email">Email: </label></td>
							<td><input type="email" name="email" id="email" class="formData" required /></td>
						</tr>
						<tr>
							<td><label for="phone">Phone: </label></td>
							<td><input type="tel" name="phone" id="phone" class="formData" required /></td>
						</tr>
						<tr>
							<td><label for="address">Address: </label></td>
							<td><input type="text" name="address" id="address" class="formData" required /></td>
						</tr>
						<tr>
							<td><label for="municipality">Municipality: </label></td>
							<td>
								<select id="municipality" name="mun" class="formData" required>
									<option value="none" selected>Select</option>
									<option value="Cantilan">Cantilan</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><label for="gear">Gear: </label></td>
							<td><input type="text" name="gear" id="gear" class="formData" required /></td>
						</tr>
						<tr>
							<td><label for="vesselType">Vessel Type: </label></td>
							<td>
								<select id="vesselType" name="type" class="formData" required>
									<option value="none" selected>Select</option>
									<option value="M">Motor</option>
									<option value="P">Paddle</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><label for="length">Length(m): </label></td>
							<td><input type="number" name="length" id="length" 
								step="0.1" min="1" max="500" value="1" class="formData" required /></td>
						</tr>
						<tr>
							<td><label for="intention">Intention: </label></td>
							<td><input type="textarea" name="intention" id="intention" class="formData" required /></td>
						</tr>
						<tr></tr>
						<tr>
							<td align="center" colspan="2">
								<input type="submit" name="insertForm" id="insertForm" value="Submit" />
								<input type="button" id="cancel" onclick="location.href='index.php';" value="Cancel" />
							</td>
						</tr>
					</table>
				</form>
			</div>
			<div id="footerStaffLogin" style="display: none">
				<form name="form1" method="post" action="index.php">
					<table width="300" border="10" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
						<tr>
						<td>
						<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
						<tr>
						<td colspan="3"><strong>Admin Login</strong></td>
						</tr>
						<tr>
						<td width="78">Username</td>
						<td width="6">:</td>
						<td width="294"><input name="username" type="text" name="username" value=""></td>
						</tr>
						<tr>
						<td>Password</td>
						<td>:</td>
						<td><input name="password" type="password" name="password"></td>
						</tr>
						<tr>
						<td><input type="submit" name="Login" value="Login"></td>
						</tr>
						</table>
						</td>
						
						</tr>
					</table>
				</form>
			</div>
		</div>
	</body>
</html>

<?php 
	//ADMIN LOGIN
	if (isset($_POST['Login'])) {  //login form has been submitted
		$sql = "SELECT * FROM CampAdmins WHERE Username=:username AND Password=:password";
		$stmt = $dbConn->prepare($sql);
		$stmt->execute(array(
			":username"	=>	$_POST['username'],
			":password"	=>	sha1($_POST['password'])
		));
		$result = $stmt->fetch();
		if(empty($result)){
			header("Location: index.php?error=Wrong Info");
		}
		else{
			$_SESSION['username'] = $result["Username"];
			$_SESSION['password'] = $result["Password"];
			
			echo "<script>hideFooterDiv();</script>
				<div id='NewR' align='center'>
					<form method='POST' action='index.php'>
						<input type='submit' value='Log Out' id='logOut' name='logOut' class='btn' />
					</form>";
			
			$sql = "SELECT * FROM ExistingRegistration ORDER BY RequestExistingNum ASC";
			$stmt = $dbConn->prepare($sql);
			$stmt->execute();
			$vessels = $stmt->fetchAll();

			echo "
				<table align='center' border='1'>
					<tr>
						<td>Request Number</td>
						<td>Owner's Name</td>
						<td>Email</td>
						<td>Phone</td>
						<td>Address</td>
						<td>Municipality</td>
						<td>Gear</td>
						<td>Vessel Type</td>
						<td>Length</td>
						<td>Intention</td>
						<td>Approve/Deny</td>
					</tr>";
			foreach($vessels as $vessel) {
				if($vessel['Approved_Denied'] == 0)
				{
					$color="red";
				}
				else if($vessel['Approved_Denied'] == 1)
				{
					$color="green";
				}
				else
				{
					$color="";
				}
				echo "
					<tr bgcolor='".$color."'>
						<td align='center'>" . $vessel['RequestExistingNum'] . "</td>
						<td>" . $vessel['OwnerName'] . "</td>
						<td>" . $vessel['Email'] . "</td>
						<td>" . $vessel['Phone'] . "</td>
						<td>" . $vessel['Address'] . "</td>
						<td>" . $vessel['Municipality'] . "</td>
						<td>" . $vessel['Gear'] . "</td>
						<td>" . $vessel['VT'] . "</td>
						<td>" . $vessel['Length'] . "</td>
						<td>" . $vessel['Intention'] . "</td>
						<td>" . "
							<form method='POST' action='index.php'>
								<input type='submit' value='Approve' id='approve' align='center' />
								<input type='submit' value='Deny' id='deny' align='center' />
								<input type='hidden' id='reference' name='reference' value=" . $vessel['RequestExistingNum'] . " />
							</form>
						</td>
					</tr>";
			}
			echo "</table></div>";
		}
	}
	if (isset($_POST['insertForm'])){
		$sql = "INSERT INTO ExistingRegistration (OwnerName, Email, Phone, Address, Municipality, Gear, VT, Length, Intention)
				VALUES(:name, :email, :phone, :address, :mun, :gear, :type, :length, :intention)";
		$stmt = $dbConn->prepare($sql);
		$stmt->execute(array (
			":name"	=>	$_POST['name'],
			":email"	=>	$_POST['email'],
			":phone"	=>	$_POST['phone'],
			":address"	=>	$_POST['address'],
			":mun"	=>	$_POST['mun'],
			":gear"	=>	$_POST['gear'],
			":type"	=>	$_POST['type'],
			":length"	=>	$_POST['length'],
			":intention"	=>	$_POST['intention']
		));
		header("Location: index.php");
	}
	if(isset($_POST['approve']))
	{
		header("Location: http://www.google.com");
		$sql = "UPDATE ExistingRegistration SET Approved_Denied=:approval WHERE RequestExistingNum=:value";
		$stmt = $dbConn->prepare($sql);
		$stmt->execute(array (
			":approval" => '1',
			":value" => $_POST['reference']
		));
	}
	if(isset($_POST['deny']))
	{
		$sql = "UPDATE ExistingRegistration SET Approved_Denied=:denial WHERE RequestExistingNum=:value";
		$stmt = $dbConn->prepare($sql);
		$stmt->execute(array (
			":denial"	=>	'0',
			":value"	=>	$_POST['reference']
		));
	}
?>