<?php

class LoginController
{
    private $_db;

    public function __construct($db)
    {
        $this->_db = $db;
    }

    public function run()
    {
        #prevents to connect through the url
        if (!empty($_SESSION['authentifie'])) {
            header("Location: index.php?action=home");
            die();
        }
        #user need to login
        if (empty($_POST)) {
            $notif = 'Authentifiez-vous';

        } elseif (!$this->_db->validate_users($_POST['login'],$_POST['password'])) {
            $notif = 'Vos données sont incorrectes.';
        } else {
            $_SESSION['authentifie'] = true;
            $_SESSION['login'] = $_POST['login'];
            header("Location: index.php?action=fee");
            die();
        }

        require_once(PATH_VIEWS . 'login.php');
    }
}

?>