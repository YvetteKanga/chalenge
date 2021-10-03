
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Formulaire d'inscription</title>
</head>
<body>
    <div>
        <main>
            <h1>INSCRIPTION</h1>
            <form action="connexion.php" method="post">
                <div>
                    <label for="nom">Nom</label><br>
                    <input type="text" id="nom" name="nom" required>
                </div><br>
                <div>
                    <label for="prenoms">Prenoms</label><br>
                    <input type="text" id="prenoms" name="prenoms" required>
                </div><br>
                <div>
                    <label for="utilisateur">Utilisateur</label><br>
                    <input type="text" id="utilisateur" name="utilisateur" required>
                </div><br>
                
                <div class="genre">
                    <label for="">Genre</label><br>
                    <input type="radio" name="genre" id="homme" value="H"><label for="">Homme</label>
                    <input type="radio" name="genre" id="femme" value="F"><label for="">Femme</label>
                    <input type="radio" name="genre" id="autres" value="A"><label for="">Autres</label>
                </div><br>
                <div>
                    <label for="">Email</label><br>
                    <input type="email" name="email" id="email" required>
                </div><br>
                <div>
                    <label for="">Mot de passe</label><br>
                    <input type="password" name="motdepasse" id="motdepasse" required>
                </div><br>
                <div>
                    <label for="">Confirmer mot de passe</label><br>
                    <input type="password" name="motdepasse1" id="motdepasse1" required>
                </div><br>
                <div>
                    <label for="numero">Numero</label><br>
                    <input type="tel" name="numero" id="numero" required>
                </div><br>
                <button type="submit" value="s'inscrire">S'inscrire</button>

                <div class="connexion">
                    <h4>Avez-vous déjà un compte?</h4>
                    <button><a href="index2.php" style="text-decoration: none">connectez-vous</a></button>
                </div>
                
            </form>
        </main>
        
    </div>
</body>
</html>