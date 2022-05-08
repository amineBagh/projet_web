<?php
include 'index.php';
include 'connexion/config.php';
$hostname="localhost";
$username="root";
$password="";
$databaseName="projet_pi";
$connect= mysqli_connect($hostname,$username,$password,$databaseName);
//$pdo = pdo_connect_mysql();
$msg = '';
                                                                                                                                                                                                           
//session_start();

// Check if POST data is not empty
//if(count($_POST)>0){
	//if($_POST['type']==1){

    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id']) ? $_POST['id'] : '';
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $total = isset($_POST['total']) ? $_POST['total'] : '';
    $date_creation = isset($_POST['datedetection']) ? $_POST['datedetection']  :'';
    $date_modification = isset($_POST['datedetection']) ? $_POST['datedetection']  :'';
    $id_panier = isset($_POST['datesaisie']) ? $_POST['datesaisie']  : date('Y-m-d H:i:s');
   
    $sql = "INSERT INTO commande(total) VALUES ('$total')";
    print_r($sql);
    $stmt = $connect->prepare($sql);
    $stmt -> execute();
    $msg = 'Created Successfully!';
    print_r($msg);
   header('location: read.php');      

   
//} } 
?>

