<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location:  paginaprincipal.html");
}
include ("paginaprincipal2.php");
?>