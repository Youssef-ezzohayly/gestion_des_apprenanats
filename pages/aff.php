<?php
include("./connect.php");

session_start();

$email = $_SESSION['Email2'];

$query = "SELECT nom2 FROM etudiant WHERE Email2='$email'";     

$result = mysqli_query($con, $query);         

$row = mysqli_fetch_assoc($result);         


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="setting.css">
    <title>Liste des etudiants</title>
</head>


<body>

<div class="nav-bar">
        <div class="container">
    <a  href="#">
        <img id="logo-img1" src="./Youssef/logo_WHITE.png" alt="logo">
    
    </a>
    <div class="burger">
    <h5><?php echo $_SESSION['Email2']; ?></h5>
    <div class="menu">
    <img style="width: 60%;" src="Youssef/BURGER.svg" alt="burger">
        
       
  
</div>
</div>
</div>
</div>
<div class="titile-setting" >
<h1>Liste des etudiants</h1>
</div>

<table border="1" width=90% >
    <tr>

    <th style="color: white; ">Email</th>
    <th id="passId" style="color: white;">Mot de Passe</th>
    <th id="birthId" style="color: white;">Date de Naissance</th>
    <th style="color: white;">nom</th>
    <th id="birthId" style="color: white;">Genre</th>
    </tr>
    
    <?php
    require 'connect.php';
    $requete = "SELECT * FROM `etudiant`";   
    $query=mysqli_query($con,$requete);  
 
    

    while($rows=mysqli_fetch_assoc($query)){              
echo "<tr>";
                $id=$rows['id2'];                                                         
echo "<td style='color:white;width: 160px''>".$rows['Email2']."</td>";                   
echo "<td id='passId' style='color:white;'>".$rows['mdpss']."</td>";                     
echo "<td id='birthId' style='color:white;'>".$rows['DateNaissance']."</td>";             
echo "<td  style='color:white;width: 100px''>".$rows['nom2']."</td>";                       
echo "<td id='birthId' style='color:white;'>".$rows['Gender']."</td>";
echo "<td style=' text-decoration: none; color:white;width: 80px'><a href='delete.php?id2=".$id."'>Supprimer</a></td>";      
echo "</tr>";
    }                       
    ?>
</table>
</body>
</html>