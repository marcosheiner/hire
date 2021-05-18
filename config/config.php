<?php 

$server_db = "localhost";
$username_db = "root";
$password_db = "";
$database_name_db = "myhire";

$conn = mysqli_connect($server_db, $username_db, $password_db, $database_name_db);

if (!$conn) {
    die("<script>alert('Conexão Falhou! :(')</script>");
}

?>