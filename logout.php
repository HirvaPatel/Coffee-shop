<?php
session_start();
unset($_SESSION['loggedin']);
session_unset();
header('Location: index.php');

?>