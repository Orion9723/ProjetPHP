<?php
class RegistrationController
{

    private $_db;

    public function __construct($db)
    {
        $this->_db = $db;
    }

    public function run()
    {

        $notification = '';
        #add member
        if (!empty($_POST['registration'])) {
            if (empty($_POST['name'])) {
                 $notification = 'Veuillez entrer un Nom';
            } elseif (empty($_POST['forename'])) {
                $notification = 'Veuillez entrer un Prénom';
            } elseif (empty($_POST['email'])) {
                $notification = 'Veuillez entrer une Adresse mail';
            } elseif (empty($_POST['address'])) {
                $notification = 'Veuillez entrer un Adresse postale';
            } elseif (empty($_POST['bank'])) {
                $notification = 'Veuillez entrer un Numéro de compte';

                } else {
                    $pictureinfo = getimagesize($_FILES['photo']['tmp_name']);
                    if (($_FILES['photo']['type'] == 'image/jpeg' && $pictureinfo['mime'] == 'image/jpeg') || ($_FILES['photo']['type'] == 'image/png' && $pictureinfo['mime'] == 'image/png')) {
                        $origine = $_FILES['photo']['tmp_name'];
                        $destination = PATH_VIEWS . 'images/' . basename($_FILES['photo']['name']);
                        move_uploaded_file($origine, $destination);
                        if ($this->_db->insert_member($_POST['name'], $_POST['forename'], $_POST['phoneNumber'], $_POST['email'], $_POST['address'], $_POST['bank'], $destination,  password_hash($_POST['password'], PASSWORD_BCRYPT))) {
                            $notification = 'L\'utilisateur a bien été ajouté';
                        }
                    } else {
                        $notification = 'Erreur à l\'ajout';

                    }
                }
            }
                      require_once(PATH_VIEWS . 'registration.php');

    }
}
?>