<?php
class EventController
{
    private $_db;
    public function __construct($db){
        $this->_db = $db;
    }

    public function run(){

        $tabEvent='';
        $tabEvent=$this->_db->select_event();


        require_once (PATH_VIEWS. 'event.php');
    }
}
?>