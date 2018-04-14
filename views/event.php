<h1>Evénement : </h1>
<table id="contenu" class="table table-striped">
    <thead>
    <tr class="table-active">
        <th scope="col">Nom de l'événement</th>
        <th scope="col">Date</th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody id="tabEvent">
    <?php foreach ($tabEvent as $i => $event) { ?>
        <tr>
            <td scope="row"><?php echo $event->html_name() ?></td>
            <td scope="row"><?php echo $event->html_dateEvent() ?></td>
            <td scope="row"><input type="submit" name="participate" value="Participer" class="btn btn-primary"></td>
            <td scope="row"><input type="submit" name="interested" value="Intéressé" class="btn btn-primary"></td>
            <td scope="row"><input type="submit" name="consult" value="Consulter" class="btn btn-primary"></td>


        </tr>
    <?php } ?>
    </tbody>
</table>
