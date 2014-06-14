<?php

	require_once 'dbConn.php';
 
	if (isset($_POST['formData'])){
		echo '<script>alert("Success");</script>';
	}
	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Register an Existing Vessel</title>
		<style>
			input[type="text"]{
				width:200px
			}
			body{
				background: #606060; 
				color: white;
			}
		</style>
	</head>
	<body>
		<a href="index.php">Home</a>
		
		<h2>Register an Existing Vessel</h2>
		
		<p>All fields are required below.</p>
		<table>
			<form name="formData" id="formData" method="post" action="existing.php">
				<tr>
					<td><label for="name">Owner's Name:</label></td>
					<td><input name="name" type="text" id="name" placeholder="Enter your name"></td>
				</tr>
				<tr>
					<td><label for="email">Email:</label></td>
					<td><input name="email" type="text" id="email" placeholder="Enter email"></td>
				</tr>
				<tr>
					<td><label for="phone">Phone Number:</label></td>
					<td><input name="phone" type="text" id="phone" placeholder="Enter phone number"></td>
				</tr>
				<tr>
					<td><label for="number">Vessel's Number</label></td>
					<td><input name="number" type="text" id="number" placeholder="Vessel's Number"></td>
				</tr>
				<tr>
					<td><label for="Vessel Type">Vessel Type</label></td>
					<td><input name="type" type="text" id="type" placeholder="Vessel Type"></td>
				</tr>
				<tr>
					<td><label for="Vessel Type">Current Registration Number</label></td>
					<td><input name="current" type="text" id="current" placeholder="Current Registration Number"></td>
				</tr>
				<tr>
					<td><label for="message">Intention:</label></td>
					<td><textarea name="message" rows="5" id="message" placeholder="What kind of fish are you planning to catch and how many?"></textarea></td>
				</tr>
				<tr>
					<td><label for="photo">Photo of Vessel:</label></td>
					<td><input type="file" id="file" name="file" multiple="multiple" /></td>
				</tr>
				<tr>
					<td><button type="submit">Submit</button></td>
				</tr>
			</form>
		</table>
	</body>
</html>