<!DOCTYPE html>
<html>
<head>
	<title>Country</title>
</head>
<body>
	<h4><a href="<?php echo base_url(); ?>Country/rangeForm">Filter By Population</a></h4>
	<div class="table">
		<table style="text-align: center;">
			<tr>
				<th>S.No</th>
				<th>Name</th>
				<th>Code</th>
				<th>Continent</th>
				<th>Surface Area</th>
				<th>Population</th>
				<th>Total Cities</th>
				<th>Total Languages</th>
				<th>Capital</th>
			</tr>
			<?php $i=0; foreach($countries as $country): ?>
			<tr>
				<td><?php echo $i+1; ?></td>
				<td><?php echo $country['Name']; ?></td>
				<td><?php echo $country['Code']; ?></td>
				<td><?php echo $country['Continent'] ?></td>
				<td><?php echo $country['SurfaceArea']; ?></td>
				<td><?php echo $country['Population']; ?></td>
				<td><?php echo $cities[$i]['total']; ?></td>
				<td></td>
				<td></td>
				<td><a href="<?php echo base_url(); ?>Country/Cities/<?php echo $country['Code']; ?>">Cities</a></td>
				<td><a href="<?php echo base_url(); ?>Country/Language/<?php echo $country['Code']; ?>">Languages</a></td>
				<td><a href="<?php echo base_url(); ?>Country/delete/<?php echo $country['Code']; ?>">Delete</a></td>
			</td>
			</tr>	
			<?php $i++; endforeach; ?>	
		</table>
	</div>
</body>
</html>