<?php

class Db
{
    private static $instance = null;
    private $_db;

    private function __construct()
    {

        try {
            $this->_db = new PDO('mysql:host=localhost;dbname=sdcbd;charset=utf8', 'root', '');
            $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->_db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die('Erreur de connexion à la base de données : ' . $e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Db();
        }
        return self::$instance;
    }

    # Search name in the fee table
    public function select_fee($keyword = '')
    {
        if ($keyword != '') {
            $keyword = str_replace("%", "\%", $keyword);
            $query = "SELECT * FROM fee WHERE name LIKE :keyword COLLATE utf8_bin ORDER BY num DESC ";
            $ps = $this->_db->prepare($query);
            $ps->bindValue(':keyword', "%$keyword%");
        } else {
            $query = 'SELECT * FROM fee ORDER BY num DESC';
            $ps = $this->_db->prepare($query);
        }
        #prepared execution
        $ps->execute();

        $tableau = array();

        while ($row = $ps->fetch()) {
            $tableau[] = new Fee($row->num, $row->name, $row->forname, $row->price);
        }
        return $tableau;
    }

    public function select_event()
    {
        $query = 'SELECT * FROM event ORDER BY dateEvent ASC';
        $ps = $this->_db->prepare($query);
        $ps->execute();
        $tabEvent = array();
        while ($row = $ps->fetch()) {
            $tabEvent[] = new Event($row->num_event, $row->dateEvent, $row->name, $row->place, $row->coordonnee, $row->timeBegin, $row->timeEnd, $row->price);
        }
        return $tabEvent;
    }

    public function insert_event($dateEvent, $name, $place, $coordonnee, $timeBegin, $timeEnd, $price)
    {
        $query = 'INSERT INTO event (dateEvent,name,place,coordonnee,timeBegin,timeEnd,price) values( :dateEvent,:name, :place, :coordonnee,:timeBegin, :timeEnd, :price)';
        $ps = $this->_db->prepare($query);

        $ps->bindValue(':date', $dateEvent);
        $ps->bindValue(':name', $name);
        $ps->bindValue(':lieu', $place);
        $ps->bindValue(':coordonnee', $coordonnee);
        $ps->bindValue(':timeBegin', $timeBegin);
        $ps->bindValue(':timeEnd', $timeEnd);
        $ps->bindValue(':price', $price);

        return $ps->execute();
    }

    #add new member
    public function insert_member($name, $forename, $number, $email, $address, $bank, $photo, $password)
    {
        $query = 'INSERT INTO member (name,forename,number,email,address,bank,photo,password) values (:name,:forename,:number,:email,:address,:bank,:photo,:password)';
        $ps = $this->_db->prepare($query);
        $ps->bindValue(':name', $name);
        $ps->bindValue(':forename', $forename);
        $ps->bindValue(':number', $number);
        $ps->bindValue(':email', $email);
        $ps->bindValue(':address', $address);
        $ps->bindValue(':bank', $bank);
        $ps->bindValue(':photo', $photo);
        $ps->bindValue(':password', $password);
        return $ps->execute();
    }

    public function validate_users($email, $password)
    {
        $query = 'SELECT password from member WHERE email=:email';
        $ps = $this->_db->prepare($query);
        $ps->bindValue(':email', $email);
        $ps->execute();
        if ($ps->rowcount() == 0)
            return false;
        $hash = $ps->fetch()->password;
        return password_verify($password, $hash);
    }

    public function email_exists($email)
    {
        $query = 'SELECT * from member WHERE email=:email';
        $ps = $this->_db->prepare($query);
        $ps->bindValue(':email', $email);
        $ps->execute();
        return ($ps->rowcount() != 0);
    }

    public function update_users($name, $forename, $number, $email, $address, $bank, $photo, $password)
    {
        $query = 'UPDATE member SET name=:name,forename=:forename,number=:numer,email=:email,address=:address,bank=:bank,photo=:photo,password=:password';
        $ps = $this->_db->prepare($query);
        $ps->bindValue(':name', $name);
        $ps->bindValue(':forename', $forename);
        $ps->bindValue(':number', $number);
        $ps->bindValue(':email', $email);
        $ps->bindValue(':address', $address);
        $ps->bindValue(':bank', $bank);
        $ps->bindValue(':photo', $photo);
        $ps->bindValue(':password', $password);
        return $ps->execute();
    }

    public function update_name($email, $name)
    {
        $query = 'UPDATE member SET name=:name WHERE email=:email';
        $ps = $this->_db->prepare($query);
        $ps->bindValue(':email', $email);
        $ps->bindValue(':name', $name);
        return $ps->execute();
    }

    public function update_forename($email, $forename)
    {
        $query = 'UPDATE member SET forename=:forename WHERE email=:email';
        $ps = $this->_db->prepare($query);
        $ps->bindValue(':email', $email);
        $ps->bindValue(':forename', $forename);
        return $ps->execute();
    }

    public function update_address($email, $address)
    {
        $query = 'UPDATE member SET address=:address WHERE email=:email';
        $ps = $this->_db->prepare($query);
        $ps->bindValue(':email', $email);
        $ps->bindValue(':address', $address);
        return $ps->execute();
    }

    public function update_tel($email, $tel)
    {
        $query = 'UPDATE member SET tel=:tel WHERE email=:email';
        $ps = $this->_db->prepare($query);
        $ps->bindValue(':email', $email);
        $ps->bindValue(':tel', $tel);
        return $ps->execute();
    }

    public function update_bank($email, $bank)
    {
        $query = 'UPDATE member SET bank=:bank WHERE email=:email';
        $ps = $this->_db->prepare($query);
        $ps->bindValue(':email', $email);
        $ps->bindValue(':bank', $bank);
        return $ps->execute();
    }

    public function update_photo($email, $photo)
    {
        $query = 'UPDATE member SET photo=:photo WHERE email=:email';
        $ps = $this->_db->prepare($query);
        $ps->bindValue(':email', $email);
        $ps->bindValue(':photo', $photo);
        return $ps->execute();
    }

    public function update_password($email, $password)
    {
        $query = 'UPDATE member SET password=:password WHERE email=:email';
        $ps = $this->_db->prepare($query);
        $ps->bindValue(':email', $email);
        $ps->bindValue(':password', $password);
        return $ps->execute();
    }

    public function select_user()
    {
        $query = 'SELECT * FROM member';
        $ps = $this->_db->prepare($query);
        $ps->execute();
        $tabUser = array();
        $row = $ps->fetch();
        $tabUser[] = new member($row->member_id, $row->name, $row->forename, $row->number, $row->email, $row->address, $row->bank, $row->photo, $row->password, $row->statut);
        return $tabUser;
    }
}

?>