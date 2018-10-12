<!DOCTYPE html>
<html>
<head>
	<title>Cities</title>
</head>
<body>
	<div class="table">
		<table style="text-align: center;">
			<tr>
				<th>S.No</th>
				<th>Name</th>
				<th>Population</th>
			</tr>
			<?php $i=0; foreach($cities as $city): ?>
			<tr>
				<td><?php echo $i+1; ?></td>
				<td><?php echo $city['Name']; ?></td>
				<td><?php echo $city['Population']; ?></td>
			</tr>	
			<?php $i++; endforeach; ?>	
		</table>
	</div>
</body>
</html>