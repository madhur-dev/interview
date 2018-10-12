<!DOCTYPE html>
<html>
<head>
	<title>Language</title>
</head>
<body>
	<div class="table">
		<table style="text-align: center;">
			<tr>
				<th>S.No</th>
				<th>Language</th>
				<th>Percentage</th>
			</tr>
			<?php $i=0; foreach($languages as $language): ?>
			<tr>
				<td><?php echo $i+1; ?></td>
				<td><?php echo $language['Language']; ?></td>
				<td><?php echo $language['Percentage']; ?></td>
			</tr>	
			<?php $i++; endforeach; ?>	
		</table>
	</div>
</body>
</html>