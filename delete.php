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


    <button type="submit">Delete</button>
   </form>
</body>
</html>

<?php

   include "connect.php";

   if($_SERVER["REQUEST_METHOD"]==="POST"){    
        $Id = $_POST["id"];

        $sql = $connect->prepare("Delete from employees1 where id =?");
        $sql->bind_param('i',$Id);

        if($sql->execute()){
            echo "Data Deleted";
        }else{
            echo "Data not Deleted";
        };

   };








?>