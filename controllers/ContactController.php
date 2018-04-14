<?php 
class ContactController{

	public function __construct(){

	}
			
	public function run(){	
		$notification='';
		if (!empty($_POST)) {
			
			if (empty($_POST['email']) && empty($_POST['message'])) {
				$notification='Entrez un email et un message non vides!';
			} elseif (empty($_POST['email'])) {
				$notification='Entrez un email non vide!';
			} elseif (empty($_POST['message'])) {
				$notification='Entrez un message non vide!';
			} else {			
				$to      = 'webmaster@votresite';
				$subject = 'Test du site des bonnes nouvelles';
				$message = htmlspecialchars($_POST['message']);
				$headers = 'From: ' . htmlspecialchars($_POST['email']);

				if (mail($to, $subject, $message, $headers)) {
					$notification='Vos informations ont été transmises avec succès.';
				} else {
					$notification='Vos informations n\'ont pas été transmises.';
				}
			}
		}
		require_once(PATH_VIEWS . 'contact.php');
	}
	
}
?>