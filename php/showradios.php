<?php

$name = $_GET['name'];
//$name="toto";
//echo $name;
// on se connecte à notre base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=dentaire', 'root', 'root');
}
catch (Exception $e)
{
	echo $e->getMessage();
    die('Erreur : ' . $e->getMessage());
}

// on récupère les 10 derniers messages postés
$requete = $bdd->prepare('SELECT * FROM radios WHERE name= :name');
$requete->execute(array('name' => $name));

//echo $name;
while($donnees = $requete->fetch()){
    $rx=$donnees['rxname'];
    echo "<a href='radios/$rx' target='_blank' ><img src='radios/$rx' title='$rx' class='easyui-tooltip' ></a>";
}

$requete->closeCursor();

?>