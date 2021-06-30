<?php

include("./connect.php");
session_start();

if (isset($_POST['submit'])) {
    $email = htmlspecialchars(strtolower(trim($_POST['Email2'])));
    $mdpss = htmlspecialchars(trim($_POST['mdpss']));
    $DateNaissance = htmlspecialchars(strtolower(trim($_POST['DateNaissance'])));
    $nom = htmlspecialchars(strtolower(trim($_POST['nom2'])));
    $gender = htmlspecialchars(strtolower(trim($_POST['Gender'])));
    $query = "INSERT INTO etudiant (Email2,mdpss,DateNaissance,nom2,Gender)VALUES('$email','$mdpss','$DateNaissance','$nom','$gender')";
    if (mysqli_query($con, $query)) {
        header("Location:./login.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ynov | Calculus I | SignUp</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <form class="login_form" action="" method="post" name="form" onsubmit="return validated()">
        <div class="rect_login">
            <div class="logo_login">
                <a href="./index.html">
                    <img src="./chartegraphique/logo.png">
                </a>
            </div>
            <div class="text_login">
                <p class="we_login">Welcom</p>
                <p class="we2_login">Sign Up to continue to Ynov</p>
            </div>

            <input id="email" placeholder="yours@example.fr" type="email" name="Email2" class="input" onchange="emailRegex()" required>
            <p id="msg-email"></p>
            <input placeholder="Your password" type="password" name="mdpss">
            <input placeholder="dd/mm/yyyy" type="date" name="DateNaissance" min="1920" max="2002-12-31">
            <input id="name" placeholder="First name / Last name" type="text" name="nom2" onchange="nameRegex()">
            <p id="msg-name"></p>
            <input id="gender" placeholder="Gender" type="text" name="Gender" onchange="genderRegex()">
            <p id="msg-gender"></p>
            <p class="ex_gender">Example : Man / woman / others</p>


            <div class="f_psw_login">
                <a href="./login.html">
                    <p>Do you already have an account ?</p>
                </a>
            </div>
            <button type="submit" name="submit">Continue</button>
        </div>
        </div>
    </form>
</body>
<script>
    function emailRegex() {
        document.getElementById("msg-email").innerHTML = "";

        let email = document.getElementById("email").value;
        const RegExp = /^[^\s@]+@[^\s@]+$/;

        if (!RegExp.test(email)) {
            document.getElementById("msg-email").innerHTML = "Champ email invalide";
        }

    }

    function nameRegex() {
        document.getElementById("msg-name").innerHTML = "";

        let name = document.getElementById("name").value;
        const RegExp = /^[a-zA-Z ]+$/;

        if (!RegExp.test(name)) {
            document.getElementById("msg-name").innerHTML = "Champ name invalide";
        }

    }

    function genderRegex() {
        document.getElementById("msg-gender").innerHTML = "";

        let gender = document.getElementById("gender").value;
        const RegExp = /^[a-zA-Z ]{5,10}$/;

        if (!RegExp.test(gender)) {
            document.getElementById("msg-gender").innerHTML = "Champ gender invalide";
        }

    }
</script>

</html>