<?php 
include '../core/init.php';
include '../core/database/connectcv.php';
?>

<?php 

$datePersonale = serialize($_POST);

$verificare = $connection->prepare('SELECT id_user FROM cv WHERE id_user = :session_user_id');
$verificare->bindParam(':session_user_id', $session_user_id, PDO::PARAM_INT);
$verificare->execute();

if($verificare->rowCount() == 0)
    {    
        $inserare = $connection->prepare('INSERT INTO cv (datePersonale, id_user) VALUES (:datePersonale, :session_user_id)');
        $inserare->bindParam(':datePersonale', $datePersonale, PDO::PARAM_STR);
        $inserare->bindParam(':session_user_id', $session_user_id, PDO::PARAM_STR);
        $inserare->execute();
    }
else
    {
        $update = $connection->prepare('UPDATE cv SET datePersonale = :datePersonale WHERE id_user = :session_user_id');
        $update->bindParam(':datePersonale', $datePersonale, PDO::PARAM_STR);
        $update->bindParam(':session_user_id', $session_user_id, PDO::PARAM_STR);
        $update->execute();
    }

$selectare = $connection->prepare('SELECT datePersonale FROM cv WHERE id_user = :session_user_id');
$selectare->bindParam(':session_user_id', $session_user_id, PDO::PARAM_INT);
$selectare->execute();

$row = $selectare->fetch(PDO::FETCH_OBJ);

$selectionResult = $row->datePersonale;

$arrayResult = unserialize($selectionResult);

header("Location: ../inserare.php?success");
exit();

?>


