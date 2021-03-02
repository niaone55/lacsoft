<?php /*?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Document sans titre</title>
</head>

<body>
    <?php
     $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
    
    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM base where 
              email = '".$username."' and password = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['username'] = $username;
           header('Location: principale.php');
        }
        else
        {
           header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
else
{
   header('Location: login.php');
}
mysqli_close($db); // fermer la connexion
    ?>
    
</body>
</html><?php */?>


<?php
require_once("connexion.php");
    
if (isset($_POST['submit']))
{
   
$Nom = htmlspecialchars(trim($_POST['Nom']));
$Prenom = htmlspecialchars(trim($_POST['Prenom']));
$email = htmlspecialchars(trim($_POST['email']));
$password = htmlspecialchars(trim($_POST['password']));
$repeatpassword = htmlspecialchars(trim($_POST['confirmpassword']));
   
if ($Nom&&$Prenom&&$email&&$password&&$confirmpassword)
        {
        if (strlen($password)>=6)
            {
                if ($password==$cofirmpassword)
                {
            // On crypte le mot de passe
                $password = md5($password);
 
 // on se connecte à MySQL et on sélectionne la base
    $c = new mysqli ("localhost","root","","base");
  
 //On créé la requête
$sql = "INSERT INTO newclient VALUES ('','$Nom','$Prenom','email','$password')";
  
    // On envoie la requête
$res = $c->query($sql);
       // on ferme la connexion
mysqli_close($c);
  
}else echo "Les mots de passe ne sont pas identiques";
}else echo "Le mot de passe est trop court !";
}else echo "Veuillez saisir tous les champs !";
   
}


?>