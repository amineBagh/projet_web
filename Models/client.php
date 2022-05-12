<?php
class Client
{
    private $nom;
    private $prenom;
    private $email;
    private $date;
    private $numero;
    private $mdp;

    public function __construct($nom, $prenom, $email, $date, $numero, $mdp)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->date = $date;
        $this->mdp = $mdp;
        $this->numero = $numero;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getDate()
    {
        return $this->date;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getMdp()
    {
        return $this->mdp;
    }
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }
    public function getNum()
    {
        return $this->numero;
    }
    public function setNum($num)
    {
        $this->numero = $num;
    }
}
