<?php

class AddEventController
{
    private $_db;
    public function __construct($db)
    {
        $this->_db = $db;
    }

    public function run()
    {
        $notification = '';
        if (!empty($_POST['addEvent'])) {

            if (empty($_POST['date'])) {
                $notification = 'Veuillez entrer une date';
            }
            if (empty($_POST['timeBeginEvent'])) {
                $notification = 'Veuillez entrer un heure de début';
            }
            if (empty($_POST['timeEndEvent'])) {
                $notification = 'Veuillez entrer une heure de fin';
            }
            if (empty($_POST['placeEvent'])) {
                $notification = 'Veuillez entrer un lieu';
            }
            if (empty($_POST['lat_LongEvent'])) {
                $notification = 'Veuillez entrez des coordonnées';
            }
            if (empty($_POST['titleNewEvent'])) {
                $notification = 'Veuillez entrer un nom d\'événement';
            }
            if (empty($_POST['price'])){
                $notification = 'Veuillez entrer un prix pour l\'événement';
            }
            else {
                if ($this->_db->insert_event($_POST['date'], $_POST['titleNewEvent'],$_POST['placeEvent'], $_POST['lat_LongEvent'],
                    $_POST['timeBeginEvent'], $_POST['timeEndEvent'], $_POST['price'])) {
                    $notification = 'Ajout bien fait';
                } else {
                    $notification = 'Erreur à l\'ajout';
                }

            }
        }
        require_once(PATH_VIEWS . 'addEvent.php');
    }
}

?>