<?php

include_once 'C:/xampp/htdocs/pharmaland/Controllers/UserController.php';
include_once 'C:/xampp/htdocs/pharmaland/Controllers/ClientController.php';
include_once 'C:/xampp/htdocs/pharmaland/Models/user.php';

class Auth
{

    private $email;
    private $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function seConnecter()
    {
        try {
            $request = Database::connect()->prepare("SELECT `id`, `email`,`mdp` from `administrateur` WHERE `email`=:email AND `mdp`=:pass");
            $request->bindParam("email", $this->email, PDO::PARAM_STR);
            $request->bindValue("pass", $this->password, PDO::PARAM_STR);
            $request->execute();

            $count = $request->rowCount();
            $data = $request->fetch(PDO::FETCH_ASSOC); // les donnees utilisateur

            if ($count == 1 && !empty($data)) {
                $_SESSION['loggedIn'] = "true";
                $_SESSION["uuid"] = $data['id'];
            } else {
                var_dump("wrong");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function seDeconnecter()
    {
        $_SESSION['loggedIn'] = "false";
        $_SESSION["uuid"] = -1;
        header("Location: ./login.php");
    }
}
