<?php
include("./connect.php");

session_start();
if(isset($_POST['submit'])){
    $email=htmlspecialchars(strtolower(trim($_POST['Email2'])));
    $mdpss=htmlspecialchars(trim($_POST['mdpss']));
    
    $query = "SELECT * FROM etudiant WHERE Email2='$email' && mdpss='$mdpss'";
    if(mysqli_num_rows(mysqli_query($con,$query))>0){
        $_SESSION['Email2']=$email;
        $_SESSION['mdpss']=$mdpss;
        header("Location:cp.php");
        
    }else{
        echo "noooooo";
    }
  }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ynov | Calculus I | Login</title>
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
                <p class="we2_login">Log in to continue to Ynov</p>

            </div>
            <input placeholder="Email Adress" type="email" name="Email2" class="input" required>
            <input placeholder="Password" type="password" name="mdpss">
            <style>
                input
                {
                    border: 1.5px solid red;
                }
            </style>
            <div class="f_psw_login">
                <p>Forgot Password?</p>
            </div>
            <button type="submit" name="submit">Continue</button>
            <div class="khatt_login"></div>
            <div class="signup_login">
                <p>
                    Don't have an account? <a href="SIGNUP.html"><span>Create Account</span></a>
                </p>
            </div>
        </div>
        <div class="espc">
            <style>
                .espc
                {
                    height: 30px;
                }
            </style>
        </div>
        <div class="rect_error">
            <img src="./fk/x.png" width="65px">
            <p class="pp">The email and password are incorrect,<br> try again.</p>
            <style type="text/css">
                .rect_error {
                    display: flex;
                    margin-top: 20px;
                    width: 401px;
                    margin: 0 auto;
                    height: auto;
                    background-color: white;
                    border-radius: 8px;
                    flex-direction: column;
                }
                img 
                {
                    display: flex;
                    margin: 0 auto;
                    padding-top: 10px;
                    padding-bottom: 17px;
                    
                }
                .pp
                {
                    color: red;
                    text-align: center;
                    font-size: 18px;
                    padding-left: 10px;
                    padding-right: 10px;
                    margin-bottom: 15px;
                }
            </style>
        </div>
    </form>
</body>

</html>