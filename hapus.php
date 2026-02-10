<?php
include "auth_owner.php";

$file = $_GET['file'];
$path = "game/" . $file;

if (file_exists($path)) {
    unlink($path);
}
header("Location: manage.php");