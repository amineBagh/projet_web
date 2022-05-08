<!-- PARTIE PHP --> 
<?php

include 'index.php';
include 'connexion/config.php';
include 'ajouthtml.php'; 

$pdo = pdo_connect_mysql();
$stmt = $pdo->prepare('SELECT * FROM commande ORDER BY id ');
$stmt->execute();
$cmd = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>




<!-- PARTIE HTML --> 
<?=template_header('Commandes')?>

<div class="content read">
    <div style="text-align:center;" class="col-lg-12">
    <br>
        <h1>Gestion des commandes</h1>
        <hr>
        
    </div>

<!-- Button trigger modal d'ajout -->
<div class="col-lg-12 ">
<button type="button" class="btn btn-primary" data-toggle="modal" href='ajouthtml.php'data-target="#cmd">
Ajouter commande </button>
</div>

<br>


<!-- Tableau les anomalies-->

<div>
<div class="col-lg-12">
<h3>Liste des commandes</h3>
</div>


</div>
<div class="row">

<div class="col-lg-12">
    <table class="table table-striped table-bordered" id="list" 
        data-url="json/data1.json"
        data-filter-control="true"
        data-show-search-clear-button="true">
        <thead class="bg-info">
            <tr >
                <th>#</th>
                <th style="text-align:center;" >Total</th>
                <th style="text-align:center;">Date de création</th>
                <th style="text-align:center;">Date de modification</th>
             
                <th style="text-align:center;"></th>
             </tr>
        </thead>
        <tbody>
            <?php foreach ($cmd as $cmd): ?>

            <tr class="myTable">
                <td  ><?=$cmd['id']?></td>
                <td><?=$cmd['total']?></td>
                <td><?=$cmd['date_creation']?></td>
                <td><?=$cmd['date_modification']?></td>
             
               <td style="width:20%">
               <?php    
   echo ' <button type="button" id="update_product" title="Modifier" data-target="#exampleModal2'.$cmd['id'].'"  class="btn btn-success " data-toggle="modal" >Modifier commande</button>'
   ?>      
      <?php  
   echo '   <button type="button" id="delete_product" title="Supprimer" data-id="'.$cmd['id'].'"  class="btn btn-danger " data-toggle="modal" >Supprimer commande</button>' 
       ?>   
        </td>
        <?php     
     include 'updatehtml.php'; 

                    endforeach;	
		?>
        </tr>
       </tbody>
       <tfoot>
            <tr>
            <th>#</th>
                <th style="text-align:center;" >Total</th>
                <th style="text-align:center;">Date de création</th>
                <th style="text-align:center;">Date de modification</th>
             
            </tr>
        </tfoot>
    </table>
    </div>
                </div>
</div>

<?=template_footer()?>