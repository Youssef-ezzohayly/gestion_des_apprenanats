<?php
include("./connect.php");                                   

session_start();

$email = $_SESSION['Email2'];

$query = "SELECT nom2, DateNaissance FROM etudiant WHERE Email2='$email'"; 

$result = mysqli_query($con, $query);                                         

$row = mysqli_fetch_assoc($result);                                      

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
    <link rel="stylesheet" href="Youssef/setting.css">
    <script defer src="Youssef/script.js"></script>

</head>


<body>
  
    <div class="nav-bar">
        <div class="container">
    <a  href="#">
        <img id="logo-img1" src="Youssef/logo_WHITE.png" alt="logo">
        <img id="logo-img2" src="Youssef/logo_green.png" alt="logo">
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
<h1 >Settings</h1>
</div>
<hr>


<table>
    <tr style="color: white;">
        <th>Email</th>
        <td><?php echo $_SESSION['Email2']; ?></td>
    </tr>
    <tr style="color: white;">
        <th>Password</th>
        <td style="color: #5FC4B8;">Changer Password</td>
       
        <td  class="edit1">Edit</td>

    </tr>
    <tr style="color: white;">
        <th>Fist Name</th>
        <td><?php echo $row['nom2']; ?></td>
    </tr>
    <tr style="color: white;">
        <th>Last Name</th>
        <td><?php echo $row['nom2']; ?></td>
    </tr>
    <tr style="color: white;">
        <th>Day Of Birth</th>
        <td><?php echo $row['DateNaissance']; ?></td>
    </tr>
    <tr style="color: white;">
        <th>Sex</th>
        <td>Men</td>
    </tr>
    <tr style="color: white;">
        <th>ID</th>
        <td>7863823787326</td>
    </tr>
</table>

<button data-modal-target="#modal"><img style="position: absolute; top: 90%; right: 2%; cursor: pointer;" src="Youssef/Feedback-icon.png" alt="chat"></button>
<div class="modal" id="modal">
  <div class="modal-header">
    <div class="title1">HOW CAN WE HELP ?</div>
    <button data-close-button class="close-button">&times;</button>
  </div>
  <div class="modal-body">
    <div class="icon1">
        <img src="Youssef/A.png" alt="A">
      </div>
      <div>
        <h3>Help Center</h3>
        <p>Answers to fequently asked questions</p>
      </div>
    </div>
    <div class="modal-body">
      <div class="icon1">
        <img src="Youssef/B.png" alt="B">
      </div>
      <div>
        <h3>Student success</h3>
        <p>Help with general questions or issues</p>
      </div>
    </div>
    <div class="modal-body">
      <div class="icon1">
        <img src="Youssef/C.png" alt="c">
      </div>
      <div>
        <h3>Feedback</h3>
        <p>Let us know how we're doing!</p>
      </div>
</div>

    
  </div>
<div id="overlay"></div>

</body>
</html>