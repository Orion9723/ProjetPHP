<section id="contenu">
	
	<form enctype="multipart/form-data" action="index.php?action=registration" method="post">
		<p>Nom: <input type="text" name="name"></p>
		<p>Prénom: <input type="text" name="forename"></p>
        <P>Mot de passe : <input type="password" name="password"> </P>
		<p>Numéro de téléphone: <input type="tel" name="phoneNumber"></p>
		<p>Adresse mail: <input type="email" name="email"/></p>
		<p>Adresse : <input type="text" name="address"></p>
		<p>Numéro de compte: <input type="text" name="bank"></p>
		<p>Photo de profil: <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
            <input type="file" name="photo" /></p>
		<p><input type="submit" name="registration" value="Inscription"></p>
	</form>
    <?php echo $notification; ?>
</section>
