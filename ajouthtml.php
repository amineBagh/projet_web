<?php

function getNextIncrement() {
    global $conn, $sql_db_name;
    $next_increment = 1;
    //$table = mysqli_escape_string($conn, $table);
    $sql = "SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'projet_pi' AND TABLE_NAME = 'commande'";
    $results = $conn->query($sql);
    while($row = $results->fetch_assoc()) {
        $next_increment = $row['AUTO_INCREMENT'];
    }
    return $next_increment;
}
 $id=getNextIncrement();

?>


<div class="modal fade" id="cmd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<form action="ajout.php" id="create" method="post">

<div class="modal-content">

<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<h4 class="modal-title" style="text-align:center;"id="myModalLabel">Ajouter une commande</h4>

<div class="modal-body">

  
 
<div class="row">
<div class="col-lg-12">
<div class="col-lg-4">
<div class="form-group">
<label for="id">Numéro de la commande </label>
<input disabled type="text" class="form-control" name="id" id="id" value="<?=$id?>" />
</div>
</div>
<div class="col-lg-8">
<div class="form-group">
<label for="total">Le total <span style="color: red;">*</span></label>
<input type="number" id="total" name="total"  class="form-control" required />
</div>
</div>







</div>
</div>

</div>
<div class="modal-footer">
    
<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
  <input type="submit" class="btn btn-primary"  value="Ajouter">
</div>

</div>
</form>
</div>
</div>
