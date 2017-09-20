<?php   
include 'core/init.php';
protect_page();
include 'includes/overall/header.php';
?>
<div class="col-md-10 col-md-offset-0">
<?php
if (isset($_GET['username']) === true && empty($_GET['username']) === false) {
	$username = $_GET['username'];

	if (user_exists($username) === true) {
		$user_id = user_id_from_username($username);
		$profile_data = user_data($user_id, 'first_name', 'last_name', 'email');
		?>
			
			<h1>Profilul lui <?php echo $profile_data->first_name . ' ' . $profile_data->last_name;?></h1><hr>

<?php
if(cv_exists($user_id) === true)
{
			$selectare = $connection->prepare('SELECT datePersonale FROM cv WHERE id_user = :user_id');
			$selectare->bindParam(':user_id', $user_id, PDO::PARAM_INT);
			$selectare->execute();

			$row = $selectare->fetch(PDO::FETCH_OBJ);

			$selectionResult = $row->datePersonale;

			$arrayResult = unserialize($selectionResult);
		?> 


				<table style="width:40%">

<!-- INFORMATII PERSONALE -->

				  <tr>
				    <td><h4><strong>Informatii Personale</strong></h4></td> 
				  </tr>

				  <tr>
				    <td>Nume:</td>
				    <td><?php echo $arrayResult['tab1_nume']; ?></td>  
				  </tr>

				  <tr>
				    <td>Prenume:</td>
				    <td><?php echo $arrayResult['tab1_prenume']; ?></td>  
				  </tr>

				  <tr>
				    <td>Email:</td>
				    <td><?php echo $arrayResult['tab1_email']; ?></td>  
				  </tr>

				  <tr>
				    <td>Telefon Mobil:</td>
				    <td><?php echo $arrayResult['tab1_telefon']; ?></td>  
				  </tr>

				  <tr>
				    <td>Sex:</td>
				    <td><?php echo $arrayResult['tab1_sex']; ?></td>  
				  </tr>

				  <tr>
				    <td>Data Nasterii:</td>
				    <td>
				    <?php 
				    echo $arrayResult['tab1_ziua'];
				    echo " - ";
				    echo $arrayResult['tab1_luna'];
				    echo " - ";
				    echo $arrayResult['tab1_an'];
				    ?>
				    </td>  
				  </tr>

				  <tr>
				    <td>Localitate:</td>
				    <td><?php echo $arrayResult['tab1_localitate']; ?></td>  
				  </tr>

				  <tr>
				    <td>Facultate:</td>
				    <td><?php echo $arrayResult['tab1_facultate']; ?></td>  
				  </tr>

				  <tr>
				    <td><br></td>
				  </tr>

<!-- EXPERIENTA PROFESIONALA -->

				  <tr>
				    <td><h4><strong>Experienta profesionala</strong></h4></td> 
				  </tr>

				  <tr>
				    <td>Nume Angajator:</td>
				    <td><?php echo $arrayResult['tab2_nume_angajator']; ?></td>  
				  </tr>

				  <tr>
				    <td>Localitate:</td>
				    <td><?php echo $arrayResult['tab2_localitate']; ?></td>  
				  </tr>

				  <tr>
				    <td>Domeniul angajator:</td>
				    <td><?php echo $arrayResult['tab2_domeniu_angajator']; ?></td>  
				  </tr>

				  <tr>
				    <td>Perioada:</td>
				    <td>
				    <?php

				     echo $arrayResult['tab2_perioada_luna'];
				     echo " ";
				     echo $arrayResult['tab2_perioada_an'];
				     echo " - ";
				     echo $arrayResult['tab2_perioada_luna2'];
				     echo " ";
				     echo $arrayResult['tab2_perioada_an2'];

				    ?>	
				    </td>  
				  </tr>

				  <tr>
				    <td>Functia:</td>
				    <td><?php echo $arrayResult['tab2_functia']; ?></td>  
				  </tr>

				  <tr>
				    <td>Tip job:</td>
				    <td><?php echo $arrayResult['tab2_tip_job']; ?></td>  
				  </tr>

				  <tr>
				    <td>Nivel job:</td>
				    <td><?php echo $arrayResult['tab2_nivel_job']; ?></td>  
				  </tr>

				  <tr>
				    <td>Activitati:</td>
				    <td><?php echo $arrayResult['tab2_activitati']; ?></td>  
				  </tr>

				  <tr>
				    <td><br></td>
				  </tr>

<!-- EDUCTIA -->

				  <tr>
				    <td><h4><strong>Educatia</strong></h4></td> 
				  </tr>

<!-- Liceu -->

				  <tr>
				    <td><strong>Liceu:</strong></td>
				  </tr>

				   <tr>
				    <td>Denumire institutie:</td>
				    <td><?php echo $arrayResult['tab3_denumire']; ?></td>  
				  </tr>

				  <tr>
				    <td>Localitate:</td>
				    <td><?php echo $arrayResult['tab3_localitate']; ?></td>  
				  </tr>

				  <tr>
				  	<td>Perioada:</td>
				    <td>
				    <?php 

				    echo $arrayResult['tab3_an1']; 
				    echo " - ";
				    echo $arrayResult['tab3_an2']; 

				    ?>
				    </td>  
				  </tr>

				  <tr>
				    <td>Specializare:</td>
				    <td><?php echo $arrayResult['tab3_specializare']; ?></td>  
				  </tr>

				  <tr>
				    <td>Disciplina:</td>
				    <td><?php echo $arrayResult['tab3_disciplina']; ?></td>  
				  </tr>

<!-- Facultate -->

				  <tr>
				    <td><strong>Facultate:</strong></td>
				  </tr>

				   <tr>
				    <td>Denumire institutie:</td>
				    <td><?php echo $arrayResult['tab3_fac_denumire']; ?></td>  
				  </tr>

				  <tr>
				    <td>Localitate:</td>
				    <td><?php echo $arrayResult['tab3_fac_localitate']; ?></td>  
				  </tr>

				  <tr>
				    <td>Domeniul de studiu:</td>
				    <td><?php echo $arrayResult['tab3_fac_domeniul']; ?></td>  
				  </tr>

				  <tr>
				  	<td>Perioada:</td>
				    <td>
				    <?php 

				    echo $arrayResult['tab3_fac_an1']; 
				    echo " - ";
				    echo $arrayResult['tab3_fac_an2']; 

				    ?>
				    </td>  
				  </tr>

				  <tr>
				    <td>Specializare:</td>
				    <td><?php echo $arrayResult['tab3_fac_specializare']; ?></td>  
				  </tr>

				  <tr>
				    <td>Disciplina:</td>
				    <td><?php echo $arrayResult['tab3_fac_disciplina']; ?></td>  
				  </tr>

<!-- Masterat -->

				  <tr>
				    <td><strong>Masterat:</strong></td>
				  </tr>

				   <tr>
				    <td>Denumire institutie:</td>
				    <td><?php echo $arrayResult['tab3_mas_denumire']; ?></td>  
				  </tr>

				  <tr>
				    <td>Localitate:</td>
				    <td><?php echo $arrayResult['tab3_mas_localitate']; ?></td>  
				  </tr>

				  <tr>
				    <td>Domeniul de studiu:</td>
				    <td><?php echo $arrayResult['tab3_mas_domeniul']; ?></td>  
				  </tr>

				  <tr>
				  	<td>Perioada:</td>
				    <td>
				    <?php 

				    echo $arrayResult['tab3_mas_an1']; 
				    echo " - ";
				    echo $arrayResult['tab3_mas_an2']; 

				    ?>
				    </td>  
				  </tr>

				  <tr>
				    <td>Specializare:</td>
				    <td><?php echo $arrayResult['tab3_mas_specializare']; ?></td>  
				  </tr>

				  <tr>
				    <td>Disciplina:</td>
				    <td><?php echo $arrayResult['tab3_mas_disciplina']; ?></td>  
				  </tr>

				  <tr>
				    <td><br></td>
				  </tr>

<!-- LIMBI STRAINE -->

				  <tr>
				    <td><h4><strong>Limbi straine</strong></h4></td> 
				  </tr>

				  <tr>
				    <td>Limba:</td>
				    <td><?php echo $arrayResult['tab4_limba']; ?></td>  
				  </tr>

				  <tr>
				    <td>Nivel:</td>
				    <td><?php echo $arrayResult['tab4_nivel']; ?></td>  
				  </tr>

				  <tr>
				    <td>Ascultare:</td>
				    <td><?php echo $arrayResult['tab4_ascultare']; ?></td>  
				  </tr>

				  <tr>
				    <td>Citire:</td>
				    <td><?php echo $arrayResult['tab4_citire']; ?></td>  
				  </tr>

				  <tr>
				    <td>Vorbire:</td>
				    <td><?php echo $arrayResult['tab4_vorbire']; ?></td>  
				  </tr>

				  <tr>
				    <td>Discurs:</td>
				    <td><?php echo $arrayResult['tab4_discurs']; ?></td>  
				  </tr>

				  <tr>
				    <td>Scriere:</td>
				    <td><?php echo $arrayResult['tab4_scriere']; ?></td>  
				  </tr>

				  <tr>
				    <td>Limbaj de Specialitate:</td>
				    <td><?php echo $arrayResult['tab4_limbaj_specialitate']; ?></td>  
				  </tr>

				  <tr>
				    <td><br></td>
				  </tr>


<!-- INFORMATII SUPLIMENTARE -->

				  <tr>
				    <td><h4><strong>Informatii suplimentare</strong></h4></td> 
				  </tr>

				  <tr>
				    <td>Caracterizare:</td>
				    <td><?php echo $arrayResult['tab6_caracterizare']; ?></td>  
				  </tr>

				  <tr>
				    <td>Informatii suplientare:</td>
				    <td><?php echo $arrayResult['tab6_informatii']; ?></td>  
				  </tr>

				  <tr>
				    <td>Hobby:</td>
				    <td><?php echo $arrayResult['tab6_hobby']; ?></td>  
				  </tr>

				</table>


<?php
}
else{
	echo '<div class="alert alert-info user-count" role="alert">';
    echo "<h5>Utilizatorul inca nu si-a completat CV-ul.</h5>";
    echo '</div>';
}


	}
	else
	{
		echo 'Ne cerem scuze dar utilizatorul nu exista.';
	}
}
else
{	
	header('Location: index.php');
	exit();
}

include 'includes/overall/footer.php';
?>
</div>