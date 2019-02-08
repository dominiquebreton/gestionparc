<a href="liste_utilisateur.php">Retour à la liste des utilisateurs</a>
<?php   
    $pdo = new PDO("mysql:host=localhost;dbname=gestionparc","root","");
    //requête à exécuter
    $sql = "SELECT * FROM utilisateur WHERE id_utilisateur=?";
    //exécution de la requête(appel de la méthode query sur l'objet $bdd)
    $stmt = $pdo->prepare($sql); //préparation de la requête
    $stmt->execute([$_GET['id']]);//exécution de la requête

    $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC); //
    //var_dump($utilisateur);
?>
<h2><?=$utilisateur["prenom_utilisateur"]." ".$utilisateur["nom_utilisateur"] ?></h2>