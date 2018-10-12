<!DOCTYPE html>
<html>
<head>
	<title>Country</title>
</head>
<body>
	<h3>Enter Minimum and Mamimum Population</h3>
	<form method="POST" action="<?php echo base_url(); ?>Country/Range">
		<input type="text" name="min" placeholder="MINIMUM">
		<input type="text" name="max" placeholder="MAXIMUM">
		<input type="submit" name="submit" value="SUBMIT" class="btn btn-success">
	</form>
</body>
</html>