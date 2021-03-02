<?php


require_once "connexion2.php";

define("PREFIXE","48598135");
define("SUFFIXE","hjnUIBHJNIK");


$nom = $_POST['nom'];

$email = $_POST['email'];

$password = PREFIXE. hash("sha256", $_POST['password'] .SUFFIXE);

if ($email && $password && $nom) {

$preparation = $db -> prepare('INSERT INTO utilisateurs (nom, email, password) VALUES(?,?,?)');


$data = array($nom, $email, $password);

$preparation -> execute ($data);







}else echo "saisissez tous les champs";
?>
