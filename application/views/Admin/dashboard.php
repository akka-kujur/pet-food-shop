<?php include('header.php'); ?>

<?php print_r($articles) ?>
<div class="container" style="margin-top: 50px;">
	<div class="table">
		<table>
		<thead>
			<tr>
				<th>id</th>
				<th>article title</th>
				<th>edit</th>
				<th>delete</th>
			</tr>
		</thead>
		<tbody>
			<?php if (count($articles)) { ?>
			<?php foreach ($articles as $art) {	?>
			<tr>
				<td>1</td>
				<td>demo test</td>
				<td><a href="#" class="btn btn-primary">Edit</a></td>
				<td><a href="#" class="btn btn-danger">Delete</a></td>
			</tr>
			<?php } ?>
				<?php else { ?>
				<tr>
					<td colspan="3">no data available</td>
				</tr>
			<?php }?>
		<?php } ?>
		</tbody>
	</table>
	</div>
</div>

<?php include('footer.php'); ?>