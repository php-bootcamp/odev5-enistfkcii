<?php

require  "database.php";
$id = $_GET['uniqid'];

$pdo->prepare("DELETE FROM products WHERE uniqid = ?")->execute([$id]);
header("Location: index.php");