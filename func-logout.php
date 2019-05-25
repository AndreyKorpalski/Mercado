<?php

session_start();

session_unset();
session_destroy();

header("location: ../projeto/page-login.php");
exit;
?>