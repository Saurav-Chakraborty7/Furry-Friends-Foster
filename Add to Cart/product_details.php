<?php
require_once 'config.php';

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    //var_dump($product_id);
    // Fetch product details using the product_id
    $sql = "SELECT * FROM product WHERE product_id = '$product_id'";
    $result = $conn->query($sql);
    $product = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="uploadfrom.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #3498db;
            color: white;
            text-align: center;
            padding: 1rem;
        }

        .product-details {
            text-align: center;
            padding: 2rem;
        }

        .product-details .image img {
            max-width: 100%;
            height: 300px; /* Adjust the height as needed */
            object-fit: cover;
        }

        .product-name {
            font-size: 1.5rem;
            margin: 1rem 0;
        }

        .product-price {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .discount {
            color: #777;
            text-decoration: line-through;
        }

        .confirm {
            background-color: #27ae60;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .confirm:hover {
            background-color: #219653;
        }
    </style>
    <title>Product Details</title>
</head>

<body>
    <div class="header">
        <?php include_once 'header.php'; ?>
    </div>

    <div class="product-details">
        <div class="image">
            <img src="<?php echo $product["product_image"]; ?>" alt="">
        </div>
        <div class="product-name"><?php echo $product["product_name"]; ?></div>
        <div class="product-price">
            <?php echo "$" . $product["price"]; ?>
            <?php if ($product["discount"] > 0) { ?>
                <span class="discount"><?php echo "$" . $product["discount"]; ?></span>
            <?php } ?>
        </div>

        <button class="confirm">
    <a href="billing.php?id=<?php echo $product_id; ?>">Confirm</a>
</button>
    </div>
</body>

</html>
