<?php

include "connect.php";

$row=$connect->query("select * from employees1");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>employees1 table</h3>
    <table border = "1">
        <tr>
            <td>id</td>
            <td>name</td>
            <td>position</td>
            <td>salary</td>
        </tr>

        <?php while($result = $row->fetch_assoc()){?>
        <tr>
            <td><?php echo $result["id"]?></td>
            <td><?php echo $result["name"]?></td>
            <td><?php echo $result["position"]?></td>
            <td><?php echo $result["salary"]?></td>
        </tr>

        <?php }?>

    </table>
</body>
</html>