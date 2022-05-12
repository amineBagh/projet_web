<?php
class Livraison {
private $id ;
private $nom;
private $prenom;
private $adresse;
private $tel;
private $mail;
private $livreurId;

function __construct( $nom,$prenom,$adresse,$tel,$mail,$livreurId){
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->adresse=$adresse;
    $this->tel=$tel;
    $this->mail=$mail;
    $this->livreurId=$livreurId;
    //$this->file_path=$file_path	;  
}

function getId(){
    return $this->id;}


    function getNom(){
        return $this->nom;}

        function getPrenom(){
            return $this->prenom;}

            function getAdresse(){
                return $this->adresse;}
                function getTel(){
                    return $this->tel;}
                    function getMail(){
                        return $this->mail;}

   function getLd(){
        return $this->livreurId;}



        function setNom(string $nom){
            $this->nom=$nom;}

            function setPreom(string $prenom){
                $this->prenom=$prenom;}

                function setAdresseom(string $adresse){
                    $this->adresse=$adresse;}

                    function setTel(string $tel){
                        $this->tel=$tel;}

                        function setMail(string $mail){
                            $this->mail=$mail;}

                        function setLd(int $livreurId){
                            $this->livreurId=$livreurId;}

}
