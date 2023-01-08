<?php
session_start();
require_once __DIR__ . "/../app/Controllers/MusicController.php";
require_once __DIR__ . "/../helpers.php";

if(!($_SESSION['is_authenticated'] ?? '')){
    header('Location: login.php');
}

$track = new MusicController();
$track->index();

?>

