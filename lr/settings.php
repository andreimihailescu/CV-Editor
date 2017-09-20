<?php   
include 'core/init.php';
protect_page();
include 'includes/overall/header.php';
?><div class="col-md-10 col-md-offset-0"><?php
if (empty($_POST) === false) {
	$required_fields = array('username','password','password_again','first_name','email');
	foreach ($_POST as $key => $value) {
		if (empty($value) && in_array($key, $required_fields) === true) {
			$errors[] = 'Campurile marcate cu asterisc trebuie completate';
			break 1;
		}
	}

	if (empty($errors) === true) {
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
			$errors[] = 'Email-ul nu este valid';
		}
		else
			if (email_exists($_POST['email']) === true && $user_data->email !== $_POST['email']) {
				$errors[] = 'Ne cerem scuze, dar email-ul \'' . sanitize($_POST['email']) . '\' este deja folosit.';
			}
	}
}

if (isset($_GET['success']) === true && empty($_GET['success']) === true) {
	echo '<div class="alert alert-success user-count" role="alert">';
	echo '<h5>Datele au fost actualizate!</h5>';
	echo '</div>';
}
else
	{
		if (empty($_POST) === false && empty($errors) === true) {
			$update_data = array(
				'first_name' 	=> $_POST['first_name'],
				'last_name' 	=> $_POST['last_name'],
				'email' 		=> $_POST['email'],
				);
			update_user($update_data);
			header('Location: settings.php?success');
			exit();
		}
		else
		{
			if (empty($errors) === false) {
				echo '<div class="alert alert-danger user-count" role="alert">';
				echo '<h5>' . output_errors($errors) . '</h5>';
				echo '</div>';
			}
		}
?>

	
	<h1>Setari</h1><hr>
	<form action="" method="post">

			<div class="input-group margin">
				  <span class="input-group-addon" id="basic-addon1">Nume:</span>
				  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="first_name" value="<?php echo $user_data->first_name; ?>">
				</div>
			
				<div class="input-group margin">
				  <span class="input-group-addon" id="basic-addon1">Prenume:</span>
				  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="last_name" value="<?php echo $user_data->last_name; ?>">
				</div>
			
				<div class="input-group margin">
				  <span class="input-group-addon" id="basic-addon1">Email:</span>
				  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="email" value="<?php echo $user_data->email; ?>">
				</div>
			
				<input class="btn btn-success" type="submit" value="Actualizare">
	
	</form>
</div>
<?php
	}
include 'includes/overall/footer.php';
?>
