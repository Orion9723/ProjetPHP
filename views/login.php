<section>
	<h2>Login :</h2>

    <div id="notification"><?php echo $notif; ?></div>

	<div class="formulaire">
		<form action="?action=login" method="post">
		<p>Adresse mail :  <input type="email" name="login"></p>
		<p>Mot de passe : <input type="password" name="password"></p>
			<p><input type="submit" name="connection" value="Se connecter"></p>
		</form>
	</div>
</section>