<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>MBWAS | Home</title>
		<style>
			body, html{
				height: 100%;
				width: 100%;
			}
			body, h1, h2, h3, h4, h5, h6{
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
			.btn{
				background-color: #428BCA;
				border-radius: 6px;
				border-color: #357EBD;
				color: white;
				font-size: 18px;
				padding: 5px;
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
	</head>
	<body>
		<div id="containerHeader">
			<h1>MBWAS</h1>
			<h3>Monterey Bay West African Solution</h3>
			<input type="submit" id="fishermenBtn" value="Fishermen" class="btn" />
			<img id="kelp" alt="" src="images/kelp.png" style="vertical-align: middle">
			<input type="submit" id="staffBtn" value="Technical Staff" class="btn" />
		</div>
		<div id="containerFooter">
			<div id="actionZone">
				Select an option above, your
				information will display here.
			</div>
		</div>
	</body>
</html>