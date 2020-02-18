<?php
session_start();

$_SESSION['img'] = $_POST['img'];
$_SESSION['text'] = $_POST['text'];

header('Location: /');
