<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        form { background:rgb(101, 206, 117); padding: 20px; width: 300px; border-radius: 10px;}
        input[type="text"], input[type="password"], input[type="submit"] { margin-top: 10px; border-radius: 5px; }
        button { border-radius: 5px };
    </style>
</head>
<body>
    <h2>Login</h2>
    <form action="login.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];

            $conn = new mysqli("localhost", "root", "", "myproject");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM users WHERE username=? AND password=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $username, $password);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                header("Location: order.php");
                exit;
            } else {
                echo '<p>Login failed. Try again.</p>';
                echo '<button onclick="window.location.href=\'register.php\'">Register</button>';
            }

            $stmt->close();
            $conn->close();
        }
    ?>
</body>
</html> 