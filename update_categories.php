<?php

require  "database.php";

$id = $_GET['uniqid'];
$stmt = $pdo->prepare("SELECT * FROM categories WHERE uniqid=:id");
$stmt->execute(['id' => $id]);
$category = $stmt->fetch();
?>
<!doctype html>
<html lang="en">
<head>



    <title></title>
</head>
<body>
<form method="POST" action="categories.php">
    <div>
        <label for="exampleFormControlInput1">Name</label>
        <input   name="c_name" value="<?= $category["c_name"] ?>">
    </div>


    <button type="submit">Kaydet</button>
</form>




</body>
</html>

