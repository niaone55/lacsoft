<?php
require_once "connexion.php";

define("PREFIXE","6485313984484");
deine("SUFFIXE","wjimsfkjqngrevkq" );



$email= $_POST['email'];
$name = $_POST['name'];
$last_name = $_POST['last_name']);
$password = PREFIXE. hash("sha256",$_POST['password']).SUFFIXE;
$confirm_password = PREFIXE. hash("sha256",$_POST['confirm_password']).SUFFIXE;



if ($email && $name && $last_name && $password && $confirm_password) {

    if ($password==$confirm_password) {

        $preparation = $db - prepare('INSERT INTO user (email,name,last_name,password,confirm_password) VALUES(?,?,?,?,?)');
        $data = array($email,$name,$last_name,$password,$confirm_password);
        $preparation - execute($data);


    
    }else echo "ERREUR DE SAISI";



}else echo "saisir tous les champs";