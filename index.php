<?php
require "database.php";

$products = $pdo->query("SELECT * FROM products", PDO::FETCH_OBJ);

$categories = $pdo->query("SELECT * FROM categories", PDO::FETCH_OBJ);

?>

<!doctype html>
<html>
<head>

    <title>Homework 5</title>
</head>
<body>

    <div>
        <ul>
            <li>
                <a href="index.php">Ürünler</a>
            </li>
            <li>
                <a href="categories.php">Kategoriler</a>
            </li>
            <li>
                <a href="">Dışa Aktar</a>
            </li>
            <li>
                <a href="importView.php">İçe Aktar</a>
            </li>
        </ul>
    </div>

<div>
    <div>
        <div>
            <h1>ÜRÜNLER</h1>
            <a href="product_page.php"> Yeni Ürün Ekle</a>
            <table>
                <thead>
                <tr>
                    <th>UniqId</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Content</th>
                    <th>Description</th>
                    <th>Category Name</th>
                    <th>işlemler</th>
                </tr>
                </thead>
                <tbody>
                <?php

                while($product = $products->fetch()):

                    ?>
                    <tr>
                        <th><?= $product->uniqid; ?></th>
                        <td><?= $product->p_name; ?></td>
                        <td><?= $product->price; ?></td>
                        <td><?= $product->content; ?></td>
                        <td><?= $product->description; ?></td>
                        <?php while($category = $categories->fetch()):
                            if($product->category_uniqid==$category->uniqid): ?>
                                <td> <?= $category->c_name; ?></td>
                            <?php endif; ?>
                        <?php endwhile; ?>
                        <td>
                            <a href="delete.php?uniqid=<?= $product->uniqid; ?>">Sil</a>
                        </td>
                        <td>
                            <a href="update.php?uniqid=<?= $product->uniqid; ?>" >Güncelle</a>
                        </td>
                    </tr>

                <?php endwhile; ?>



                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>