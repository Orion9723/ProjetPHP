<?php 
class Fee{
	private $_num;
	private $_name;
	private $_forename;
	private $_price;

	public function __construct($num,$name,$forename,$price){
		$this->_num = $num;
		$this->_name = $name;
		$this->_forename = $forename;
		$this->_price = $price;
	}

	public function num(){
		return $this->_num;		
	}
	public function name(){
		return $this->_name;		
	}
	public function forname(){
		return $this->_forename;		
	}
	public function price(){
		return $this->_price;		
	}
	public function html_num(){
		return htmlspecialchars($this->_num);		
	}
	public function html_name(){
		return htmlspecialchars($this->_name);		
	}
	public function html_forename(){
		return htmlspecialchars($this->_forename);		
	}
	public function html_price(){
		return htmlspecialchars($this->_price);		
	}


}

?>