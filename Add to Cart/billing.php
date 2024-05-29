<?php
require_once 'config.php';

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    // Fetch product details using the product_id
    $sql = "SELECT * FROM product WHERE product_id = '$product_id'";
    $result = $conn->query($sql);
    $product = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include your meta tags, stylesheets, and other head content -->
    <title>Billing Details</title>
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
}

h1 {
    text-align: center;
    margin: 2rem 0;
}

.product-details {
    text-align: center;
    margin: 2rem;
}

.product-details .image img {
    max-width: 100%;
    height: auto;
    object-fit: cover;
    border: 1px solid #ddd;
}

.product-name {
    font-size: 1.5rem;
    margin: 1rem 0;
}

.product-price {
    font-size: 1.2rem;
    font-weight: bold;
    color: #333;
}

.discount {
    color: #777;
    text-decoration: line-through;
}

.billing-details {
    text-align: center;
    margin: 2rem;
}

form {
    max-width: 400px;
    margin: 0 auto;
    padding: 2rem;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

form label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: bold;
}

form input[type="text"],
form input[type="email"],
form select {
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 1rem;
    border: 1px solid #ccc;
    border-radius: 4px;
}

form button[type="submit"] {
    background-color: #3498db;
    color: white;
    border: none;
    padding: 0.5rem 1rem;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

form button[type="submit"]:hover {
    background-color: #2980b9;
}
</style>

<body>
    <h1>Billing Details</h1>
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
    </div>

    <div class="billing-details">
        <!-- Add a form for collecting billing information -->
        <form action="process_payment.php" method="post">
    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
    <label for="pin">Enter PIN:</label>
    <input type="password" id="pin" name="pin" required>
    <button type="submit">Proceed to Payment</button>
</form>
    </div>

    <!-- Include your footer content if needed -->

</body>

</html>
