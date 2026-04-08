<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>
    <h1>Product List</h1>

    <ul>
        <?php foreach ($products as $product): ?>
            <li><?php echo $product['name']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
