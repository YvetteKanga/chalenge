

<!DOCTYPE html>
<html lang="en">
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <script src="js/script.js"></script>
        <link rel="stylesheet" href="admin.css">
        <title>admin</title>
</head>
<body >
    <section>
        <p>Mise à jour du client</p>
    </section><br>
    <section class="bouton">
    <div class="container">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Nouveau client</button>
        <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Espace client</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <label for="">Email</label><br>
         <input type="text"><br><br>
         <label for="">Contact</label><br>
         <input type="text">
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" style="background-color:green">Confirmer</button>

          <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
        </div>
        
      </div>
    </div>
  </div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Modifier</button>

   
        <button type="button" class="btn btn-success">Telecharger le fichier</button>
    </section>
    <div class="container">
  <div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Deconnexion
    </button>
  </div>
  <br><br><br><br><br><br><br><br>
<section>
        <table class="table caption-top">
  <caption>Liste des utilisateurs</caption>
  <tbody>
      <?php

  try

  {
         $bdd = new PDO("mysql:host=localhost;dbname=formulaire", "root", "");
  }
  
  catch(Exception $e)
  {
         die("<p> Erreur : probleme d'access a la base de données </p>".$e->getMessage());
  }
  $reponse=$bdd->query("SELECT * FROM formulairedinscription");
  echo "
  <tr>
  <th>Nom</th>
  <th>Prenoms</th>
  <th>Utilisateur</th>
  <th>Genre</th>
  <th>Email</th>
  <th>Numero</th>
  </tr>";
  while ($row  = $reponse->fetch())
  
  {
  
      echo "<tr>";
      echo "<td>" . $row['nom'] . "</td>";
      echo "<td>" . $row['prenoms'] . "</td>";
      echo "<td>" . $row['utilisateur'] . "</td>";
      echo "<td>" . $row['genre'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      echo "<td>" . $row['numero'] . "</td>";    

      echo "</tr>";
  }

  echo "</table>";
  
  
  $reponse->closeCursor();
  
  ?>
  
  </tbody>
</table>
        </section>
        <footer class="text-center pied ">
            
            <!-- <div class=""> -->
            <h5>copyright @2021</h5>
            <h5>by Kanga N'da Akissi Yvette</h5>
            <!-- </div> -->
            
        </footer>
</body>
</html>