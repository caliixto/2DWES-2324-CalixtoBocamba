<?php
session_start();

session_destroy();

header("Location: ../movlogin.php");
exit();
?>
