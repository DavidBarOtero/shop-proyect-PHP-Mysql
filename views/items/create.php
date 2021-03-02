<?php
require_once 'helpers/utils.php';

?>

<h1>Create Item</h1>

<form action="<?=BASE_URL?>item/save" method="POST">


	<label for="name">Name</label>
	<input type="text" name="name" required />
	<?php echo isset($_SESSION['errors']) ? Utils::showErrors($_SESSION['errors'], 'name') : ""; ?>
    <label for="category"> Category</label>
    <select name="category">
        <?php $categories = Utils::showCategories();?>
        <?php while ($cat = $categories->fetch_object()): ?>
        <option value="<?=$cat->id?>"><?=$cat->name?></option>

        <?php endwhile;?>
    </select>

	<label for="description">Description </label>
	<textarea name="description" required /></textarea>
	<?php echo isset($_SESSION['errors']) ? Utils::showErrors($_SESSION['errors'], 'description') : ""; ?>

	<label for="prize">Prize</label>
	<input type="prize" name="prize" required />
	<?php echo isset($_SESSION['errors']) ? Utils::showErrors($_SESSION['errors'], 'prize') : ""; ?>

	<label for="stock">Stock</label>
	<input type="stock" name="stock" required />
	<?php echo isset($_SESSION['errors']) ? Utils::showErrors($_SESSION['errors'], 'stock') : ""; ?>

	<button type="submit" class="button">Create</button>
</form>

<?php Utils::deleteSession('errors');?>