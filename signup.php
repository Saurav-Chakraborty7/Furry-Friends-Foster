<?php

ob_start(); //cache rakhbe na

include("config.php");

if (isset($_POST['username'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    $error = array();

    if (empty($username)) {

        $error['admin'] = "Enter UserName";
    } else if (empty($password)) {

        $error['admin'] = "Enter Password";
    }

    if (count($error) == 0) {

        $query = "SELECT *FROM users WHERE username = '$username' AND password='$password' ";
        $result = mysqli_query($conn, $query);


        if (mysqli_num_rows($result) > 0) {

            echo "<script>alert('User already exist')</script>";
        } else {
            if ($password == $repassword) {
                $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email','$password')";
                $result = mysqli_query($conn, $sql);
                header('Location:login.php');
            }

            
        }
    }
}
?>









<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">

</head>

<body>
    <div class="wrapper">
        <h1>Sign Up</h1>
        <form action="./signup.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="text" name="email" placeholder="email">
            <input type="text" name="password" placeholder="Password">
            <input type="text" name="repassword" placeholder="Re-type Password">
            <button type="submit">Sign Up</button>
        </form>
        <div class="terms">
            <input type="checkbox" id="checkbox">
            <label for="checkbox">I agree to these
                <a href="#">Terms & Conditions</a>
            </label>
        </div>

        <div class="member">
            Already a member? <a href="./login.html">
                Login here
            </a>
        </div>
    </div>
</body>

</html>