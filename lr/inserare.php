<?php 
include 'core/init.php';
protect_page();
include 'includes/overall/header.php';
include 'core/database/connectcv.php';

if(cv_exists($session_user_id) === true)
{
    $selectare = $connection->prepare('SELECT datePersonale FROM cv WHERE id_user = :session_user_id');
    $selectare->bindParam(':session_user_id', $session_user_id, PDO::PARAM_INT);
    $selectare->execute();

    $row = $selectare->fetch(PDO::FETCH_OBJ);

    $selectionResult = $row->datePersonale;

    $arrayResult = unserialize($selectionResult);
}
    else
{
    $selectie = "a:54:{s:9:\"tab1_nume\";s:0:\"\";s:12:\"tab1_prenume\";s:0:\"\";s:10:\"tab1_email\";s:0:\"\";s:12:\"tab1_telefon\";s:0:\"\";s:8:\"tab1_sex\";s:8:\"Masculin\";s:9:\"tab1_luna\";s:1:\"-\";s:9:\"tab1_ziua\";s:1:\"-\";s:7:\"tab1_an\";s:1:\"-\";s:15:\"tab1_localitate\";s:0:\"\";s:14:\"tab1_facultate\";s:0:\"\";s:19:\"tab2_nume_angajator\";s:0:\"\";s:15:\"tab2_localitate\";s:0:\"\";s:9:\"tab2_tara\";s:0:\"\";s:22:\"tab2_domeniu_angajator\";s:1:\"-\";s:18:\"tab2_perioada_luna\";s:1:\"-\";s:16:\"tab2_perioada_an\";s:1:\"-\";s:19:\"tab2_perioada_luna2\";s:1:\"-\";s:17:\"tab2_perioada_an2\";s:1:\"-\";s:12:\"tab2_functia\";s:0:\"\";s:12:\"tab2_tip_job\";s:1:\"-\";s:14:\"tab2_nivel_job\";s:1:\"-\";s:15:\"tab2_activitati\";s:0:\"\";s:13:\"tab3_denumire\";s:0:\"\";s:15:\"tab3_localitate\";s:0:\"\";s:8:\"tab3_an1\";s:1:\"-\";s:8:\"tab3_an2\";s:1:\"-\";s:17:\"tab3_specializare\";s:0:\"\";s:15:\"tab3_disciplina\";s:0:\"\";s:17:\"tab3_fac_denumire\";s:0:\"\";s:19:\"tab3_fac_localitate\";s:0:\"\";s:17:\"tab3_fac_domeniul\";s:1:\"-\";s:12:\"tab3_fac_an1\";s:1:\"-\";s:12:\"tab3_fac_an2\";s:1:\"-\";s:21:\"tab3_fac_specializare\";s:0:\"\";s:19:\"tab3_fac_disciplina\";s:0:\"\";s:17:\"tab3_mas_denumire\";s:0:\"\";s:19:\"tab3_mas_localitate\";s:0:\"\";s:17:\"tab3_mas_domeniul\";s:1:\"-\";s:12:\"tab3_mas_an1\";s:1:\"-\";s:12:\"tab3_mas_an2\";s:1:\"-\";s:21:\"tab3_mas_specializare\";s:0:\"\";s:19:\"tab3_mas_disciplina\";s:0:\"\";s:10:\"tab4_limba\";s:1:\"-\";s:10:\"tab4_nivel\";s:1:\"-\";s:14:\"tab4_ascultare\";s:1:\"-\";s:11:\"tab4_citire\";s:1:\"-\";s:12:\"tab4_vorbire\";s:1:\"-\";s:12:\"tab4_discurs\";s:1:\"-\";s:12:\"tab4_scriere\";s:1:\"-\";s:24:\"tab4_limbaj_specialitate\";s:1:\"-\";s:18:\"tab6_caracterizare\";s:0:\"\";s:15:\"tab6_informatii\";s:0:\"\";s:10:\"tab6_hobby\";s:0:\"\";s:13:\"tab1_inserare\";s:6:\"Submit\";}";

    $arrayResult= unserialize($selectie);
}

?>


<div class="col-md-10 col-md-offset-0">
    <h1 >Inserare CV</h1><hr>
<!-- <div class="container"> -->

<?php
if (isset($_GET['success']) && empty($_GET['success'])) 
        {
            echo '<div class="alert alert-success user-count" role="alert">';
            echo '<h5>' . 'Datele au fost modificate.' . '</h5>';
            echo '</div>';
        }
?>

</div>
	<div class="row">
        <!-- <div class="left-margin"> -->
            

	    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 bhoechie-tab-container">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 bhoechie-tab-menu">
              <div class="list-group">
                <a href="#" class="list-group-item active text-center">
                  <h4 class="glyphicon glyphicon-home"></h4><br/>Informatii personale
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-briefcase"></h4><br/>Experienta profesionala
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-education"></h4><br/>Educatie
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-book"></h4><br/>Limba straina
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-italic"></h4><br/>Informatii suplimentare
                </a>
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">

                <form id="myform" action="inserare/submit.php" method="POST">
                <!-- informatii personale -->
                <?php
                include 'inserare/tab1.php';
                ?>

                <!-- Experienta profesionala -->
                <?php
                include 'inserare/tab2.php';
                ?>
                    
                <!-- Educatie tab -->
                <?php
                include 'inserare/tab3.php';
                ?>
                
                <!-- Limbi straine -->
                <?php
                include 'inserare/tab4.php';
                ?>

                <!-- Informatii suplimentare -->
                <?php
                include 'inserare/tab6.php';
                ?>
                </form>
                
                

            </div>

        </div>
    </div>
    <br><input form="myform" class="btn btn-success" value="Salveaza" type="submit" name="tab1_inserare">
 
<?php 
	include 'includes/overall/footer.php';
?>
