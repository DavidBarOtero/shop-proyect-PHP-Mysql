<?php
require_once 'helpers/utils.php';

?>
<h1>New Category</h1>

<form action="<?=BASE_URL?>category/save" method="POST">
    <label for="name">Name</label>
    <input type="name" name="name" required />
    <?php echo isset($_SESSION['errors']) ? Utils::showErrors($_SESSION['errors'], 'save-category') : ""; ?>
    
    
    <input type="submit" value="save" class="button"/>
</form>
<?php Utils::deleteSession('errors');?>