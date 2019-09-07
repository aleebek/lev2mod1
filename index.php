<?php
var_dump($_SERVER['REQUEST_URI']);
include 'functions.php';
$db = include 'database/start.php';
$posts = $db->getAll('posts'); 
include 'index.view.php';
?>