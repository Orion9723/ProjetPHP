<?php 
class FeeController{

	private $_db;
	public function __construct($db){
		$this->_db = $db;
	}
			
	public function run(){	
		$tabmember = '';
		
		$html_keyword='';

		#keyword search
		if (!empty($_POST['search']) 
		    && !empty($_POST['keyword'])) {
		$tabmember=$this->_db->select_fee($_POST['keyword']);
		$html_keyword=htmlspecialchars($_POST['keyword']); 
		} else {
			$tabmember=$this->_db->select_fee();
		}
		require_once(PATH_VIEWS . 'fee.php');
	}
	
}
?>