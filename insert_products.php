<?php

require "database.php";


if (isset($_POST['product_name']) && isset($_POST['product_price']) && isset($_POST['product_content']) && isset($_POST['product_description']) && isset($_POST['product_category']) ) {


    $product_id= uniqid();

    $sql = "INSERT INTO products (uniqid,p_name, price, content,description,category_uniqid) VALUES (?,?,?,?,?,?)";
    $pdo->prepare($sql)->execute([$product_id, $_POST['product_name'], $_POST['product_price'],$_POST['product_content'],$_POST['product_description'],$_POST['product_category']]);


    header("Location: index.php");


}




