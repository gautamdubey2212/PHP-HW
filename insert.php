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

    Name:
    <input type="text" name="name">
    <br>

    Position:
    <input type="text" name="pos">
    <br>

    Salary:
    <input type="text" name="sal">
    <br>

    <button type="submit">Submit</button>
   </form>
</body>
</html>

<?php

   include "connect.php";

   if($_SERVER["REQUEST_METHOD"]==="POST"){
        $Id = $_POST["id"];
        $Name = $_POST["name"];
        $Position = $_POST["pos"];
        $Salary = floatval($_POST['sal']);

        $sql = $connect->prepare("insert into employees1 values (?,?,?,?)");
        $sql->bind_param('issd',$Id,$Name,$Position,$Salary);

        if($sql->execute()){
            echo "Data inserted";
        }else{
            echo "Data not inserted";
        };

   };








?>