<!DOCTYPE html>
<html>
	<head>
		<link href="css/bootstrap.css" rel="stylesheet">
		<!--<link href="css/app.css" rel="stylesheet">-->
		<title>Home page</title>
	</head>
	<body>
		<h1 class="text-danger">This is just a test</h1>
		<labl for="exampleFormControlSelect1"> المدينة </labl>
		<select class="form-control" id="exampleFormControlSelect1">
		
		<?php
			$i = array("Cairo","Giza","Alex","Aswan");
			foreach($i as $x){
				echo "<option class=\"bg-primary text-light\">". $x . "</option>";
			}
			
		?> 
		<?php  echo '<hr> Welcome to our <h1> Website</h1>';?>

		
		
		
		
		</select>
	
	
	
	
	
	
	
	<script src="js/bootstrap.js"></script>
	</body>

</html>