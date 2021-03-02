<?php
           require_once 'list_con.php';
           echo'vous avez acces a la base de données';
            if(isset( $_GET['id']))
            {
                $ID=$_GET['id'];
$sql="DELETE  FROM utilisateurs WHERE ID='$ID'";
    $reqq=$db->query($sql) or die ("Erreur SQL");
    if($reqq)
    {
        echo'supprimer avec succes';
    }
  header("Location:liste.php?");

            }