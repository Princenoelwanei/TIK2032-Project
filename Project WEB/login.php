<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Lorenzo Angelino aka MrLolok">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/login.css">
   
</head>
<body>
    <div id="container-login">
        <div id="title">
            <i class="material-icons lock">lock</i> Login
        </div>

        <form action="login.php" method="post">
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input id="username" name="username" placeholder="Username" type="text" required class="validate" autocomplete="off">
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="password" name="password" placeholder="Password" type="password" required class="validate" autocomplete="off">
            </div>

            <div class="remember-me">
                <input type="checkbox">
                <span>Remember Me</span>
            </div>

            <input type="submit" name="submit" value="Log In">
        </form>


        <div class="register">
            Don't have an account yet?
            <a href="register.php#"><button id="register-link">Register here</button></a>
        </div>

        <?php
        include 'db.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM users WHERE username='$username'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if (password_verify($password, $row['password'])) {
                    session_start();
                    $_SESSION['username'] = $username;
                    header("Location: admin.php");
                    exit();
                } else {
                    echo "<div style='color: red; text-align: center;'>Invalid password</div>";
                }
            } else {
                echo "<div style='color: red; text-align: center;'>No user found</div>";
            }

            $conn->close();
        }
        ?>
    </div>
</body>
</html>
