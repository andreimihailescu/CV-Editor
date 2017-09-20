<?php
include 'core/init.php';
protect_page();
include 'includes/overall/header.php';

?>

<body>
		
		<div class="col-md-10 col-md-offset-0">
		<h1 class="text-left">Cauta in baza de date</h1>
		<hr>
			<form action="#" method="GET">
				<input type="text" class="form-control" placeholder="Ce doriti sa cautati?" name="querystring" id="ceCautati">
				<br/>
				<input type="submit" class="btn btn-success" name="start" value="Cauta">
			</form>
		</div>
		</div>
	</div>

<div class="rezultate">
	<div class="container">
		<div class="col-md-12">


<div class="left-margin">
	<?php  

	include 'core/database/connectcv.php';

	?>

<ul class="list-group">

<?php

if(isset($_GET['start'])) 
{
	$querySimplu = $_GET['querystring'];
	$tok = strtok($querySimplu, " ");
	$vectorID = array();
	$vectorNume = array();
	$contorID = 0;
	$c = 0;
	
	if ($tok == false) 
	{	
		echo '<div class="col-md-10 col-md-offset-0">';
		echo '<div class="alert alert-danger user-count" role="alert">';
		
		echo '<h5>' . 'Va rugam sa introduceti termenii de cautare' . '</h5>';
		echo '</div>';
		echo '</div>';
		//echo '<br>Va rugam sa introduceti termenii de cautare';
		$c = 1;
	}
	else
	{
		echo '<br><h4 class="text-left">Rezultatele cautarii pentru: <span id="cuvantCautat">'. $querySimplu . '</span></h4>';

	while ($tok !== false) 
	{

	    $query = '%'.$tok.'%';

		if(!empty(trim($querySimplu))) 
			{
				$cautare = $connection->prepare('SELECT * FROM cv WHERE datePersonale LIKE :nume');
				$cautare->bindParam(':nume', $query, PDO::PARAM_STR);
				$cautare->execute();

				if($cautare->rowCount() > 0 )
					{
						while($row = $cautare->fetch(PDO::FETCH_OBJ))
						{
							$vectorID[$contorID]=$row->id_user;
							$contorID=$contorID+1;
						}
					}
			}

		$tok = strtok(" ");
	}
}
	for ($i = 0; $i < $contorID; $i++)
	{
		$n = 1;
		for ($j = 0; $j < $i; $j++) 
		{
			if($vectorID[$i] == $vectorID[$j])
			{
				$n = 0;
			}
		}
		if ($n == 1) 
		{
			$variabila = user_data($vectorID[$i], 'username','last_name','first_name','email');
			$c = 1;

			?>
			
  
 
  			<li class="list-group-item cautare-list">
  			<a href="<?php echo $variabila->username; ?>">
  			<?php echo $variabila->first_name . ' ' . $variabila->last_name . ' ( ' . $variabila->email . ' )';?>
  			</a></li>
			
			<?php

		}
	}
	if ($c == 0) 
	{
		echo '<div class="col-md-10 col-md-offset-0">';
		echo '<div class="alert alert-danger user-count" role="alert">';
		echo '<h5>' . 'Nu s-a gasit niciun rezultat pentru cautarea: '. $querySimplu . '' . '</h5>';
		echo '</div>';
		echo '</div>';
	}

}

?>
</ul>
</div>			
</div>
</div>
</div>
</body>

<?php
include 'includes/overall/footer.php';
?>
