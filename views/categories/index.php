
<h1>Manage categories</h1>
<a href="<?=BASE_URL?>category/create" class="button">Create Category</a>

<table border="1">
<tr>
<th>ID</th>
<th>NAME</th>
</tr>
<?php while ($cat = $categories->fetch_object()): ?>
<tr>

<td><?=$cat->id?></td>
<td><?=$cat->name?></td>

</tr>








<?php endwhile;?>

</table>




