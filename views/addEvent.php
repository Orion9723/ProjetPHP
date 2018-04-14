<h1>Ajouter un événement : </h1>

<div>
    <form action="index.php?action=addEvent" method="post">
        <p>Titre : <input type="text" name="titleNewEvent" placeholder="Souper"></p>
        <p>Date : <input type="date" name="date"></p>
        <p>Heure de début: <input type="time" name="timeBeginEvent"></p>
        <p>Heure de fin : <input type="time" name="timeEndEvent"></p>
        <p>Lieu : <input type="search" name="placeEvent" placeholder="Avenue Marcel Thiry"></p>
        <p>Lattitude / longitude <input type="text" name="lat_LongEvent"> </p>
        <p>Prix : <input type="text" name ="price"> €</p>
        <input type="submit" name="addEvent" value="Ajouter" class="btn btn-outline-primary">

    </form>
    <?php echo $notification;?>
</div>