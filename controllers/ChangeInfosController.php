<?php
class ChangeInfosController
{
    private $_db;

    public function __construct($db)
    {
        $this->_db = $db;
    }
    public function run(){

        $notification='';
        #change password
        $tabUser='';
        $tabUser=$this->_db->select_User();

        if (!empty($_POST['changeInfo'])) {
            #change password
            if (!$this->_db->validate_users($_SESSION['login'],$_POST['oldPassword'])) {
                $notification = 'Votre ancien mot de passe n\'est pas correct.';
            } elseif ($_POST['newPassword1'] != $_POST['newPassword2']) {
                $notification = 'Le nouveau mot de passe n\'est pas encodé deux fois correctement.';
            } else {
                $this->_db->update_password($_SESSION['login'],password_hash($_POST['newPassword1'], PASSWORD_BCRYPT));
                $notification = 'Votre mot de passe a bien été changé.';
            }

            #change name
            if(!empty($_POST['newName'])){
                $this->_db->update_name($_SESSION['login'], $_POST['newName']);
                $notification ='Votre nom a bien été changé.';
            }
            else{
                $notification = 'Votre nom n\'a pas été modifié';
            }
            #change forename
            if(!empty($_POST['newForename'])){
                $this->_db->update_Forename($_SESSION['login'], $_POST['newForename']);
                $notification ='Votre prénom a bien été changé.';
            }
            else{
                $notification = 'Votre prénom n\'a pas été modifié';
            }
            #change address
            if(!empty($_POST['newAddress'])){
                $this->_db->update_address($_SESSION['login'], $_POST['newAddress']);
                $notification ='Votre adresse a bien été changé.';
            }
            else{
                $notification = 'Votre adresse n\'a pas été modifié';
            }
            #change tel
            if(!empty($_POST['neTel'])){
                $this->_db->update_Tel($_SESSION['login'], $_POST['newTel']);
                $notification ='Votre téléphone a bien été changé.';
            }
            else{
                $notification = 'Votre téléphone n\'a pas été modifié';
            }
            #change bank
            if(!empty($_POST['newBank'])){
                $this->_db->update_bank($_SESSION['login'], $_POST['newBank']);
                $notification ='Votre bank a bien été changé.';
            }
            else{
                $notification = 'Votre bank n\'a pas été modifié';
            }
            #change photo
            if(!empty($_POST['newPhoto'])){
                $this->_db->update_photo($_SESSION['login'], $_POST['newPhoto']);
                $notification ='Votre photo a bien été changé.';
            }
            else{
                $notification = 'Votre photo n\'a pas été modifié';
            }

        }
        require_once (PATH_VIEWS.'changeInfos.php');
    }
}
?>