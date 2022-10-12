<?php

    session_start();

$_SESSION = array();

session_destroy();

header("location: http://localhost:81/login.php");

exit;

?>