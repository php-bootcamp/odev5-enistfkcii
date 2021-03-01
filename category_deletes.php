<?php
require "database.php";


$id=$_GET["uniqid"];
$pdo->prepare("DELETE FROM categories WHERE uniqid= ?")->execute([$id]);
header("Location: categories.php");


