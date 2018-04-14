<?php

class Member
{
    private $_member_id;
    private $_pseudo;
    private $_name;
    private $_forename;
    private $_number;
    private $_email;
    private $_address;
    private $_bank;
    private $_password;
    private $_photo;

    public function __construct($member_id,$pseudo,$name, $forename, $number, $email, $address, $bank, $photo, $password)
    {
        $this->_member_id = $member_id;
        $this->_pseudo = $pseudo;
        $this->_name = $name;
        $this->_forename = $forename;
        $this->_number = $number;
        $this->_email = $email;
        $this->_address = $address;
        $this->_bank = $bank;
        $this->_password = $password;
        $this->_photo = $photo;
    }
    public function member_id(){
        return $this->_member_id;
    }

    public function pseudo(){
        return $this->_pseudo;
    }
    public function name(){
        return $this->_name;
    }

    public function forname(){
        return $this->_forename;
    }

    public function number(){
        return $this->_number;
    }

    public function email(){
        return $this->_email;
    }

    public function address(){
        return $this->_address;
    }

    public function bank(){
        return $this->_bank;
    }

    public function password(){
        return $this->_password;
    }

    public function photo(){
        return $this->_photo;
    }

    public function  html_member_id(){
        return htmlspecialchars($this->_member_id);
    }

    public function html_pseudo(){
        return htmlspecialchars($this->_pseudo);
    }

    public function html_password(){
        return htmlspecialchars($this->_password);
    }

    public function html_name(){
        return htmlspecialchars($this->_name);
    }

    public function html_forename(){
        return htmlspecialchars($this->_forename);
    }

    public function html_number(){
        return htmlspecialchars($this->_number);
    }

    public function html_email(){
        return htmlspecialchars($this->_email);
    }

    public function html_address(){
        return htmlspecialchars($this->_address);
    }

    public function html_bank(){
        return htmlspecialchars($this->_bank);
    }
    public function html_photo(){
        return htmlspecialchars($this->_photo);
    }
}

?>