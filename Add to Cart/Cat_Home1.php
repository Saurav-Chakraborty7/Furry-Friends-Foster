<?php
require_once 'config.php';
session_start();

$sql = "SELECT * FROM product";
$all_product = $conn->query($sql);
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

        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); /* Flexible grid */
            gap: 20px;
            padding: 2rem;
            justify-items: center; /* Center content in each grid item */
        }

        .card {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 1rem;
            width: 100%; /* Ensure card takes up full width of grid item */
        }

        .card img {
            max-width: 100%;
            height: 200px; /* Fixed image height */
            object-fit: cover; /* Maintain aspect ratio and cover area */
        }

        .product-name {
            font-size: 2rem;
            margin: 1rem 0;
        }

        .product-price {
            font-size: 1.5rem;
            font-weight: bold;
            padding-bottom:5px;
        }

        .discount {
            color: #777;
            text-decoration: line-through;
        }

        .add-to-cart {
            background-color: #27ae60;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .add-to-cart:hover {
            background-color: #219653;
        }
        .page-heading {
            text-align: center;
            padding: 2rem 0;
        }

        .page-heading h1 {
            font-size: 4rem;
            color: #333;
        }
    </style>
    <title>Furry Friends Foster - Products</title>
</head>

<body>
    <div class="header">
        <?php include_once 'header.php'; ?>
    </div>
    <div class="uploadline">
        <h2>Let your furry friend shine with style - upload their details here.</h2>
        <button class="styled" onclick="showAdminPrompt()">Upload</button>
    </div>
    <div class="page-heading">
        <h1>Our Products</h1>
    </div>

    <div class="card-container">
    <?php
    foreach ($all_product as $product) {
        // Check if the product exists in the database before displaying it
        $product_id = $product['product_id'];
        $check_sql = "SELECT COUNT(*) as count FROM product WHERE product_id = '$product_id'";
        $result = $conn->query($check_sql);
        $count = $result->fetch_assoc()['count'];

        if ($count > 0) {
    ?>
                <div class="card">
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
                    <button class="add-to-cart" data-id="<?php echo $product["product_id"]; ?>">
                        <a href="product_details.php?id=<?php echo $product["product_id"]; ?>">Add to Cart</a>
                    </button>
                </div>
        <?php
            }
        }
        ?>
    </div>

    <script>
        // Your existing JavaScript code
        
        // ...
        
        function showAdminPrompt() {
            var isAdmin = prompt("Are you an ADMIN? Enter proper Admin Credentials for Redirecting.");

            if (isAdmin === "ADMIN") {
                // Redirect to the upload page for admin
                window.location.href = "./upload.php";
            } else {
                alert("Access denied. Please provide valid admin credentials.");
            }
        }
    </script>
</body>

</html>
