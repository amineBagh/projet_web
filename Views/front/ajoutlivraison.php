<?php
    
       include 'C:/xampp/htdocs/temp - Copy/Controller/LivraisonC.php';
       include "C:/xampp/htdocs/temp - Copy/Views/front/mail.php";
       require_once __DIR__ . '/vendor/autoload.php';

       $mpdf = new \Mpdf\Mpdf();

	  $livraisonC=new LivraisonC();
 

    $error = "";
$ll=Null;
    // create adherent
    $livraison = null;
    $liste=$livraisonC->afficherLivraison(); 
    if (
       
		isset($_POST["nom"]) &&		
        isset($_POST["prenom"]) &&
        isset($_POST["adresse"])  &&
        isset($_POST["tel"])  &&
        isset($_POST["mail"])  
   
    ) {
        if (
           
			!empty($_POST["nom"]) &&
            !empty($_POST["prenom"]) &&
            !empty($_POST["adresse"]) && 
            !empty($_POST["tel"]) &&
            !empty($_POST["mail"]) 
        
           
        ) {
            $livraison = new Livraison(

				$_POST['nom'],
                $_POST['prenom'], 
                $_POST['adresse'],
                $_POST['tel'],
                $_POST['mail'],
              $ll
                
			
            );
          $livraisonC->ajouterLivraison($livraison);
        
         // header('Location: afficherlivraison.php');
       //  header('Location: ajouterlivraison.html');
           
            //$livraisonC->modifierLivraison($livraison,$_POST['id']);  //get->
 

            //add data
           $body = '<h1>livraison depuis:</h1>'
            .'<p style="font-family:courier;" style="font-size:160%;">nom: '.$_POST['nom'].'</p>'  // el . ta3mil concat
            .'<p style="font-family:courier;" style="font-size:160%;">prenom: '.$_POST['prenom'].'</p>'
            .'<p style="font-family:courier;" style="font-size:160%;">adresse: '.$_POST['adresse'].'</p>'
            .'<p style="font-family:courier;" style="font-size:160%;">numero  de telephone: '.$_POST['tel'].'</p>'
            .'<p style="font-family:courier;" style="font-size:160%;">email: '.$_POST['mail'].'</p>'
            
            .'<p style="font-family:courier;" style="font-size:160%;" style="color:purple;"> MERCI POUR VOTRE ACHATS!! </p>';
        
           
        
        //t7ot ili 7atinou fil body fi variable we7ed
        $mpdf->WriteHTML($body);
        
        $mpdf->SetDisplayMode('fullpage');
        $mpdf->list_indent_first_level = 0; 
        
        //call watermark content and image
        $mpdf->SetWatermarkText('pharmaland');
        $mpdf->showWatermarkText = true;
        $mpdf->watermarkTextAlpha = 0.1;
        
        //output in browser
        

//output to String
     $pdf= $mpdf->Output('','S');	 //store the pdf in this var
      sendConfirmation($_POST['mail'],$pdf);
     
    //  header('Location: ajouterlivraison.html');
        }




        else
            $error = "Missing information";
    }


   

    
?>
