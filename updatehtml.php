<?php
$hostname="localhost";
$username="root";
$password="";
$databaseName="projet_pi";
$connect= mysqli_connect($hostname,$username,$password,$databaseName);
       
?>

<div class="modal fade" id="exampleModal2<?php echo $cmd['id']?>"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<form action="update.php?id=<?=$cmd['id']?>" id="create" method="post">

<div class="modal-content">

<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<h4 class="modal-title" style="text-align:center;" id="myModalLabel">Modifier cette commande </h4>

<div class="modal-body">
<div class="row">
<div class="col-lg-12">
<div class="col-lg-6">
<div class="form-group">
<label for="id">Numéro de la commande </label>
<input disabled type="text" class="form-control" name="id" id="id" value="<?php echo $cmd['id']?>" />
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label for="total">Le total <span style="color: red;">*</span></label>
<input id="total" name="total"  value="<?php echo $cmd['total']?>" class="form-control" required />
</div>
</div>

</div>
</div>

</div>
<div class="modal-footer">
<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
  <input type="submit" class="btn btn-primary" id="btn-update" value="Modifier">
</div>

</div>
</form>
</div>
</div>