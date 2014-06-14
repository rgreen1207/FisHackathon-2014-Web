<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register an Existing Vessel</title>
    <meta name="description">
    <meta name="author" content="">
    
    <style>
    	input[type="text"]
		{
    		width:200px
		}
		body
		{
			background: #606060; 
			color: white;
		}
    </style>
    
  </head>

  <body>
  	
  	   <div id="container" class="container">
          <a href="index.php">Home</a>

      	<div class="row space30"> <!-- row 1 begins -->
      

        
            <div class="col-md-6">
              	<h2>Register an Existing Vessel</h2>
              	<p>All fields are required below.</p>
                
                <table>
                <form method="post" action="mailto:rgreen@csumb.edu?subject=VesselRegestration" enctype="text/plain">
                  <tr><div class="form-group">
                    <td><label for="name">Owner's Name:</label></td>
                    <td><input name="name" type="text" class="form-control" id="name" placeholder="Enter your name"></td>
                  </div></tr>
                  <tr><div class="form-group">
                    <td><label for="email">Email:</label></td>
                    <td><input name="email" type="text" class="form-control" id="email" placeholder="Enter email"></td>
                  </div></tr>
                  <tr><div class="form-group">
                    <td><label for="phone">Phone Number:</label></td>
                    <td><input name="phone" type="text" class="form-control" id="phone" placeholder="Enter phone number"></td>
                  </div></tr>
                  <tr><div class="form-group">
                    <td><label for="number">Vessel's Number</label></td>
                    <td><input name="number" type="text" class="form-control" id="number" placeholder="Vessel's Number"></td>
                  </div></tr>
                  <tr><div class="form-group">
                  	<td><label for="Vessel Type">Vessel Type</label></td>
                  	<td><input name="type" type="text" class="form-control" id="type" placeholder="Vessel Type"></td>
                  </div></tr>
                  <tr><div class="form-group">
                  	<td><label for="Vessel Type">Current Registration Number</label></td>
                  	<td><input name="cuurent" type="text" class="form-control" id="current" placeholder="Current Registration Number"></td>
                  </div></tr>
                  <tr><div class="form-group">
                    <td><label for="message">Inention:</label></td>
                  	<td><textarea name="message" rows="5" class="form-control" id="message" placeholder="What kind of fish are you planning to catch and how many?"></textarea></td>
				  </div></tr>
				  <tr><div class="form-group">
                    <td><label for="photo">Photo of Vessel:</label></td>
                  	<td><input type="file" id="file" name="file" multiple="multiple" /></td>
				  </div></tr>
                  <div class="checkbox">
                  </div> 
                  <tr><td><button type="submit" class="btn btn-default">Submit</button></td></tr>
                </form>
				</table>
           </div>
  </body>
</html>