<?php
//session_start();
unset($_SESSION['username']);
session_destroy();
echo("you have been logged out");
?>