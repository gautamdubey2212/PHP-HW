<?php

$Servername = "localhost";
$Username = "root";
$Password = "123";
$Registeration_db = "hw_sdac";

$conn = new mysqli($Servername,$Username,$Password,$Registeration_db);

if (!$conn) {
    echo "Db not connected";
}else {
    echo "Db connected";
};
?>