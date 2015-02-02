<?php
// on se connecte à notre base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=radiodentaires', 'root', 'root');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


$radio_id= $_GET['id'];
//echo $radio_id;
// on récupère l'image de la radio
    $requete = $bdd->prepare('SELECT * FROM radios WHERE id :id ORDER BY id DESC');
    $requete->execute(array("id" => $radio_id));

while($donnees = $requete->fetch()){
    $imagedata=$donnees['rx'];
	$imagetype=$donnees['rxtype'];
}
$requete->closeCursor();

header("content-type:$imagetype");
echo $imagedata;


?>