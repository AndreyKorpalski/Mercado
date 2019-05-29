<?php

session_start();

session_unset();
session_destroy();

header("location: ../mercado/page-login.php");
exit;
?>