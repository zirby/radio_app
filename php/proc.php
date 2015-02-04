<?php
$message="";
$name = mysql_real_escape_string($_POST['name']);

$message .= "Test: ".$name;
echo json_encode(array('success'=>true,'message'=>$message));

?>