
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Id:
        <input type="text" name="id">
        <br>

    Fname:
    <input type="text" name="fname">
    <br>

    Email:
    <input type="email" name="email">
    <br>

    Password:
    <input type="password" name="pass">
    <br>

    Confirm Password:
    <input type="password" name="cpass">
    <br>

    Position:
    <input type="text" name="pos">
    <br>

    <button type="submit">Submit</button>

    </form>
</body>
</html>
<?php

    if ($_SERVER["REQUEST_METHOD"]==="POST") {
          $Id = $_POST["id"];       
        $Fname = $_POST["fname"];
        $Email = $_POST["email"];
        $Password = $_POST["pass"];
        $ConfirmPassword = $_POST["cpass"];
        $Position = $_POST["pos"];

        if(  empty($Id) || empty($Fname) || empty($Email) || empty($Password) || empty($ConfirmPassword) || empty($Position)){
            echo "<script> alert('Field should not be empty')</script>";
        }elseif(!filter_var($Email,FILTER_VALIDATE_EMAIL)){
            echo "<script> alert('Enter a valid format only') </script>";
        }elseif($Password !== $ConfirmPassword){
            echo "<script> alert('Password does not match') </script>";
        }else {
             $hashedPassword = password_hash($Password, PASSWORD_DEFAULT);
        };
    }; 





?>


