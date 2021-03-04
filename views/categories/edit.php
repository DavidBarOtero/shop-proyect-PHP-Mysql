<?php
require_once 'helpers/Utils.php';



?>

<h1>Update Category</h1>

<form action="<?=BASE_URL?>category/update" method="POST">
    <label for="name">Name</label>
    <input type="name" name="name" required />
    <?php echo isset($_SESSION['errors']) ? Utils::showErrors($_SESSION['errors'], 'save-category') : ""; ?>


    <input type="submit" value="Update" class="button"/>
</form>
<?php Utils::deleteSession('errors');?>