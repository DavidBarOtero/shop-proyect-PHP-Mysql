<h1>Manage categories</h1>
<a href="<?=BASE_URL?>category/create" class="button">Create Category</a>

<table border="1">
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>ACTIONS</th>
	</tr>
	<?php while ($cat = $categories->fetch_object()): ?>
	<tr>
		<td><?=$cat->id?></td>
		<td><?=$cat->name?></td>
		<td style="display: flex; justify-content: space-evenly">
			<a id="button-yellow" href="<?=BASE_URL?>category/edit?id=<?=$cat->id?>"
				>Edit</a
			><a id="button-red" href="<?=BASE_URL?>category/delete?id=<?=$cat->id?>"
				>Delete</a
			>
		</td>
	</tr>

	<?php endwhile;?>
</table>

