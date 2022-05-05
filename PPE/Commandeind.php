numero de commande
nom du client 
nom vendeur
date de commande
montant par jeux
montant total
ajouter/supprimer un articles
<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>binjou=</title>
	</head>
	<body>
	
	<?php 
	$connexion ="mysql:host=localhost; dbname=lamasticrew";
	$user = "root";
	$pwd = "";
	try {
	$pdo = new PDO ($connexion,$user,$pwd);
	$rech = $pdo->query('SELECT ve.prenom_vendeur,cl.nom_client,cl.prenom_client,c.reference_commande,c.date_commande,j.id_jeu,c.quantite_commande,c.prix_vente from commande c INNER JOIN client cl on c.FK_id_client = cl.id_client INNER JOIN vendeur ve on c.FK_id_vendeur = ve.id_vendeur INNER JOIN jeu j on c.fk_id_jeu = j.id_jeu');
	$rep = $rech->fetchALL();

	
	}	
	catch(exeption$ex) { echo "Erreur de connexion";}	
	?>
	<table>
    <thead>
        <tr>
            <th id=test> Référence commande </th>
            <th id=test> Client(Nom,prénom) </th>
            <th id=test> Date commande </th>
        	<th id=test> Quantité commandé </th>
        	<th id=test> Prix vente </th>
        	<th id=test> Nom vendeur </th>
        	<th id=test> nom jeu </th>
        </tr>
    </thead>
    <tbody>
           	
            <?php 
            	foreach ($rep as $key) {
            		echo "<tr> ";
            		echo "<td>".$key[4]."</td>";
            		echo "<td>".$key[2]."</td>";
            		echo "<td>".$key[5]."</td>";
            		echo "<td>".$key[6]."</td>";
            		echo "<td>".$key[7]."</td>";
            		echo "<td>".$key[1]."</td>";
            		//echo "<td>".$key[7]."</td>";
            		//echo "<td>".$key[8]."</td>";
            		
            		echo "</tr>";
            	}
             ?>
            

        
    </tbody>
</table>
</body>
</html>