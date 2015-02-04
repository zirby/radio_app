
<?php

		$file = mysql_real_escape_string($_FILES['file']['name']);
		$rx = mysql_real_escape_string(file_get_contents($_FILES['file']['tmp_name']));
		$size = mysql_real_escape_string($_FILES['file']['size']);
		$type = mysql_real_escape_string($_FILES['file']['type']);


// on se connecte à notre base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=radiodentaires', 'root', 'root');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

if(!empty($_POST['name']) AND $size > 0){ // si les variables ne sont pas vides

    $name = mysql_real_escape_string($_POST['name']);

    // puis on entre les données en base de données :
    $insertion = $bdd->prepare('INSERT INTO radios VALUES("", :name, :rxname, :rxsize, :rxtype, :rx)');
    $insertion->execute(array(
        'name' => $name,
        'rxname' => $file,
        'rxsize' => $size,
        'rxtype' => $type,
        'rx' => $rx
    ));
	echo "radio uploaded !";

}
else{
    echo "Vous avez oublié de remplir un des champs !";
}



?>