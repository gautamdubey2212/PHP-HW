<?php

$Servername = "localhost";
$Username = "root";
$Password = "123";
$employee_db = "hw_sdac";

$connect = new mysqli($Servername,$Username,$Password,$employee_db);

if (!$connect) {
    echo "Db not connected";
}else {
    echo "Db connected";
};
?>