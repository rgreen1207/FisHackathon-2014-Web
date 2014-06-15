<?php
session_start();
require_once 'dbConn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   

  <title>Admin - Vessel Registration</title>

     <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
</style>
</head>

<body width= "300px" height="300px" bgcolor="gray">

	<!--<button id="NR" align="center">View New Registration</button></br>
	<button id="RR"align="center">View Recurring Registration</button></br>
	<!--<form method="POST" action="campers.php"><input type="submit" value="View Campers" id="view" align="center"/></form>
	<form method="POST" action="camps.php"><input type="submit" value="View Camps" id="view" align="center"/></form>--><?php
	echo "<form method='POST' action='index.php'><input type='submit' value='LogOut' id='view' align='center'/></form>";
	session_destroy();
	?>
	
    <div id="NewR" align="center">
	<?php
		$sql = "SELECT * FROM ExistingRegistration ORDER BY RequestExistingNum ASC";
		$stmt = $dbConn->prepare($sql);
		$stmt->execute();
		$vessels = $stmt->fetchAll();
		
		

		echo "<table align='center' border='1'><tr><td>Request Number</td><td>Owner's Name</td><td>Email</td><td>Phone</td><td>Address</td><td>Municipality</td><td>Gear</td><td>Vessel Type</td><td>Length</td><td>Intention</td><td>Approve/Deny</td></tr>";
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
				echo "<tr bgcolor='".$color."'><td align='center'>" . $vessel['RequestExistingNum'] . "</td><td>" . $vessel['OwnerName'] ."</td><td>" . $vessel['Email'] . "</td><td>" . $vessel['Phone'] . "</td><td>";
				echo $vessel['Address'] . "</td><td>" . $vessel['Municipality'] . "</td><td>" . $vessel['Gear'] . "</td><td>" . $vessel['VT'] . "</td><td>" . $vessel['Length'] . "</td><td>" . $vessel['Intention'] . "</td><td>";
				echo "<form method='POST' action='color.php'><input type='submit' value='Approve' name='approve' id='approve' align='center'/>";
				echo "<input type='submit' value='Deny' name='deny' id='deny' align='center'/></form>";
				echo "</td></td></tr>";				
		}
		echo "</table>";
?>

  </div>
	

</body>
</html>
