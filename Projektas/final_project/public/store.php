<?php
session_start();
require_once __DIR__ . "/../app/Controllers/MusicController.php";
require_once __DIR__ . "/../helpers.php";

redirectIfNotAuthenticated('login.php');

$request = $_REQUEST;
$request['files'] = $_FILES;

$track = new MusicController();
$track->store($request);
header('Location: index.php');
