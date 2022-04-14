<?php
class commentaire{
    private ?int $ref = null;
    private ?int $idProduit = null;
    private ?string $texte = null;
    function __construct(int $idProduit,string $texte)
    {
        
        $this->idProduit=$idProduit;
        $this->texte=$texte;
        
    }
    function getRef(): int{
        return $this->ref;
    }
    function getIdProduit(): int{
        return $this->idProduit;
    }
    function getTexte(): string{
        return $this->texte;
    }
   
    function setIdProduit(id $idProduit): void{
        $this->idProduit=$idProduit;
    }
    function setTexte(string $texte): void{
        $this->texte=$texte;
    }
    
}
?>