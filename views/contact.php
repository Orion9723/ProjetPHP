<section>
	<h2>Contactez-nous</h2>
	<p>Bienvenue sur la page de contact.</p>
	<p>Nom du responsable: Bouzaienne Zakia</p>
	<p>adresse mail: zakia.bouzaienne@student.vinci.be</p>
	<p>Numéro de télephone: 0483/41.39.71</p>
	<br>
	<p>Nom du coach: Valentin Kilian</p>
	<p>adresse mail: kilian.valentin@student.vinci.be</p>
	<p>Numéro de télephone: 0484/69.40.32</p>
	<br>
	<h2>Formulaire de demande de contact:</h2>
	<div id="notification"><?php echo $notification ?></div>
	<form action="index.php?action=contact" method="post">
		<p><input type="text" name="email" ></p>
		<textarea rows="15" cols="50" name="message"></textarea>
		<p><input type="submit" name="message" value="Envoyer"></p>
	</form>
</section>

