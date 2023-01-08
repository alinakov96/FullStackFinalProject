<?php
session_start();
require_once __DIR__ . "/../app/Controllers/MusicController.php";
require_once __DIR__ . "/../helpers.php";

redirectIfNotAuthenticated('login.php');

$track = new MusicController();
$track->update($_REQUEST);
header('Location: index.php');