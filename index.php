<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: home/index.php');
}
elseif (isset($_SESSION['username']) == "admin") {
    header('location: admin/index.php');
}
else{ 
    header('location: pages/dashboard.php');
}


?>