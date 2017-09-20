<?php 
include 'core/init.php';
protect_page();
include 'includes/overall/header.php';
include 'core/database/connectcv.php';

?>

<body>
		
		<h1>Lista membrilor </h1><hr>
	<?php 
		$selectare = $connection->prepare('SELECT * FROM users');
		$selectare->execute();

		$numarMembri = $selectare->rowCount();
		
		while($rand = $selectare->fetch(PDO::FETCH_OBJ)){
			?>
			<li class="list-group-item cautare-list">
  			<a href="<?php echo $rand->username ?>">
  			<?php echo $rand->first_name . ' ' . $rand->last_name . ' ( ' . $rand->email . ' )';?>
  			</a></li>
  			<?php
		}


	?>
	
</body>


<?php
include 'includes/overall/footer.php';
?>
