<!DOCTYPE html>
<html>
<head>
	<title>(Nom entreprise)</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/administration.css">

</head>
<body>
	<div id="titre">
		<div></div>
		<div class="container">
		<a href="index.php"><h1>Lamasticrew</h1></a>
	<button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#loginModal">
	</button>  
	</div>
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
    </body>
</html>