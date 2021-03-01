<?php
require "database.php";
$categories=$pdo->query("SELECT * FROM categories ", PDO::FETCH_OBJ);

?>
<!doctype html>
<html lang="en">
<head>
    <title>Homework5 KODLUYORUZ</title>
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
            <a  href="importView.php">İçe Aktar</a>
        </li>
    </ul>
</div>

<div>
    <div>
        <div>
            <h1>KATEGORİLER</h1>
            <a href="categories_detail.php"> Yeni Kategori Ekle</a>
            <table>
                <thead>
                <tr>
                    <th>UniqId</th>
                    <th>Name</th>
                    <th>işlemler</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while($category = $categories->fetch()):
                    ?>
                    <tr>
                        <th scope="row"><?= $category->uniqid; ?></th>
                        <td><?= $category->c_name; ?></td>
                        <td>
                            <a href="delete_categories.php?uniqid=<?= $category->uniqid; ?>" >Sil</a>
                        </td>
                        <td>
                            <a href="update_categories.php?uniqid=<?= $category->uniqid; ?>" >Güncelle</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

