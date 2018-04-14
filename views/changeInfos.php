<section id="contenu">

    <form action="index.php?action=changeInfos" method="post">
        <p>Nom : <input type="text" name="newName"></p>
        <p>Prénom : <input type="text" name="newForename"></p>
        <P>Mot de passe : <input type="password" name="oldPassword"> </P>
        <p>Nouveau mot de passe : <input type="password" name="newPassword1"></p>
        <p>Entrez à nouveau le nouveau mot de passe : <input type="password" name="newPassword2"></p>
        <p>Telephone : <input type="tel" name="newTel"></p>
        <p>Adresse : <input type="text" name="newAddress"></p>
        <p>Numéro de compte en banque : <input type="text" name="newBank"></p>
        <p>Photo : <input type="file" name="newPhoto"></p>
        <input type="submit" name="changeInfo" value="Modifier Les Informations">
    </form>
    <?php echo $notification; ?>

</section>
