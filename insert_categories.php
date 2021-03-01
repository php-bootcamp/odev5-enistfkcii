<?php

require "database.php";

if (isset($_POST['c_name']) ) {

    $category_id= uniqid();
    $sql = "INSERT INTO categories (uniqid,c_name) VALUES (?,?)";
    $pdo->prepare($sql)->execute([$category_id, $_POST['c_name']]);

    header("Location:categories.php");

}
?>