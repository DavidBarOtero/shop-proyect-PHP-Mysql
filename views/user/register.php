<?php
require_once 'helpers/utils.php';

?>

<h1>Register</h1>

<?php if (isset($_SESSION['register']) && $_SESSION['register'] == "completed"): ?>
<strong id="alert-green">Register completed</strong>
<?php elseif (isset($_SESSION['register']) && $_SESSION['register'] == "failed"): ?>
<strong id="alert-red">Register failed</strong>

<?php endif;?>



<form action="<?=BASE_URL?>user/save" method="POST">
	<label for="name">Name</label>
	<input type="text" name="name" required />
	<?php echo isset($_SESSION['errors']) ? Utils::showErrors($_SESSION['errors'], 'name') : ""; ?>
	
	<label for="lastName">Last Name</label>
	<input type="text" name="lastName" required />
	<?php echo isset($_SESSION['errors']) ? Utils::showErrors($_SESSION['errors'], 'lastName') : ""; ?>
	
	<label for="email">Email</label>
	<input type="email" name="email" required />
	<?php echo isset($_SESSION['errors']) ? Utils::showErrors($_SESSION['errors'], 'email') : ""; ?>
	
	<label for="password">Password</label>
	<input type="password" name="password" required />
	<?php echo isset($_SESSION['errors']) ? Utils::showErrors($_SESSION['errors'], 'password') : ""; ?>
	
	<button type="submit">Register</button>
</form>

<?php Utils::deleteSession('errors');?>