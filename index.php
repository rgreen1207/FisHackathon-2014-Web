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
		</style>
		<script>
			function showDiv() {
				var footerFishermen = document.getElementById("footerFishermen");
				var footerDefault = document.getElementById("footerDefault");
				if (footerFishermen.style.display == "none"){
					footerDefault.style.display = "none";
					footerFishermen.style.display = "block";
				}
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
			<input type="submit" id="staffBtn" value="Technical Staff" class="btn" />
		</div>
		<div id="containerFooter">
			<div id="footerDefault">
				Select an option above, your
				information will display here.
			</div>
			<div id="footerFishermen" style="display: none">
				<h2>Register an Existing Vessel</h2>
		
				<p style="color: red">All fields are required below.</p>
				<form name="formData" id="formData" method="post" action="add.php">
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
		</div>
	</body>
</html>