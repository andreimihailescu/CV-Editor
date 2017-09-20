<?php   
include 'core/init.php';
logged_in_redirect();
include 'includes/overall/header.php';
?><div class="col-md-10 col-md-offset-0"><?php

if (empty($_POST) === false) {
	$required_fields = array('username','password','password_again','first_name','initiala_tata','email','CNP');
	foreach ($_POST as $key => $value) {
		if (empty($value) && in_array($key, $required_fields) === true) {
			$errors[] = 'Campurile marcate cu asterisc trebuie completate.';
			break 1;
		}
	}


	if (empty($errors) === true) {
		if(!ctype_alpha($_POST['username'])){
			$errors[] = 'Va rugam sa folositi doar litere in username';
		}
		if (user_exists($_POST['username']) === true) {
			$errors[] = 'Din pacate username-ul \'' . sanitize($_POST['username']) . '\' este deja folosit.';
		}
		if (preg_match("/\\s/", $_POST['username']) == true) {
			$errors[] = 'Username-ul nu trebuie sa contina spatii.';
		}
		if (strlen($_POST['password']) < 6) {
			$errors[] = 'Parola dumneavoastra trebuie sa aiba minim 6 caractere.';
		}
		if ($_POST['password'] !== $_POST['password_again']) {
			$errors[] = 'Parolele dumneavoastra nu corespund.';
		}
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
			$errors[] = 'Adresa de email nu este valida.';
		}
		if (email_exists($_POST['email']) === true) {
			$errors[] = 'Din pacate email-ul \'' . sanitize($_POST['email']) . '\' este deja folosit.';
		}
	}
}
    	if (isset($_GET['success']) && empty($_GET['success'])) {
    		echo '<div class="alert alert-success user-count" role="alert">';
    		echo '<h5>Ati fost inregistrat cu succes!</h5>';
    		echo '</div>';
    	}
    	else
    	{
    	if(empty($_POST) === false && empty($errors) === true){
    		$register_data = array(
    			'username' 		=> $_POST['username'],
    			'password' 		=> $_POST['password'],
    			'first_name' 	=> $_POST['first_name'],
    			'initiala_tata' => $_POST['initiala_tata'],
    			'last_name' 	=> $_POST['last_name'],
    			'email' 		=> $_POST['email'],
    			'CNP' 			=> $_POST['CNP'],
    			'type' 			=> $_POST['type'],
    			);
    		register_user($register_data);

		   header('Location: register.php?success');

    		exit();
    	}
    	else
    		if(empty($errors) === false)
    	{
    		echo '<div class="alert alert-danger user-count" role="alert">';
			echo '<h5>' . output_errors($errors) . '</h5>';
			echo '</div>';
    	}
    ?>

    
		<h1>Inregistrare</h1>
		<hr>
    <ul>
    	<li>Inscrierea presupune completarea informatiilor de mai jos.</li>
    	<li>Campurile marcate cu asterix (*) sunt obligatorii.</li>
    </ul>

	<form action="" method="post">
		<div class="input-group margin">
		  <span class="input-group-addon" id="basic-addon1">Nume de utilizator*:</span>
		  <input type="text" class="form-control" aria-describedby="basic-addon1" name="username">
		</div>

		<div class="input-group margin">
		  <span class="input-group-addon" id="basic-addon1">Parola*:</span>
		  <input type="password" class="form-control" aria-describedby="basic-addon1" name="password">
		</div>

		<div class="input-group margin">
		  <span class="input-group-addon" id="basic-addon1">Parola din nou*:</span>
		  <input type="password" class="form-control" aria-describedby="basic-addon1" name="password_again">
		</div>

		<div class="input-group margin">
		  <span class="input-group-addon" id="basic-addon1">Nume*:</span>
		  <input type="text" class="form-control" aria-describedby="basic-addon1" name="first_name">
		</div>

		<div class="input-group margin">
		  <span class="input-group-addon" id="basic-addon1">Initiala tatalui*:</span>
		  <input type="text" class="form-control" aria-describedby="basic-addon1" name="initiala_tata">
		</div>

		<div class="input-group margin">
		  <span class="input-group-addon" id="basic-addon1">Prenume:</span>
		  <input type="text" class="form-control" aria-describedby="basic-addon1" name="last_name">
		</div>

		<div class="input-group margin">
		  <span class="input-group-addon" id="basic-addon1">Email*:</span>
		  <input type="text" class="form-control" aria-describedby="basic-addon1" name="email">
		</div>

		<div class="input-group margin">
		  <span class="input-group-addon" id="basic-addon1">CNP*:</span>
		  <input type="text" class="form-control" aria-describedby="basic-addon1" name="CNP">
		</div>

		<div class="input-group margin">
		  	<span class="input-group-addon" id="basic-addon1">Tipul contului:</span>
		  	<select class="form-control" name="type" id="type">
			  	<option value="0" selected>Guest</option>
			  	<option value="1">Administrator</option>
			</select>
		</div>
        
		<input class="btn btn-primary" type="submit" value="Inregistrare">
	</form>
</div>
<?php  
} 
include 'includes/overall/footer.php';
?>
