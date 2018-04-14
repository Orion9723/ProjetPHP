<?php

class Event
{
    private $_num_event;
    private $_dateEvent;
    private $_name;
    private $_place;
    private $_timeBegin;
    private $_timeEnd;
    private $_coordonne;
    private $_price;

    public function __construct($num_event,$dateEvent, $name, $place, $coordonnee, $timeBegin, $timeEnd, $price)
    {
        $this->_num_event = $num_event;
        $this->_date = $dateEvent;
        $this->_name = $name;
        $this->_place = $place;
        $this->_coordonne = $coordonnee;
        $this->_timeBegin = $timeBegin;
        $this->_timeEnd = $timeEnd;
        $this->_price = $price;
    }

    public function num_event(){
        return $this->_num_event;
    }
    public function dateEvent()
    {
        return $this->_dateEvent;
    }

    public function name()
    {
        return $this->_name;
    }

    public function place()
    {
        return $this->_place;
    }

    public function coordonnee()
    {
        return $this->_coordonne;
    }

    public function timeEnd()
    {
        return $this->_timeEnd;
    }

    public function timeBegin()
    {
        return $this->_timeBegin;
    }

    public function price()
    {
        return $this->_price;
    }

    public function html_num_event(){
        return htmlspecialchars($this->_num_event);
    }
    public function html_dateEvent()
    {
        return htmlspecialchars($this->_dateEvent);
    }

    public function html_name()
    {
        return htmlspecialchars($this->_name);
    }

    public function html_place()
    {
        return htmlspecialchars($this->_place);
    }

    public function html_coordonnee()
    {
        return htmlspecialchars($this->_coordonne);
    }

    public function html_timeBegin()
    {
        return htmlspecialchars($this->_timeBegin);
    }

    public function html_timeEnd()
    {
        return htmlspecialchars($this->_timeEnd);
    }

    public function html_price()
    {
        return htmlspecialchars($this->_price);
    }


}

?>