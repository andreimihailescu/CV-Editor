<?php   
include 'core/init.php';
protect_page();


if (empty($_POST) === false) {
	$required_fields = array('current_password','password','password_again');
    foreach ($_POST as $key => $value) {
        if (empty($value) && in_array($key, $required_fields) === true) {
            $errors[] = 'Campurile marcate cu asterisc trebuie completate';
            break 1;
        }
    }

    if (md5($_POST['current_password']) === $user_data->password) 
    {
        if (trim($_POST['password']) !== trim($_POST['password_again']))
        {
            $errors[] = 'Parolele noi nu corespunde.';
        }
        else
        {
            if (strlen($_POST['password']) < 6) 
            {
               $errors[] = 'Parola trebuie sa contina minim 6 caractere.';
            }
        }
    }
    else
    {
        $errors[] = 'Parola curenta este incorecta';
    }
}
include 'includes/overall/header.php';
?>
    <div class="col-md-10 col-md-offset-0">


    <?php
        if (isset($_GET['success']) && empty($_GET['success'])) 
        {
            echo '<div class="alert alert-success user-count" role="alert">';
            echo '<h5>Parola a fost schimbata.</h5>';
            echo '</div>';
        }
        else
        {
        if (empty($_POST) === false && empty($errors) === true) 
        {
            change_password($session_user_id, $_POST['password']);
            header('Location: changepassword.php?success');
        }
        else
        {
            if (empty($errors) === false) 
            {
                echo '<div class="alert alert-danger user-count" role="alert">';
                echo '<h5>' . output_errors($errors) . '</h5>';
                echo '</div>';
            }
        }

    ?>
    <h1>Schimbare parola</h1><hr>
        <form action="" method="post">
            <div class="input-group margin">
              <span class="input-group-addon" id="basic-addon1">Parola curent*:</span>
              <input type="password" class="form-control" aria-describedby="basic-addon1" name="current_password">
            </div>
			<div class="input-group margin">
              <span class="input-group-addon" id="basic-addon1">Parola noua*:</span>
              <input type="password" class="form-control" aria-describedby="basic-addon1" name="password">
            </div>
            <div class="input-group margin">
              <span class="input-group-addon" id="basic-addon1">Parola noua din nou*:</span>
              <input type="password" class="form-control" aria-describedby="basic-addon1" name="password_again">
            </div>
			<input class="btn btn-success" type="submit" value="Schimbare parola">
        </form>
        </div>

<?php 
}  
include 'includes/overall/footer.php';
?>
