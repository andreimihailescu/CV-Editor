<?php 
	include 'core/init.php';
	logged_in_redirect();
	

	if (empty($_POST) === false) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		if (empty($username) === true || empty($password) === true) {
			$errors[] = 'Trebuie sa completati cu un username si o parola.';
		}
		else if (user_exists($username) === false) {
			$errors[] = 'Nu am putut sa gasim username-ul. Va-ti inregistrat?' ;
		}
		else if (user_active($username) === false) {
			$errors[] = 'Contul dumneavoastra este dezactivat!';
		}
		else
		{

			$login = login($username, $password);
			if ($login === false) {
				$errors[] = 'Combinatia username/parola este incorecta.';
			}
			else
			{
				$_SESSION['nume'] = $row->first_name . ' ' . $row->last_name;
				$_SESSION['user_id'] = $login;
				header('Location: index.php');
				exit();
			}
	
		}		
	}
	else
	{
		$erorrs[] = 'No data received.';
	}

	include 'includes/overall/header.php';
	?><div class="col-md-10 col-md-offset-0"><?php
	if (empty($errors) === false) {
		echo '<div class="alert alert-danger user-count" role="alert">';
		?>
		<h3>&nbsp &nbsp &nbsp Am incercat se va logam dar ...</h3>
		<?php
		echo '<h5>' . output_errors($errors) . '</h5>';
		echo '</div>';
	}
	include 'includes/overall/footer.php';
 ?>
</div>