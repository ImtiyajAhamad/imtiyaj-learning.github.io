<?php

$host = "imtiyajahamad.github.io";
$login = "root";
$password = "";
$db = "imtiyaj_ahamad_e-learning";


//connect to the mysql;
$conn =  mysqli_connect($host, $login, $password, $db);

if($conn->connect_error)  {

    echo "
   (connection failed) 
    ";
}
