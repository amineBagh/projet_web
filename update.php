<?php
include 'index.php';
include 'connexion/config.php';
$pdo = pdo_connect_mysql();
$msg = '';
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        $id=$_REQUEST['id'];
        $total = isset($_POST['total']) ? $_POST['total'] : '';
        $date_modification = isset($_POST['date_modification']) ? $_POST['date_modification']  :'';
 
    
        // Update the record
        $stmt = $pdo->prepare('UPDATE commande SET  total = ?, date_modification = CAST(CURRENT_TIMESTAMP as DATE) WHERE id = ?');
        $stmt->execute([$total, $id]);
        $msg = 'Updated Successfully!';
        
    }
  
} 
header('location: read.php');  
?>

<?=template_footer()?>