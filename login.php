<?php
session_start();
ob_start(); //cache rakhbe na

include("config.php");

if (isset($_POST['username'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $error = array();

    if (empty($username)) {

        $error['admin'] = "Enter UserName";
    } else if (empty($password)) {

        $error['admin'] = "Enter Password";
    }

    if (count($error) == 0) {

        $query = "SELECT *FROM users WHERE username = '$username' AND password='$password' ";
        $result = mysqli_query($conn, $query);


        if (mysqli_num_rows($result) == 1) {
            $user=$result->fetch_assoc();    
            //var_dump($user['id']);
                $_SESSION['username'] = $username;
                $_SESSION['userid'] = $user['id'];
                header('Location:index1.php');
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

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">

</head>

<body>
    <div class="wrapper">
        <h1>Login</h1>
        <form action="./login.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <div class="recover">
                <a href="#">Forget Password</a>
            </div>
            <button type="submit">Login</button>
        </form>

        <div class="member">
            Not a member? <a href="./signup.php">
                Register here
            </a>
        </div>
    </div>
</body>

</html>