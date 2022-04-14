<?php  

class categorie
{
    private $id_cat=null;
    private $nom_cat=null;
   

     function __construct($nom_cat)    
    {
              $this->nom_cat=$nom_cat;
    }


    public function get_id_cat()
{
        return $this->id_cat;
        
}

    public function get_nom_cat()
    {
        return $this->nom_cat;
    }

  

}
?>