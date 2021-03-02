<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>


<body>

    <header>
        <div class="container-fluid liste">
          <a href="file:///C:/xampp/htdocs/forum/forum1/index.php#"><img src="../images/retour2-removebg-preview.png" width="60px" height="60px" alt=""></a> 

        </div>


        <h1>LACSOFT</h1>


    </header>


    

    <?php
            require_once 'list_con.php';
              ?> 
               
              
               <table class="tableau-style">
                    <thead>
                        <tr>
                            <th>nom</th>
                            <th>Email</th>
                            <th>password</th>
                            
                        </tr>
                    </thead> 
                    <tbody>
                    <?php

       $result=0;
       $sql="SELECT * FROM utilisateurs";
       $req=$db->query($sql) or die ("Erreur SQL");
       while($data=$req->fetch())
       {
        
             echo"<tr>";

             echo"<td>".$data['nom']."</td>";
             echo"<td>".$data['email']."</td>";
             echo"<td>".$data['password']."</td>";
             echo'<td> <a href="suprim.php?id='.$data["id"].'" >supprimer</a> </td>';

             echo " <tr> ";

          }

          ?>
             
    </table>

<div class="boutton">
    
    

</div>
</body>


</html>