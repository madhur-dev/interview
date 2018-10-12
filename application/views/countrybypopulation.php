<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="table">
		<table style="text-align: center;">
			<tr>
				<th>S. No</th>
				<th>Name</th>
			</tr>
			<?php $i=1; foreach($ranges as $range): ?>
			<tr>
				<td><?php echo $i++; ?></td>
				<td><?php echo $range['Name']; ?></td>
			</tr>	
			<?php endforeach; ?>	
		</table>
	</div>
</body>
</html>