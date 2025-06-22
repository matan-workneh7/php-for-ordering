<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        form { background:rgb(101, 117, 206); padding: 20px; width: 300px; border-radius: 10px;}
        input[type="text"], input[type="password"], input[type="submit"] { margin-top: 10px; border-radius: 5px; }
        button { border-radius: 5px; margin-top: 10px; border-radius: 5px; color: rgb(255, 0, 0) };
    </style>
</head>
<body>
    <h2>Register</h2>
    <form action="register.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username" required><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br>
        <input type="submit" value="Register">
        <button type="button" onclick= "window.location.href='login.php'">sign_in</button>

    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];

            //we use this to connect to database else it'll show error
            $conn = new mysqli("localhost", "root", "", "myproject");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // to save a user
            $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $username, $password);
            $stmt->execute();
            
            echo "<p>Registered!</p>";
            header("Location: login.php");
            
            $stmt->close();
            $conn->close();
        }
    ?>
</body>
</html>
