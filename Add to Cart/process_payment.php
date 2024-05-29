<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include your meta tags, stylesheets, and other head content -->
    <title>Payment Confirmation</title>
</head>
<style>
   * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 2rem;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.logo {
    text-align: center;
    margin-bottom: 1rem;
}

.logo img {
    width: 100px;
    height: auto;
}

h1 {
    color: #333;
    font-size: 28px;
    margin-bottom: 1rem;
}

p {
    color: #666;
    font-size: 18px;
    line-height: 1.5;
    margin-bottom: 1rem;
}

.success-message {
    color: #27ae60;
    font-weight: bold;
}

.failure-message {
    color: #c0392b;
    font-weight: bold;
}
</style>

<body>
    <div class="container">
        
    <?php
require_once 'config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'];
    $pin = $_POST['pin'];

    // Validate the pin (for the sake of example, pin is hardcoded as "1234")
    if ($pin === '1234') {
        // Fetch product details using the product_id
        $sql = "SELECT * FROM product WHERE product_id = '$product_id'";
        $result = $conn->query($sql);
        $product = $result->fetch_assoc();

        // Remove the purchased product from the database
        $delete_sql = "DELETE FROM product WHERE product_id = '$product_id'";
        $conn->query($delete_sql);

        // Display a fake payment confirmation
        echo "<h1>Payment Successful</h1>";
        echo "<p>Thank you for your purchase of {$product['product_name']}!</p>";
        echo '<p><a href="Cat_Home1.php">Go back to shopping</a></p>';
    } else {
        echo "<h1>Payment Failed</h1>";
        echo "<p>The provided PIN is incorrect. Please try again.</p>";
        echo '<p><a href="Cat_Home1.php">Go back to shopping</a></p>';
    }
} else {
    echo "<h1>Payment Failed</h1>";
    echo "<p>No data submitted. Please go back and try again.</p>";
    echo '<p><a href="Cat_Home1.php">Go back to shopping</a></p>';
}
?>
    </div>

    <!-- Include your footer content if needed -->
</body>

</html>
