
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "formulaire";

      $pdo = new PDO("mysql:host=localhost;dbname=formulaire", "root", "");

        $nom = $_POST['nom'];
        $prenoms = $_POST['prenoms'];
        $utilisateur = $_POST['utilisateur'];
        $genre = $_POST['genre'];
        $email = $_POST['email'];
        $motdepasse = $_POST['motdepasse'];
        $motdepasse1 = $_POST['motdepasse1'];
        $numero = $_POST['numero'];
       
        if ($motdepasse == $motdepasse1){
             $motdepassecrypte=md5($_POST['motdepasse']);
             $sql = "INSERT INTO formulairedinscription (nom, prenoms, utilisateur, genre, email, motdepasse, numero)
            VALUES (?,?,?,?,?,?,?)";
            $stmt=$pdo->prepare($sql);
            $stmt->execute([$nom, $prenoms, $utilisateur, $genre, $email, $motdepassecrypte, $numero]);
            header("location:index.php");
        } else{
            echo "le mot de passe et confimer mot de passe ne sont pas conformes";
        }

    
?>