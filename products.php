<?php
require  "database.php";

$categories = $pdo->query("SELECT * FROM categories", PDO::FETCH_OBJ);
?>

<!doctype html>
<html>
<head>




    <title></title>
</head>
<body>
<form method="POST" action="insert_products.php">
    <div>
        <label for="Input1">Name</label>
        <input  class="form-control" name="product_name" >
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Price</label>
        <textarea class="form-control"name="product_price"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Content</label>
        <textarea class="form-control" name="product_content"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Description</label>
        <textarea class="form-control" name="product_description"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Categories</label>
        <select class="form-control"  name="product_category">
            <?php while($category = $categories->fetch()):?>
                <option value="<?=$category->uniqid?>"><?=$category->c_name?></option>
            <?php endwhile; ?>
        </select>

    </div>
    <button type="submit">Kaydet</button>
</form>



</body>
</html>
