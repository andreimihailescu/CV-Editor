<div class="widget">
<h2><?php echo 'Bine ai venit:<br> ' . $user_data->first_name . ' ' . $user_data->last_name ?></h2>
</div>
<div class="inner">
<div class="btn-group-vertical button-space" role="group" aria-label="...">
<form action="<?php echo $user_data->username;?>" method="post">
<button type="submit" class="btn btn-default widget-button hover1">Profil</button>
</form>
<form action="changepassword.php" method="post">
<button type="submit" class="btn btn-default widget-button hover1">Schimbare Parola</button>
</form>
<form action="settings.php" method="post">
<button type="submit" class="btn btn-default widget-button hover1">Setari</button>
</form>
<form action="logout.php" method="post">
<button type="submit" class="btn btn-default widget-button hover1">Logout</button>
</form>
</div>
</div>