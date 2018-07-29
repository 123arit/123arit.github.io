<!DOCTYPE html>
<html>
<head>
	<title>Parking Charge</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<script type="text/javascript" src="bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="text-center alert alert-success" role="alert">
		<h3>Car Parking App</h3>
	</div>

	<div class="text-center alert alert-light" role="alert">
		<h3>Parking Slot Invoice:</h3>
	</div>

</div>

<?php 

	if($_POST){

	$duration=$_POST['duration'];

	$amount_in_rs= 50* $duration;

    }
?>
<div class="text-center alert alert-secondary" role="alert">
		<h3>Rs: <?php echo $amount_in_rs ;?> /-<br> For <?php echo $duration;?> Hours <br><br> is charged for the selected parking slot. <br><br></h3>
	</div>

</body>
</html>	