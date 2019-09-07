<?php

include 'functions.php';
$db = include 'database/start.php';
$post = $db->getOne('posts', $_GET['id']); 
var_dump($post);