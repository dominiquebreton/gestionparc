<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<?php include"nav.php"

?>
<?php
$bdd = new PDO("mysql:host=localhost;dbname=gestionparc","root","");
var_dump($bdd);
$sql = "SELECT * FROM utilisateur";
$stmt = $bdd->query($sql);
$liste_utilisateur = $stmt->fetchall(PDO::FETCH_ASSOC);
foreach($liste_utilisateur as $utilisateur){
?>
    <a href="utilisateur.php?id=<?= $utilisateur["id_utilisateur"] ?>">
    <?= $utilisateur["prenom_utilisateur"]." ".$utilisateur["nom_utilisateur"] ?>
    </a>
    <br>
    <?php
}
//var_dump($liste_utilisateur);
$bdd = null;
?>   
</body>
</html>
