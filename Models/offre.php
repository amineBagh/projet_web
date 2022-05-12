<?php
class offre{
    private $ref = null;
    private $produit = null;
    private  $description = null;
    private  $taux_reduc = null;
    private  $nv_prix = null;

    function __construct(string $description, int $taux_reduc, float $nv_prix)
    {
        $this->description=$description;
        $this->taux_reduc=$taux_reduc;
        $this->nv_prix=$nv_prix;
    }

    function getRef(): int{
        return $this->ref;
    }

    function getIdProduit(): int{
        return $this->produit;
    }

    function getDescription(): string{
        return $this->description;
    }

    function getTaux_reduc(): int{
        return $this->taux_reduc;
    }
    
function getNv_prix(): float{
        return $this->nv_prix;
    }



   
    function setIdProduit(id $produit): void{
        $this->produit=$produit;
    }
    function setType(string $type): void{
        $this->type=$type;
    }
    
}
