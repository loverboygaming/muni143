<?php
session_start();
$_SESSION["username"]="Muni Kumar";
echo $_SESSION["username"];

session_unset();

?>