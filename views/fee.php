<section id="contenu">
	
	<table id="table">
		<thead>
			<tr>
				<th>Numéro de membre </th>
				<th>Nom du membre</th>
				<th>Prenom du membre</th>
				<th>Prix cotisation</th>
				<th>Cotisation payé</th>
			</tr>
		</thead>
			<tbody id="tabFee">
				<?php foreach($tabmember as $i => $member){ ?>
					<tr>
						<td> <span class="html"><?php echo $member->html_num()?></span></td>
						<td><?php echo $member->html_name()?></td>
						<td><?php echo $member->html_forename()?></td>
						<td><?php echo $member->html_price()?></td>
						<td><input type="checkbox" name="payed"></td>
					</tr>
				<?php } ?>
			</tbody>
	</table>
    <form action="index.php?action=fee" method="POST" id="right">
		<p>Nom de membre: <input type="text" name="keyword"></p>
		<p><input type="submit" name="search" value="Rechercher" class="btn btn-outline-primary"></p>
	</form>
	<form action="index.php?action=fee" method="POST" id="right">
		<p><input type="submit" name="fee" value="Nouvelle année de cotisation"class="btn btn-outline-primary"></p>
	</form>
</section>
