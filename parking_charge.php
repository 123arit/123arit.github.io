<!DOCTYPE html>
<html>
<head>
	<title>Parking Charge</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<script type="text/javascript" src="bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="text-center alert alert-success">
		<h3>Car Parking App</h3>
	</div>

	<div class="text-center alert alert-warning">
		<h3>Parking Duration</h3>
	</div><br><br><br>

	<div class="panel-body" >

 		
 		<form name="myForm" action="invoice.php" method="post"  onsubmit="return validateForm()">
 			<div class="from-group">
 				<label for="duration"><h3> Parking Slot Duration</h3></label>
 				<input type="text" class="form-control" name="duration" id="duration" placeholder="Enter The Parking Slot Duration in Hrs">
 			</div><br><br>
 


 			<input class="btn btn-primary" type="submit" name="submit" value="Confirm">

 		</form>



 	</div>
 	
</div>

<script>
	
	function validateForm(){
		var x = document.forms["myForm"]["duration"].value;
		if(x==""){
			alert("The Duration Field Must Not Be Empty!");
			return false;
		}

	}
</script>

</body>
</html>