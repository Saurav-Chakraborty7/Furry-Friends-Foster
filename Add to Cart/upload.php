<?php

require_once 'config.php';

if(isset($_POST["submit"])){
    
  $productname = $_POST["productname"];
  $price = $_POST["price"];
  $discount = $_POST["discount"];

  //For uploads photos
  $upload_dir = "uploads/"; //this is where the uploaded photo stored
  $product_image = $upload_dir.$_FILES["imageUpload"]["name"];
  $upload_dir.$_FILES["imageUpload"]["name"];
  $upload_file = $upload_dir.basename($_FILES["imageUpload"]["name"]);
  $imageType = strtolower(pathinfo($upload_file,PATHINFO_EXTENSION)); //used to detected the image format
  $check = $_FILES["imageUpload"]["size"]; // to detect the size of the image
  $upload_ok = 0;

  if(file_exists($upload_file)){
      //echo "<script>alert('The file already exist')</script>";
      $upload_ok = 1;
  }else{
      $upload_ok = 1;
      if($check !== false){
        $upload_ok = 1;
        if($imageType == 'jpg' || $imageType == 'png' || $imageType == 'jpeg' || $imageType == 'gif'){
            $upload_ok = 1;
        }else{
            echo '<script>alert("please change the image format")</script>';
        }
      }else{
          echo '<script>alert("The photo size is 0 please change the photo ")</script>';
          $upload_ok = 0;
      }
  }

  if($upload_ok == 0){
     echo '<script>alert("sorry your file is doesn\'t uploaded. Please try again")</script>';
  }else{
      if($productname != "" && $price !=""){
          move_uploaded_file($_FILES["imageUpload"]["tmp_name"],$upload_file);

          $sql = "INSERT INTO product(product_name,price,discount,product_image)
          VALUES('$productname','$price','$discount','$product_image')";

          if($conn->query($sql) === TRUE){
              echo "<script>alert('your product uploaded successfully')</script>";
          }
      }
  }


  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="upload.css">
</head>
<body>

<style>
        .mycss {
            color: white;
            padding: 12px;
        }
    </style>
<nav class="position-fixed" style="z-index: 10;">
        <div class="logo">Furry Friends</div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>

            <li><a class="active" href="../index1.php">Home</a></li>

            <?php
            session_start();

            // if ($_SESSION['username']) {
            //     echo "<p class = 'mycss'> Hey, " . $_SESSION["username"];
            // } else {
                
            // }
            ?>
            <li><a href="../logout.php">Logout</a></li>


        </ul>
    </nav>


    <?php
         include_once 'header.php';

    ?>
    <section id="upload_container">
        <form action="upload.php" method="POST" enctype="multipart/form-data" >
            <input type="text" name="productname" id="productname" placeholder="Product Details" required>
            <input type="text" name="price" id="price" placeholder="Price" required>
            <input type="text" name="discount" id="discount" placeholder="Discount">
            <input type="file" name="imageUpload" id="imageUpload" required hidden>
            <button id="choose" onclick="upload();">Choose Image</button>
            <input type="submit" value="Upload" name="submit">
        </form>
    </section>

    <script>
        var productname = document.getElementById("productname");
        var price = document.getElementById("price");
        var discount = document.getElementById("discount");
        var choose = document.getElementById("choose");
        var uploadImage = document.getElementById("imageUpload");

        function upload(){
            uploadImage.click();
            // if(uploadImage.click()){
            
            // }
        }

        uploadImage.addEventListener("change",function(){
            var file = this.files[0];
            if(productname.value == ""){
                productname.value = file.name;
            }
            choose.innerHTML = "You can change("+file.name+") picture";
        })
    </script>
</body>
</html>