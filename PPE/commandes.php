 <!DOCTYPE html>
<html>
<head>
	<title>Commandes</title>
	<link rel="stylesheet" href="Commandes.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/commandes.css">

</head>
<body>
	<div id="titre">
		
		<div class="container">
		<a href="index.php"><h1>Lamasticrew</h1></a>
	<button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#loginModal">
	</button>  

	</div>
	



	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header border-bottom-0">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<div class="form-title text-center">
			<h4><img src='rock.png'></h4>
			</div>
			<div class="d-flex flex-column text-center">
			<form>
				<div class="form-group">
				<input type="email" class="form-control" id="email1"placeholder="Nom">
				</div>
				<div class="form-group">
				<input type="password" class="form-control" id="password1" placeholder="Mot de passe">
				</div>
				<button type="button" class="btn btn-info btn-block btn-round">Connexion</button>
			</form>
			</div>
		</div>
		</div>
	</div>
	</div>

	</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="js/connexion.js" type="text/javascript"></script>
	<?php 
		$connexion ="mysql:host=localhost; dbname=lamasticrew";
		$user = "root";
		$pwd = "";
		try {
		$pdo = new PDO ($connexion,$user,$pwd);
		$stm = $pdo->query('SELECT ve.nom_vendeur,ve.prenom_vendeur,cl.nom_client,cl.prenom_client,c.reference_commande,c.date_commande,c.quantite_commande,c.prix_vente from commande c INNER JOIN client cl on c.FK_id_client = cl.id_client INNER JOIN vendeur ve on c.FK_id_vendeur = ve.id_vendeur');
		$rep = $stm->fetchAll();
			# nom vendeur = 0
			# prenom vendeur = 1
			# nom client = 2
			# prenom client = 3
			# ref commande = 4 
			# date commande = 5
			# quantite commande = 6
			# prix vente = 7
		
	}	
	catch(exeption$ex) { echo "Erreur de connexion";}							
	  ?>



	  <h1>Commande</h1>
<table>
    <thead>
        <tr>
            <th id=test> Référence commande </th>
            <th id=test> Client(Nom,prénom) </th>
            <th id=test> Date commande </th>
        	<th id=test> Quantité commandé </th>
        	<th id=test> Prix vente </th>
        	<th id=test> Nom vendeur </th>
        	<th id=test>Modifier la commande</th>
        </tr>
    </thead>
    <tbody>
           	
            <?php 
            	foreach ($rep as $key) {
            		echo "<tr> ";
            		echo "<td>".$key[4]."</td>";
            		echo "<td>".ucwords($key[2])." ".ucwords($key[3])."</td>";
            		echo "<td>".$key[5]."</td>";
            		echo "<td>".$key[6]."</td>";
            		echo "<td>".$key[7]."</td>";
            		echo "<td>".ucwords($key[0])."</td>";
            		echo "<td><button>Modifier</button></td>";
            		echo "</tr>";
            	}
             ?>
            

        
    </tbody>
</table>

    </body>
</html>