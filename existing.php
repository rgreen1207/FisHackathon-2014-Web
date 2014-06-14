<?php

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Register an Existing Vessel</title>
		<style>
			.formData{
				width: 200px;
			}
			.formSelect, .form2{
				width: 100px;
			}
			body{
				background: #ffffff; 
			}
			label{
				display: block;
				text-align: right;
			}
		</style>
	</head>
	<body>
		<h2>Register an Existing Vessel</h2>
		
		<p style="color: red">All fields are required below.</p>
		<form name="formData" id="formData" method="post" action="existing.php">
			<table>
				<tr>
					<td><label for="ownerName">Owner Name: </label></td>
					<td><input type="text" id="ownerName" class="formData" required /></td>
				</tr>
				<tr>
					<td><label for="email">Email: </label></td>
					<td><input type="email" id="email" class="formData" required /></td>
				</tr>
				<tr>
					<td><label for="phone">Phone: </label></td>
					<td><input type="tel" id="phone" class="formData" required /></td>
				</tr>
				<tr>
					<td><label for="address">Address: </label></td>
					<td><input type="text" id="address" class="formData" required /></td>
				</tr>
				<tr>
					<td><label for="municipality">Municipality: </label></td>
					<td>
						<select id="municipality" class="formSelect" required>
							<option value="none" selected>Select</option>
							<option value="Cantilan">Cantilan</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="gear">Gear: </label></td>
					<td><input type="text" id="gear" class="formData" required /></td>
				</tr>
				<tr>
					<td><label for="vesselType">Vessel Type: </label></td>
					<td>
						<select id="vesselType" class="formSelect" required>
							<option value="none" selected>Select</option>
							<option value="M">M</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="length">Length(m): </label></td>
					<td><input type="number" id="length" 
						step="0.1" min="1" max="500" value="1" class="form2" required /></td>
				</tr>
				<tr>
					<td><label for="intention">Intention: </label></td>
					<td><input type="textarea" id="intention" class="formData" required /></td>
				</tr>
				<tr></tr>
				<tr>
					<td align="center" colspan="2">
						<input type="submit" value="Submit" />
						<input type="button" value="Cancel" />
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>