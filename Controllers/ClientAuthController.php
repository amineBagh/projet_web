<?php

include 'C:/xampp/htdocs/pharmaland/config.php';

class ClientAuthController
{

    private $email;
    private $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function seConnecterClient()
    {
        try {
            $request = Database::connect()->prepare("SELECT `id`, `email`,`mdp` from `utilisateur` WHERE `email`=:email AND `mdp`=:pass");
            $request->bindParam("email", $this->email, PDO::PARAM_STR);
            $request->bindValue("pass", $this->password, PDO::PARAM_STR);
            $request->execute();

            $count = $request->rowCount();
            $data = $request->fetch(PDO::FETCH_ASSOC); // les donnees utilisateur

            if ($count == 1 && !empty($data)) {
                $_SESSION['loggedInClient'] = "true";
                $_SESSION["uuidClient"] = $data['id'];
            } else {
                var_dump("wrong");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function seDeconnecter()
    {
        $_SESSION['loggedInClient'] = "false";
        $_SESSION["uuidClient"] = -1;
        header("Location: ./login.php");
    }
}
