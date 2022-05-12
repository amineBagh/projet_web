<?php
class Livreur {
private $id ;
private $nom;
private $prenom;
private $cin;
private $num_tel;

function __construct( $nom,$prenom,$cin,$num_tel	){
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->cin=$cin;
    $this->num_tel=$num_tel;
    
    //$this->file_path=$file_path	;
  
}

function getId(){
    return $this->id;}
    
    function getNom(){
        return $this->nom;}

        function getPrenom(){
            return $this->prenom;}

            function getCin(){
                return $this->cin;}

            function getNum(){
                return $this->num_tel;}

                function setNom(string $nom){
                    $this->nom=$nom;}
                    function setPrenom(string $prenom){
                        $this->prenom=$prenom;}
                        function setCin(string $cin){
                            $this->cin=$cin;}

                        function setNum(string $num_tel){
                            $this->num_tel=$num_tel;}
                

}
