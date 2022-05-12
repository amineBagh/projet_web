<?php

class produit
    {
        private $id_produit;
        private $titre;
        private $img;
        private $descr;
        private $prix;
        private $categorie;
        private $jaime;

      
        function __construct($titre, $img, $descr, $prix, $jaime)
        {
            $this->titre=$titre;
            $this->img=$img;
            $this->descr=$descr;
            $this->prix=$prix;
            $this->jaime=$jaime;
        }

        function get_titre()
        {
            return $this->titre;
        }

        function get_image()
        {
            return $this->img;
        }

        function get_description()
        {
            return $this->descr;
        }

        function get_prix()
        {
            return $this->prix;
        }

        function get_categorie()
        {
            return $this->categorie;
        }

        function get_jaime()
        {
            return $this->jaime;
        }

    }

?>