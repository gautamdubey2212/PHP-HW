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
        $Salary = floatval($_POST['sal']);     
        $Id = $_POST["id"];

        $sql = $connect->prepare("Update employees1 set salary =? where id =?");
        $sql->bind_param('di',$Salary,$Id);

        if($sql->execute()){
            echo "Data Updated";
        }else{
            echo "Data not Updated";
        };

   };








?>