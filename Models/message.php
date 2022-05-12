<?php
class message{
    private ?int $ref = null;
    private ?int $idClientEm = null;
    private ?int $idClientDes = null;
    private ?string $texte = null;
    function __construct(int $idClientEm,int $idClientDes,string $texte)
    {
        $this->idClientDes=$idClientDes;
        $this->idClientEm=$idClientEm;
        $this->texte=$texte;
        
    }
    function getRef(): int{
        return $this->ref;
    }
    function getIdClientDes(): int{
        return $this->idClientDes;
    }
    function getIdClientEm(): int{
        return $this->idClientEm;
    }
    function getTexte(): string{
        return $this->texte;
    }
   
    function setIdClientEm(id $idClientEm): void{
        $this->idClientEm=$idClientEm;
    }
    function setIdClientDes(id $idClientDes): void{
        $this->idClientDes=$idClientDes;
    }
    function setTexte(string $texte): void{
        $this->texte=$texte;
    }
    
}
?>