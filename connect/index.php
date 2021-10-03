
<?php
   $msg_error_email="";
   $msg_error_motdepasse="";

 if (isset($_POST['connecter'])){
 	$pdo = new PDO("mysql:host=localhost;dbname=formulaire", "root", "");
 	$email = $_POST['email'];
 	$motdepasse=md5($_POST['motdepasse']);

 	if ($email){
 		$sql="SELECT * FROM formulairedinscription WHERE email='$email'";
 		$reponse1=$pdo->query($sql);
 		$donnee=$reponse1->fetch();
 		$nombre=$reponse1->rowCount();
 		if ($nombre>0){
 			$requete="SELECT * FROM formulairedinscription WHERE motdepasse='$motdepasse'";
		 	$reponse=$pdo->query($requete);
		 	$donnees=$reponse->fetch();
		 	$nbre=$reponse->rowCount();

 	if ($nbre>0){
 		header("location:admin.php");
 	} else{
 		$msg_error_motdepasse='<span style=color:red; text-align=center;> !mot de passe inexistant </span>';
 	}
 		}else{
 			$msg_error_email='<span style=color:red; text-align=center;> !compte inexistant</a> </span>';
 		}
 	}
 }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=divice-width ,initial-scale=1.0" >
	<link rel="stylesheet" type="text/css" href="style1.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" >
	<title>exercice 3</title>
</head>
<body>
	<div class="formulaire">
		
		<div class="entete">
				<div><h1>CONNEXION ADMIN</h1></div><br><br>
			<form action="#" method="POST">	
				<label for="email">Email</label>
				<div class="input">
					<span><i class="fas fa-user"></i></span>
					<input type="text" name="email" required="">
				</div>
		
			<div>
				<label for="pass">Mot de passe </label>
				<div class="input">
					<span><i class="fas fa-key"></i></span>
					<input type="password" name="motdepasse" required="">
				</div>
			</div>
			<div >
				<input type="checkbox" name="" class="bouton">
				<label class="nom">SE RAPPELER</label>
			</div>

			<button type="submit" name="connecter">SE CONNECTER</button>
			<?php
			echo $msg_error_motdepasse;
			?>
			<?php
			echo $msg_error_email;
			?>
			<div class="pied">vous n'avez pas de compte  <a href="index1.php">inscrivez-vous</a></div>
			</form>
		</div>
	</div>
</body>
</html>